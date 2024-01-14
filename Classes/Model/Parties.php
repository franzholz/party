<?php

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
 * Model for a collection of Parties
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

class tx_party_models_parties extends tx_div2007_object {

	/**
	 * Loads all parties which belong to a certain PID.
	 *
	 * @param	integer		$pid: PID (Page ID) to select parties from
	 * @return	void		The data is loaded into the object
	 */
	public function loadByPid ($pid) {
		$pid = intval($pid);

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
	public function loadByCountry (
		$countryUid,
		$onlyStandard = TRUE
	) {
		$countryUid = intval($countryUid);

		$select = 'a.party, c.type';
		$from = 'tx_party_address_usages a, tx_party_addresses b, tx_party_parties c';
		$where = 'a.party=b.parties AND a.party=c.uid AND b.country=' . $countryUid;
		$where.= $onlyStandard ? ' AND a.standard' : '';

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
	 * @return	object		A tx_div2007_object instance with the selected persons/organisations
	 */
	private function selectFromDatabase (
		$select,
		$from,
		$where,
		$groupBy = '',
		$orderBy = '',
		$limit = ''
	) {
		$where = $where . tx_div2007_core::deleteClause($from);
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
		$list = GeneralUtility::makeInstance('tx_div2007_object');
		if($result) {
			while($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($result)) {
				if ($row['type'] == 0) {
					$item = GeneralUtility::makeInstance('tx_party_models_person');
				}
				if ($row['type'] == 1) {
					$item = GeneralUtility::makeInstance('tx_party_models_organisation');
				}
				$item->load($row['uid']);
				$list->append($item);
			}
			$GLOBALS['TYPO3_DB']->sql_free_result($result);
		}
		return $list;
	}

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_parties.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/models/class.tx_party_models_parties.php']);
}


?>
