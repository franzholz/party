<?php

defined('TYPO3') || die('Access denied.');


$GLOBALS['TCA']['tx_party_relationships'] = array (
    'ctrl' => $GLOBALS['TCA']['tx_party_relationships']['ctrl'],
    'interface' => array (
        'showRecordFieldList' => 'primary_party,secondary_party,relationship_type,date_established,date_lapsed,reason_lapsed,remarks'
    ),
    'feInterface' => $GLOBALS['TCA']['tx_party_relationships']['feInterface'],
    'columns' => array (
        'primary_party' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.primary_party',
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
        'secondary_party' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.secondary_party',
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
        'relationship_type' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.relationship_type',
            'config' => Array (
                'type' => 'select',
                'foreign_table' => 'tx_party_relationship_types',
                'foreign_table_where' => 'AND tx_party_relationship_types.pid=###STORAGE_PID### ORDER BY tx_party_relationship_types.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'date_established' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.date_established',
            'config' => Array (
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'checkbox' => '0',
                'default'  => '0'
            )
        ),
        'date_lapsed' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.date_lapsed',
            'config' => Array (
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'checkbox' => '0',
                'default'  => '0'
            )
        ),
        'reason_lapsed' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.reason_lapsed',
            'config' => Array (
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
        'remarks' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.remarks',
            'config' => Array (
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => 'primary_party;;;;1-1-1, relationship_type, secondary_party, date_established;;;;1-1-1, date_lapsed, reason_lapsed, remarks;;;;1-1-1')
    ),
    'palettes' => array (
        '1' => array('showitem' => '')
    )
);
