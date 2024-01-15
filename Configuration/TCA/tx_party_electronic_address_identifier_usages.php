<?php

defined('TYPO3') || die('Access denied.');

$GLOBALS['TCA']['tx_party_electronic_address_identifier_usages'] = array(
    'ctrl' => array(
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages',
        'label'     => 'uid',
        'label_userFunc' => 'tx_party_labels->getLabel',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY crdate',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_electronic_address_identifier_usages.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'party,electronic_address_identifier,electronic_address_identifier_usage,standard'
    ),
    'columns' => array(
        'party' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages.party',
            'config' => array(
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_party_parties',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'electronic_address_identifier' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages.electronic_address_identifier',
            'config' => array(
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_party_electronic_address_identifiers',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'electronic_address_identifier_usage' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages.electronic_address_identifier_usage',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_party_usages',
                'foreign_table_where' => 'AND tx_party_usages.pid=###STORAGE_PID### ORDER BY tx_party_usages.title',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'standard' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages.standard',
            'config' => array(
                'type' => 'check',
            )
        ),
    ),
    'types' => array(
        '0' => array('showitem' => 'party;;;;1-1-1, electronic_address_identifier, electronic_address_identifier_usage, standard')
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    )
);
