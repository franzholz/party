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
 * Model for the class OrganisationName
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

class OrganisationName extends Name
{
    /**
     * Loads the organisation name.
     *
     * @param	integer		$uid: UID of the organisation name
     * @return	void		The data is loaded into the object
     */
    public function load($uid): void
    {
        $uid = (int) $uid;

        // Check that the name is an organisation name
        $rec = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord($this->table, $uid, 'type');

        if ($rec['type'] != 1) {
            return;
        }

        parent::load($uid);
    }

    /**
     * Returns the label of the organisation name in the following format:
     * "[organisation_name]"
     *
     * The data must be loaded before, by calling $this->load();
     *
     * @return	string		Label of the organisation name
     */
    public function getLabel()
    {
        if ($this->isEmpty()) {
            return false;		// Data must be loaded
        }
        return $this->get('organisation_name');
    }
}
