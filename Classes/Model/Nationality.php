<?php

namespace JambageCom\Party\Model;

use TYPO3\CMS\Core\Utility\GeneralUtility;

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
 * Model for the class Nationality
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class Nationality extends BaseModel
{
    protected $table = 'tx_party_nationalities';

    /**
     * Returns the label of the Nationality in the following format:
     * "[nationality_type]: [country] ([party])"
     *
     * The data must be loaded before, by calling $this->load();
     *
     * @return	string		Label of the Nationality
     */
    public function getLabel()
    {
        if ($this->isEmpty()) {
            return false;		// Data must be loaded
        }
        $label = [];
        $out = '';

        // Get all relevant parts
        $nationalityType = GeneralUtility::makeInstance('tx_party_models_type');
        $nationalityType->load($this->get('nationality_type'));
        $party = tx_party_models_party::getInstance($this->get('party'));
        $country = reset(
            \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('static_countries', $this->get('country'), 'cn_short_en')
        );

        // Assemble the label
        if (!$nationalityType->isEmpty()) {
            $label[0] = $nationalityType->getLabel() . ':';
        }
        $label[1] = $country;
        if (!$party->isEmpty()) {
            $label[2] = '(' . $party->getLabel() . ')';
        }
        return implode(' ', $label);
    }
}
