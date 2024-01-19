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
 * Model for the class ElectronicAddressIdentifierUsage
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class ElectronicAddressIdentifierUsage extends BaseModel
{
    protected $table = 'tx_party_electronic_address_identifier_usages';

    /**
     *
     * The data must be loaded before, by calling $this->load();
     *
     * @return	string		Label of the electronic address identifier
     */
    public function getLabel()
    {
        if ($this->isEmpty()) {
            return false;		// Data must be loaded
        }
        $label = [];
        $out = '';
        $identifierUsage = $this->get('electronic_address_identifier_usage');

        if ($identifierUsage) {
            $usage = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('tx_party_usages', $identifierUsage, 'short_title');

            // Assemble the label
            if (is_array($usage)) {
                $label[] = $usage['short_title'];
            }
        }
        $party = $this->get('party');

        if ($party) {
            // Get all relevant parts
            $partyBaseModel = Party::getInstance($party);

            if (is_object($partyBaseModel) && !$partyBaseModel->isEmpty()) {
                $label[] = '(' . $partyBaseModel->getLabel() . ')';
            }
        }
        return implode(' ', $label);
    }
}
