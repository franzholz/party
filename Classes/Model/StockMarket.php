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
 * Model for the class StockMarket
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class Stockmarket extends BaseModel
{
    protected $table = 'tx_party_stock_markets';

    /**
     * Returns the label of the StockMarket in the following format:
     * "[listed_code]: [market] ([party])"
     *
     * The data must be loaded before, by calling $this->load();
     *
     * @return	string		Label of the StockMarket
     */
    public function getLabel()
    {
        if ($this->isEmpty()) {
            return false;		// Data must be loaded
        }
        $label = [];
        $out = '';

        // Get all relevant parts
        $listedCode = $this->get('listed_code');
        $market = reset(\TYPO3\CMS\Backend\Utility\BackendUtility::getRecord('static_markets', $this->get('market'), 'institution_description'));
        $party = Party::getInstance($this->get('party'));

        // Assemble the label
        if ($listedCode) {
            $label[] = $listedCode . ':';
        }

        if ($market) {
            $label[] = $market;
        }

        if (!$party->isEmpty()) {
            $label[] = '(' . $party->getLabel() . ')';
        }
        return implode(' ', $label);
    }
}
