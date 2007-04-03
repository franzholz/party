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
 * Model for a collection of Parties
 * 
 * Depends on: liv/div 
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

require_once (t3lib_extMgm::extPath('party').'models/class.tx_party_models_person.php');
require_once (t3lib_extMgm::extPath('party').'models/class.tx_party_models_organisation.php');

class tx_party_models_parties extends tx_lib_object {

	/**
	 * Loads all parties which belong to a certain PID.
	 * 
	 * @param	integer		$pid: PID (Page ID) to select parties from
	 * @return	void		The data is loaded into the object
	 */
	public function loadByPid($pid) {
		$pid = intval($pid);
		
		$select = 'uid,type';
		$from = 'tx_party_parties';
		$where = 'tx_party_parties.pid='.$pid;
		
		$list = $this->selectFromDatabase($select,$from,$where);
		$this->set('list',$list);
	}
	
	/**
	 * Loads all parties with an address from a certain country.
	 *
	 * @param	integer		$countryUid: UID of the country
	 * @param	boolean		$onlyStandard: If set to TRUE, only the standard address of the party is relevant, else all addresses. Optional, default = TRUE
	 * @return	void		The data is loaded into the object
	 */
	public function loadByCountry($countryUid,$onlyStandard=TRUE) {
		$countryUid = intval($countryUid);
		
		$select = 'a.party, c.type';
		$from = 'tx_party_address_usages a, tx_party_addresses b, tx_party_parties c';
		$where = 'a.party=b.parties AND a.party=c.uid AND b.country='.$countryUid;
		$where.= $onlyStandard ? ' AND a.standard' : '';
		
		$list = $this->selectFromDatabase($select,$from,$where);
		$this->set('list',$list);
	}
	
	/**
	 * Executes a database query and returns a list of person/organisation objects.
	 *
	 * @param	string		$select: The fields to select
	 * @param	string		$from: The FROM clause
	 * @param	string		$where: The WHERE clause
	 * @param	string		$groupBy: The GROUP BY clause (optional)
	 * @param	string		$orderBy: The ORDER BY clause (optional)
	 * @param	string		$limit: The LIMIT clause (optional)
	 * @return	object		A tx_lib_object instance with the selected persons/organisations
	 */
	private function selectFromDatabase($select,$from,$where,$groupBy='',$orderBy='',$limit='') {
		$query = $GLOBALS['TYPO3_DB']->SELECTquery($select,$from,$where,$groupBy,$orderBy,$limit);
		$result = $GLOBALS['TYPO3_DB']->sql_query($query);
		$list = tx_div::makeInstance('tx_lib_object');
		if($result) {
			while($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($result)) {
				if ($row['type'] == 0) $item = t3lib_div::makeInstance('tx_party_models_person');
				if ($row['type'] == 1) $item = t3lib_div::makeInstance('tx_party_models_organisation');
				$item->load($row['uid']);
				$list->append($item);
			}
		}
		return $list;
	}
	
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_parties.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_parties.php']);
}


?>