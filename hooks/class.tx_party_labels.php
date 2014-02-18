<?php

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
 * Building (backend) labels, using label_userFunc.
 *
 * $Id: class.tx_party_labels.php 81705 2013-11-23 10:37:30Z franzholz $
 *
 * @author David Bruehlmeier <typo3@bruehlmeier.com>
 */
class tx_party_labels {

	/**
	 * Factory function which is called by label_userFunc. The function decides how to build the label.
	 * The result is directly written to $params['title'], since this parameter is passed by reference.
	 *
	 * The function gets the label from the proper model.
	 *
	 * @param	array		$params: Parameters, passed by reference!
	 * @param	object		$pObj: Parent object from the calling function, not used.
	 * @return	string		The result is also written into $params['title']
	 */
	public function getLabel (
		&$params,
		$pObj
	) {
		// Only get labels for tx_party* tables
		if (substr($params['table'], 0, 8) != 'tx_party') {
			return '';
		}

		// Init
		$label = '';
		$className = '';

		// Get the className of the model
		switch ($params['table']) {
			case 'tx_party_addresses':
				$className = 'JambageCom\\Party\\Model\\Address';
				break;

			case 'tx_party_languages':
				$className = 'JambageCom\\Party\\Model\\Language';
				break;

			case 'tx_party_nationalities':
				$className = 'JambageCom\\Party\\Model\\Nationality';
				break;

			case 'tx_party_names':
				$className = 'JambageCom\\Party\\Model\\Name';
// 				if ($params['row']['type'] == 0) {
// 					$className = 'JambageCom\\Party\\Model\\Helper\\PersonName';
// 				}
// 				if ($params['row']['type'] == 1) {
// 					$className = 'JambageCom\\Party\\Model\\Helper\\OrganisationName';
// 				}
				break;

			case 'tx_party_parties':
				$className = 'JambageCom\\Party\\Model\\Party';
// 				if ($params['row']['type'] == 0) {
// 					$className = 'JambageCom\\Party\\Model\\Helper\\Person';
// 				}
// 				if ($params['row']['type'] == 1) {
// 					$className = 'JambageCom\\Party\\Model\\Helper\\Organisation';
// 				}
				break;

			case 'tx_party_visas':
				$className = 'JambageCom\\Party\\Model\\Visa';
				break;

			case 'tx_party_events':
				$className = 'JambageCom\\Party\\Model\\Event';
				break;

			case 'tx_party_memberships':
				$className = 'JambageCom\\Party\\Model\\Membership';
				break;

			case 'tx_party_countries_of_residence':
				$className = 'JambageCom\\Party\\Model\\CountryOfResidence';
				break;

			case 'tx_party_occupations':
				$className = 'JambageCom\\Party\\Model\\Occupation';
				break;

			case 'tx_party_address_usages':
				$className = 'JambageCom\\Party\\Model\\AddressUsage';
				break;

			case 'tx_party_accounts':
				$className = 'JambageCom\\Party\\Model\\Account';
				break;

			case 'tx_party_contact_number_usages':
				$className = 'JambageCom\\Party\\Model\\ContactNumberUsage';
				break;

			case 'tx_party_electronic_address_identifier_usages':
				$className = 'JambageCom\\Party\\Model\\ElectronicAddressIdentifierUsage';
				break;

			case 'tx_party_relationships':
				$className = 'JambageCom\\Party\\Model\\Relationship';
				break;

			default:
				debug ('No model className found for table ' . $params['table'] . '. (hooks/tx_party_labels)'); // keep this
				break;
		}

		// Get the label from the model
		if ($className) {
			$uid = $params['row']['uid'];
			$model = GeneralUtility::makeInstance($className, $uid);
			$label = $model->getLabel();
		}

		// Write new label back to the params-array (passed by reference)
		if ($label != '') {
			$params['title'] = $label;
		}

		return $label;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/hooks/class.tx_party_labels.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party/hooks/class.tx_party_labels.php']);
}


?>