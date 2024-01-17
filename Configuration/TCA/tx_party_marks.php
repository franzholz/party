<?php

defined('TYPO3') || die('Access denied.');

$result = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_marks',
        'label'     => 'mark',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY mark',
        'delete' => 'deleted',
        'iconfile' => 'EXT:party/Resources/Public/Icons/icon_tx_party_marks.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'party,mark,body_part,body_part_mark_location,remarks',
    ],
    'columns' => [
        'party' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_marks.party',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_party_parties',
                'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### ORDER BY tx_party_parties.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'mark' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_marks.mark',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'body_part' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_marks.body_part',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'body_part_mark_location' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_marks.body_part_mark_location',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'remarks' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_marks.remarks',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'party,--palette--,mark,body_part,--palette--,body_part_mark_location,remarks,--palette--',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => '',
        ],
    ],
];

return $result;
