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
 * Model for the class PersonName
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class PersonName extends Name
{
    /**
     * Loads the person name.
     *
     * @param	integer		$uid: UID of the person name
     * @return	void		The data is loaded into the object
     */
    public function load($uid)
    {
        $uid = intval($uid);

        // Check that the name is a person name
        $rec = tx_div2007_core::getRecord($this->table, $uid, 'type');
        if (!$rec['type'] == 0) {
            return false;
        }

        // Get all fields belonging to the type 'person name' and load the object
        $typeFields = tx_party_div::getAllTypeFields($this->table, $rec);
        parent::load($uid, $typeFields);
    }

    /**
     * Returns the label of the person name in the following format:
     * "[last_name], [first_name] [middle_name]." The middle name is abbreviated to the
     * first letter (capitalized).
     *
     * The data must be loaded before, by calling $this->load();
     *
     * @return	string		Label of the person name
     */
    public function getLabel()
    {
        if ($this->isEmpty()) {
            return false;		// Data must be loaded
        }
        $label = array();
        $out = '';

        // Get all relevant parts
        $firstName = $this->get('first_name');
        $middleName = $this->get('middle_name');
        $lastName = $this->get('last_name');

        // Assemble the label
        if ($lastName) {
            $label[0] = $lastName;
        }
        if ($firstName && !$middleName) {
            $label[1] = $firstName;
        }
        if ($firstName && $middleName) {
            $label[1] = $firstName . ' ' . strtoupper(substr($middleName, 0, 1)) . '.';
        }
        $out = implode(', ', $label);
        return $out;
    }

}
