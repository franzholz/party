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
 * Model for the class Account
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

class Account extends BaseModel
{
    protected $table = 'tx_party_accounts';

    /**
     * Returns the label of the account in the following format:
     * "[account_id] ([organisation])"
     *
     * The data must be loaded before, by calling $this->load();
     *
     * @return	string		Label of the account
     */
    public function getLabel()
    {
        if ($this->isEmpty()) {
            return false;		// Data must be loaded
        }
        $label = [];
        $out = '';

        // Get all relevant parts
        $accountId = $this->get('account_id');
        $org = GeneralUtility::makeInstance('tx_party_models_organisation');
        $org->load($this->get('organisation'));

        // Assemble the label
        $label[0] = $accountId;
        if ($org) {
            $label[1] = '(' . $org->getLabel() . ')';
        }
        return implode(' ', $label);
    }
}
