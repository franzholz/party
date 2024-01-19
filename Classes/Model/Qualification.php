<?php

namespace JambageCom\Party\Model;

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
 * Model for the class Qualification
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class Qualification extends BaseModel
{
    protected $table = 'tx_party_qualifications';

    /**
     * Returns the label of the Qualification in the following format:
     * "[qualification] ([party])"
     *
     * The data must be loaded before, by calling $this->load();
     *
     * @return	string		Label of the Qualification
     */
    public function getLabel()
    {
        if ($this->isEmpty()) {
            return false;		// Data must be loaded
        }
        $label = [];
        $out = '';

        // Get all relevant parts
        $qualificationName = $this->get('qualification_name');
        $party = Party::getInstance($this->get('party'));

        // Assemble the label
        if ($qualificationName) {
            $label[0] = $qualificationName;
        }
        if (!$party->isEmpty()) {
            $label[1] = '(' . $party->getLabel() . ')';
        }
        return implode(' ', $label);
    }
}
