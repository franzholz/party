<?php


/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Model for the class OrganisationName
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
