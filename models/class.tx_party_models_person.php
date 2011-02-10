<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 David Bruehlmeier (typo3@bruehlmeier.com)
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
 * Model for the class Person
 *
 * Depends on: div2007
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

require_once (t3lib_extMgm::extPath('party').'div/class.tx_party_div.php');
require_once(t3lib_extMgm::extPath('div2007').'class.tx_div2007.php');
tx_div2007::load('tx_party_models_party');

class tx_party_models_person extends tx_party_models_party {

	/**
	 * Loads the person.
	 *
	 * @param	integer		$uid: UID of the person
	 * @return	void		The data is loaded into the object
	 */
	public function load($uid) {
		global $TCA;
		$uid = intval($uid);

		// Check that the party is a person
		$rec = t3lib_BEfunc::getRecord($this->table,$uid,'type');
		if (!$rec['type'] == 0) return false;

		// Get all fields belonging to the type 'person' and load the object
		$typeFields = tx_party_div::getAllTypeFields($this->table,$rec);
		parent::load($uid,$typeFields);
	}

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_person.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_person.php']);
}


?>