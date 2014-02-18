<?php
namespace JambageCom\Party\Model;

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
 * Abstract base class for the Name model. This class is
 * extended by the class tx_party_models_person_name and
 * tx_party_models_organisation_name.
 *
 * $Id: class.tx_party_models_name.php 81705 2013-11-23 10:37:30Z franzholz $
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage party
 */


class Name extends AbstractObject {

	/**
	 * Table name for save or delete operations.
	 *
	 * @var	string
	 */
	static protected $tableName = 'tx_party_names';

	/**
	 * Current class name.
	 *
	 *	static protected $className = __CLASS__;
	 *
	 * @var	string
	 */
	static protected $className = __CLASS__;

	protected $fieldToObjectMap = array(
		'party' => 'JambageCom\\Party\\Model\\Party',
		'person_name_title' => 'JambageCom\\Party\\Model\\PersonNameTitle',
	);

	public function getLabel() {
		if (!$this->hasRecord()) {
			return FALSE;		// Data must be loaded
		}

		$result = '';
		$type = $this->getType();

		switch ($type) {
			case '0':
				$result = $this->getPersonLabel();
				break;
			case '1':
				$result = $this->getOrganisationLabel();
				break;
		}

		return $result;
	}

	/**
	 * Returns the label of the organisation name in the following format:
	 * "[organisation_name]"
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @return	string		Label of the organisation name
	 */
	public function getOrganisationLabel () {
		$result = $this->getOrganisationName();
		return $result;
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
	public function getPersonLabel () {
		$label = array();
		$result = '';

		// Get all relevant parts
		$firstName = $this->getFirstName();
		$middleName = $this->getMiddleName();
		$lastName = $this->getLastName();

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
		$result = implode(', ', $label);
		return $result;
	}
}

?>