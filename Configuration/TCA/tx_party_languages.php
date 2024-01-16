<?php

defined('TYPO3') || die('Access denied.');




$GLOBALS['TCA']['tx_party_languages'] = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_languages',
        'label'     => 'uid',
        'label_userFunc' => 'tx_party_labels->getLabel',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY language',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_languages.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'party,language,type,read_skills,write_skills,listen_skills,speak_skills,preference,remarks',
    ],
    'columns' => [
        'party' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.party',
            'config' => [
                'type' => 'select',
                'items' => [['', 0]],
                'foreign_table' => 'tx_party_parties',
                'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### ORDER BY tx_party_parties.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'language' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.language',
            'config' => [
                'type' => 'select',
                'foreign_table' => 'static_languages',
                'items' => [['', 0]],
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'wizards' => [
                    'suggest' => [
                        'type' => 'suggest',
                    ],
                ],
            ],
        ],
        'type' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.type',
            'config' => [
                'type' => 'select',
                'items' => [['', 0]],
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_languages-type%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'read_skills' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.read_skills',
            'config' => [
                'type' => 'select',
                'items' => [['', 0], ['LLL:EXT:party/locallang_db.xml:tx_party_languages.read_skills.I.0', 'YES'], ['LLL:EXT:party/locallang_db.xml:tx_party_languages.read_skills.I.1', 'NO'], ['LLL:EXT:party/locallang_db.xml:tx_party_languages.read_skills.I.2', 'POOR']],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'write_skills' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.write_skills',
            'config' => [
                'type' => 'select',
                'items' => [['', 0], ['LLL:EXT:party/locallang_db.xml:tx_party_languages.write_skills.I.0', 'YES'], ['LLL:EXT:party/locallang_db.xml:tx_party_languages.write_skills.I.1', 'NO'], ['LLL:EXT:party/locallang_db.xml:tx_party_languages.write_skills.I.2', 'POOR']],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'listen_skills' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.listen_skills',
            'config' => [
                'type' => 'select',
                'items' => [['', 0], ['LLL:EXT:party/locallang_db.xml:tx_party_languages.listen_skills.I.0', 'YES'], ['LLL:EXT:party/locallang_db.xml:tx_party_languages.listen_skills.I.1', 'NO'], ['LLL:EXT:party/locallang_db.xml:tx_party_languages.listen_skills.I.2', 'POOR']],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'speak_skills' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.speak_skills',
            'config' => [
                'type' => 'select',
                'items' => [['', 0], ['LLL:EXT:party/locallang_db.xml:tx_party_languages.speak_skills.I.0', 'YES'], ['LLL:EXT:party/locallang_db.xml:tx_party_languages.speak_skills.I.1', 'NO'], ['LLL:EXT:party/locallang_db.xml:tx_party_languages.speak_skills.I.2', 'POOR']],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'preference' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.preference',
            'config' => [
                'type' => 'check',
            ],
        ],
        'remarks' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.remarks',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'party;;;;1-1-1, type, language, preference, read_skills;;;;1-1-1, write_skills, listen_skills, speak_skills, remarks;;;;1-1-1',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => '',
        ],
    ],
];