<?php

defined('TYPO3') || die('Access denied.');




$TCA['tx_party_documents'] = array (
    'ctrl' => $TCA['tx_party_documents']['ctrl'],
    'interface' => array (
        'showRecordFieldList' => 'party,document_type,document_id,issued_by,issue_place,privilege,restriction,group_name,name_on_document,remarks'
    ),
    'feInterface' => $TCA['tx_party_documents']['feInterface'],
    'columns' => array (
        'party' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.party',
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
        'document_type' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.document_type',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                ),
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_DOCUMENTS-DOCUMENT_TYPE%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'document_id' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.document_id',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'issued_by' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.issued_by',
            'config' => Array (
                'type' => 'select',
                'foreign_table' => 'tx_party_parties',
                'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### ORDER BY tx_party_parties.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'issue_place' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.issue_place',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'privilege' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.privilege',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'restriction' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.restriction',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'group_name' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.group_name',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'name_on_document' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.name_on_document',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'remarks' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.remarks',
            'config' => Array (
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => 'party;;;;1-1-1, document_type, document_id, issued_by;;;;1-1-1, issue_place, name_on_document;;1;;1-1-1, remarks;;;;1-1-1')
    ),
    'palettes' => array (
        '1' => array('showitem' => 'privilege, restriction, group_name'),
    )
);

