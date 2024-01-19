<?php

namespace JambageCom\Party\Model;

use TYPO3\CMS\Core\Utility\GeneralUtility;

use JambageCom\Party\Model\Pary;
use JambageCom\Party\Model\Type;

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
 * Model for the class Preference
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class Preference extends BaseModel
{
    protected $table = 'tx_party_preferences';

    /**
     * Returns the label of the Preference in the following format:
     * "[type]: [favourite] ([party])"
     *
     * The data must be loaded before, by calling $this->load();
     *
     * @return	string		Label of the Preference
     */
    public function getLabel()
    {
        if ($this->isEmpty()) {
            return false;		// Data must be loaded
        }
        $label = [];
        $out = '';

        // Get all relevant parts
        $type = GeneralUtility::makeInstance(Type::class);
        $type->load($this->get('type'));
        $preference = $this->get('preference');
        $party = Party::getInstance($this->get('party'));

        // Assemble the label
        if (!$type->isEmpty()) {
            $label[0] = $type->getLabel() . ':';
        }
        if ($preference) {
            $label[1] = $preference;
        }
        if (!$party->isEmpty()) {
            $label[2] = '(' . $party->getLabel() . ')';
        }
        return implode(' ', $label);
    }
}
