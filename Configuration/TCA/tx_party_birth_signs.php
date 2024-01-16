<?php

defined('TYPO3') || die('Access denied.');


$GLOBALS['TCA']['tx_party_birth_signs'] = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_birth_signs',
        'label'     => 'title',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField'            => 'sys_language_uid',
        'transOrigPointerField'    => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_birth_signs.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title',
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
            'config' => [
                'type'                => 'select',
                'renderType' => 'selectSingle',
                'foreign_table'       => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => [['LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1], ['LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0]],
            ],
        ],
        'l18n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
            'config'      => [
                'type'  => 'select',
                'renderType' => 'selectSingle',
                'items' => [['', 0]],
                'foreign_table'       => 'tx_party_birth_signs',
                'foreign_table_where' => 'AND tx_party_birth_signs.pid=###CURRENT_PID### AND tx_party_birth_signs.sys_language_uid IN (-1,0)',
            ],
        ],
        'l18n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'short_title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_birth_signs.short_title',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '30',
                'eval' => 'trim',
            ],
        ],
        'title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_birth_signs.title',
            'config' => [
                'type' => 'input',
                'size' => '48',
                'max' => '60',
                'eval' => 'trim',
            ],
        ],
        'long_title' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_birth_signs.long_title',
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
            'showitem' => 'sys_language_uid,--palette--;;,l18n_parent,l18n_diffsource,short_title,title,--palette--;;,long_title,--palette--;;',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => '',
        ],
    ],
];
