<?php

defined('TYPO3') || die('Access denied.');

$result = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications',
        'label'     => 'qualification_name',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY qualification_name',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_qualifications.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'party,qualification_name,status,institution,start_date,completion_date,way_of_study,major_subject,minor_subject,mark,course_duration,award,restriction,registration,remarks',
    ],
    'columns' => [
        'party' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.party',
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
        'qualification_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.qualification_name',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'status' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.status',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_party_qualification_status',
                'foreign_table_where' => 'AND tx_party_qualification_status.pid=###STORAGE_PID### ORDER BY tx_party_qualification_status.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'institution' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.institution',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_party_parties',
                'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### AND tx_party_parties.type=1 ORDER BY tx_party_parties.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'start_date' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.start_date',
            'config' => [
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'checkbox' => '0',
                'default'  => '0',
            ],
        ],
        'completion_date' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.completion_date',
            'config' => [
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'checkbox' => '0',
                'default'  => '0',
            ],
        ],
        'way_of_study' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.way_of_study',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'major_subject' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.major_subject',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'minor_subject' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.minor_subject',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'mark' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.mark',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'course_duration' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.course_duration',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'award' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.award',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'restriction' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.restriction',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'registration' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.registration',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'remarks' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.remarks',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'party,--palette--,qualification_name,institution,status,start_date,--palette--,completion_date,--palette--;;1,major_subject,--palette--,minor_subject,mark,--palette--;;2,remarks,--palette--',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => 'way_of_study',
        ],
        '2' => [
            'showitem' => 'course_duration, award, restriction, registration',
        ],
    ],
];

return $result;
