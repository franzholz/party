<?php
namespace JambageCom\Party\Model;

use TYPO3\CMS\Backend\Utility\BackendUtility;

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
 * Model for the class Address
 *
 * $Id: class.tx_party_models_address.php 81705 2013-11-23 10:37:30Z franzholz $
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage party
 */


class Address extends AbstractObject {

	/**
	 * Table name for save or delete operations.
	 *
	 * @var	string
	 */
	static protected $tableName = 'tx_party_addresses';

	/**
	 * Current class name.
	 *
	 *	static protected $className = __CLASS__;
	 *
	 * @var	string
	 */
	static protected $className = __CLASS__;

	protected $fieldToObjectMap = array(
		'account_type' => 'JambageCom\\Party\\Model\\Type',
		'administrative_area' => 'JambageCom\\Party\\Model\\Foreign\\StaticCountryZone',
		'organisation' => 'JambageCom\\Party\\Model\\Party',
		'ownership_type' => 'JambageCom\\Party\\Model\\Type',
		'party' => 'JambageCom\\Party\\Model\\AddressUsage',
	);

	/**
	 * Returns the label of the address in the following format:
	 * "[thoroughfare] [thoroughfare_number], [post_code] [locality] ([administrative_area])"
	 *
	 * @return	string		Label of the address
	 */
	public function getLabel () {
		if (!$this->hasRecord()) {
			return FALSE;	// Data must be loaded
		}
		$label = array();
		$result = '';
		$administrativeAreaLabel = '';

		// Get all relevant parts
		$thoroughfare = $this->getThoroughfare();
		$thoroughfareNumber = $this->getThoroughfareNumber();
		$postCode = $this->getPostCode();
		$locality = $this->getLocality();
		$administrativeArea = $this->getAdministrativeArea();

		// Replace the administrativeArea code through the (language-neutral) code
		if ($administrativeArea) {
			$administrativeAreaLabel = $administrativeArea->getLabel();
		}

		// Assemble the label
		if ($thoroughfare && !$thoroughfareNumber) {
			$label[0] = $thoroughfare;
		}
		if ($thoroughfare && $thoroughfareNumber) {
			$label[0] = $thoroughfare . ' ' . $thoroughfareNumber;
		}
		if ($locality && $administrativeAreaLabel) {
			$locality = $locality . ' (' . $administrativeAreaLabel . ')';
		}
		if ($postCode) {
			$label[1] = $postCode;
		}
		if ($locality) {
			$label[1] = $locality;
		}
		if ($postCode && $locality) {
			$label[1] = $postCode . ' ' . $locality;
		}

		$result = implode(', ', $label);
		return $result;
	}
}

?>