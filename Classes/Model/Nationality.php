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
 * Model for the class Nationality
 *
 * $Id: class.tx_party_models_nationality.php 81705 2013-11-23 10:37:30Z franzholz $
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage party
 */


class Nationality extends AbstractObject {

		/**
	 * Table name for save or delete operations.
	 *
	 * @var	string
	 */
	static protected $tableName = 'tx_party_nationalities';

	/**
	 * Current class name.
	 *
	 *	static protected $className = __CLASS__;
	 *
	 * @var	string
	 */
	static protected $className = __CLASS__;

	protected $fieldToObjectMap = array(
		'country' => 'JambageCom\\Party\\Model\\Foreign\\StaticCountry',
		'party' => 'JambageCom\\Party\\Model\\Party',
		'nationality_type' => 'JambageCom\\Party\\Model\\Type',
	);

	/**
	 * Returns the label of the Nationality in the following format:
	 * "[nationality_type]: [country] ([party])"
	 *
	 * @return	string		Label of the Nationality
	 */
	public function getLabel () {
		if (!$this->hasRecord()) {
			return FALSE;	// Data must be loaded
		}
		$label = array();
		$result = '';

		// Get all relevant parts
		$nationalityType = $this->getNationalityType();
		$party = $this->getParty();
		$country = $this->getCountry();

		// Assemble the label
		if ($nationalityType->hasRecord()) {
			$label[0] = $nationalityType->getLabel() . ':';
		}
		$label[1] = $country->getCnShortEn();
		if ($party->hasRecord()) {
			$label[2] = '(' . $party->getLabel() . ')';
		}
		$result = implode(' ', $label);
		return $result;
	}
}

?>