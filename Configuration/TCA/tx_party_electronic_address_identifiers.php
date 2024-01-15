<?php

defined('TYPO3') || die('Access denied.');




$GLOBALS['TCA']['tx_party_electronic_address_identifiers'] = array (
    'ctrl' => array (
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifiers',
        'label'     => 'electronic_address_identifier',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY electronic_address_identifier',
        'delete' => 'deleted',
        'dynamicConfigFile' => PATH_BE_PARTY . 'tca.php',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_electronic_address_identifiers.gif',
    ),
    'interface' => array (
        'showRecordFieldList' => 'parties,type,electronic_address_identifier,remarks'
    ),
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

