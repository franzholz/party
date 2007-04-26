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
 * Model for the class Favourite
 * 
 * Depends on: liv/div 
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

require_once(t3lib_extMgm::extPath('div').'class.tx_div.php');
tx_div::load('tx_party_models_object');

class tx_party_models_favourite extends tx_party_models_object {
	protected $table = 'tx_party_favourites';
	
	/**
	 * Returns the label of the Favourite in the following format:
	 * "[favourite] ([party])"
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @return	string		Label of the Favourite
	 */
	public function getLabel() {
		if ($this->isEmpty()) return false;		// Data must be loaded
		$label = array();
		$out = '';
		
		// Get all relevant parts
		$favourite = $this->get('favourite');
		$party = tx_party_models_party::getInstance($this->get('party'));
		
		// Assemble the label
		if ($favourite) $label[0] = $favourite;
		if (!$party->isEmpty()) $label[1] = '('.$party->getLabel().')';

		$out = implode(' ',$label);
		return $out;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_favourite.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_favourite.php']);
}


?>