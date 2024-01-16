<?php

defined('TYPO3') || die('Access denied.');


$GLOBALS['TCA']['tx_party_address_usages'] = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_address_usages',
        'label'     => 'uid',
        'label_userFunc' => 'tx_party_labels->getLabel',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY crdate',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_address_usages.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'party,address,address_usage,standard',
    ],
    'columns' => [
        'party' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_address_usages.party',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_party_parties',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'address' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_address_usages.address',
            // 'config' => Array (
            // 	'type' => 'inline',
            // 	'foreign_table' => 'tx_party_addresses',
            // 	'foreign_field' => 'uid',
            // 	'maxitems' => 99,
            // 	'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            // )
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_party_addresses',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'address_usage' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_address_usages.address_usage',
            'config' => [
                'type' => 'select',
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
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_address_usages.standard',
            'config' => [
                'type' => 'check',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'party;;;;1-1-1, address, address_usage, standard',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => '',
        ],
    ],
];
