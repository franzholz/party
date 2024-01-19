<?php

namespace JambageCom\Party\Model;

use TYPO3\CMS\Core\Utility\GeneralUtility;

use JambageCom\Party\Model\Pary;

use JambageCom\Party\Model\Address;

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
 * Model for a collection of Addresses
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

class Addresses extends BaseModel
{
    protected $table = 'tx_party_address_usages';

    /**
     * Loads all addresses which are assigned to a specific party.
     *
     * @param	integer		$partyUid: UID of the party
     * @return	void		The data is loaded into the object
     */
    public function loadByParty($partyUid): void
    {
        $partyUid = (int) $partyUid;
        $groupBy = '';
        $orderBy = '';

        // Load all addresses from the database and build the object
        $query =
            $GLOBALS['TYPO3_DB']->SELECTquery(
                'address,standard',
                $this->table,
                $this->table . '.party=' . $partyUid,
                $groupBy,
                $orderBy
            );
        $result = $GLOBALS['TYPO3_DB']->sql_query($query);
        $list = GeneralUtility::makeInstance('tx_div2007_object');
        
        if($result) {
            while($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($result)) {
                $item = GeneralUtility::makeInstance(Address::class);
                $item->load($row['address']);
                $item->set('standard', $row['standard']);	// Include the value from the mm-table
                if ($item->get('standard') == 1) {
                    $this->set('standard', $item);
                }
                $list->append($item);
            }
            $GLOBALS['TYPO3_DB']->sql_free_result($result);
        }
        $this->set('list', $list);
    }


    /**
     * Returns the label of the Address Usage in the following format:
     *
     * The data must be loaded before, by calling $this->load();
     *
     * @return	string		Label of the Visa
     */
    public function getLabel()
    {
        if ($this->isEmpty()) {
            return false;		// Data must be loaded
        }
        $label = [];
        $out = '';
        $fieldname = 'short_title';
        $usage = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord(
            'tx_party_usages',
            $this->get('address_usage'),
            $fieldname
        );

        $party = Pary::getInstance($this->get('party'));

        // Assemble the label
        if (
            isset($usage) &&
            is_array($usage) &&
            isset($usage[$fieldname])
        ) {
            $label[] = $usage[$fieldname];
        }

        if (!$party->isEmpty()) {
            $label[] = '(' . $party->getLabel() . ')';
        }
        return implode(' ', $label);
    }
}
