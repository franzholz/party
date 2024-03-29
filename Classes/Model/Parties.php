<?php

namespace JambageCom\Party\Model;

use TYPO3\CMS\Core\Utility\GeneralUtility;

use JambageCom\Party\Model\Organisation;
use JambageCom\Party\Model\Person;


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
 * Model for a collection of Parties
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

class Parties extends BaseModel
{
    /**
     * Loads all parties which belong to a certain PID.
     *
     * @param	integer		$pid: PID (Page ID) to select parties from
     * @return	void		The data is loaded into the object
     */
    public function loadByPid($pid): void
    {
        $pid = (int) $pid;

        $select = 'uid,type';
        $from = 'tx_party_parties';
        $where = 'tx_party_parties.pid=' . $pid;

        $list = $this->selectFromDatabase($select, $from, $where);
        $this->set('list', $list);
    }

    /**
     * Loads all parties with an address from a certain country.
     *
     * @param	integer		$countryUid: UID of the country
     * @param	boolean		$onlyStandard: If set to TRUE, only the standard address of the party is relevant, else all addresses. Optional, default = TRUE
     * @return	void		The data is loaded into the object
     */
    public function loadByCountry(
        $countryUid,
        $onlyStandard = true
    ): void {
        $countryUid = (int) $countryUid;

        $select = 'a.party, c.type';
        $from = 'tx_party_address_usages a, tx_party_addresses b, tx_party_parties c';
        $where = 'a.party=b.parties AND a.party=c.uid AND b.country=' . $countryUid;
        $where .= $onlyStandard ? ' AND a.standard' : '';

        $list = $this->selectFromDatabase($select, $from, $where);
        $this->set('list', $list);
    }

    /**
     * Executes a database query and returns a list of person/organisation objects.
     *
     * @param	string		$select: The fields to select
     * @param	string		$from: The FROM clause
     * @param	string		$where: The WHERE clause. The deleteClause is automatically added
     * @param	string		$groupBy: The GROUP BY clause (optional)
     * @param	string		$orderBy: The ORDER BY clause (optional)
     * @param	string		$limit: The LIMIT clause (optional)
     * @return	ArrayObject 	object with the selected persons/organisations
     */
    private function selectFromDatabase(
        $select,
        $from,
        $where,
        $groupBy = '',
        $orderBy = '',
        $limit = ''
    ) {
        $where .= \JambageCom\Div2007\Utility\TableUtility::deleteClause($from);
        $query =
            $GLOBALS['TYPO3_DB']->SELECTquery(
                $select,
                $from,
                $where,
                $groupBy,
                $orderBy,
                $limit
            );
        $result = $GLOBALS['TYPO3_DB']->sql_query($query);
        $list = [];
        if($result) {
            while($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($result)) {
                if ($row['type'] == 0) {
                    $item = GeneralUtility::makeInstance(Person::class);
                }
                if ($row['type'] == 1) {
                    $item = GeneralUtility::makeInstance(Organisation::class);
                }
                $item->load($row['uid']);
                $list[$row['uid']] = $item;
            }
            $GLOBALS['TYPO3_DB']->sql_free_result($result);
        }
        return new ArrayObject($list);
    }
}
