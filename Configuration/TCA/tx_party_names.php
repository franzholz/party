<?php

defined('TYPO3') || die('Access denied.');


$GLOBALS['TCA']['tx_party_names'] = array (
    'ctrl' => $GLOBALS['TCA']['tx_party_names']['ctrl'],
    'interface' => array (
        'showRecordFieldList' => 'party,type,standard,person_name_title,first_name,middle_name,ancestor_name,last_name,other_name,preceding_title,alias,generation_identifier,place_name,organisation_name_type,organisation_name,abbreviation,remarks'
    ),
    'feInterface' => $GLOBALS['TCA']['tx_party_names']['feInterface'],
    'columns' => array (
        'party' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.party',
            'config' => Array (
                'type' => 'select',
                'foreign_table' => 'tx_party_parties',
                'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### ORDER BY tx_party_parties.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'type' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.type',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('LLL:EXT:party/locallang_db.xml:tx_party_names.type.I.0', '0'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_names.type.I.1', '1'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'standard' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.standard',
            'config' => Array (
                'type' => 'check',
            )
        ),
        'person_name_title' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.person_name_title',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                ),
                'foreign_table' => 'tx_party_person_name_titles',
                'foreign_table_where' => 'AND tx_party_person_name_titles.pid=###STORAGE_PID### ORDER BY tx_party_person_name_titles.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'first_name' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.first_name',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'middle_name' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.middle_name',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'ancestor_name' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.ancestor_name',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'last_name' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.last_name',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'other_name' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.other_name',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'preceding_title' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.preceding_title',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'alias' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.alias',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'generation_identifier' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.generation_identifier',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'place_name' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.place_name',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'organisation_name_type' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name_type',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name_type.I.0', 'NAME_ONLY'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name_type.I.1', 'ORGANISATION_TYPE'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name_type.I.2', 'NAME_AND_TYPE'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'organisation_name' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'abbreviation' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.abbreviation',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'remarks' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.remarks',
            'config' => Array (
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => 'party;;;;1-1-1, type, standard, person_name_title;;1, first_name;;2, last_name;;3, remarks;;;;1-1-1'),
                      '1' => array('showitem' => 'party;;;;1-1-1, type, standard, organisation_name_type, organisation_name, abbreviation, remarks;;;;1-1-1')
    ),
    'palettes' => array (
        '1' => array('showitem' => 'preceding_title'),
                         '2' => array('showitem' => 'middle_name, ancestor_name'),
                         '3' => array('showitem' => 'other_name, alias, generation_identifier, place_name'),
    )
);

