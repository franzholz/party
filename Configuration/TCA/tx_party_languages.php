<?php

defined('TYPO3') || die('Access denied.');

$result = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages',
        'label'     => 'uid',
        'label_userFunc' => 'tx_party_labels->getLabel',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY language',
        'delete' => 'deleted',
        'iconfile' => 'EXT:party/Resources/Public/Icons/icon_tx_party_languages.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'party,language,type,read_skills,write_skills,listen_skills,speak_skills,preference,remarks',
    ],
    'columns' => [
        'party' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.party',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_party_parties',
                'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### ORDER BY tx_party_parties.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'language' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'static_languages',
                'items' => [['label' => '', 'value' => 0]],
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
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_languages-type%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'read_skills' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.read_skills',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.read_skills.I.0', 'value' => 'YES'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.read_skills.I.1', 'value' => 'NO'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.read_skills.I.2', 'value' => 'POOR']],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'write_skills' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.write_skills',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.write_skills.I.0', 'value' => 'YES'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.write_skills.I.1', 'value' => 'NO'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.write_skills.I.2', 'value' => 'POOR']],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'listen_skills' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.listen_skills',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.listen_skills.I.0', 'value' => 'YES'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.listen_skills.I.1', 'value' => 'NO'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.listen_skills.I.2', 'value' => 'POOR']],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'speak_skills' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.speak_skills',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.speak_skills.I.0', 'value' => 'YES'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.speak_skills.I.1', 'value' => 'NO'], ['label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.speak_skills.I.2', 'value' => 'POOR']],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'preference' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.preference',
            'config' => [
                'type' => 'check',
            ],
        ],
        'remarks' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/Resources/Private/Language/locallang_db.xlf:tx_party_languages.remarks',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'party,--palette--,type,language,preference,read_skills,--palette--,write_skills,listen_skills,speak_skills,remarks,--palette--',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => '',
        ],
    ],
];

return $result;
