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
 * Model for the class RelationshipType
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


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
