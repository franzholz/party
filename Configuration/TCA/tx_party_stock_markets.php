<?php

defined('TYPO3') || die('Access denied.');





$GLOBALS['TCA']['tx_party_stock_markets'] = array(
    'ctrl' => array(
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_stock_markets',
        'label'     => 'listed_code',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY listed_code',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_stock_markets.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'party,market,listed_code,remarks'
    ),
    'columns' => array(
        'party' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_stock_markets.party',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_party_parties',
                'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### ORDER BY tx_party_parties.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'market' => array(
            'exclude' => 1,
            'displayCond' => 'EXT:static_info_tables_markets:LOADED:true',
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_stock_markets.market',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'static_markets',
                'foreign_table_where' => 'AND static_markets.pid=###SITEROOT### ORDER BY static_markets.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'listed_code' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_stock_markets.listed_code',
            'config' => array(
                'type' => 'input',
                'size' => '10',
                'max' => '10',
                'eval' => 'trim',
            )
        ),
        'remarks' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_stock_markets.remarks',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
    ),
    'types' => array(
        '0' => array('showitem' => 'party;;;;1-1-1, market, listed_code, remarks;;;;1-1-1')
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    )
);
