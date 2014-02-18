<?php
namespace JambageCom\Party\Model;

use TYPO3\CMS\Core\Utility\GeneralUtility;

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
 * Model for the class Relationship
 *
 * $Id: class.tx_party_models_relationship.php 81705 2013-11-23 10:37:30Z franzholz $
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage party
 */

class Relationship extends AbstractObject {

	/**
	 * Table name for save or delete operations.
	 *
	 * @var	string
	 */
	static protected $tableName = 'tx_party_relationships';

	/**
	 * Current class name.
	 *
	 *	static protected $className = __CLASS__;
	 *
	 * @var	string
	 */
	static protected $className = __CLASS__;

	protected $fieldToObjectMap = array(
		'primary_party' => 'JambageCom\\Party\\Model\\Party',
		'secondary_party' => 'JambageCom\\Party\\Model\\Party',
		'relationship_type' => 'JambageCom\\Party\\Model\\RelationshipType',
	);

	/**
	 * Returns the label of the Relationship in the following format:
	 * "[primary_party] [description_as_primary]: [secondary_party]"
	 *
	 * @return	string		Label of the Relationship
	 */
	public function getLabel () {
		if (!$this->hasRecord()) {
			return FALSE;	// Data must be loaded
		}
		$label = array();
		$result = '';

		// Get all relevant parts
		$primaryParty = $this->getPrimaryParty();
		$relationshipType = $this->getRelationshipType();
		$secondaryParty = $this->getSecondaryParty();

		// Assemble the label
		if (is_object($primaryParty) && $primaryParty->hasRecord()) {
			$label[] = $primaryParty->getLabel();
		}

		if (is_object($relationshipType) && $relationshipType->hasRecord()) {
			$label[] = $relationshipType->getDescriptionAsPrimary() . ':';
		}

		if (is_object($secondaryParty) && $secondaryParty->hasRecord()) {
			$label[] = $secondaryParty->getLabel();
		}

		$result = implode(' ', $label);
		return $result;
	}
}

?>