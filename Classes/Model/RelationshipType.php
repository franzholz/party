<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2014 David Bruehlmeier (typo3@bruehlmeier.com)
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
 * $Id: class.tx_party_models_relationshiptype.php 81705 2013-11-23 10:37:30Z franzholz $
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage party
 */


class RelationshipType extends AbstractObject {

	/**
	 * Table name for save or delete operations.
	 *
	 * @var	string
	 */
	static protected $tableName = 'tx_party_relationship_types';

	/**
	 * Current class name.
	 *
	 *	static protected $className = __CLASS__;
	 *
	 * @var	string
	 */
	static protected $className = __CLASS__;

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

		if ($typeOfPrimaryParty == 0 && $this->getPersonAllowedAsPrimary() {
			$primaryOk = TRUE;
		}

		if ($typeOfPrimaryParty == 1 && $this->getPersonAllowedAsPrimary() {
			$primaryOk = TRUE;
		}

		if ($typeOfSecondaryParty == 0 && $this->getPersonAllowedAsSecondary() {
			$secondaryOk = TRUE;
		}

		if ($typeOfSecondaryParty == 1 && $this->getPersonAllowedAsSecondary() {
			$secondaryOk = TRUE;
		}

		$result = ($primaryOk && $secondaryOk) ? TRUE : FALSE;
		return $result;
	}
}

?>