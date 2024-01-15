<?php

defined('TYPO3') || die('Access denied.');




$GLOBALS['TCA']['tx_party_types'] = array(
    'ctrl' => array(
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_types',
        'label'     => 'title',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField'            => 'sys_language_uid',
        'transOrigPointerField'    => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_types.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title,allowed_for_field,allowed_for_party_type'
    ),
    'columns' => array(
        'sys_language_uid' => array(
            'exclude' => 1,
            'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
            'config' => array(
                'type'                => 'select',
                'foreign_table'       => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => array(
                    array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
                                 array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
                )
            )
        ),
        'l18n_parent' => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
            'config'      => array(
                'type'  => 'select',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table'       => 'tx_party_types',
                'foreign_table_where' => 'AND tx_party_types.pid=###CURRENT_PID### AND tx_party_types.sys_language_uid IN (-1,0)',
            )
        ),
        'l18n_diffsource' => array(
            'config' => array(
                'type' => 'passthrough'
            )
        ),
        'short_title' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_types.short_title',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'max' => '30',
                'eval' => 'trim',
            )
        ),
        'title' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_types.title',
            'config' => array(
                'type' => 'input',
                'size' => '48',
                'max' => '60',
                'eval' => 'trim',
            )
        ),
        'long_title' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_types.long_title',
            'config' => array(
                'type' => 'input',
                'size' => '48',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'allowed_for_field' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.0', 'tx_party_addresses-premise_type'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.1', 'tx_party_contacts-type'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.2', 'tx_party_countries_of_residence-residency_type'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.3', 'tx_party_documents-document_type'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.4', 'tx_party_accounts-account_type'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.5', 'tx_party_languages-type'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.6', 'tx_party_accounts-ownership_type'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.7', 'tx_party_nationalities-nationality_type'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.8', 'tx_party_occupations-employment_type'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.i.9', 'tx_party_organisations-organisation_type'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.i.10', 'tx_party_revenues-type'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.i.11', 'tx_party_vehicles-type'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.12', 'tx_party_electronic_address_identifiers-typE'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.13', 'tx_party_events-type'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.14', 'tx_party_identifiers-type'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.15', 'tx_party_memberships-type'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.i.16', 'tx_party_favourites-type'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.i.17', 'tx_party_preferences-type'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'allowed_for_party_type' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_party_type',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_party_type.I.0', 'ALL'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_party_type.I.1', 'PERSONS'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_party_type.I.2', 'ORGANISATIONS'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
    ),
    'types' => array(
        '0' => array('showitem' => 'sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, short_title, title;;;;2-2-2, long_title;;;;3-3-3, allowed_for_field, allowed_for_party_type')
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    )
);
