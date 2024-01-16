<?php

defined('TYPO3') || die('Access denied.');

$result = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_accounts',
        'label'     => 'account_id',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY account_id',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_accounts.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'party,organisation,ownership_type,account_id,issuing_authority,account_type,remarks',
    ],
    'columns' => [
        'party' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_accounts.party',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_party_parties',
                'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### ORDER BY tx_party_parties.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'organisation' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_accounts.organisation',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_party_parties',
                'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### AND tx_party_parties.type=1 ORDER BY tx_party_parties.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'ownership_type' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_accounts.ownership_type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_ACCOUNTS-OWNERSHIP_TYPE%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'account_id' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_accounts.account_id',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '30',
                'eval' => 'trim',
            ],
        ],
        'issuing_authority' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_accounts.issuing_authority',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '30',
                'eval' => 'trim',
            ],
        ],
        'account_type' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_accounts.account_type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_ACCOUNTS-ACCOUNT_TYPE%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'remarks' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_accounts.remarks',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'party,--palette--,account_id,organisation,ownership_type,issuing_authority,--palette--,account_type,remarks,--palette--',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => '',
        ],
    ],
];

return $result;
