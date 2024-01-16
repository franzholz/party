<?php

defined('TYPO3') || die('Access denied.');


$GLOBALS['TCA']['tx_party_relationships'] = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships',
        'label'     => 'uid',
        'label_userFunc' => 'tx_party_labels->getLabel',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY crdate',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_relationships.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'primary_party,secondary_party,relationship_type,date_established,date_lapsed,reason_lapsed,remarks',
    ],
    'columns' => [
        'primary_party' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.primary_party',
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
        'secondary_party' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.secondary_party',
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
        'relationship_type' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.relationship_type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_party_relationship_types',
                'foreign_table_where' => 'AND tx_party_relationship_types.pid=###STORAGE_PID### ORDER BY tx_party_relationship_types.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'date_established' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.date_established',
            'config' => [
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'checkbox' => '0',
                'default'  => '0',
            ],
        ],
        'date_lapsed' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.date_lapsed',
            'config' => [
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'checkbox' => '0',
                'default'  => '0',
            ],
        ],
        'reason_lapsed' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.reason_lapsed',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
        'remarks' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.remarks',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'primary_party,--palette--,relationship_type,secondary_party,date_established,--palette--,date_lapsed,reason_lapsed,remarks,--palette--',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => '',
        ],
    ],
];
