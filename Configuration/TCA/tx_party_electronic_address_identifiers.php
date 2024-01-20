<?php

defined('TYPO3') || die('Access denied.');

$result = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_electronic_address_identifiers',
        'label'     => 'electronic_address_identifier',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY electronic_address_identifier',
        'delete' => 'deleted',
        'iconfile' => 'EXT:party/Resources/Public/Icons/icon_tx_party_electronic_address_identifiers.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'parties,type,electronic_address_identifier,remarks',
    ],
    'columns' => [
        'parties' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_electronic_address_identifiers.parties',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_electronic_address_identifier_usages',
                'foreign_field' => 'electronic_address_identifier',
                'foreign_label' => 'party',
                'foreign_selector' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['party']['inline_appearance']['combined'],
                'default' => '',
            ],
        ],
        'type' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_electronic_address_identifiers.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_electronic_address_identifiers-type%' AND tx_party_types.pid=###PAGE_TSCONFIG_ID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'electronic_address_identifier' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_electronic_address_identifiers.electronic_address_identifier',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'remarks' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_electronic_address_identifiers.remarks',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'parties,--palette--,type,electronic_address_identifier,remarks',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => '',
        ],
    ],
];

return $result;
