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
 * Model for the class Occupation
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class tx_party_models_occupation extends tx_party_models_object {
	protected $table = 'tx_party_occupations';

	/**
	 * Returns the label of the Occupation in the following format:
	 * "[role]: [position_title] ([party])"
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @return	string		Label of the Occupation
	 */
	public function getLabel () {
		if ($this->isEmpty()) {
			return FALSE;		// Data must be loaded
		}
		$label = array();
		$out = '';

		// Get all relevant parts
		$role = GeneralUtility::makeInstance('tx_party_models_occupationrole');
		$role->load($this->get('role'));
		$positionTitle = $this->get('position_title');
		$party = tx_party_models_party::getInstance($this->get('party'));

		// Assemble the label
		if (!$role->isEmpty()) {
			$label[0] = $role->getLabel() . ':';
		}
		if ($positionTitle) {
			$label[1] = $positionTitle;
		}
		if (!$party->isEmpty()) {
			$label[2] = '(' . $party->getLabel() . ')';
		}
		$out = implode(' ', $label);
		return $out;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_document.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_document.php']);
}


?>
