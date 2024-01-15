<?php

defined('TYPO3') || die('Access denied.');




$GLOBALS['TCA']['tx_party_contact_number_usages'] = array (
    'ctrl' => array (
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_number_usages',
        'label'     => 'uid',
        'label_userFunc' => 'tx_party_labels->getLabel',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY crdate',
        'delete' => 'deleted',
        'dynamicConfigFile' => PATH_BE_PARTY . 'tca.php',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_contact_number_usages.gif',
    ),
    'interface' => array (
        'showRecordFieldList' => 'party,contact_number,contact_number_usage,standard'
    ),
    'columns' => array (
        'party' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_number_usages.party',
            'config' => Array (
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_party_parties',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'contact_number' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_number_usages.contact_number',
            'config' => Array (
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_party_contact_numbers',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'contact_number_usage' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_number_usages.contact_number_usage',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                ),
                'foreign_table' => 'tx_party_usages',
                'foreign_table_where' => 'AND tx_party_usages.pid=###STORAGE_PID### ORDER BY tx_party_usages.title',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'standard' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_number_usages.standard',
            'config' => Array (
                'type' => 'check',
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => 'party;;;;1-1-1, contact_number, contact_number_usage, standard')
    ),
    'palettes' => array (
        '1' => array('showitem' => '')
    )
);

