<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

// Include the class for getting own lables
include_once(t3lib_extMgm::extPath('party').'hooks/class.tx_party_labels.php');

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['party']['inline_appearance']['default'] = array(
	'collapseAll' => 1,
	'expandSingle' => 1,
	'newRecordLinkPosition' => 'bottom',
	'newRecordLinkAddTitle' => 1,
);

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['party']['inline_appearance']['combined'] = array(
	'collapseAll' => 1,
	'expandSingle' => 1,
	'newRecordLinkPosition' => 'bottom',
	'newRecordLinkAddTitle' => 1,
	'useCombination' => 1,
);
					
$TCA["tx_party_birth_signs"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_birth_signs',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'            => 'sys_language_uid',	
		'transOrigPointerField'    => 'l18n_parent',	
		'transOrigDiffSourceField' => 'l18n_diffsource',	
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_birth_signs.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "sys_language_uid, l18n_parent, l18n_diffsource, short_title, title, long_title",
	)
);

$TCA["tx_party_ethnicities"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_ethnicities',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'            => 'sys_language_uid',	
		'transOrigPointerField'    => 'l18n_parent',	
		'transOrigDiffSourceField' => 'l18n_diffsource',	
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_ethnicities.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "sys_language_uid, l18n_parent, l18n_diffsource, short_title, title, long_title",
	)
);

$TCA["tx_party_habits"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_habits',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'            => 'sys_language_uid',	
		'transOrigPointerField'    => 'l18n_parent',	
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_habits.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "short_title, title, long_title",
	)
);

$TCA["tx_party_hobbies"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_hobbies',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'            => 'sys_language_uid',	
		'transOrigPointerField'    => 'l18n_parent',	
		'transOrigDiffSourceField' => 'l18n_diffsource',	
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_hobbies.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "sys_language_uid, l18n_parent, l18n_diffsource, short_title, title, long_title",
	)
);

$TCA["tx_party_occupation_ranks"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_occupation_ranks',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'            => 'sys_language_uid',	
		'transOrigPointerField'    => 'l18n_parent',	
		'transOrigDiffSourceField' => 'l18n_diffsource',	
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_occupation_ranks.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "sys_language_uid, l18n_parent, l18n_diffsource, short_title, title, long_title",
	)
);

$TCA["tx_party_occupation_roles"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_occupation_roles',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'            => 'sys_language_uid',	
		'transOrigPointerField'    => 'l18n_parent',	
		'transOrigDiffSourceField' => 'l18n_diffsource',	
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_occupation_roles.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "sys_language_uid, l18n_parent, l18n_diffsource, short_title, title, long_title",
	)
);

$TCA["tx_party_organisation_natures"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_organisation_natures',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'            => 'sys_language_uid',	
		'transOrigPointerField'    => 'l18n_parent',	
		'transOrigDiffSourceField' => 'l18n_diffsource',	
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_organisation_natures.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "sys_language_uid, l18n_parent, l18n_diffsource, short_title, title, long_title",
	)
);

$TCA["tx_party_person_name_titles"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_person_name_titles',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'            => 'sys_language_uid',	
		'transOrigPointerField'    => 'l18n_parent',	
		'transOrigDiffSourceField' => 'l18n_diffsource',	
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_person_name_titles.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "sys_language_uid, l18n_parent, l18n_diffsource, short_title, title, long_title",
	)
);

$TCA["tx_party_physical_status"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_physical_status',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'            => 'sys_language_uid',	
		'transOrigPointerField'    => 'l18n_parent',	
		'transOrigDiffSourceField' => 'l18n_diffsource',	
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_physical_status.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "sys_language_uid, l18n_parent, l18n_diffsource, short_title, title, long_title",
	)
);

$TCA["tx_party_qualification_status"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_qualification_status',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'            => 'sys_language_uid',	
		'transOrigPointerField'    => 'l18n_parent',	
		'transOrigDiffSourceField' => 'l18n_diffsource',	
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_qualification_status.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "sys_language_uid, l18n_parent, l18n_diffsource, short_title, title, long_title",
	)
);

$TCA["tx_party_religions"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_religions',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'            => 'sys_language_uid',	
		'transOrigPointerField'    => 'l18n_parent',	
		'transOrigDiffSourceField' => 'l18n_diffsource',	
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_religions.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "sys_language_uid, l18n_parent, l18n_diffsource, short_title, title, long_title",
	)
);

$TCA["tx_party_types"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_types',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'            => 'sys_language_uid',	
		'transOrigPointerField'    => 'l18n_parent',	
		'transOrigDiffSourceField' => 'l18n_diffsource',	
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_types.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "sys_language_uid, l18n_parent, l18n_diffsource, short_title, title, long_title, allowed_for",
	)
);

$TCA["tx_party_vehicle_manufacturer"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicle_manufacturer',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'languageField'            => 'sys_language_uid',	
		'transOrigPointerField'    => 'l18n_parent',	
		'transOrigDiffSourceField' => 'l18n_diffsource',	
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_vehicle_manufacturer.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "sys_language_uid, l18n_parent, l18n_diffsource, short_title, title, long_title",
	)
);

$TCA["tx_party_accounts"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_accounts',		
		'label'     => 'account_id',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY account_id",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_accounts.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, ownership_type, account_id, issuing_authority, account_type, remarks, organisation",
	)
);

$TCA["tx_party_addresses"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses',		
		'label'     => 'locality',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY locality",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_addresses.gif',
	),
	"feInterface" => array (
	"fe_admin_fieldList" => "locality, thoroughfare, thoroughfare_number, building_name, location, lot, premise_type, internal_thoroughfare, reference_location, post_code, rural_delivery, latitude_degrees_measure, latitude_minutes_measure, latitude_seconds_measure, latitude_direction_code, longitude_degrees_measure, longitude_minutes_measure, longitude_seconds_measure, longitude_direction_code, postal_delivery_point, post_office, post_town, administrative_area, country, remarks",
	)
);

$TCA["tx_party_contacts"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_contacts',		
		'label'     => 'contact',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY contact",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_contacts.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, type, contact, remarks",
	)
);

$TCA["tx_party_contact_numbers"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers',		
		'label'     => 'local_number',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY local_number",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_contact_numbers.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "media_type, country_code, area_code, local_number, extension, pin, contact_hours, remarks",
	)
);

$TCA["tx_party_countries_of_residence"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_countries_of_residence',		
		'label'     => 'country',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY country",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_countries_of_residence.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, country, residency_type, remarks",
	)
);

$TCA["tx_party_disabilities"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_disabilities',		
		'label'     => 'disability',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY disability",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_disabilities.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, disability, cause, remarks",
	)
);

$TCA["tx_party_documents"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_documents',		
		'label'     => 'document_id',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY document_id",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_documents.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, document_type, document_id, issued_by, issue_place, privilege, restriction, group_name, name_on_document, remarks",
	)
);

$TCA["tx_party_electronic_address_identifiers"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifiers',		
		'label'     => 'electronic_address_identifier',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY electronic_address_identifier",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_electronic_address_identifiers.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "type, electronic_address_identifier, remarks",
	)
);

$TCA["tx_party_images"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_images',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY title",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_images.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, address, image, title, description, remarks",
	)
);

$TCA["tx_party_languages"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_languages',		
		'label'     => 'uid',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY language",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_languages.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, language, type, read_skills, write_skills, listen_skills, speak_skills, preference, remarks",
	)
);

$TCA["tx_party_marks"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_marks',		
		'label'     => 'mark',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY mark",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_marks.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, mark, body_part, body_part_mark_location, remarks",
	)
);

$TCA["tx_party_nationalities"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_nationalities',		
		'label'     => 'country',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY country",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_nationalities.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, country, nationality_type, remarks",
	)
);

$TCA["tx_party_occupations"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_occupations',		
		'label'     => 'role',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY role",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_occupations.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, role, rank, employment_type, position_title, cost_centre, reports_to, remarks",
	)
);

$TCA["tx_party_names"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_names',		
		'label'     => 'last_name',
		'label_userFunc' => 'tx_party_labels->getLabel',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'type' => 'type',
		'default_sortby' => "ORDER BY last_name",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_names.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, type, person_name_title, first_name, middle_name, ancestor_name, last_name, other_name, preceding_title, alias, generation_identifier, place_name, organisation_name_type, organisation_name, abbreviation, remarks",
	)
);

$TCA["tx_party_qualifications"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications',		
		'label'     => 'qualification_name',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY qualification_name",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_qualifications.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, qualification_name, status, institution, start_date, completion_date, way_of_study, major_subject, minor_subject, mark, course_duration, award, restriction, registration, remarks",
	)
);

$TCA["tx_party_relationship_types"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types',		
		'label'     => 'relationship_type',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY relationship_type",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_relationship_types.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "relationship_type, description_as_primary, description_as_secondary, organisation_allowed_as_primary, organisation_allowed_as_secondary, person_allowed_as_primary, person_allowed_as_secondary",
	)
);

$TCA["tx_party_revenues"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_revenues',		
		'label'     => 'amount',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY amount",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_revenues.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, currency, amount, amount_precision, after_tax, type, period_from, period_to, source, remarks",
	)
);

$TCA["tx_party_stock_markets"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_stock_markets',		
		'label'     => 'listed_code',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY listed_code",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_stock_markets.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, market, listed_code, remarks",
	)
);

$TCA["tx_party_vehicles"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles',		
		'label'     => 'license_plate',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY license_plate",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_vehicles.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, make, type, model, license_plate, manufacture_date, engine_number, chassis_number, body_number, remarks",
	)
);

$TCA["tx_party_visas"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_visas',		
		'label'     => 'country',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY country",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_visas.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, country, number, code, issue_date, issue_place, maximum_stay, restriction, privilege, special_condition, remarks",
	)
);

$TCA["tx_party_parties"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_parties',		
		'label'     => 'uid',
		'label_userFunc' => 'tx_party_labels->getLabel',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'type' => 'type',	
		'default_sortby' => "ORDER BY crdate",	
		'delete' => 'deleted',	
		'dividers2tabs' => true,
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_parties.gif',
		'typeicon_column' => 'type',
		'typeicons' => Array (
			'0' => t3lib_extMgm::extRelPath($_EXTKEY)."icons/icon_tx_party_parties_person.gif",
			'1' => t3lib_extMgm::extRelPath($_EXTKEY)."icons/icon_tx_party_parties_organisation.gif",
		),
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "type, marital_status, religion, birth_place, birth_date_time, birth_date_time_precision, birth_sign, birth_star, weight, height, breast, waist, hip, hair_colour, eye_colour, skin_colour, blood_group, physical_status, ethnicity, gender, hobbies, habits, organisation_type, organisation_nature, company_registration_id, company_registration_date, number_of_employees, remarks, names, addresses, accounts, contact_numbers, countries_of_residence, documents, images, nationalities, relationships, revenues, vehicles, visas, disabilities, languages, marks, occupations, qualifications, stock_markets, events, identifiers, memberships, allergies, favourites, preferences",
	)
);

$TCA["tx_party_events"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_events',		
		'label'     => 'type',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY crdate",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_events.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, type, date, date_from, date_to, remarks",
	)
);

$TCA["tx_party_identifiers"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_identifiers',		
		'label'     => 'identifier',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY crdate",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_identifiers.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, type, identifier, issue_date, expiry_date, remarks",
	)
);

$TCA["tx_party_memberships"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_memberships',		
		'label'     => 'uid',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY crdate",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_memberships.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, type, organisation, issue_date, expiry_date, remarks",
	)
);

$TCA["tx_party_allergies"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_allergies',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_allergies.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "short_title, title, long_title",
	)
);

$TCA["tx_party_favourites"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_favourites',		
		'label'     => 'favourite',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY crdate",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_favourites.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, type, favourite, remarks",
	)
);

$TCA["tx_party_preferences"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_preferences',		
		'label'     => 'preference',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY crdate",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_preferences.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, type, preference, remarks",
	)
);

$TCA["tx_party_address_usages"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_address_usages',		
		'label'     => 'uid',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY crdate",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_address_usages.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, address, address_usage, standard",
	)
);

$TCA["tx_party_contact_number_usages"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_number_usages',		
		'label'     => 'uid',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY crdate",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_contact_number_usages.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, contact_number, contact_number_usage, standard",
	)
);

$TCA["tx_party_electronic_address_identifier_usages"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages',		
		'label'     => 'uid',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY crdate",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_electronic_address_identifier_usages.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "party, electronic_address_identifier, electronic_address_identifier_usage, standard",
	)
);

$TCA["tx_party_usages"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_usages',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_usages.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "short_title, title, long_title",
	)
);

$TCA["tx_party_relationships"] = array (
	"ctrl" => array (
		'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships',		
		'label'     => 'uid',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => "ORDER BY crdate",	
		'delete' => 'deleted',	
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_party_relationships.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "primary_party, secondary_party, relationship_type, date_established, date_lapsed, reason_lapsed, remarks",
	)
);
?>