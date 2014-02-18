<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "party".
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Party Management Framework',
	'description' => 'Management of party-related data, such as persons, organisations, names, addresses, etc. Based on the OASIS-Standard xPIL (Extensible Party Information Language).',
	'category' => 'be',
	'author' => 'David Bruehlmeier / Franz Holzinger',
	'author_email' => 'franz@ttproducts.de',
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
	'version' => '0.3.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.0.0-6.2.99',
			'php' => '5.2.5-5.4.99',
			'div2007' => '1.1.1-',
			'static_info_tables' => '2.0.1-',
			'simplemvc' => '0.9.0-0.9.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'wec_map' => ''
		),
	),
	'_md5_values_when_last_written' => 'a:132:{s:9:"ChangeLog";s:4:"a402";s:8:"TODO.txt";s:4:"0d58";s:16:"ext_autoload.php";s:4:"31bd";s:12:"ext_icon.gif";s:4:"f3e2";s:17:"ext_localconf.php";s:4:"7a3f";s:14:"ext_tables.php";s:4:"737a";s:14:"ext_tables.sql";s:4:"70f4";s:16:"locallang_db.xml";s:4:"2088";s:7:"tca.php";s:4:"1de5";s:26:"api/class.tx_party_api.php";s:4:"5337";s:26:"div/class.tx_party_div.php";s:4:"26e8";s:14:"doc/manual.sxw";s:4:"6c42";s:31:"hooks/class.tx_party_labels.php";s:4:"b362";s:41:"hooks/class.tx_party_staticinfotables.php";s:4:"5c0c";s:32:"icons/icon_tx_party_accounts.gif";s:4:"912b";s:38:"icons/icon_tx_party_address_usages.gif";s:4:"912b";s:33:"icons/icon_tx_party_addresses.gif";s:4:"912b";s:33:"icons/icon_tx_party_allergies.gif";s:4:"912b";s:35:"icons/icon_tx_party_birth_signs.gif";s:4:"912b";s:35:"icons/icon_tx_party_birth_stars.gif";s:4:"912b";s:45:"icons/icon_tx_party_contact_number_usages.gif";s:4:"912b";s:39:"icons/icon_tx_party_contact_numbers.gif";s:4:"912b";s:32:"icons/icon_tx_party_contacts.gif";s:4:"912b";s:46:"icons/icon_tx_party_countries_of_residence.gif";s:4:"912b";s:36:"icons/icon_tx_party_disabilities.gif";s:4:"912b";s:33:"icons/icon_tx_party_documents.gif";s:4:"912b";s:60:"icons/icon_tx_party_electronic_address_identifier_usages.gif";s:4:"912b";s:54:"icons/icon_tx_party_electronic_address_identifiers.gif";s:4:"912b";s:35:"icons/icon_tx_party_ethnicities.gif";s:4:"912b";s:30:"icons/icon_tx_party_events.gif";s:4:"912b";s:34:"icons/icon_tx_party_favourites.gif";s:4:"912b";s:30:"icons/icon_tx_party_habits.gif";s:4:"912b";s:31:"icons/icon_tx_party_hobbies.gif";s:4:"912b";s:35:"icons/icon_tx_party_identifiers.gif";s:4:"912b";s:30:"icons/icon_tx_party_images.gif";s:4:"912b";s:33:"icons/icon_tx_party_languages.gif";s:4:"912b";s:29:"icons/icon_tx_party_marks.gif";s:4:"912b";s:35:"icons/icon_tx_party_memberships.gif";s:4:"912b";s:29:"icons/icon_tx_party_names.gif";s:4:"912b";s:37:"icons/icon_tx_party_nationalities.gif";s:4:"912b";s:40:"icons/icon_tx_party_occupation_ranks.gif";s:4:"912b";s:40:"icons/icon_tx_party_occupation_roles.gif";s:4:"912b";s:35:"icons/icon_tx_party_occupations.gif";s:4:"912b";s:44:"icons/icon_tx_party_organisation_natures.gif";s:4:"912b";s:31:"icons/icon_tx_party_parties.gif";s:4:"30fb";s:44:"icons/icon_tx_party_parties_organisation.gif";s:4:"038a";s:38:"icons/icon_tx_party_parties_person.gif";s:4:"9792";s:42:"icons/icon_tx_party_person_name_titles.gif";s:4:"912b";s:39:"icons/icon_tx_party_physical_status.gif";s:4:"912b";s:35:"icons/icon_tx_party_preferences.gif";s:4:"912b";s:44:"icons/icon_tx_party_qualification_status.gif";s:4:"912b";s:38:"icons/icon_tx_party_qualifications.gif";s:4:"912b";s:42:"icons/icon_tx_party_relationship_types.gif";s:4:"912b";s:37:"icons/icon_tx_party_relationships.gif";s:4:"912b";s:33:"icons/icon_tx_party_religions.gif";s:4:"912b";s:32:"icons/icon_tx_party_revenues.gif";s:4:"912b";s:37:"icons/icon_tx_party_stock_markets.gif";s:4:"912b";s:29:"icons/icon_tx_party_types.gif";s:4:"912b";s:30:"icons/icon_tx_party_usages.gif";s:4:"912b";s:45:"icons/icon_tx_party_vehicle_manufacturers.gif";s:4:"912b";s:32:"icons/icon_tx_party_vehicles.gif";s:4:"912b";s:29:"icons/icon_tx_party_visas.gif";s:4:"912b";s:41:"icons/selicon_tx_party_parties_type_0.gif";s:4:"413a";s:41:"icons/selicon_tx_party_parties_type_1.gif";s:4:"bc7c";s:40:"models/class.tx_party_models_account.php";s:4:"9961";s:40:"models/class.tx_party_models_address.php";s:4:"5747";s:42:"models/class.tx_party_models_addresses.php";s:4:"4ac7";s:40:"models/class.tx_party_models_allergy.php";s:4:"9987";s:42:"models/class.tx_party_models_birthsign.php";s:4:"050c";s:40:"models/class.tx_party_models_contact.php";s:4:"342a";s:51:"models/class.tx_party_models_contactnumberusage.php";s:4:"a58a";s:51:"models/class.tx_party_models_countryofresidence.php";s:4:"151f";s:43:"models/class.tx_party_models_disability.php";s:4:"568b";s:41:"models/class.tx_party_models_document.php";s:4:"3ba6";s:60:"models/class.tx_party_models_electronicaddressidentifier.php";s:4:"1759";s:61:"models/class.tx_party_models_electronicaddressidentifiers.php";s:4:"d29c";s:65:"models/class.tx_party_models_electronicaddressidentifierusage.php";s:4:"730f";s:42:"models/class.tx_party_models_ethnicity.php";s:4:"5538";s:38:"models/class.tx_party_models_event.php";s:4:"8a4a";s:42:"models/class.tx_party_models_favourite.php";s:4:"12e3";s:38:"models/class.tx_party_models_habit.php";s:4:"3798";s:38:"models/class.tx_party_models_hobby.php";s:4:"08ab";s:43:"models/class.tx_party_models_identifier.php";s:4:"1206";s:38:"models/class.tx_party_models_image.php";s:4:"32ca";s:41:"models/class.tx_party_models_language.php";s:4:"a61c";s:37:"models/class.tx_party_models_mark.php";s:4:"3e8f";s:43:"models/class.tx_party_models_membership.php";s:4:"942a";s:37:"models/class.tx_party_models_name.php";s:4:"d2bf";s:38:"models/class.tx_party_models_names.php";s:4:"f374";s:44:"models/class.tx_party_models_nationality.php";s:4:"f294";s:39:"models/class.tx_party_models_object.php";s:4:"c4d8";s:43:"models/class.tx_party_models_occupation.php";s:4:"4617";s:47:"models/class.tx_party_models_occupationrank.php";s:4:"0b5a";s:47:"models/class.tx_party_models_occupationrole.php";s:4:"816c";s:45:"models/class.tx_party_models_organisation.php";s:4:"ae72";s:49:"models/class.tx_party_models_organisationname.php";s:4:"2c51";s:51:"models/class.tx_party_models_organisationnature.php";s:4:"01b1";s:40:"models/class.tx_party_models_parties.php";s:4:"9d56";s:38:"models/class.tx_party_models_party.php";s:4:"486e";s:39:"models/class.tx_party_models_person.php";s:4:"e14d";s:43:"models/class.tx_party_models_personname.php";s:4:"9870";s:48:"models/class.tx_party_models_personnametitle.php";s:4:"a0bc";s:47:"models/class.tx_party_models_physicalstatus.php";s:4:"f05e";s:43:"models/class.tx_party_models_preference.php";s:4:"bcc3";s:46:"models/class.tx_party_models_qualification.php";s:4:"7e5e";s:52:"models/class.tx_party_models_qualificationstatus.php";s:4:"7d64";s:45:"models/class.tx_party_models_relationship.php";s:4:"f46a";s:49:"models/class.tx_party_models_relationshiptype.php";s:4:"1bdd";s:41:"models/class.tx_party_models_religion.php";s:4:"aa64";s:40:"models/class.tx_party_models_revenue.php";s:4:"3506";s:44:"models/class.tx_party_models_stockmarket.php";s:4:"b097";s:37:"models/class.tx_party_models_type.php";s:4:"8fc4";s:38:"models/class.tx_party_models_usage.php";s:4:"5c2f";s:40:"models/class.tx_party_models_vehicle.php";s:4:"9640";s:52:"models/class.tx_party_models_vehiclemanufacturer.php";s:4:"405a";s:37:"models/class.tx_party_models_visa.php";s:4:"5521";s:45:"tests/class.tx_party_model_basic_testcase.php";s:4:"323e";s:38:"tests/class.tx_party_tests_fixture.php";s:4:"51d5";s:24:"tests/fixture/0001_o.t3d";s:4:"5bca";s:24:"tests/fixture/0012_p.t3d";s:4:"fc05";s:24:"tests/fixture/0013_p.t3d";s:4:"a339";s:33:"tests/fixture/drop_all_tables.sql";s:4:"c02d";s:39:"tests/fixture/empty_all_data_tables.sql";s:4:"a5b7";s:34:"tests/fixture/empty_all_tables.sql";s:4:"a9be";s:23:"tests/fixture/habit.t3d";s:4:"fa94";s:22:"tests/fixture/mark.t3d";s:4:"134e";s:28:"tests/fixture/membership.t3d";s:4:"bb3d";s:28:"tests/fixture/occupation.t3d";s:4:"7335";s:30:"tests/fixture/relationship.t3d";s:4:"6d44";s:27:"tests/fixture/test_data.sql";s:4:"59eb";s:34:"tests/fixture/test_data_images.zip";s:4:"f885";s:25:"tests/fixture/vehicle.t3d";s:4:"d464";}',
);

?>