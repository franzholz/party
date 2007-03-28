<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2007 David Bruehlmeier (typo3@bruehlmeier.com)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/** 
 * Abstract base class for the Party model. This class is
 * extended by the class tx_party_models_person and
 * tx_party_models_organisation.
 * 
 * Depends on: liv/div 
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

require_once(t3lib_extMgm::extPath('div').'class.tx_div.php');
tx_div::load('tx_lib_object');
require_once (t3lib_extMgm::extPath('party').'models/class.tx_party_models_names.php');
require_once (t3lib_extMgm::extPath('party').'models/class.tx_party_models_addresses.php');

abstract class tx_party_models_party extends tx_lib_object {

	protected $table = 'tx_party_parties';
	
	public function load($uid,$fields) {
		$uid = intval($uid);
		$groupBy = '';
		$orderBy = '';
		
		// Load the party from the database and build the object
		$query = $GLOBALS['TYPO3_DB']->SELECTquery($fields, $this->table, $this->table.'.uid='.$uid, $groupBy, $orderBy);
		$result = $GLOBALS['TYPO3_DB']->sql_query($query);
		if($result) {
			$row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($result);
			$this->overwriteArray($row);
		}
		
		// Names
		if ($this->get('names')) {

			// Load the names
			$names = t3lib_div::makeInstance('tx_party_models_names');
			$names->loadByParty($uid);
			$this->set('names',$names);
			
			// Include the values of the standard name as parameters of the party
			$standardName = $names->get('standard');
			if (is_object($standardName)) {
				for ($standardName->rewind();$standardName->valid();$standardName->next()) {
					if ($standardName->key() == 'remarks') continue;	// Don't overwrite the remarks of the party
					$this->set($standardName->key(),$standardName->current());
				}
			}
		}
		
		// Addresses
		if ($this->get('addresses')) {

			// Load the addresses
			$addresses = t3lib_div::makeInstance('tx_party_models_addresses');
			$addresses->loadByParty($uid);
			$this->set('addresses',$addresses);
			
			// Include the values of the standard address as parameters of the party
			$standardAddress = $addresses->get('standard');
			if (is_object($standardAddress)) {
				for ($standardAddress->rewind();$standardAddress->valid();$standardAddress->next()) {
					if ($standardAddress->key() == 'remarks') continue;	// Don't overwrite the remarks of the party
					$this->set($standardAddress->key(),$standardAddress->current());
				}
			}
		}

	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_party.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_party.php']);
}


?>