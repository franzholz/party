<?php

defined('TYPO3') || die('Access denied.');



$GLOBALS['TCA']['tx_party_marks'] = array (
    'ctrl' => $GLOBALS['TCA']['tx_party_marks']['ctrl'],
    'interface' => array (
        'showRecordFieldList' => 'party,mark,body_part,body_part_mark_location,remarks'
    ),
    'feInterface' => $GLOBALS['TCA']['tx_party_marks']['feInterface'],
    'columns' => array (
        'party' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_marks.party',
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
        'mark' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_marks.mark',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'body_part' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_marks.body_part',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'body_part_mark_location' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_marks.body_part_mark_location',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'remarks' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_marks.remarks',
            'config' => Array (
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => 'party;;;;1-1-1, mark, body_part;;;;1-1-1, body_part_mark_location, remarks;;;;1-1-1')
    ),
    'palettes' => array (
        '1' => array('showitem' => '')
    )
);
