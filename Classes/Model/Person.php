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
 * Model for the class Person
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class Person extends Party
{
    /**
     * Loads the person.
     *
     * @param	integer		$uid: UID of the person
     * @return	void		The data is loaded into the object
     */
    public function load($uid, $fields)
    {
        $uid = (int) $uid;

        // Check that the party is a person
        $rec = tx_div2007_core::getRecord($this->table, $uid, 'type');
        if (!$rec['type'] == 0) {
            return false;
        }

        // Get all fields belonging to the type 'person' and load the object
        $typeFields = tx_party_div::getAllTypeFields($this->table, $rec);
        parent::load($uid, $typeFields);
    }
}
