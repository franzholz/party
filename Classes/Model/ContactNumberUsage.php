<?php

namespace JambageCom\Party\Model;

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
 * Model for the class Contact Number Usage
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class ContactNumberUsage extends BaseModel
{
    protected $table = 'tx_party_contact_number_usages';

    /**
     * Returns the label of the Document in the following format:
     * "[type]: [document_id] ([party])"
     *
     * The data must be loaded before, by calling $this->load();
     *
     * @return	string		Label of the Document
     */
    public function getLabel()
    {
        if ($this->isEmpty()) {
            return false;		// Data must be loaded
        }
        $label = array();
        $out = '';

        // Get all relevant parts
        $usage = tx_div2007_core::getRecord('tx_party_usages', $this->get('contact_number_usage'), 'short_title');
        $party = tx_party_models_party::getInstance($this->get('party'));

        // Assemble the label
        if ($usage) {
            $label[] = $usage;
        }
        if (!$party->isEmpty()) {
            $label[] = '(' . $party->getLabel() . ')';
        }

        $out = implode(' ', $label);
        return $out;
    }
}
