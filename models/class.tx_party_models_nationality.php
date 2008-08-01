<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2007 David Bruehlmeier (typo3@bruehlmeier.com)
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
 * Model for the class Nationality
 * 
 * Depends on: liv/div 
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

require_once(t3lib_extMgm::extPath('div').'class.tx_div.php');
tx_div::load('tx_party_models_object');
tx_div::load('tx_party_models_type');
tx_div::load('tx_party_models_party');

class tx_party_models_nationality extends tx_party_models_object {
	protected $table = 'tx_party_nationalities';
	
	/**
	 * Returns the label of the Nationality in the following format:
	 * "[nationality_type]: [country] ([party])"
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @return	string		Label of the Nationality
	 */
	public function getLabel() {
		if ($this->isEmpty()) return false;		// Data must be loaded
		$label = array();
		$out = '';
		
		// Get all relevant parts
		$nationalityType = t3lib_div::makeInstance('tx_party_models_type');
		$nationalityType->load($this->get('nationality_type'));
		$party = tx_party_models_party::getInstance($this->get('party'));
		$country = reset(t3lib_BEfunc::getRecord('static_countries',$this->get('country'),'cn_short_en'));

		// Assemble the label
		if (!$nationalityType->isEmpty()) $label[0] = $nationalityType->getLabel().':';
		$label[1] = $country;
		if (!$party->isEmpty()) $label[2] = '('.$party->getLabel().')';

		$out = implode(' ',$label);
		return $out;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_countryofresidence.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_countryofresidence.php']);
}


?>