<?php

defined('TYPO3') || die('Access denied.');

$result = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_allergies',
        'label'     => 'title',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'iconfile' => 'EXT:party/Resources/Public/Icons/icon_tx_party_allergies.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'short_title,title,long_title',
    ],
    'columns' => [
        'short_title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_allergies.short_title',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '30',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_allergies.title',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'max' => '60',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'long_title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_allergies.long_title',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'max' => '90',
                'eval' => 'trim',
                'default' => '',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'short_title,--palette--,title,--palette--,long_title,--palette--',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => '',
        ],
    ],
];

return $result;

