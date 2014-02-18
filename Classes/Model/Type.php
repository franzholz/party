<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2014 David Bruehlmeier (typo3@bruehlmeier.com)
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
 * $Id: class.tx_party_models_type.php 81705 2013-11-23 10:37:30Z franzholz $
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage party
 */


class Type extends AbstractObject {

	/**
	 * Table name for save or delete operations.
	 *
	 * @var	string
	 */
	static protected $tableName = 'tx_party_types';

	/**
	 * Current class name.
	 *
	 *	static protected $className = __CLASS__;
	 *
	 * @var	string
	 */
	static protected $className = __CLASS__;

	/**
	 * Checks if the type is allowed for a certain party type.
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @param	integer		$partyType: Type of the party (0 for person, 1 for organisation)
	 * @return	boolean		True if the current type is allowed for the specified party type
	 */
	public function isAllowedForPartyType ($partyType) {
		if (!$this->hasRecord()) {
			return FALSE;		// Data must be loaded
		}
		$result = FALSE;
		$allowed = $this->getAllowedForPartyType();

		switch ($allowed) {
			case 'ALL':
				$result = TRUE;
				break;
			case 'PERSONS':
				$result = ($partyType == 0) ? TRUE : FALSE;
				break;
			case 'ORGANISATIONS':
				$result = ($partyType == 1) ? TRUE : FALSE;
				break;
			default:
				$result = FALSE;
				break;
		}

		return $result;
	}

	/**
	 * Checks if the type is allowed for a certain field.
	 *
	 * @param	string		$field: Name of the field (e.g. tx_party_EVENTS-TYPE)
	 * @return	boolean		True if the current type is allowed for the specified field
	 */
	public function isAllowedForField ($field) {
		if (!$this->hasRecord()) {
			return FALSE;		// Data must be loaded
		}
		$result = FALSE;

		$allowedForField = $this->getAllowedForField();
		$allowedForField = explode(',', $allowedForField);
		$result = in_array($field, $allowedForField);

		return $result;
	}
}

?>