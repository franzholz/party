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
 * Model for the class Revenue
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class Revenue extends BaseModel
{
    protected $table = 'tx_party_revenues';

    /**
     * Returns the label of the Revenue in the following format:
     * "[type]: [currency] [revenue] ([party])"
     *
     * The data must be loaded before, by calling $this->load();
     *
     * @return	string		Label of the Revenue
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
        $currency = reset(
            \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord(
                'static_currencies',
                $this->get('currency'),
                'cu_iso_3'
            )
        );
        $amount = $this->get('amount');
        $party = Party::getInstance($this->get('party'));

        // Assemble the label
        if (!$type->isEmpty()) {
            $label[0] = $type->getLabel() . ':';
        }

        if ($currency) {
            $label[1] = $currency;
        }

        if ($amount) {
            $label[2] = $amount;
        }

        if (!$party->isEmpty()) {
            $label[3] = '(' . $party->getLabel() . ')';
        }
        return implode(' ', $label);
    }
}
