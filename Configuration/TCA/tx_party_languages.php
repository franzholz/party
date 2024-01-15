<?php

defined('TYPO3') || die('Access denied.');




$GLOBALS['TCA']['tx_party_languages'] = array(
    'ctrl' => array(
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_languages',
        'label'     => 'uid',
        'label_userFunc' => 'tx_party_labels->getLabel',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY language',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_languages.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'party,language,type,read_skills,write_skills,listen_skills,speak_skills,preference,remarks'
    ),
    'columns' => array(
        'party' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.party',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_party_parties',
                'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### ORDER BY tx_party_parties.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'language' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.language',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'static_languages',
                'items' => array(
                    array('', 0),
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
        'type' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.type',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_languages-type%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'read_skills' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.read_skills',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_languages.read_skills.I.0', 'YES'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_languages.read_skills.I.1', 'NO'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_languages.read_skills.I.2', 'POOR'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'write_skills' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.write_skills',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_languages.write_skills.I.0', 'YES'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_languages.write_skills.I.1', 'NO'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_languages.write_skills.I.2', 'POOR'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'listen_skills' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.listen_skills',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_languages.listen_skills.I.0', 'YES'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_languages.listen_skills.I.1', 'NO'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_languages.listen_skills.I.2', 'POOR'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'speak_skills' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.speak_skills',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_languages.speak_skills.I.0', 'YES'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_languages.speak_skills.I.1', 'NO'),
                                  array('LLL:EXT:party/locallang_db.xml:tx_party_languages.speak_skills.I.2', 'POOR'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'preference' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.preference',
            'config' => array(
                'type' => 'check',
            )
        ),
        'remarks' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.remarks',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
    ),
    'types' => array(
        '0' => array('showitem' => 'party;;;;1-1-1, type, language, preference, read_skills;;;;1-1-1, write_skills, listen_skills, speak_skills, remarks;;;;1-1-1')
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    )
);
