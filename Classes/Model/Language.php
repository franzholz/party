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
 * Model for the class Language
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class Language extends Object {
	protected $table = 'tx_party_languages';

	/**
	 * Returns the label of the Language in the following format:
	 * "[language] ([party])"
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @return	string		Label of the Language
	 */
	public function getLabel () {
		if ($this->isEmpty()) {
			return FALSE;		// Data must be loaded
		}
		$label = array();
		$out = '';

		// Get all relevant parts
		$party = tx_party_models_party::getInstance($this->get('party'));
		$language = reset(
			tx_div2007_core::getRecord('static_languages', $this->get('language'), 'lg_name_en')
		);

		// Assemble the label
		$label[0] = $language;
		if (!$party->isEmpty()) {
			$label[1] = '(' . $party->getLabel() . ')';
		}

		$out = implode(' ', $label);
		return $out;
	}
}


