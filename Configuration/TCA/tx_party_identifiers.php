<?php

defined('TYPO3') || die('Access denied.');

$TCA['tx_party_identifiers'] = array (
    'ctrl' => $TCA['tx_party_identifiers']['ctrl'],
    'interface' => array (
        'showRecordFieldList' => 'party,type,identifier,issue_date,expiry_date,remarks'
    ),
    'feInterface' => $TCA['tx_party_identifiers']['feInterface'],
    'columns' => array (
        'party' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_identifiers.party',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                ),
                'foreign_table' => 'tx_party_parties',
                'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### ORDER BY tx_party_parties.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'type' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_identifiers.type',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                ),
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_identifiers-type%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'identifier' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_identifiers.identifier',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'issue_date' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_identifiers.issue_date',
            'config' => Array (
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'checkbox' => '0',
                'default'  => '0'
            )
        ),
        'expiry_date' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_identifiers.expiry_date',
            'config' => Array (
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'checkbox' => '0',
                'default'  => '0'
            )
        ),
        'remarks' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_identifiers.remarks',
            'config' => Array (
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => 'party;;;;1-1-1, type, identifier, issue_date;;;;1-1-1, expiry_date, remarks;;;;1-1-1')
    ),
    'palettes' => array (
        '1' => array('showitem' => '')
    )
);
