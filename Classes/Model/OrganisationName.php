<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2013 David Bruehlmeier (typo3@bruehlmeier.com)
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
 * Model for the class OrganisationName
 *
 * $Id$
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

class tx_party_models_organisationname extends tx_party_models_name {

	/**
	 * Loads the organisation name.
	 *
	 * @param	integer		$uid: UID of the organisation name
	 * @return	void		The data is loaded into the object
	 */
	public function load ($uid) {
		global $TCA;
		$uid = intval($uid);

		// Check that the name is an organisation name
		$rec = tx_div2007_core::getRecord($this->table, $uid, 'type');

		if (!($rec['type'] == 1)) {
			return FALSE;
		}

		// Get all fields belonging to the type 'organisation name' and load the object
		$typeFields = tx_party_div::getAllTypeFields($this->table, $rec);
		parent::load($uid, $typeFields);
	}

	/**
	 * Returns the label of the organisation name in the following format:
	 * "[organisation_name]"
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @return	string		Label of the organisation name
	 */
	public function getLabel() {
		if ($this->isEmpty()) {
			return FALSE;		// Data must be loaded
		}
		$result = $this->get('organisation_name');
		return $result;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_organisationname.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_organisationname.php']);
}


?>