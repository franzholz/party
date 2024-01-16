<?php

defined('TYPO3') || die('Access denied.');



$GLOBALS['TCA']['tx_party_parties'] = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_parties',
        'label'     => 'uid',
        'label_userFunc' => 'tx_party_labels->getLabel',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'type',
        'default_sortby' => 'ORDER BY crdate',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_parties.gif',
        'typeicon_column' => 'type',
        'typeicons' => [
            '0' => PATH_BE_PARTY_REL . 'icons/icon_tx_party_parties_person.gif',
            '1' => PATH_BE_PARTY_REL . 'icons/icon_tx_party_parties_organisation.gif',
        ],
    ],
    'interface' => [
        'showRecordFieldList' => 'type,marital_status,religion,birth_place,birth_date_time,birth_date_time_precision,birth_sign,birth_star,weight,height,breast,waist,hip,hair_colour,eye_colour,skin_colour,blood_group,physical_status,ethnicity,gender,hobbies,habits,organisation_type,organisation_nature,company_registration_id,company_registration_date,number_of_employees,remarks,names,addresses,accounts,contact_numbers,countries_of_residence,documents,electronic_address_identifiers,images,nationalities,relationships,revenues,vehicles,contacts,visas,disabilities,languages,marks,occupations,qualifications,stock_markets,events,identifiers,memberships,allergies,favourites,preferences',
    ],
    'columns' => [
        'type' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.type.I.0', 'value' => '0', 'icon' => PATH_BE_PARTY_REL . 'icons/selicon_tx_party_parties_type_0.gif'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.type.I.1', 'value' => '1', 'icon' => PATH_BE_PARTY_REL . 'icons/selicon_tx_party_parties_type_1.gif']],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'marital_status' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => ''], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.0', 'value' => 'SINGLE'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.1', 'value' => 'ENGAGED'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.2', 'value' => 'MARRIED'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.3', 'value' => 'SEPARATED'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.4', 'value' => 'DIVORCED'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.5', 'value' => 'WIDOWED']],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'religion' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.religion',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_party_religions',
                'foreign_table_where' => 'AND tx_party_religions.pid=###STORAGE_PID### ORDER BY tx_party_religions.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'birth_place' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_place',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'birth_date_time' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_date_time',
            'config' => [
                'type'     => 'input',
                'size'     => '12',
                'max'      => '20',
                'eval'     => 'datetime',
                'checkbox' => '0',
                'default'  => '0',
            ],
        ],
        'birth_date_time_precision' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_date_time_precision',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'birth_sign' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_sign',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_party_birth_signs',
                'foreign_table_where' => 'AND tx_party_birth_signs.pid=###SITEROOT### ORDER BY tx_party_birth_signs.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'birth_star' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_star',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'weight' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.weight',
            'config' => [
                'type' => 'number',
                'size' => '30',
                'max' => '90',
                'checkbox' => '0',
                'eval' => 'nospace',
            ],
        ],
        'height' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.height',
            'config' => [
                'type' => 'number',
                'size' => '30',
                'max' => '90',
                'checkbox' => '0',
                'eval' => 'nospace',
            ],
        ],
        'breast' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.breast',
            'config' => [
                'type' => 'number',
                'size' => '30',
                'max' => '90',
                'checkbox' => '0',
                'eval' => 'nospace',
            ],
        ],
        'waist' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.waist',
            'config' => [
                'type' => 'number',
                'size' => '30',
                'max' => '90',
                'checkbox' => '0',
                'eval' => 'nospace',
            ],
        ],
        'hip' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hip',
            'config' => [
                'type' => 'number',
                'size' => '30',
                'max' => '90',
                'checkbox' => '0',
                'eval' => 'nospace',
            ],
        ],
        'hair_colour' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => ''], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.0', 'value' => 'BROWN'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.1', 'value' => 'BLACK'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.2', 'value' => 'BLONDE'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.3', 'value' => 'RED'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.4', 'value' => 'GREY'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.5', 'value' => 'WHITE'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.6', 'value' => 'GINGER'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.7', 'value' => 'PURPLE'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.8', 'value' => 'BLUE'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.9', 'value' => 'GREEN'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.10', 'value' => 'PINK']],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'eye_colour' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => ''], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.0', 'value' => 'AMBER'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.1', 'value' => 'BLUE'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.2', 'value' => 'BROWN'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.3', 'value' => 'GRAY'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.4', 'value' => 'GREEN'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.5', 'value' => 'HAZEL']],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'skin_colour' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.skin_colour',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'blood_group' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => ''], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.0', 'value' => 'O_NEGATIVE'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.1', 'value' => 'O_POSITIVE'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.2', 'value' => 'A_NEGATIVE'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.3', 'value' => 'A_POSITIVE'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.4', 'value' => 'B_NEGATIVE'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.5', 'value' => 'B_POSITIVE'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.6', 'value' => 'AB_NEGATIVE'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.7', 'value' => 'AB_POSITIVE']],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'physical_status' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.physical_status',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_party_physical_status',
                'foreign_table_where' => 'AND tx_party_physical_status.pid=###STORAGE_PID### ORDER BY tx_party_physical_status.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'ethnicity' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.ethnicity',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_party_ethnicities',
                'foreign_table_where' => 'AND tx_party_ethnicities.pid=###STORAGE_PID### ORDER BY tx_party_ethnicities.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'gender' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.gender',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.gender.I.0', 'value' => '0'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.gender.I.1', 'value' => '1'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.gender.I.2', 'value' => '2'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.gender.I.3', 'value' => '9']],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'hobbies' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hobbies',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_party_hobbies',
                'foreign_table_where' => 'AND tx_party_hobbies.pid=###STORAGE_PID### ORDER BY tx_party_hobbies.uid',
                'size' => 5,
                'autoSizeMax' => 20,
                'minitems' => 0,
                'maxitems' => 99,
                'MM' => 'tx_party_parties_hobbies_mm',
            ],
        ],
        'habits' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.habits',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_party_habits',
                'foreign_table_where' => 'AND tx_party_habits.pid=###STORAGE_PID### ORDER BY tx_party_habits.uid',
                'size' => 5,
                'autoSizeMax' => 20,
                'minitems' => 0,
                'maxitems' => 99,
                'MM' => 'tx_party_parties_habits_mm',
            ],
        ],
        'organisation_type' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.organisation_type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_ORGANISATIONS-ORGANISATION_TYPE%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'organisation_nature' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.organisation_nature',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_party_organisation_natures',
                'foreign_table_where' => 'AND tx_party_organisation_natures.pid=###STORAGE_PID### ORDER BY tx_party_organisation_natures.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'company_registration_id' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.company_registration_id',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'company_registration_date' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.company_registration_date',
            'config' => [
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'checkbox' => '0',
                'default'  => '0',
            ],
        ],
        'number_of_employees' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.number_of_employees',
            'config' => [
                'type' => 'number',
                'size' => '30',
                'max' => '90',
                'checkbox' => '0',
                'eval' => 'nospace',
            ],
        ],
        'remarks' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.remarks',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
        'names' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.names',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_names',
                'foreign_field' => 'party',
                'foreign_type' => [
                    '0' => '0',
                    // Party type = 0 (Person) => Name type = 0 (Person name)
                    '1' => '1',
                ],
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'addresses' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.addresses',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_address_usages',
                'foreign_field' => 'party',
                'foreign_label' => 'address',
                'foreign_selector' => 'address',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['combined'],
            ],
        ],
        'accounts' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.accounts',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_accounts',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'contact_numbers' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.contact_numbers',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_contact_number_usages',
                'foreign_field' => 'party',
                'foreign_label' => 'contact_number',
                'foreign_selector' => 'contact_number',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['combined'],
            ],
        ],
        'countries_of_residence' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.countries_of_residence',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_countries_of_residence',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'documents' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.documents',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_documents',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'electronic_address_identifiers' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.electronic_address_identifiers',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_electronic_address_identifier_usages',
                'foreign_field' => 'party',
                'foreign_label' => 'electronic_address_identifier',
                'foreign_selector' => 'electronic_address_identifier',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['combined'],
            ],
        ],
        'images' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.images',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_images',
                'foreign_field' => 'party',
                'foreign_type' => 0,
                // Any party type => Image type = 0 (Party)
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'nationalities' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.nationalities',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_nationalities',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'relationships' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.relationships',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_relationships',
                'foreign_field' => 'primary_party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'revenues' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.revenues',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_revenues',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'vehicles' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.vehicles',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_vehicles',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'contacts' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.contacts',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_contacts',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'visas' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.visas',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_visas',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'disabilities' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.disabilities',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_disabilities',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'languages' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.languages',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_languages',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'marks' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.marks',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_marks',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'occupations' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.occupations',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_occupations',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'qualifications' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.qualifications',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_qualifications',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'stock_markets' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.stock_markets',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_stock_markets',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'events' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.events',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_events',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'identifiers' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.identifiers',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_identifiers',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'memberships' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.memberships',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_memberships',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'allergies' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.allergies',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_party_allergies',
                'foreign_table_where' => 'AND tx_party_allergies.pid=###STORAGE_PID### ORDER BY tx_party_allergies.uid',
                'size' => 5,
                'autoSizeMax' => 20,
                'minitems' => 0,
                'maxitems' => 99,
                'MM' => 'tx_party_parties_allergies_mm',
            ],
        ],
        'favourites' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.favourites',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_favourites',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'preferences' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.preferences',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_preferences',
                'foreign_field' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'type,names,--palette--,addresses,contact_numbers,electronic_address_identifiers,images,--palette--,relationships,--palette--,identifiers,--palette--,remarks,--palette--,--div--;LLL:EXT:party/locallang_db.xml:tx_party_parties.person,marital_status,religion,hobbies,--palette--,habits,favourites,--palette--,preferences,languages,--palette--,qualifications,occupations,--palette--,--div--;LLL:EXT:party/locallang_db.xml:tx_party_parties.events,birth_date_time,--palette--;;1,birth_place,--palette--;;2,contacts,--palette--,events,--div--;LLL:EXT:party/locallang_db.xml:tx_party_parties.physical,gender,weight,--palette--,height,breast,waist,hip,hair_colour,--palette--,eye_colour,skin_colour,blood_group,--palette--,physical_status,ethnicity,allergies,--palette--,marks,disabilities,--div--;LLL:EXT:party/locallang_db.xml:tx_party_parties.ownership,nationalities,countries_of_residence,visas,--palette--,accounts,--palette--,memberships,documents,--palette--,revenues,--palette--,vehicles,--palette--',
        ],
        'palettes' => [
            '1' => [
                'showitem' => 'birth_date_time_precision',
            ],
            '2' => [
                'showitem' => 'birth_sign, birth_star',
            ],
        ],
    ],
];
