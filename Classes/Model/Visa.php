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
 * Model for the class Visa
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

class tx_party_models_visa extends tx_party_models_object {
	protected $table = 'tx_party_visas';

	/**
	 * Returns the label of the Visa in the following format:
	 * "[country] ([party])"
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @return	string		Label of the Visa
	 */
	public function getLabel () {
		if ($this->isEmpty()) return FALSE;		// Data must be loaded
		$label = array();
		$out = '';

		// Get all relevant parts
		$country = reset(
			tx_div2007_core::getRecord(
				'static_countries',
				$this->get('country'),
				'cn_short_en'
			)
		);
		$party = tx_party_models_party::getInstance($this->get('party'));

		// Assemble the label
		if ($country) {
			$label[] = $country;
		}

		if (!$party->isEmpty()) {
			$label[] = '(' . $party->getLabel() . ')';
		}

		$out = implode(' ', $label);
		return $out;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_visa.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_visa.php']);
}


?>
