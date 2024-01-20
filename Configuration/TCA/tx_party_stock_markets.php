<?php

defined('TYPO3') || die('Access denied.');

$result = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_stock_markets',
        'label'     => 'listed_code',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY listed_code',
        'delete' => 'deleted',
        'iconfile' => 'EXT:party/Resources/Public/Icons/icon_tx_party_stock_markets.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'party,market,listed_code,remarks',
    ],
    'columns' => [
        'party' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_stock_markets.party',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_party_parties',
                'foreign_table_where' => 'AND tx_party_parties.pid=###PAGE_TSCONFIG_ID### ORDER BY tx_party_parties.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'default' => 0,
            ],
        ],
        'market' => [
            'exclude' => 1,
            'displayCond' => 'EXT:static_info_tables_markets:LOADED:true',
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_stock_markets.market',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'static_markets',
                'foreign_table_where' => 'AND static_markets.pid=###SITEROOT### ORDER BY static_markets.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'default' => 0,
            ],
        ],
        'listed_code' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_stock_markets.listed_code',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '10',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'remarks' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_stock_markets.remarks',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
                'default' => '',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'party,--palette--,market,listed_code,remarks,--palette--',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => '',
        ],
    ],
];

return $result;
