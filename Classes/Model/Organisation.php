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
 * Model for the class Organisation
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */


class Organisation extends Party
{
    /**
     * Loads the organisation.
     *
     * @param	integer		$uid: UID of the organisation
     * @return	void		The data is loaded into the object
     */
    public function load($uid) : void
    {
        $uid = (int) $uid;

        // Check that the party is an organisation
        $rec = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord($this->table, $uid, 'type');

        if ($rec['type'] != 1) {
            return false;
        }

        parent::load($uid);
    }
}
