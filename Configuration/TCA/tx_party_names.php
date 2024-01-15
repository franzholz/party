<?php

defined('TYPO3') || die('Access denied.');


$GLOBALS['TCA']['tx_party_names'] = array(
    'ctrl' => array(
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_names',
        'label'     => 'last_name',
        'label_userFunc' => 'tx_party_labels->getLabel',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'type',
        'default_sortby' => 'ORDER BY last_name',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_names.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'party,type,standard,person_name_title,first_name,middle_name,ancestor_name,last_name,other_name,preceding_title,alias,generation_identifier,place_name,organisation_name_type,organisation_name,abbreviation,remarks'
    ),
    'columns' => array(
        'party' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.party',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'tx_party_parties',
                'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### ORDER BY tx_party_parties.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'type' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.type',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('LLL:EXT:party/locallang_db.xml:tx_party_names.type.I.0', '0'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_names.type.I.1', '1'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'standard' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.standard',
            'config' => array(
                'type' => 'check',
            )
        ),
        'person_name_title' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.person_name_title',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_party_person_name_titles',
                'foreign_table_where' => 'AND tx_party_person_name_titles.pid=###STORAGE_PID### ORDER BY tx_party_person_name_titles.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'first_name' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.first_name',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'middle_name' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.middle_name',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'ancestor_name' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.ancestor_name',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'last_name' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.last_name',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'other_name' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.other_name',
            'config' => array(
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'preceding_title' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.preceding_title',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'alias' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.alias',
            'config' => array(
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'generation_identifier' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.generation_identifier',
            'config' => array(
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'place_name' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.place_name',
            'config' => array(
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'organisation_name_type' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name_type',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name_type.I.0', 'NAME_ONLY'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name_type.I.1', 'ORGANISATION_TYPE'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name_type.I.2', 'NAME_AND_TYPE'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'organisation_name' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'abbreviation' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.abbreviation',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'remarks' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.remarks',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
    ),
    'types' => array(
        '0' => array('showitem' => 'party;;;;1-1-1, type, standard, person_name_title;;1, first_name;;2, last_name;;3, remarks;;;;1-1-1'),
                      '1' => array('showitem' => 'party;;;;1-1-1, type, standard, organisation_name_type, organisation_name, abbreviation, remarks;;;;1-1-1')
    ),
    'palettes' => array(
        '1' => array('showitem' => 'preceding_title'),
                         '2' => array('showitem' => 'middle_name, ancestor_name'),
                         '3' => array('showitem' => 'other_name, alias, generation_identifier, place_name'),
    )
);
