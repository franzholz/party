<?php

defined('TYPO3') || die('Access denied.');

$result = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_occupation_ranks',
        'label'     => 'title',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField'            => 'sys_language_uid',
        'transOrigPointerField'    => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'iconfile' => 'EXT:party/Resources/Public/Icons/icon_tx_party_occupation_ranks.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title',
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => ['type' => 'language'],
        ],
        'l18n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config'      => [
                'type'  => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table'       => 'tx_party_occupation_ranks',
                'foreign_table_where' => 'AND tx_party_occupation_ranks.pid=###CURRENT_PID### AND tx_party_occupation_ranks.sys_language_uid IN (-1,0)',
            ],
        ],
        'l18n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'short_title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_occupation_ranks.short_title',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '30',
                'eval' => 'trim',
            ],
        ],
        'title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_occupation_ranks.title',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'max' => '60',
                'eval' => 'trim',
            ],
        ],
        'long_title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_occupation_ranks.long_title',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'sys_language_uid,--palette--,l18n_parent,l18n_diffsource,short_title,title,--palette--,long_title,--palette--',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => '',
        ],
    ],
];

return $result;
