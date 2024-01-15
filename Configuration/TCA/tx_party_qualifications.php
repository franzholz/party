<?php

defined('TYPO3') || die('Access denied.');




$GLOBALS['TCA']['tx_party_qualifications'] = array (
    'ctrl' => array (
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications',
        'label'     => 'qualification_name',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY qualification_name',
        'delete' => 'deleted',
        'dynamicConfigFile' => PATH_BE_PARTY . 'tca.php',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_qualifications.gif',
    ),
    'interface' => array (
        'showRecordFieldList' => 'party,qualification_name,status,institution,start_date,completion_date,way_of_study,major_subject,minor_subject,mark,course_duration,award,restriction,registration,remarks'
    ),
    'columns' => array (
        'party' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.party',
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
        'qualification_name' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.qualification_name',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'status' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.status',
            'config' => Array (
                'type' => 'select',
                'foreign_table' => 'tx_party_qualification_status',
                'foreign_table_where' => 'AND tx_party_qualification_status.pid=###STORAGE_PID### ORDER BY tx_party_qualification_status.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'institution' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.institution',
            'config' => Array (
                'type' => 'select',
                'foreign_table' => 'tx_party_parties',
                'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### AND tx_party_parties.type=1 ORDER BY tx_party_parties.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'start_date' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.start_date',
            'config' => Array (
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'checkbox' => '0',
                'default'  => '0'
            )
        ),
        'completion_date' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.completion_date',
            'config' => Array (
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'checkbox' => '0',
                'default'  => '0'
            )
        ),
        'way_of_study' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.way_of_study',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'major_subject' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.major_subject',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'minor_subject' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.minor_subject',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'mark' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.mark',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'course_duration' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.course_duration',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'award' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.award',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'restriction' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.restriction',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'registration' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.registration',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'remarks' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.remarks',
            'config' => Array (
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => 'party;;;;1-1-1, qualification_name, institution, status, start_date;;;;1-1-1, completion_date;;1, major_subject;;;;1-1-1, minor_subject, mark;;2, remarks;;;;1-1-1')
    ),
    'palettes' => array (
        '1' => array('showitem' => 'way_of_study'),
        '2' => array('showitem' => 'course_duration, award, restriction, registration'),
    )
);
