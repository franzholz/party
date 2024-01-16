<?php

defined('TYPO3') || die('Access denied.');




$GLOBALS['TCA']['tx_party_contact_number_usages'] = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_number_usages',
        'label'     => 'uid',
        'label_userFunc' => 'tx_party_labels->getLabel',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY crdate',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_contact_number_usages.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'party,contact_number,contact_number_usage,standard',
    ],
    'columns' => [
        'party' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_number_usages.party',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_party_parties',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'contact_number' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_number_usages.contact_number',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_party_contact_numbers',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'contact_number_usage' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_number_usages.contact_number_usage',
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
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_number_usages.standard',
            'config' => [
                'type' => 'check',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'party;;;;1-1-1, contact_number, contact_number_usage, standard',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => '',
        ],
    ],
];