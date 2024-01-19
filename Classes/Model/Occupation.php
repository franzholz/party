<?php

namespace JambageCom\Party\Model;

use TYPO3\CMS\Core\Utility\GeneralUtility;

use JambageCom\Party\Model\Occupationrole;
use JambageCom\Party\Model\Pary;


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
 * Model for the class Occupation
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class Occupation extends BaseModel
{
    protected $table = 'tx_party_occupations';

    /**
     * Returns the label of the Occupation in the following format:
     * "[role]: [position_title] ([party])"
     *
     * The data must be loaded before, by calling $this->load();
     *
     * @return	string		Label of the Occupation
     */
    public function getLabel()
    {
        if ($this->isEmpty()) {
            return false;		// Data must be loaded
        }
        $label = [];
        $out = '';

        // Get all relevant parts
        $role = GeneralUtility::makeInstance(OccupationRole);
        $role->load($this->get('role'));
        $positionTitle = $this->get('position_title');
        $party = Party::getInstance($this->get('party'));

        // Assemble the label
        if (!$role->isEmpty()) {
            $label[0] = $role->getLabel() . ':';
        }
        if ($positionTitle) {
            $label[1] = $positionTitle;
        }
        if (!$party->isEmpty()) {
            $label[2] = '(' . $party->getLabel() . ')';
        }
        return implode(' ', $label);
    }
}
