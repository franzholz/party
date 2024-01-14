<?php

namespace JambageCom\Party\Model;

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
 * Model for the class Address
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


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
			$rec = tx_div2007_core::getRecord('static_country_zones', $administrativeArea, 'zn_code');
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
