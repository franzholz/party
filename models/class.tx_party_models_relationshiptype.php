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
 * Model for the class RelationshipType
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

class tx_party_models_relationshiptype extends tx_party_models_object {
	protected $table = 'tx_party_relationship_types';


	/**
	 * Determines if a relationship is allowed, according to the rules of the
	 * relationship type.
	 *
	 * @param	integer		$typeOfPrimaryParty: UID of the party with the primary role in the relationship
	 * @param	integer		$typeOfSecondaryParty: UID of the party with the secondary role in the relationship
	 * @return	boolean		True if the relationship is allowed
	 */
	public function isRelationshipAllowed ($typeOfPrimaryParty, $typeOfSecondaryParty) {
		$primaryOk == FALSE;
		$secondaryOk = FALSE;
		if ($typeOfPrimaryParty == 0 && $this->get('person_allowed_as_primary')) {
			$primaryOk = TRUE;
		}
		if ($typeOfPrimaryParty == 1 && $this->get('organisation_allowed_as_primary')) {
			$primaryOk = TRUE;
		}
		if ($typeOfSecondaryParty == 0 && $this->get('person_allowed_as_secondary')) {
			$secondaryOk = TRUE;
		}
		if ($typeOfSecondaryParty == 1 && $this->get('organisation_allowed_as_secondary')) {
			$secondaryOk = TRUE;
		}

		$out = ($primaryOk && $secondaryOk) ? TRUE : FALSE;
		return $out;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_relationshiptype.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_relationshiptype.php']);
}


?>