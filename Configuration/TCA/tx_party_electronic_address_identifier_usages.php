<?php

defined('TYPO3') || die('Access denied.');

$TCA['tx_party_electronic_address_identifier_usages'] = array (
    'ctrl' => $TCA['tx_party_electronic_address_identifier_usages']['ctrl'],
    'interface' => array (
        'showRecordFieldList' => 'party,electronic_address_identifier,electronic_address_identifier_usage,standard'
    ),
    'feInterface' => $TCA['tx_party_electronic_address_identifier_usages']['feInterface'],
    'columns' => array (
        'party' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages.party',
            'config' => Array (
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_party_parties',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'electronic_address_identifier' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages.electronic_address_identifier',
            'config' => Array (
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_party_electronic_address_identifiers',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'electronic_address_identifier_usage' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages.electronic_address_identifier_usage',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                ),
                'foreign_table' => 'tx_party_usages',
                'foreign_table_where' => 'AND tx_party_usages.pid=###STORAGE_PID### ORDER BY tx_party_usages.title',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'standard' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages.standard',
            'config' => Array (
                'type' => 'check',
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => 'party;;;;1-1-1, electronic_address_identifier, electronic_address_identifier_usage, standard')
    ),
    'palettes' => array (
        '1' => array('showitem' => '')
    )
);


