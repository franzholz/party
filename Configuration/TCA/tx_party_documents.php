<?php

defined('TYPO3') || die('Access denied.');




$GLOBALS['TCA']['tx_party_documents'] = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_documents',
        'label'     => 'document_id',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY document_id',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_documents.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'party,document_type,document_id,issued_by,issue_place,privilege,restriction,group_name,name_on_document,remarks',
    ],
    'columns' => [
        'party' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.party',
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
        'document_type' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.document_type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_DOCUMENTS-DOCUMENT_TYPE%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'document_id' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.document_id',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'issued_by' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.issued_by',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_party_parties',
                'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### ORDER BY tx_party_parties.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'issue_place' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.issue_place',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'privilege' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.privilege',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'restriction' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.restriction',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'group_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.group_name',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'name_on_document' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.name_on_document',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'remarks' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.remarks',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'party,--palette--,document_type,document_id,issued_by,--palette--,issue_place,name_on_document,--palette--;;1,remarks,--palette--',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => 'privilege, restriction, group_name',
        ],
    ],
];
