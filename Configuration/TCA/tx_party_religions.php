<?php

defined('TYPO3') || die('Access denied.');




$GLOBALS['TCA']['tx_party_religions'] = array (
    'ctrl' => array (
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_religions',
        'label'     => 'title',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField'            => 'sys_language_uid',
        'transOrigPointerField'    => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'dynamicConfigFile' => PATH_BE_PARTY . 'tca.php',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_religions.gif',
    ),
    'interface' => array (
        'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title'
    ),
    'columns' => array (
        'sys_language_uid' => array (
            'exclude' => 1,
            'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
            'config' => array (
                'type'                => 'select',
                'foreign_table'       => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => array(
                    array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
                                 array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
                )
            )
        ),
        'l18n_parent' => array (
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
            'config'      => array (
                'type'  => 'select',
                'items' => array (
                    array('', 0),
                ),
                'foreign_table'       => 'tx_party_religions',
                'foreign_table_where' => 'AND tx_party_religions.pid=###CURRENT_PID### AND tx_party_religions.sys_language_uid IN (-1,0)',
            )
        ),
        'l18n_diffsource' => array (
            'config' => array (
                'type' => 'passthrough'
            )
        ),
        'short_title' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_religions.short_title',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '30',
                'eval' => 'trim',
            )
        ),
        'title' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_religions.title',
            'config' => Array (
                'type' => 'input',
                'size' => '48',
                'max' => '60',
                'eval' => 'trim',
            )
        ),
        'long_title' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_religions.long_title',
            'config' => Array (
                'type' => 'input',
                'size' => '48',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => 'sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, short_title, title;;;;2-2-2, long_title;;;;3-3-3')
    ),
    'palettes' => array (
        '1' => array('showitem' => '')
    )
);

