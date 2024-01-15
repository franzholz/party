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
 * Model for the class ElectronicAddressIdentifier
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class ElectronicAddressIdentifier extends BaseModel
{
    protected $table = 'tx_party_electronic_address_identifiers';

    /**
     * Returns the label of the electronic address identifier in the following format:
     * "[electronic_address_identifier]"
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
        return $this->get('electronic_address_identifier');
    }
}
