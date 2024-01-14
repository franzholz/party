<?php

defined('TYPO3') || die('Access denied.');



$GLOBALS['TCA']['tx_party_relationship_types'] = array (
    'ctrl' => $GLOBALS['TCA']['tx_party_relationship_types']['ctrl'],
    'interface' => array (
        'showRecordFieldList' => 'relationship_type,description_as_primary,description_as_secondary,organisation_allowed_as_primary,organisation_allowed_as_secondary,person_allowed_as_primary,person_allowed_as_secondary'
    ),
    'feInterface' => $GLOBALS['TCA']['tx_party_relationship_types']['feInterface'],
    'columns' => array (
        'relationship_type' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.relationship_type',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'description_as_primary' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.description_as_primary',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'description_as_secondary' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.description_as_secondary',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'organisation_allowed_as_primary' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.organisation_allowed_as_primary',
            'config' => Array (
                'type' => 'check',
            )
        ),
        'organisation_allowed_as_secondary' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.organisation_allowed_as_secondary',
            'config' => Array (
                'type' => 'check',
            )
        ),
        'person_allowed_as_primary' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.person_allowed_as_primary',
            'config' => Array (
                'type' => 'check',
            )
        ),
        'person_allowed_as_secondary' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.person_allowed_as_secondary',
            'config' => Array (
                'type' => 'check',
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => 'relationship_type;;;;1-1-1, description_as_primary, description_as_secondary, organisation_allowed_as_primary, organisation_allowed_as_secondary, person_allowed_as_primary, person_allowed_as_secondary')
    ),
    'palettes' => array (
        '1' => array('showitem' => '')
    )
);
