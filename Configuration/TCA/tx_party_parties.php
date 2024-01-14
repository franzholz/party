<?php

defined('TYPO3') || die('Access denied.');



$TCA['tx_party_parties'] = array (
    'ctrl' => $TCA['tx_party_parties']['ctrl'],
    'interface' => array (
        'showRecordFieldList' => 'type,marital_status,religion,birth_place,birth_date_time,birth_date_time_precision,birth_sign,birth_star,weight,height,breast,waist,hip,hair_colour,eye_colour,skin_colour,blood_group,physical_status,ethnicity,gender,hobbies,habits,organisation_type,organisation_nature,company_registration_id,company_registration_date,number_of_employees,remarks,names,addresses,accounts,contact_numbers,countries_of_residence,documents,electronic_address_identifiers,images,nationalities,relationships,revenues,vehicles,contacts,visas,disabilities,languages,marks,occupations,qualifications,stock_markets,events,identifiers,memberships,allergies,favourites,preferences'
    ),
    'feInterface' => $TCA['tx_party_parties']['feInterface'],
    'columns' => array (
        'type' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.type',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.type.I.0', '0', PATH_BE_PARTY_REL . 'icons/selicon_tx_party_parties_type_0.gif'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.type.I.1', '1', PATH_BE_PARTY_REL . 'icons/selicon_tx_party_parties_type_1.gif'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'marital_status' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', ''),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.0', 'SINGLE'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.1', 'ENGAGED'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.2', 'MARRIED'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.3', 'SEPARATED'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.4', 'DIVORCED'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.5', 'WIDOWED'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'religion' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.religion',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                ),
                'foreign_table' => 'tx_party_religions',
                'foreign_table_where' => 'AND tx_party_religions.pid=###STORAGE_PID### ORDER BY tx_party_religions.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'birth_place' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_place',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'birth_date_time' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_date_time',
            'config' => Array (
                'type'     => 'input',
                'size'     => '12',
                'max'      => '20',
                'eval'     => 'datetime',
                'checkbox' => '0',
                'default'  => '0'
            )
        ),
        'birth_date_time_precision' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_date_time_precision',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'birth_sign' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_sign',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                ),
                'foreign_table' => 'tx_party_birth_signs',
                'foreign_table_where' => 'AND tx_party_birth_signs.pid=###SITEROOT### ORDER BY tx_party_birth_signs.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'birth_star' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_star',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'weight' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.weight',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'checkbox' => '0',
                'eval' => 'int,nospace',
            )
        ),
        'height' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.height',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'checkbox' => '0',
                'eval' => 'int,nospace',
            )
        ),
        'breast' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.breast',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'checkbox' => '0',
                'eval' => 'int,nospace',
            )
        ),
        'waist' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.waist',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'checkbox' => '0',
                'eval' => 'int,nospace',
            )
        ),
        'hip' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hip',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'checkbox' => '0',
                'eval' => 'int,nospace',
            )
        ),
        'hair_colour' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', ''),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.0', 'BROWN'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.1', 'BLACK'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.2', 'BLONDE'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.3', 'RED'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.4', 'GREY'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.5', 'WHITE'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.6', 'GINGER'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.7', 'PURPLE'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.8', 'BLUE'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.9', 'GREEN'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.10', 'PINK'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'eye_colour' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', ''),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.0', 'AMBER'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.1', 'BLUE'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.2', 'BROWN'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.3', 'GRAY'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.4', 'GREEN'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.5', 'HAZEL'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'skin_colour' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.skin_colour',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'blood_group' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', ''),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.0', 'O_NEGATIVE'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.1', 'O_POSITIVE'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.2', 'A_NEGATIVE'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.3', 'A_POSITIVE'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.4', 'B_NEGATIVE'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.5', 'B_POSITIVE'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.6', 'AB_NEGATIVE'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.7', 'AB_POSITIVE'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'physical_status' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.physical_status',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                ),
                'foreign_table' => 'tx_party_physical_status',
                'foreign_table_where' => 'AND tx_party_physical_status.pid=###STORAGE_PID### ORDER BY tx_party_physical_status.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'ethnicity' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.ethnicity',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                ),
                'foreign_table' => 'tx_party_ethnicities',
                'foreign_table_where' => 'AND tx_party_ethnicities.pid=###STORAGE_PID### ORDER BY tx_party_ethnicities.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'gender' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.gender',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.gender.I.0', '0'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.gender.I.1', '1'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.gender.I.2', '2'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.gender.I.3', '9'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'hobbies' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hobbies',
            'config' => Array (
                'type' => 'select',
                'foreign_table' => 'tx_party_hobbies',
                'foreign_table_where' => 'AND tx_party_hobbies.pid=###STORAGE_PID### ORDER BY tx_party_hobbies.uid',
                'size' => 5,
                'autoSizeMax' => 20,
                'minitems' => 0,
                'maxitems' => 99,
                'MM' => 'tx_party_parties_hobbies_mm',
            )
        ),
        'habits' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.habits',
            'config' => Array (
                'type' => 'select',
                'foreign_table' => 'tx_party_habits',
                'foreign_table_where' => 'AND tx_party_habits.pid=###STORAGE_PID### ORDER BY tx_party_habits.uid',
                'size' => 5,
                'autoSizeMax' => 20,
                'minitems' => 0,
                'maxitems' => 99,
                'MM' => 'tx_party_parties_habits_mm',
            )
        ),
        'organisation_type' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.organisation_type',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                ),
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_ORGANISATIONS-ORGANISATION_TYPE%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'organisation_nature' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.organisation_nature',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                ),
                'foreign_table' => 'tx_party_organisation_natures',
                'foreign_table_where' => 'AND tx_party_organisation_natures.pid=###STORAGE_PID### ORDER BY tx_party_organisation_natures.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'company_registration_id' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.company_registration_id',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'company_registration_date' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.company_registration_date',
            'config' => Array (
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'checkbox' => '0',
                'default'  => '0'
            )
        ),
        'number_of_employees' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.number_of_employees',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'checkbox' => '0',
                'eval' => 'int,nospace',
            )
        ),
        'remarks' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.remarks',
            'config' => Array (
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
        'names' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.names',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_names',
                'foreign_field' => 'party',
                'foreign_type' => array(
                    '0' => '0',		// Party type = 0 (Person) => Name type = 0 (Person name)
                '1' => '1',		// Party type = 1 (Organisation) => Name type = 1 (Organisation name)
                ),
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'addresses' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.addresses',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_address_usages',
                'foreign_field' => 'party',
                'foreign_label' => 'address',
                'foreign_selector' => 'address',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['combined'],
            )
        ),
        'accounts' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.accounts',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_accounts',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'contact_numbers' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.contact_numbers',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_contact_number_usages',
                'foreign_field' => 'party',
                'foreign_label' => 'contact_number',
                'foreign_selector' => 'contact_number',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['combined'],
            )
        ),
        'countries_of_residence' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.countries_of_residence',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_countries_of_residence',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'documents' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.documents',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_documents',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'electronic_address_identifiers' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.electronic_address_identifiers',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_electronic_address_identifier_usages',
                'foreign_field' => 'party',
                'foreign_label' => 'electronic_address_identifier',
                'foreign_selector' => 'electronic_address_identifier',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['combined'],
            )
        ),
        'images' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.images',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_images',
                'foreign_field' => 'party',
                'foreign_type' => 0,	// Any party type => Image type = 0 (Party)
            'maxitems' => 99,
            'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'nationalities' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.nationalities',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_nationalities',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'relationships' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.relationships',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_relationships',
                'foreign_field' => 'primary_party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'revenues' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.revenues',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_revenues',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'vehicles' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.vehicles',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_vehicles',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'contacts' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.contacts',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_contacts',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'visas' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.visas',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_visas',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'disabilities' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.disabilities',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_disabilities',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'languages' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.languages',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_languages',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'marks' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.marks',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_marks',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'occupations' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.occupations',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_occupations',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'qualifications' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.qualifications',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_qualifications',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'stock_markets' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.stock_markets',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_stock_markets',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'events' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.events',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_events',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'identifiers' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.identifiers',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_identifiers',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'memberships' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.memberships',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_memberships',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'allergies' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.allergies',
            'config' => Array (
                'type' => 'select',
                'foreign_table' => 'tx_party_allergies',
                'foreign_table_where' => 'AND tx_party_allergies.pid=###STORAGE_PID### ORDER BY tx_party_allergies.uid',
                'size' => 5,
                'autoSizeMax' => 20,
                'minitems' => 0,
                'maxitems' => 99,
                'MM' => 'tx_party_parties_allergies_mm',
            )
        ),
        'favourites' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.favourites',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_favourites',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'preferences' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.preferences',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_preferences',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => '
        type,
        
        names;;;;1-1-1,
        addresses,
        contact_numbers,
        electronic_address_identifiers,
        
        images;;;;1-1-1,
        
        relationships;;;;1-1-1,
        
        identifiers;;;;1-1-1,
        
        remarks;;;;1-1-1,
        
        --div--;LLL:EXT:party/locallang_db.xml:tx_party_parties.person,
        
        marital_status,
        religion,
        
        hobbies;;;;1-1-1,
        habits,
        
        favourites;;;;1-1-1,
        preferences,
        
        languages;;;;1-1-1,
        qualifications,
        
        occupations;;;;1-1-1,
        
        --div--;LLL:EXT:party/locallang_db.xml:tx_party_parties.events,
        
        birth_date_time;;1,
        birth_place;;2,
        
        contacts;;;;1-1-1,
        events,
        
        --div--;LLL:EXT:party/locallang_db.xml:tx_party_parties.physical,
        
        gender,
        
        weight;;;;1-1-1,
        height,
        breast,
        waist,
        hip,
        
        hair_colour;;;;1-1-1,
        eye_colour,
        skin_colour,
        
        blood_group;;;;1-1-1,
        physical_status,
        ethnicity,
        
        allergies;;;;1-1-1,
        marks,
        disabilities,
        
        --div--;LLL:EXT:party/locallang_db.xml:tx_party_parties.ownership,
        
        nationalities,
        countries_of_residence,
        
        visas;;;;1-1-1,
        
        accounts;;;;1-1-1,
        memberships,
        
        documents;;;;1-1-1,
        
        revenues;;;;1-1-1,
        
        vehicles;;;;1-1-1
        
         => array('showitem' => '
         type,
         
         names;;;;1-1-1,
         addresses,
         contact_numbers,
         electronic_address_identifiers,
         
         images;;;;1-1-1,
         
         relationships;;;;1-1-1,
         
         identifiers;;;;1-1-1,
         
         remarks;;;;1-1-1,
         
         --div--;LLL:EXT:party/locallang_db.xml:tx_party_parties.organisation,
         
         organisation_type,
         organisation_nature;;;;1-1-1,
         
         company_registration_id;;;;1-1-1,
         
         number_of_employees;;;;1-1-1,
         
         stock_markets;;;;1-1-1,
         
         --div--;LLL:EXT:party/locallang_db.xml:tx_party_parties.events,
         
         company_registration_date,
         
         contacts;;;;1-1-1,
         events,
         
         --div--;LLL:EXT:party/locallang_db.xml:tx_party_parties.ownership,
         
         nationalities,
         countries_of_residence,
         
         accounts;;;;1-1-1,
         memberships,
         
         documents;;;;1-1-1,
         
         revenues;;;;1-1-1,
         
         vehicles;;;;1-1-1
         
        ),
        'palettes' => array (
            '1' => array('showitem' => 'birth_date_time_precision'),
                             '2' => array('showitem' => 'birth_sign, birth_star'),
        ),
    )
);
