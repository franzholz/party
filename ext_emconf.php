<?php

########################################################################
# Extension Manager/Repository config file for ext "party".
#
# Auto generated 10-02-2011 23:37
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'party Management Framework',
	'description' => 'Management of party-related data, such as persons, organisations, names, addresses, etc. Based on the OASIS-Standard xPIL (Extensible Party Information Language).',
	'category' => 'be',
	'author' => 'David Bruehlmeier',
	'author_email' => 'typo3@bruehlmeier.com',
	'shy' => '',
	'dependencies' => 'div2007,static_info_tables',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'experimental',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.1-0.0.0',
			'php' => '5.0.0-0.0.0',
			'div2007' => '0.4.0-',
			'static_info_tables' => '2.0.1-',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:129:{s:9:"ChangeLog";s:4:"2c1e";s:8:"TODO.txt";s:4:"8bab";s:12:"ext_icon.gif";s:4:"f3e2";s:17:"ext_localconf.php";s:4:"a473";s:14:"ext_tables.php";s:4:"12ca";s:14:"ext_tables.sql";s:4:"538b";s:16:"locallang_db.xml";s:4:"2088";s:7:"tca.php";s:4:"c328";s:26:"div/class.tx_party_div.php";s:4:"dd0b";s:31:"hooks/class.tx_party_labels.php";s:4:"e0f0";s:41:"hooks/class.tx_party_staticinfotables.php";s:4:"8975";s:32:"icons/icon_tx_party_accounts.gif";s:4:"912b";s:38:"icons/icon_tx_party_address_usages.gif";s:4:"912b";s:33:"icons/icon_tx_party_addresses.gif";s:4:"912b";s:33:"icons/icon_tx_party_allergies.gif";s:4:"912b";s:35:"icons/icon_tx_party_birth_signs.gif";s:4:"912b";s:35:"icons/icon_tx_party_birth_stars.gif";s:4:"912b";s:45:"icons/icon_tx_party_contact_number_usages.gif";s:4:"912b";s:39:"icons/icon_tx_party_contact_numbers.gif";s:4:"912b";s:32:"icons/icon_tx_party_contacts.gif";s:4:"912b";s:46:"icons/icon_tx_party_countries_of_residence.gif";s:4:"912b";s:36:"icons/icon_tx_party_disabilities.gif";s:4:"912b";s:33:"icons/icon_tx_party_documents.gif";s:4:"912b";s:60:"icons/icon_tx_party_electronic_address_identifier_usages.gif";s:4:"912b";s:54:"icons/icon_tx_party_electronic_address_identifiers.gif";s:4:"912b";s:35:"icons/icon_tx_party_ethnicities.gif";s:4:"912b";s:30:"icons/icon_tx_party_events.gif";s:4:"912b";s:34:"icons/icon_tx_party_favourites.gif";s:4:"912b";s:30:"icons/icon_tx_party_habits.gif";s:4:"912b";s:31:"icons/icon_tx_party_hobbies.gif";s:4:"912b";s:35:"icons/icon_tx_party_identifiers.gif";s:4:"912b";s:30:"icons/icon_tx_party_images.gif";s:4:"912b";s:33:"icons/icon_tx_party_languages.gif";s:4:"912b";s:29:"icons/icon_tx_party_marks.gif";s:4:"912b";s:35:"icons/icon_tx_party_memberships.gif";s:4:"912b";s:29:"icons/icon_tx_party_names.gif";s:4:"912b";s:37:"icons/icon_tx_party_nationalities.gif";s:4:"912b";s:40:"icons/icon_tx_party_occupation_ranks.gif";s:4:"912b";s:40:"icons/icon_tx_party_occupation_roles.gif";s:4:"912b";s:35:"icons/icon_tx_party_occupations.gif";s:4:"912b";s:44:"icons/icon_tx_party_organisation_natures.gif";s:4:"912b";s:31:"icons/icon_tx_party_parties.gif";s:4:"30fb";s:44:"icons/icon_tx_party_parties_organisation.gif";s:4:"038a";s:38:"icons/icon_tx_party_parties_person.gif";s:4:"9792";s:42:"icons/icon_tx_party_person_name_titles.gif";s:4:"912b";s:39:"icons/icon_tx_party_physical_status.gif";s:4:"912b";s:35:"icons/icon_tx_party_preferences.gif";s:4:"912b";s:44:"icons/icon_tx_party_qualification_status.gif";s:4:"912b";s:38:"icons/icon_tx_party_qualifications.gif";s:4:"912b";s:42:"icons/icon_tx_party_relationship_types.gif";s:4:"912b";s:37:"icons/icon_tx_party_relationships.gif";s:4:"912b";s:33:"icons/icon_tx_party_religions.gif";s:4:"912b";s:32:"icons/icon_tx_party_revenues.gif";s:4:"912b";s:37:"icons/icon_tx_party_stock_markets.gif";s:4:"912b";s:29:"icons/icon_tx_party_types.gif";s:4:"912b";s:30:"icons/icon_tx_party_usages.gif";s:4:"912b";s:45:"icons/icon_tx_party_vehicle_manufacturers.gif";s:4:"912b";s:32:"icons/icon_tx_party_vehicles.gif";s:4:"912b";s:29:"icons/icon_tx_party_visas.gif";s:4:"912b";s:41:"icons/selicon_tx_party_parties_type_0.gif";s:4:"413a";s:41:"icons/selicon_tx_party_parties_type_1.gif";s:4:"bc7c";s:40:"models/class.tx_party_models_account.php";s:4:"4e78";s:40:"models/class.tx_party_models_address.php";s:4:"eed4";s:42:"models/class.tx_party_models_addresses.php";s:4:"1461";s:40:"models/class.tx_party_models_allergy.php";s:4:"005c";s:42:"models/class.tx_party_models_birthsign.php";s:4:"12d0";s:40:"models/class.tx_party_models_contact.php";s:4:"9303";s:51:"models/class.tx_party_models_contactnumberusage.php";s:4:"2abc";s:51:"models/class.tx_party_models_countryofresidence.php";s:4:"6311";s:43:"models/class.tx_party_models_disability.php";s:4:"9bfc";s:41:"models/class.tx_party_models_document.php";s:4:"a5ce";s:60:"models/class.tx_party_models_electronicaddressidentifier.php";s:4:"afec";s:61:"models/class.tx_party_models_electronicaddressidentifiers.php";s:4:"12ab";s:65:"models/class.tx_party_models_electronicaddressidentifierusage.php";s:4:"7747";s:42:"models/class.tx_party_models_ethnicity.php";s:4:"cd00";s:38:"models/class.tx_party_models_event.php";s:4:"4d3e";s:42:"models/class.tx_party_models_favourite.php";s:4:"ffc8";s:38:"models/class.tx_party_models_habit.php";s:4:"f42a";s:38:"models/class.tx_party_models_hobby.php";s:4:"8487";s:43:"models/class.tx_party_models_identifier.php";s:4:"2c2e";s:38:"models/class.tx_party_models_image.php";s:4:"47cc";s:41:"models/class.tx_party_models_language.php";s:4:"9000";s:37:"models/class.tx_party_models_mark.php";s:4:"2258";s:43:"models/class.tx_party_models_membership.php";s:4:"1972";s:37:"models/class.tx_party_models_name.php";s:4:"77f1";s:38:"models/class.tx_party_models_names.php";s:4:"7509";s:44:"models/class.tx_party_models_nationality.php";s:4:"1c8e";s:39:"models/class.tx_party_models_object.php";s:4:"3bc6";s:43:"models/class.tx_party_models_occupation.php";s:4:"6b59";s:47:"models/class.tx_party_models_occupationrank.php";s:4:"f52c";s:47:"models/class.tx_party_models_occupationrole.php";s:4:"bf82";s:45:"models/class.tx_party_models_organisation.php";s:4:"0465";s:49:"models/class.tx_party_models_organisationname.php";s:4:"d5ce";s:51:"models/class.tx_party_models_organisationnature.php";s:4:"8762";s:40:"models/class.tx_party_models_parties.php";s:4:"d021";s:38:"models/class.tx_party_models_party.php";s:4:"1af4";s:39:"models/class.tx_party_models_person.php";s:4:"d77c";s:43:"models/class.tx_party_models_personname.php";s:4:"c54f";s:48:"models/class.tx_party_models_personnametitle.php";s:4:"c3f1";s:47:"models/class.tx_party_models_physicalstatus.php";s:4:"48a0";s:43:"models/class.tx_party_models_preference.php";s:4:"46c5";s:46:"models/class.tx_party_models_qualification.php";s:4:"1f3e";s:52:"models/class.tx_party_models_qualificationstatus.php";s:4:"1e92";s:45:"models/class.tx_party_models_relationship.php";s:4:"15be";s:49:"models/class.tx_party_models_relationshiptype.php";s:4:"3d9e";s:41:"models/class.tx_party_models_religion.php";s:4:"3880";s:40:"models/class.tx_party_models_revenue.php";s:4:"5c3a";s:44:"models/class.tx_party_models_stockmarket.php";s:4:"e24b";s:37:"models/class.tx_party_models_type.php";s:4:"73ae";s:38:"models/class.tx_party_models_usage.php";s:4:"7e92";s:40:"models/class.tx_party_models_vehicle.php";s:4:"4a56";s:52:"models/class.tx_party_models_vehiclemanufacturer.php";s:4:"50a7";s:37:"models/class.tx_party_models_visa.php";s:4:"b8a1";s:45:"tests/class.tx_party_model_basic_testcase.php";s:4:"e1a4";s:38:"tests/class.tx_party_tests_fixture.php";s:4:"5f41";s:24:"tests/fixture/0001_o.t3d";s:4:"5bca";s:24:"tests/fixture/0012_p.t3d";s:4:"fc05";s:24:"tests/fixture/0013_p.t3d";s:4:"a339";s:33:"tests/fixture/drop_all_tables.sql";s:4:"c02d";s:39:"tests/fixture/empty_all_data_tables.sql";s:4:"a5b7";s:34:"tests/fixture/empty_all_tables.sql";s:4:"a9be";s:23:"tests/fixture/habit.t3d";s:4:"fa94";s:22:"tests/fixture/mark.t3d";s:4:"134e";s:28:"tests/fixture/membership.t3d";s:4:"bb3d";s:28:"tests/fixture/occupation.t3d";s:4:"7335";s:30:"tests/fixture/relationship.t3d";s:4:"6d44";s:27:"tests/fixture/test_data.sql";s:4:"59eb";s:34:"tests/fixture/test_data_images.zip";s:4:"f885";s:25:"tests/fixture/vehicle.t3d";s:4:"d464";}',
);

?>