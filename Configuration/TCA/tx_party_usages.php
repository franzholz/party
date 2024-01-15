<?php

defined('TYPO3') || die('Access denied.');

$GLOBALS['TCA']['tx_party_usages'] = array (
    'ctrl' => array (
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_usages',
        'label'     => 'title',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_usages.gif',
    ),
    'interface' => array (
        'showRecordFieldList' => 'short_title,title,long_title'
    ),
    'columns' => array (
        'short_title' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_usages.short_title',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '30',
                'eval' => 'trim',
            )
        ),
        'title' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_usages.title',
            'config' => Array (
                'type' => 'input',
                'size' => '48',
                'max' => '60',
                'eval' => 'trim',
            )
        ),
        'long_title' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_usages.long_title',
            'config' => Array (
                'type' => 'input',
                'size' => '48',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => 'short_title;;;;1-1-1, title;;;;2-2-2, long_title;;;;3-3-3')
    ),
    'palettes' => array (
        '1' => array('showitem' => '')
    )
);

