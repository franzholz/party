<?php
namespace JambageCom\Party\Model;

use TYPO3\CMS\Core\Utility\GeneralUtility;

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
 * Model for the class Account
 *
 * $Id: class.tx_party_models_account.php 81705 2013-11-23 10:37:30Z franzholz $
 *
 * @author Franz Holzinger <franz@ttproducts.de>
 * @package TYPO3
 * @subpackage party
 */

class Account extends AbstractObject {

	/**
	 * Table name for save or delete operations.
	 *
	 * @var	string
	 */
	static protected $tableName = 'tx_party_accounts';

	/**
	 * Current class name.
	 *
	 *	static protected $className = __CLASS__;
	 *
	 * @var	string
	 */
	static protected $className = __CLASS__;

	protected $fieldToObjectMap = array(
		'organisation' => 'JambageCom\\Party\\Model\\Party',
		'party' => 'JambageCom\\Party\\Model\\Party',
		'ownership_type' => 'JambageCom\\Party\\Model\\Type',
		'account_type' => 'JambageCom\\Party\\Model\\Type',
	);

	/**
	 * Returns the label of the account in the following format:
	 * "[account_no] ([organisation])"
	 *
	 * @return	string		Label of the account
	 */
	public function getLabel () {
		if (!$this->hasRecord()) {
			return FALSE;	// Data must be loaded
		}

		$label = array();
		$result = '';

		// Get all relevant parts
		$uid = $this->getId();
		$accountNo = $this->getAccountNo();
		$org = $this->getOrganisation();

		// Assemble the label
		$label[0] = $accountNo;
		if ($org) {
			$label[1] = '(' . $org->getLabel() . ')';
		}

		$result = implode(' ', $label);
		return $result;
	}
}

?>