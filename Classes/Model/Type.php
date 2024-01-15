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
 * Model for the class Type
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class Type extends BaseModel
{
    protected $table = 'tx_party_types';

    /**
     * Checks if the type is allowed for a certain party type.
     *
     * The data must be loaded before, by calling $this->load();
     *
     * @param	integer		$partyType: Type of the party (0 for person, 1 for organisation)
     * @return	boolean		True if the current type is allowed for the specified party type
     */
    public function isAllowedForPartyType($partyType)
    {
        if ($this->isEmpty()) {
            return false;		// Data must be loaded
        }
        $out = false;

        switch ($this->get('allowed_for_party_type')) {
            case 'ALL':
                $out = true;
                break;
            case 'PERSONS':
                $out = $partyType == 0;
                break;
            case 'ORGANISATIONS':
                $out = $partyType == 1;
                break;
            default:
                $out = false;
                break;
        }

        return $out;
    }

    /**
     * Checks if the type is allowed for a certain field.
     *
     * The data must be loaded before, by calling $this->load();
     *
     * @param	string		$field: Name of the field (e.g. tx_party_EVENTS-TYPE)
     * @return	boolean		True if the current type is allowed for the specified field
     */
    public function isAllowedForField($field)
    {
        if ($this->isEmpty()) {
            return false;		// Data must be loaded
        }
        $out = false;

        $allowedForField = explode(',', $this->get('allowed_for_field'));

        return in_array($field, $allowedForField);
    }
}
