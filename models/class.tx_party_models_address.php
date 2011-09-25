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
 * Model for the class Address
 *
 * Depends on: div2007
 *
 * $Id$
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

require_once(PATH_BE_div2007 . 'class.tx_div2007.php');
tx_div2007::load('tx_party_models_object');

class tx_party_models_address extends tx_party_models_object {

	protected $table = 'tx_party_addresses';

	/**
	 * Returns the label of the address in the following format:
	 * "[thoroughfare] [thoroughfare_number], [post_code] [locality] ([administrative_area])"
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @return	string		Label of the address
	 */
	public function getLabel () {
		if ($this->isEmpty()) {
			return FALSE;		// Data must be loaded
		}
		$label = array();
		$out = '';

		// Get all relevant parts
		$thoroughfare = $this->get('thoroughfare');
		$thoroughfareNumber = $this->get('thoroughfare_number');
		$postCode = $this->get('post_code');
		$locality = $this->get('locality');
		$administrativeArea = $this->get('administrative_area');

		// Replace the administrativeArea code through the (language-neutral) code
		if ($administrativeArea) {
			$rec = t3lib_BEfunc::getRecord('static_country_zones', $administrativeArea, 'zn_code');
			$administrativeArea = $rec['zn_code'];
		}

		// Assemble the label
		if ($thoroughfare && !$thoroughfareNumber) {
			$label[0] = $thoroughfare;
		}
		if ($thoroughfare && $thoroughfareNumber) {
			$label[0] = $thoroughfare . ' ' . $thoroughfareNumber;
		}
		if ($locality && $administrativeArea) {
			$locality = $locality . ' (' . $administrativeArea . ')';
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

		$out = implode(', ', $label);
		return $out;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_address.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_address.php']);
}


?>