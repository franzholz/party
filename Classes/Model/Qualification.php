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
 * Model for the class Qualification
 *
 * $Id: class.tx_party_models_qualification.php 81705 2013-11-23 10:37:30Z franzholz $
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage party
 */


class Qualification extends AbstractObject {

	/**
	 * Table name for save or delete operations.
	 *
	 * @var	string
	 */
	static protected $tableName = 'tx_party_qualifications';

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
		'status' => 'JambageCom\\Party\\Model\\QualificationStatus',
		'institution' => 'JambageCom\\Party\\Model\\Party',
	);

	/**
	 * Returns the label of the Qualification in the following format:
	 * "[qualification] ([party])"
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @return	string		Label of the Qualification
	 */
	public function getLabel () {
		if (!$this->hasRecord()) {
			return FALSE;		// Data must be loaded
		}
		$label = array();
		$result = '';

		// Get all relevant parts
		$qualificationName = $this->getQualificationName();
		$party = $this->getParty();

		// Assemble the label
		if ($qualificationName) {
			$label[0] = $qualificationName;
		}
		if ($party->hasRecord()) {
			$label[1] = '(' . $party->getLabel() . ')';
		}

		$result = implode(' ', $label);
		return $result;
	}
}

?>