<?php

defined('TYPO3') || die('Access denied.');

$TCA['tx_party_usages'] = array (
    'ctrl' => $TCA['tx_party_usages']['ctrl'],
    'interface' => array (
        'showRecordFieldList' => 'short_title,title,long_title'
    ),
    'feInterface' => $TCA['tx_party_usages']['feInterface'],
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

