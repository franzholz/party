<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 David Bruehlmeier (typo3@bruehlmeier.com)
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
 * Model for the class Relationship
 *
 * Depends on: div2007
 *
 * $Id$
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

require_once(PATH_BE_div2007 . 'class.tx_div2007.php');
tx_div2007::load('tx_party_models_object');

class tx_party_models_relationship extends tx_party_models_object {
	protected $table = 'tx_party_relationships';

	/**
	 * Loads the relationship.
	 *
	 * @param	integer		$uid: UID of the relationship
	 * @return	void		The data is loaded into the object
	 */
	public function load ($uid) {
		parent::load($uid);

		if ($this->get('primary_party')) {
			$this->set('primary_party', tx_party_models_party::getInstance($this->get('primary_party')));
		}
		if ($this->get('secondary_party')) {
			$this->set('secondary_party', tx_party_models_party::getInstance($this->get('secondary_party')));
		}
		if ($this->get('relationship_type')) {
			$relationshipType = tx_div2007::makeInstance('tx_party_models_relationshiptype');
			$relationshipType->load($this->get('relationship_type'));
			$this->set('relationship_type', $relationshipType);
		}
	}

	/**
	 * Returns the label of the Relationship in the following format:
	 * "[primary_party] [description_as_primary]: [secondary_party]"
	 *
	 * The data must be loaded before, by calling $this->load();
	 *
	 * @return	string		Label of the Relationship
	 */
	public function getLabel () {
		if ($this->isEmpty()) {
			return FALSE;		// Data must be loaded
		}
		$label = array();
		$out = '';

		// Get all relevant parts
		$primaryParty = $this->get('primary_party');
		$relationshipType = $this->get('relationship_type');
		$secondaryParty = $this->get('secondary_party');

		// Assemble the label
		if (is_object($primaryParty) && !$primaryParty->isEmpty()) {
			$label[] = $primaryParty->getLabel();
		}
		if (is_object($relationshipType) && !$relationshipType->isEmpty()) {
			$label[] = $relationshipType->get('description_as_primary') . ':';
		}
		if (is_object($secondaryParty) && !$secondaryParty->isEmpty()) {
			$label[] = $secondaryParty->getLabel();
		}

		$out = implode(' ', $label);
		return $out;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_relationship.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_relationship.php']);
}


?>