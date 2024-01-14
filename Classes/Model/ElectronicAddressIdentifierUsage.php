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
 * Model for the class ElectronicAddressIdentifierUsage
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class ElectronicAddressIdentifierUsage extends Object {
	protected $table = 'tx_party_electronic_address_identifier_usages';

	/**
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @return	string		Label of the electronic address identifier
	 */
	public function getLabel () {
		if ($this->isEmpty()) {
			return false;		// Data must be loaded
		}
		$label = array();
		$out = '';
		$identifierUsage = $this->get('electronic_address_identifier_usage');

		if ($identifierUsage) {
			$usage = tx_div2007_core::getRecord('tx_party_usages', $identifierUsage, 'short_title');

			// Assemble the label
			if (is_array($usage)) {
				$label[] = $usage['short_title'];
			}
		}
		$party = $this->get('party');

		if ($party) {
			// Get all relevant parts
			$partyObject = tx_party_models_party::getInstance($party);

			if (is_object($partyObject)) {
				if (!$partyObject->isEmpty()) {
					$label[] = '(' . $partyObject->getLabel() . ')';
				}
			}
		}

		$out = implode(' ', $label);
		return $out;
	}
}

