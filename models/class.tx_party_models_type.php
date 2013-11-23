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
 * Model for the class Type
 *
 * $Id$
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class tx_party_models_type extends tx_party_models_object {
	protected $table = 'tx_party_types';

	/**
	 * Checks if the type is allowed for a certain party type.
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @param	integer		$partyType: Type of the party (0 for person, 1 for organisation)
	 * @return	boolean		True if the current type is allowed for the specified party type
	 */
	public function isAllowedForPartyType ($partyType) {
		if ($this->isEmpty()) {
			return FALSE;		// Data must be loaded
		}
		$out = FALSE;

		switch ($this->get('allowed_for_party_type')) {
			case 'ALL':
				$out = TRUE;
				break;
			case 'PERSONS':
				$out = ($partyType == 0) ? TRUE : FALSE;
				break;
			case 'ORGANISATIONS':
				$out = ($partyType == 1) ? TRUE : FALSE;
				break;
			default:
				$out = FALSE;
				break;
		}

		return $out;
	}

	/**
	 * Checks if the type is allowed for a certain field.
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @param	string		$field: Name of the field (e.g. tx_party_EVENTS-TYPE)
	 * @return	boolean		True if the current type is allowed for the specified field
	 */
	public function isAllowedForField ($field) {
		if ($this->isEmpty()) {
			return FALSE;		// Data must be loaded
		}
		$out = FALSE;

		$allowedForField = explode(',', $this->get('allowed_for_field'));
		$out = in_array($field, $allowedForField);

		return $out;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_type.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_type.php']);
}


?>