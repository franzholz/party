<?php

namespace JambageCom\Party\Model;

use TYPO3\CMS\Core\Utility\GeneralUtility;

use JambageCom\Party\Model\Pary;
use JambageCom\Party\Model\RelationshipType;


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
 * Model for the class Relationship
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

class Relationship extends BaseModel
{
    protected $table = 'tx_party_relationships';

    /**
     * Loads the relationship.
     *
     * @param	integer		$uid: UID of the relationship
     * @return	void		The data is loaded into the object
     */
    public function load($uid): void
    {
        parent::load($uid);

        if ($this->get('primary_party')) {
            $this->set('primary_party', Party::getInstance($this->get('primary_party')));
        }
        if ($this->get('secondary_party')) {
            $this->set('secondary_party', Party::getInstance($this->get('secondary_party')));
        }
        if ($this->get('relationship_type')) {
            $relationshipType = GeneralUtility::makeInstance(RelationshipType::class);
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
    public function getLabel()
    {
        if ($this->isEmpty()) {
            return false;		// Data must be loaded
        }
        $label = [];
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
        return implode(' ', $label);
    }
}
