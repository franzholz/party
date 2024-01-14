<?php

defined('TYPO3') || die('Access denied.');




$TCA['tx_party_electronic_address_identifiers'] = array (
    'ctrl' => $TCA['tx_party_electronic_address_identifiers']['ctrl'],
    'interface' => array (
        'showRecordFieldList' => 'parties,type,electronic_address_identifier,remarks'
    ),
    'feInterface' => $TCA['tx_party_electronic_address_identifiers']['feInterface'],
    'columns' => array (
        'parties' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifiers.parties',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_electronic_address_identifier_usages',
                'foreign_field' => 'electronic_address_identifier',
                'foreign_label' => 'party',
                'foreign_selector' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['combined'],
            )
        ),
        'type' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifiers.type',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                ),
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_electronic_address_identifiers-type%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'electronic_address_identifier' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifiers.electronic_address_identifier',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'remarks' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifiers.remarks',
            'config' => Array (
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => 'parties;;;;1-1-1, type, electronic_address_identifier, remarks')
    ),
    'palettes' => array (
        '1' => array('showitem' => '')
    )
);

