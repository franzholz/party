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
 * Model for the class Favourite
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class Favourite extends BaseModel
{
    protected $table = 'tx_party_favourites';

    /**
     * Returns the label of the Favourite in the following format:
     * "[favourite] ([party])"
     *
     * The data must be loaded before, by calling $this->load();
     *
     * @return	string		Label of the Favourite
     */
    public function getLabel()
    {
        if ($this->isEmpty()) {
            return false;		// Data must be loaded
        }
        $label = [];
        $out = '';

        // Get all relevant parts
        $favourite = $this->get('favourite');
        $party = Party::getInstance($this->get('party'));

        // Assemble the label
        if ($favourite) {
            $label[0] = $favourite;
        }
        if (!$party->isEmpty()) {
            $label[1] = '(' . $party->getLabel() . ')';
        }
        return implode(' ', $label);
    }
}
