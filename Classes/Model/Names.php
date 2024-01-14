<?php

namespace JambageCom\Party\Model;

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
 * Model for a collection of Names (both PersonName and OrganisationName)
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage tx_party
 */

class tx_party_models_names extends tx_div2007_object {

	public $table = 'tx_party_names';


	public function getFirstName () {
		$result = '';

		$itemIterator = $this->getIterator();
		$list = $itemIterator->seek('list');

		if (is_object($list)) {
			$list->rewind();
			$item = $list->current();
			$result = $item->getLabel();
		}
		return $result;
	}


	/**
	 * Loads all names which are assigned to a specific party.
	 *
	 * @param	integer		$uid: UID of the party
	 * @return	void		The data is loaded into the object
	 */
	public function loadByParty ($partyUid) {
		$partyUid = intval($partyUid);
		$groupBy = '';
		$orderBy = '';

		// Load all names from the database and build the object
		$query =
			$GLOBALS['TYPO3_DB']->SELECTquery(
				'uid,type',
				$this->table,
				$this->table . '.party=' . $partyUid,
				$groupBy,
				$orderBy
			);
		$result = $GLOBALS['TYPO3_DB']->sql_query($query);
		$list = GeneralUtility::makeInstance('tx_div2007_object');
		if($result) {
			while($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($result)) {
				$item = null;
				if ($row['type'] == 0) {	// Person Name
					$item = GeneralUtility::makeInstance('tx_party_models_personname');
					$item->load($row['uid']);
				}
				if ($row['type'] == 1) {	// Organisation Name
					$item = GeneralUtility::makeInstance('tx_party_models_organisationname');
					$item->load($row['uid']);
				}
				if ($item->get('standard') == 1) {
					$this->set('standard', $item);
				}
				$list->append($item);
			}
			$GLOBALS['TYPO3_DB']->sql_free_result($result);
		}
		$this->set('list', $list);
	}

}


