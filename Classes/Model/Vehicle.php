<?php

use TYPO3\CMS\Core\Utility\GeneralUtility;

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
 * Model for the class Vehicle
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

class tx_party_models_vehicle extends tx_party_models_object {
	protected $table = 'tx_party_vehicles';

	/**
	 * Loads the Vehicle.
	 *
	 * @param	integer		$uid: UID of the Vehicle
	 * @return	void		The data is loaded into the Vehicle
	 */
	public function load ($uid) {
		parent::load($uid);
		if ($this->get('make')) {
			$make = GeneralUtility::makeInstance('tx_party_models_vehiclemanufacturer');
			$make->load($this->get('make'));
			$this->set('make', $make);
		}
	}

	/**
	 * Returns the label of the Vehicle in the following format:
	 * "[make]: [license_plate] ([party])"
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @return	string		Label of the Vehicle
	 */
	public function getLabel () {
		if ($this->isEmpty()) {
			return FALSE;		// Data must be loaded
		}
		$label = array();
		$out = '';

		// Get all relevant parts
		$make = $this->get('make');
		$licensePlate = $this->get('license_plate');
		$party = tx_party_models_party::getInstance($this->get('party'));

		// Assemble the label
		if (is_object($make) && !$make->isEmpty()) {
			$label[] = $make->getLabel() . ':';
		}

		if ($licensePlate) {
			$label[] = $licensePlate;
		}

		if (!$party->isEmpty()) {
			$label[] = '(' . $party->getLabel() . ')';
		}

		$out = implode(' ', $label);
		return $out;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_vehicle.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_vehicle.php']);
}


?>
