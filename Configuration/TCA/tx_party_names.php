<?php

defined('TYPO3') || die('Access denied.');

$result = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names',
        'label'     => 'last_name',
        'label_userFunc' => \JambageCom\Party\Hook\Labels::class . '->getLabel',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'type',
        'default_sortby' => 'ORDER BY last_name',
        'delete' => 'deleted',
        'iconfile' => 'EXT:party/Resources/Public/Icons/icon_tx_party_names.gif',
        'searchFields' => 'person_name_title,first_name,names,last_name,other_name,' .
        'alias,organisation_name,abbreviation',
    ],
    'interface' => [
        'showRecordFieldList' => 'party,type,standard,person_name_title,first_name,middle_name,ancestor_name,last_name,other_name,preceding_title,alias,generation_identifier,place_name,organisation_name_type,organisation_name,abbreviation,remarks',
    ],
    'columns' => [
        'party' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.party',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_party_parties',
                'foreign_table_where' => 'AND tx_party_parties.pid=###PAGE_TSCONFIG_ID### ORDER BY tx_party_parties.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'default' => 0,
            ],
        ],
        'type' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.type.I.0', 'value' => '0'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.type.I.1', 'value' => '1']],
                'size' => 1,
                'maxitems' => 1,
                'default' => 0,
            ],
        ],
        'standard' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.standard',
            'config' => [
                'type' => 'check',
            ],
        ],
        'person_name_title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.person_name_title',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_party_person_name_titles',
                'foreign_table_where' => 'AND tx_party_person_name_titles.pid=###PAGE_TSCONFIG_ID### ORDER BY tx_party_person_name_titles.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'default' => 0,
            ],
        ],
        'first_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.first_name',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'middle_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.middle_name',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'ancestor_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.ancestor_name',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'last_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.last_name',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'other_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.other_name',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'preceding_title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.preceding_title',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'alias' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.alias',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'generation_identifier' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.generation_identifier',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'place_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.place_name',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'organisation_name_type' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.organisation_name_type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.organisation_name_type.I.0', 'value' => 'NAME_ONLY'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.organisation_name_type.I.1', 'value' => 'ORGANISATION_TYPE'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.organisation_name_type.I.2', 'value' => 'NAME_AND_TYPE']],
                'size' => 1,
                'maxitems' => 1,
                'default' => 0,
            ],
        ],
        'organisation_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.organisation_name',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'abbreviation' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.abbreviation',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'remarks' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_names.remarks',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
                'default' => '',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'party,--palette--,type,standard,person_name_title,--palette--;;1,first_name,--palette--;;2,last_name,--palette--;;3,remarks,--palette--',
        ],
        '1' => [
            'showitem' => 'party,--palette--,type,standard,organisation_name_type,organisation_name,abbreviation,remarks,--palette--',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => 'preceding_title',
        ],
        '2' => [
            'showitem' => 'middle_name, ancestor_name',
        ],
        '3' => [
            'showitem' => 'other_name, alias, generation_identifier, place_name',
        ],
    ],
];

return $result;
