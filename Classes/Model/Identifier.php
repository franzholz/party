<?php

namespace JambageCom\Party\Model;

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
 * Model for the class Identifier
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class Identifier extends Object {
	protected $table = 'tx_party_identifiers';

	/**
	 * Returns the label of the Identifier in the following format:
	 * "[type]: [identifier] ([party])"
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @return	string		Label of the Identifier
	 */
	public function getLabel () {
		if ($this->isEmpty()) {
			return FALSE;		// Data must be loaded
		}
		$label = array();
		$out = '';

		// Get all relevant parts
		$type = GeneralUtility::makeInstance('tx_party_models_type');
		$type->load($this->get('type'));
		$identifier = $this->get('identifier');
		$party = tx_party_models_party::getInstance($this->get('party'));

		// Assemble the label
		if (!$type->isEmpty()) {
			$label[0] = $type->getLabel() . ':';
		}
		if ($identifier) {
			$label[1] = $identifier;
		}
		if (!$party->isEmpty) {
			$label[2] = '(' . $party->getLabel() . ')';
		}
		$out = implode(' ', $label);
		return $out;
	}
}

