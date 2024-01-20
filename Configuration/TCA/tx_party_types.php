<?php

defined('TYPO3') || die('Access denied.');

$result = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types',
        'label'     => 'title',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField'            => 'sys_language_uid',
        'transOrigPointerField'    => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'iconfile' => 'EXT:party/Resources/Public/Icons/icon_tx_party_types.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title,allowed_for_field,allowed_for_party_type',
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => ['type' => 'language'],
        ],
        'l18n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config'      => [
                'type'  => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
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
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.short_title',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '30',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.title',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'max' => '60',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'long_title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.long_title',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'max' => '90',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'allowed_for_field' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field.I.0', 'value' => 'tx_party_addresses-premise_type'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field.I.1', 'value' => 'tx_party_contacts-type'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field.I.2', 'value' => 'tx_party_countries_of_residence-residency_type'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field.I.3', 'value' => 'tx_party_documents-document_type'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field.I.4', 'value' => 'tx_party_accounts-account_type'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field.I.5', 'value' => 'tx_party_languages-type'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field.I.6', 'value' => 'tx_party_accounts-ownership_type'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field.I.7', 'value' => 'tx_party_nationalities-nationality_type'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field.I.8', 'value' => 'tx_party_occupations-employment_type'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field.i.9', 'value' => 'tx_party_organisations-organisation_type'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field.i.10', 'value' => 'tx_party_revenues-type'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field.i.11', 'value' => 'tx_party_vehicles-type'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field.I.12', 'value' => 'tx_party_electronic_address_identifiers-typE'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field.I.13', 'value' => 'tx_party_events-type'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field.I.14', 'value' => 'tx_party_identifiers-type'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field.I.15', 'value' => 'tx_party_memberships-type'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field.i.16', 'value' => 'tx_party_favourites-type'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_field.i.17', 'value' => 'tx_party_preferences-type']],
                'size' => 1,
                'maxitems' => 1,
                'default' => 0,
            ],
        ],
        'allowed_for_party_type' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_party_type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_party_type.I.0', 'value' => 'ALL'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_party_type.I.1', 'value' => 'PERSONS'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_types.allowed_for_party_type.I.2', 'value' => 'ORGANISATIONS']],
                'size' => 1,
                'maxitems' => 1,
                'default' => '',
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

return $result;
