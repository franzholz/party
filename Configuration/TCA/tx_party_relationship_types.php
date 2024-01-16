<?php

defined('TYPO3') || die('Access denied.');



$GLOBALS['TCA']['tx_party_relationship_types'] = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types',
        'label'     => 'relationship_type',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY relationship_type',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_relationship_types.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'relationship_type,description_as_primary,description_as_secondary,organisation_allowed_as_primary,organisation_allowed_as_secondary,person_allowed_as_primary,person_allowed_as_secondary',
    ],
    'columns' => [
        'relationship_type' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.relationship_type',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'description_as_primary' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.description_as_primary',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'description_as_secondary' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.description_as_secondary',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'organisation_allowed_as_primary' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.organisation_allowed_as_primary',
            'config' => [
                'type' => 'check',
            ],
        ],
        'organisation_allowed_as_secondary' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.organisation_allowed_as_secondary',
            'config' => [
                'type' => 'check',
            ],
        ],
        'person_allowed_as_primary' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.person_allowed_as_primary',
            'config' => [
                'type' => 'check',
            ],
        ],
        'person_allowed_as_secondary' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.person_allowed_as_secondary',
            'config' => [
                'type' => 'check',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'relationship_type,--palette--,description_as_primary,description_as_secondary,organisation_allowed_as_primary,organisation_allowed_as_secondary,person_allowed_as_primary,person_allowed_as_secondary',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => '',
        ],
    ],
];
