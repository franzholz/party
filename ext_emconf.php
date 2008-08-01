<?php

########################################################################
# Extension Manager/Repository config file for ext: "party"
#
# Auto generated 28-03-2007 19:53
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'party Management Framework',
	'description' => 'Management of party-related data, such as persons, organisations, names, addresses, etc. Based on the OASIS-Standard xPIL (Extensible Party Information Language).',
	'category' => 'be',
	'author' => 'David Bruehlmeier',
	'author_email' => 'typo3@bruehlmeier.com',
	'shy' => '',
	'dependencies' => 'lib,div,static_info_tables',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.1-0.0.0',
			'php' => '5.0.0-0.0.0',
			'lib' => '0.0.20-',
			'div' => '0.0.9-',
			'static_info_tables' => '2.0.1-',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:75:{s:8:"TODO.txt";s:4:"fbfd";s:12:"ext_icon.gif";s:4:"f3e2";s:17:"ext_localconf.php";s:4:"d7f6";s:14:"ext_tables.php";s:4:"237e";s:14:"ext_tables.sql";s:4:"7f8c";s:16:"locallang_db.xml";s:4:"7083";s:7:"tca.php";s:4:"cfd9";s:26:"div/class.tx_party_div.php";s:4:"bf54";s:31:"hooks/class.tx_party_labels.php";s:4:"6017";s:41:"hooks/class.tx_party_staticinfotables.php";s:4:"4c52";s:32:"icons/icon_tx_party_accounts.gif";s:4:"912b";s:38:"icons/icon_tx_party_address_usages.gif";s:4:"912b";s:33:"icons/icon_tx_party_addresses.gif";s:4:"912b";s:33:"icons/icon_tx_party_allergies.gif";s:4:"912b";s:35:"icons/icon_tx_party_birth_signs.gif";s:4:"912b";s:35:"icons/icon_tx_party_birth_stars.gif";s:4:"912b";s:45:"icons/icon_tx_party_contact_number_usages.gif";s:4:"912b";s:39:"icons/icon_tx_party_contact_numbers.gif";s:4:"912b";s:32:"icons/icon_tx_party_contacts.gif";s:4:"912b";s:46:"icons/icon_tx_party_countries_of_residence.gif";s:4:"912b";s:36:"icons/icon_tx_party_disabilities.gif";s:4:"912b";s:33:"icons/icon_tx_party_documents.gif";s:4:"912b";s:60:"icons/icon_tx_party_electronic_address_identifier_usages.gif";s:4:"912b";s:54:"icons/icon_tx_party_electronic_address_identifiers.gif";s:4:"912b";s:35:"icons/icon_tx_party_ethnicities.gif";s:4:"912b";s:30:"icons/icon_tx_party_events.gif";s:4:"912b";s:34:"icons/icon_tx_party_favourites.gif";s:4:"912b";s:30:"icons/icon_tx_party_habits.gif";s:4:"912b";s:31:"icons/icon_tx_party_hobbies.gif";s:4:"912b";s:35:"icons/icon_tx_party_identifiers.gif";s:4:"912b";s:30:"icons/icon_tx_party_images.gif";s:4:"912b";s:33:"icons/icon_tx_party_languages.gif";s:4:"912b";s:29:"icons/icon_tx_party_marks.gif";s:4:"912b";s:35:"icons/icon_tx_party_memberships.gif";s:4:"912b";s:29:"icons/icon_tx_party_names.gif";s:4:"912b";s:37:"icons/icon_tx_party_nationalities.gif";s:4:"912b";s:40:"icons/icon_tx_party_occupation_ranks.gif";s:4:"912b";s:40:"icons/icon_tx_party_occupation_roles.gif";s:4:"912b";s:35:"icons/icon_tx_party_occupations.gif";s:4:"912b";s:44:"icons/icon_tx_party_organisation_natures.gif";s:4:"912b";s:31:"icons/icon_tx_party_parties.gif";s:4:"30fb";s:44:"icons/icon_tx_party_parties_organisation.gif";s:4:"038a";s:38:"icons/icon_tx_party_parties_person.gif";s:4:"9792";s:42:"icons/icon_tx_party_person_name_titles.gif";s:4:"912b";s:39:"icons/icon_tx_party_physical_status.gif";s:4:"912b";s:35:"icons/icon_tx_party_preferences.gif";s:4:"912b";s:44:"icons/icon_tx_party_qualification_status.gif";s:4:"912b";s:38:"icons/icon_tx_party_qualifications.gif";s:4:"912b";s:42:"icons/icon_tx_party_relationship_types.gif";s:4:"912b";s:37:"icons/icon_tx_party_relationships.gif";s:4:"912b";s:33:"icons/icon_tx_party_religions.gif";s:4:"912b";s:32:"icons/icon_tx_party_revenues.gif";s:4:"912b";s:37:"icons/icon_tx_party_stock_markets.gif";s:4:"912b";s:29:"icons/icon_tx_party_types.gif";s:4:"912b";s:30:"icons/icon_tx_party_usages.gif";s:4:"912b";s:44:"icons/icon_tx_party_vehicle_manufacturer.gif";s:4:"912b";s:32:"icons/icon_tx_party_vehicles.gif";s:4:"912b";s:29:"icons/icon_tx_party_visas.gif";s:4:"912b";s:41:"icons/selicon_tx_party_parties_type_0.gif";s:4:"413a";s:41:"icons/selicon_tx_party_parties_type_1.gif";s:4:"bc7c";s:40:"models/class.tx_party_models_address.php";s:4:"aba8";s:42:"models/class.tx_party_models_addresses.php";s:4:"a543";s:37:"models/class.tx_party_models_name.php";s:4:"ffac";s:38:"models/class.tx_party_models_names.php";s:4:"d372";s:45:"models/class.tx_party_models_organisation.php";s:4:"703a";s:50:"models/class.tx_party_models_organisation_name.php";s:4:"d9e0";s:38:"models/class.tx_party_models_party.php";s:4:"eaca";s:39:"models/class.tx_party_models_person.php";s:4:"9687";s:44:"models/class.tx_party_models_person_name.php";s:4:"2970";s:45:"tests/class.tx_party_model_basic_testcase.php";s:4:"6649";s:25:"tests/drop_all_tables.sql";s:4:"a7bc";s:31:"tests/empty_all_data_tables.sql";s:4:"6013";s:26:"tests/empty_all_tables.sql";s:4:"3823";s:19:"tests/test_data.sql";s:4:"797a";s:26:"tests/test_data_images.zip";s:4:"f885";}',
);

?>