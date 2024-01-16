<?php

namespace JambageCom\Party\Api;

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
 * Part of the party (Party Management Framework) extension.
 *
 * API functions
 *
 * @author  Franz Holzinger <franz@ttproducts.de>
 * @maintainer	Franz Holzinger <franz@ttproducts.de>
 * @package TYPO3
 * @subpackage party
 *
 */


class Api
{
    final public const BASE_FIELDS = 'uid,pid,tstamp,crdate,deleted';

    private static array $tableArray = [
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
        'tx_party_visas',
    ];

    private static array $mmTableArray = [
        'tx_party_parties_hobbies_mm',
        'tx_party_parties_habits_mm',
        'tx_party_parties_allergies_mm',
    ];

    public static function getTableArray($bMM = false)
    {
        $result = false;

        if ($bMM) {
            $result = self::$tableArray;
        } else {
            $result = self::$mmTableArray;
        }
        return $result;
    }
}
