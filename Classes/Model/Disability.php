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
 * Model for the class Disability
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

class Disability extends BaseModel
{
    protected $table = 'tx_party_disabilities';

    /**
     * Returns the label of the Disability in the following format:
     * "[disability] ([party])"
     *
     * The data must be loaded before, by calling $this->load();
     *
     * @return	string		Label of the Disability
     */
    public function getLabel()
    {
        if ($this->isEmpty()) {
            return false;		// Data must be loaded
        }
        $label = [];
        $out = '';

        // Get all relevant parts
        $party = Party::getInstance($this->get('party'));

        // Assemble the label
        $label[0] = $this->get('disability');
        if (!$party->isEmpty()) {
            $label[1] = '(' . $party->getLabel() . ')';
        }
        return implode(' ', $label);
    }
}
