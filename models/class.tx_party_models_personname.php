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
 * Model for the class PersonName
 *
 * Depends on: div2007
 *
 * $Id$
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

require_once(t3lib_extMgm::extPath('party') . 'div/class.tx_party_div.php');
require_once(PATH_BE_div2007 . 'class.tx_div2007.php');
tx_div2007::load('tx_party_models_name');

class tx_party_models_personname extends tx_party_models_name {

	/**
	 * Loads the person name.
	 *
	 * @param	integer		$uid: UID of the person name
	 * @return	void		The data is loaded into the object
	 */
	public function load ($uid) {
		$uid = intval($uid);

		// Check that the name is a person name
		$rec = t3lib_BEfunc::getRecord($this->table, $uid, 'type');
		if (!$rec['type'] == 0) {
			return FALSE;
		}

		// Get all fields belonging to the type 'person name' and load the object
		$typeFields = tx_party_div::getAllTypeFields($this->table, $rec);
		parent::load($uid, $typeFields);
	}

	/**
	 * Returns the label of the person name in the following format:
	 * "[last_name], [first_name] [middle_name]." The middle name is abbreviated to the
	 * first letter (capitalized).
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @return	string		Label of the person name
	 */
	public function getLabel () {
		if ($this->isEmpty()) {
			return FALSE;		// Data must be loaded
		}
		$label = array();
		$out = '';

		// Get all relevant parts
		$firstName = $this->get('first_name');
		$middleName = $this->get('middle_name');
		$lastName = $this->get('last_name');

		// Assemble the label
		if ($lastName) {
			$label[0] = $lastName;
		}
		if ($firstName && !$middleName) {
			$label[1] = $firstName;
		}
		if ($firstName && $middleName) {
			$label[1] = $firstName . ' ' . strtoupper(substr($middleName, 0, 1)) . '.';
		}
		$out = implode(', ', $label);
		return $out;
	}

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_personname.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_personname.php']);
}


?>