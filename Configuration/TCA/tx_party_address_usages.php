<?php

defined('TYPO3') || die('Access denied.');

$result = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_address_usages',
        'label'     => 'uid',
        'label_userFunc' => 'tx_party_labels->getLabel',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY crdate',
        'delete' => 'deleted',
        'iconfile' => 'EXT:party/Resources/Public/Icons/icon_tx_party_address_usages.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'party,address,address_usage,standard',
    ],
    'columns' => [
        'party' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_address_usages.party',
            'config' => [
                'type' => 'group',
                'allowed' => 'tx_party_parties',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'address' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_address_usages.address',
            // 'config' => Array (
            // 	'type' => 'inline',
            // 	'foreign_table' => 'tx_party_addresses',
            // 	'foreign_field' => 'uid',
            // 	'maxitems' => 99,
            // 	'appearance' => $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['party']['inline_appearance']['default'],
            // )
            'config' => [
                'type' => 'group',
                'allowed' => 'tx_party_addresses',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'address_usage' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_address_usages.address_usage',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_party_usages',
                'foreign_table_where' => 'AND tx_party_usages.pid=###STORAGE_PID### ORDER BY tx_party_usages.title',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'standard' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_address_usages.standard',
            'config' => [
                'type' => 'check',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'party,--palette--,address,address_usage,standard',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => '',
        ],
    ],
];

return $result;
