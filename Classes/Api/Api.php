<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2013 Franz Holzinger (franz@ttproducts.de)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*  A copy is found in the textfile GPL.txt and important notices to the license
*  from the author is found in LICENSE.txt distributed with these scripts.
*
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * Part of the party (Party Management Framework) extension.
 *
 * API functions
 *
 * $Id$
 *
 * @author  Franz Holzinger <franz@ttproducts.de>
 * @maintainer	Franz Holzinger <franz@ttproducts.de>
 * @package TYPO3
 * @subpackage party
 *
 */


class tx_party_api {
	static private $tableArray = array(
		'tx_party_accounts',
		'tx_party_address_usages',
		'tx_party_addresses',
		'tx_party_allergies',
		'tx_party_birth_signs',
		'tx_party_contacts',
		'tx_party_contact_number_usages',
		'tx_party_contact_numbers',
		'tx_party_countries_of_residence',
		'tx_party_disabilities',
		'tx_party_documents',
		'tx_party_electronic_address_identifier_usages',
		'tx_party_electronic_address_identifiers',
		'tx_party_ethnicities',
		'tx_party_events',
		'tx_party_favourites',
		'tx_party_habits',
		'tx_party_hobbies',
		'tx_party_identifiers',
		'tx_party_images',
		'tx_party_languages',
		'tx_party_marks',
		'tx_party_memberships',
		'tx_party_names',
		'tx_party_nationalities',
		'tx_party_occupation_ranks',
		'tx_party_occupation_roles',
		'tx_party_occupations',
		'tx_party_organisation_natures',
		'tx_party_parties',
		'tx_party_parties_allergies_mm',
		'tx_party_parties_habits_mm',
		'tx_party_parties_hobbies_mm',
		'tx_party_person_name_titles',
		'tx_party_physical_status',
		'tx_party_preferences',
		'tx_party_qualification_status',
		'tx_party_qualifications',
		'tx_party_religions',
		'tx_party_relationship_types',
		'tx_party_relationships',
		'tx_party_revenues',
		'tx_party_stock_markets',
		'tx_party_types',
		'tx_party_usages',
		'tx_party_vehicle_manufacturers',
		'tx_party_vehicles',
		'tx_party_visas'
	);

	static private $mmTableArray = array(
		'tx_party_parties_hobbies_mm',
		'tx_party_parties_habits_mm',
		'tx_party_parties_allergies_mm'
	);

	static public function getTableArray ($bMM = FALSE) {
		$result = FALSE;

		if ($bMM) {
			$result = self::$tableArray;
		} else {
			$result = self::$mmTableArray;
		}
		return $result;
	}
}


?>