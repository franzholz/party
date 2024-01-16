<?php

defined('TYPO3') || die('Access denied.');

$GLOBALS['TCA']['tx_party_electronic_address_identifier_usages'] = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages',
        'label'     => 'uid',
        'label_userFunc' => 'tx_party_labels->getLabel',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY crdate',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_electronic_address_identifier_usages.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'party,electronic_address_identifier,electronic_address_identifier_usage,standard',
    ],
    'columns' => [
        'party' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages.party',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_party_parties',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'electronic_address_identifier' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages.electronic_address_identifier',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_party_electronic_address_identifiers',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'electronic_address_identifier_usage' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages.electronic_address_identifier_usage',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', 0]],
                'foreign_table' => 'tx_party_usages',
                'foreign_table_where' => 'AND tx_party_usages.pid=###STORAGE_PID### ORDER BY tx_party_usages.title',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'standard' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages.standard',
            'config' => [
                'type' => 'check',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'party,--palette--;;,electronic_address_identifier,electronic_address_identifier_usage,standard',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => '',
        ],
    ],
];
