<?php
namespace JambageCom\Party\Model;

/***************************************************************
*  Copyright notice
*
*  (c) 2014 David Bruehlmeier (typo3@bruehlmeier.com)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/**
 * Model for a collection of Addresses
 *
 * $Id: class.tx_party_models_addresses.php 81705 2013-11-23 10:37:30Z franzholz $
 *
 * @author David Brühlmeier <typo3@bruehlmeier.com>
 * @package TYPO3
 * @subpackage party
 */

class AddressUsage extends AbstractObject {

	/**
	 * Table name for save or delete operations.
	 *
	 * @var	string
	 */
	static protected $tableName = 'tx_party_address_usages';

	/**
	 * Current class name.
	 *
	 *	static protected $className = __CLASS__;
	 *
	 * @var	string
	 */
	static protected $className = __CLASS__;

	protected $fieldToObjectMap = array(
		'address' => 'JambageCom\\Party\\Model\\Address',
		'address_usage' => 'JambageCom\\Party\\Model\\Usage',
		'party' => 'JambageCom\\Party\\Model\\Party',
	);

	/**
	 * Loads all addresses which are assigned to a specific party.
	 *
	 * @param	integer		$partyUid: UID of the party
	 * @return	void		The data is loaded into the object
	 */
	public function loadByParty ($partyUid) {
		$partyUid = intval($partyUid);
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
				$item = GeneralUtility::makeInstance('tx_party_models_address');
				$item->load($row['address']);
				$item->set('standard',$row['standard']);	// Include the value from the mm-table
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
	 * @return	string		Label of the Visa
	 */
	public function getLabel () {
		if (!$this->hasRecord()) {
			return FALSE;	// Data must be loaded
		}
		$label = array();
		$result = '';
		$shortTitle = '';

		$usage = $this->getAddressUsage();
		if (is_object($usage)) {
			$shortTitle = $usage->getShortTitle();
		}
		$party = $this->getParty();

		// Assemble the label
		if (
			$shortTitle != ''
		) {
			$label[] = $shortTitle;
		}

		if (
			is_object($party) &&
			$party->hasRecord()
		) {
			$label[] = '(' . $party->getLabel() . ')';
		}

		$result = implode(' ', $label);
		return $result;
	}
}

?>