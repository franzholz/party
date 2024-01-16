<?php

defined('TYPO3') || die('Access denied.');

// Include the class for getting own lables
include_once(PATH_BE_PARTY . 'hooks/class.tx_party_labels.php');

$GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'] = [
    'collapseAll' => 1,
    'expandSingle' => 1,
    'newRecordLinkPosition' => 'bottom',
    'newRecordLinkAddTitle' => 1,
];

$GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['combined'] = [
    'collapseAll' => 1,
    'expandSingle' => 1,
    'newRecordLinkPosition' => 'bottom',
    'newRecordLinkAddTitle' => 1,
    'useCombination' => 1,
];



$tableArray = ['tx_party_accounts', 'tx_party_address_usages', 'tx_party_addresses', 'tx_party_allergies', 'tx_party_birth_signs', 'tx_party_contact_number_usages', 'tx_party_contact_numbers', 'tx_party_contacts', 'tx_party_countries_of_residence', 'tx_party_disabilities', 'tx_party_documents', 'tx_party_electronic_address_identifier_usages', 'tx_party_electronic_address_identifiers', 'tx_party_ethnicities', 'tx_party_events', 'tx_party_favourites', 'tx_party_habits', 'tx_party_hobbies', 'tx_party_identifiers', 'tx_party_images', 'tx_party_languages', 'tx_party_marks', 'tx_party_memberships', 'tx_party_names', 'tx_party_nationalities', 'tx_party_occupation_ranks', 'tx_party_occupation_roles', 'tx_party_occupations', 'tx_party_organisation_natures', 'tx_party_parties', 'tx_party_person_name_titles', 'tx_party_physical_status', 'tx_party_preferences', 'tx_party_qualification_status', 'tx_party_qualifications', 'tx_party_relationship_types', 'tx_party_relationships', 'tx_party_religions', 'tx_party_revenues', 'tx_party_stock_markets', 'tx_party_types', 'tx_party_usages', 'tx_party_vehicle_manufacturers', 'tx_party_vehicles', 'tx_party_visas'];

foreach ($tableArray as $theTable) {
    t3lib_extMgm::addToInsertRecords($theTable);
    t3lib_extMgm::allowTableOnStandardPages($theTable);
}
