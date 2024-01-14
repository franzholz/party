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
 * Model for the class ElectronicAddressIdentifier
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class tx_party_models_electronicaddressidentifier extends tx_party_models_object {

	protected $table = 'tx_party_electronic_address_identifiers';

	/**
	 * Returns the label of the electronic address identifier in the following format:
	 * "[electronic_address_identifier]"
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @return	string		Label of the electronic address identifier
	 */
	public function getLabel () {
		if ($this->isEmpty()) {
			return FALSE;		// Data must be loaded
		}

		$out = $this->get('electronic_address_identifier');
		return $out;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_electronicaddressidentifier.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_electronicaddressidentifier.php']);
}


?>
