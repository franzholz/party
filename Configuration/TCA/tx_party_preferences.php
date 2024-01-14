<?php

defined('TYPO3') || die('Access denied.');




$GLOBALS['TCA']['tx_party_preferences'] = array (
    'ctrl' => $GLOBALS['TCA']['tx_party_preferences']['ctrl'],
    'interface' => array (
        'showRecordFieldList' => 'party,type,preference,remarks'
    ),
    'feInterface' => $GLOBALS['TCA']['tx_party_preferences']['feInterface'],
    'columns' => array (
        'party' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_preferences.party',
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
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_preferences.type',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                ),
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_preferences-type%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'preference' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_preferences.preference',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'remarks' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_preferences.remarks',
            'config' => Array (
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => 'party;;;;1-1-1, type, preference, remarks;;;;1-1-1')
    ),
    'palettes' => array (
        '1' => array('showitem' => '')
    )
);
