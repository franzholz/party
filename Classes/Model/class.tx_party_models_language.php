<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2013 David Bruehlmeier (typo3@bruehlmeier.com)
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
 * Model for the class Language
 *
 * $Id$
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class tx_party_models_language extends tx_party_models_object {
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

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_language.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_language.php']);
}


?>