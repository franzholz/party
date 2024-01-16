<?php

defined('TYPO3') || die('Access denied.');



$GLOBALS['TCA']['tx_party_occupations'] = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_occupations',
        'label'     => 'role',
        'label_userFunc' => 'tx_party_labels->getLabel',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY role',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_occupations.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'party,role,rank,employment_type,position_title,cost_centre,reports_to,remarks',
    ],
    'columns' => [
        'party' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupations.party',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', 0]],
                'foreign_table' => 'tx_party_parties',
                'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### ORDER BY tx_party_parties.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'role' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupations.role',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', 0]],
                'foreign_table' => 'tx_party_occupation_roles',
                'foreign_table_where' => 'AND tx_party_occupation_roles.pid=###STORAGE_PID### ORDER BY tx_party_occupation_roles.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'rank' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupations.rank',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', 0]],
                'foreign_table' => 'tx_party_occupation_ranks',
                'foreign_table_where' => 'AND tx_party_occupation_ranks.pid=###STORAGE_PID### ORDER BY tx_party_occupation_ranks.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'employment_type' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupations.employment_type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', 0]],
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_OCCUPATIONS-EMPLOYMENT_TYPE%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'position_title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupations.position_title',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'cost_centre' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupations.cost_centre',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'reports_to' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupations.reports_to',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'remarks' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupations.remarks',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'party,--palette--,role,--palette--;;1,position_title,--palette--;;2,remarks,--palette--',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => 'rank, employment_type',
        ],
        '2' => [
            'showitem' => 'cost_centre, reports_to',
        ],
    ],
];
