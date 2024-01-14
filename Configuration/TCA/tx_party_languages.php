<?php

defined('TYPO3') || die('Access denied.');




$TCA['tx_party_languages'] = array (
    'ctrl' => $TCA['tx_party_languages']['ctrl'],
    'interface' => array (
        'showRecordFieldList' => 'party,language,type,read_skills,write_skills,listen_skills,speak_skills,preference,remarks'
    ),
    'feInterface' => $TCA['tx_party_languages']['feInterface'],
    'columns' => array (
        'party' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.party',
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
        'language' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.language',
            'config' => Array (
                'type' => 'select',
                'foreign_table' => 'static_languages',
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
        'type' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.type',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                ),
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_languages-type%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'read_skills' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.read_skills',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_languages.read_skills.I.0', 'YES'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_languages.read_skills.I.1', 'NO'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_languages.read_skills.I.2', 'POOR'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'write_skills' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.write_skills',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_languages.write_skills.I.0', 'YES'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_languages.write_skills.I.1', 'NO'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_languages.write_skills.I.2', 'POOR'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'listen_skills' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.listen_skills',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_languages.listen_skills.I.0', 'YES'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_languages.listen_skills.I.1', 'NO'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_languages.listen_skills.I.2', 'POOR'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'speak_skills' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.speak_skills',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_languages.speak_skills.I.0', 'YES'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_languages.speak_skills.I.1', 'NO'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_languages.speak_skills.I.2', 'POOR'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'preference' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.preference',
            'config' => Array (
                'type' => 'check',
            )
        ),
        'remarks' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.remarks',
            'config' => Array (
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => 'party;;;;1-1-1, type, language, preference, read_skills;;;;1-1-1, write_skills, listen_skills, speak_skills, remarks;;;;1-1-1')
    ),
    'palettes' => array (
        '1' => array('showitem' => '')
    )
);


