<?php

defined('TYPO3') || die('Access denied.');




$GLOBALS['TCA']['tx_party_types'] = [
    'ctrl' => [
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
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_types.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title,allowed_for_field,allowed_for_party_type',
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type'                => 'select',
                'renderType' => 'selectSingle',
                'foreign_table'       => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => [['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages', -1], ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value', 0]],
            ],
        ],
        'l18n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config'      => [
                'type'  => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', 0]],
                'foreign_table'       => 'tx_party_types',
                'foreign_table_where' => 'AND tx_party_types.pid=###CURRENT_PID### AND tx_party_types.sys_language_uid IN (-1,0)',
            ],
        ],
        'l18n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'short_title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_types.short_title',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '30',
                'eval' => 'trim',
            ],
        ],
        'title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_types.title',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'max' => '60',
                'eval' => 'trim',
            ],
        ],
        'long_title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_types.long_title',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'allowed_for_field' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.0', 'tx_party_addresses-premise_type'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.1', 'tx_party_contacts-type'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.2', 'tx_party_countries_of_residence-residency_type'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.3', 'tx_party_documents-document_type'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.4', 'tx_party_accounts-account_type'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.5', 'tx_party_languages-type'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.6', 'tx_party_accounts-ownership_type'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.7', 'tx_party_nationalities-nationality_type'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.8', 'tx_party_occupations-employment_type'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.i.9', 'tx_party_organisations-organisation_type'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.i.10', 'tx_party_revenues-type'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.i.11', 'tx_party_vehicles-type'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.12', 'tx_party_electronic_address_identifiers-typE'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.13', 'tx_party_events-type'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.14', 'tx_party_identifiers-type'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.15', 'tx_party_memberships-type'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.i.16', 'tx_party_favourites-type'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.i.17', 'tx_party_preferences-type']],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'allowed_for_party_type' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_party_type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_party_type.I.0', 'ALL'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_party_type.I.1', 'PERSONS'], ['LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_party_type.I.2', 'ORGANISATIONS']],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'sys_language_uid,--palette--,l18n_parent,l18n_diffsource,short_title,title,--palette--,long_title,--palette--,allowed_for_field,allowed_for_party_type',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => '',
        ],
    ],
];
