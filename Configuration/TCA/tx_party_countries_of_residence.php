<?php

defined('TYPO3') || die('Access denied.');




$GLOBALS['TCA']['tx_party_countries_of_residence'] = array (
    'ctrl' => array (
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_countries_of_residence',
        'label'     => 'country',
        'label_userFunc' => 'tx_party_labels->getLabel',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY country',
        'delete' => 'deleted',
        'dynamicConfigFile' => PATH_BE_PARTY . 'tca.php',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_countries_of_residence.gif',
    ),
    'interface' => array (
        'showRecordFieldList' => 'party,country,residency_type,remarks'
    ),
    'columns' => array (
        'party' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_countries_of_residence.party',
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
        'country' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_countries_of_residence.country',
            'config' => Array (
                'type' => 'select',
                'foreign_table' => 'static_countries',
                'foreign_table_where' => 'ORDER BY static_countries.cn_official_name_en',
                'items' => Array (
                    Array('', 0),
                ),
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'wizards' => array(
                    'suggest' => array(
                        'type' => 'suggest',
                    )
                ),
            )
        ),
        'residency_type' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_countries_of_residence.residency_type',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                ),
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_COUNTRIES_OF_RESIDENCE-RESIDENCY_TYPE%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'remarks' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_countries_of_residence.remarks',
            'config' => Array (
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => 'party;;;;1-1-1, residency_type, country, remarks;;;;1-1-1')
    ),
    'palettes' => array (
        '1' => array('showitem' => '')
    )
);
