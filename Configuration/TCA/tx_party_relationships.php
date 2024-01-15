<?php

defined('TYPO3') || die('Access denied.');


$GLOBALS['TCA']['tx_party_relationships'] = array(
    'ctrl' => array(
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships',
        'label'     => 'uid',
        'label_userFunc' => 'tx_party_labels->getLabel',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY crdate',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_relationships.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'primary_party,secondary_party,relationship_type,date_established,date_lapsed,reason_lapsed,remarks'
    ),
    'columns' => array(
        'primary_party' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.primary_party',
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
        'secondary_party' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.secondary_party',
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
        'relationship_type' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.relationship_type',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'tx_party_relationship_types',
                'foreign_table_where' => 'AND tx_party_relationship_types.pid=###STORAGE_PID### ORDER BY tx_party_relationship_types.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'date_established' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.date_established',
            'config' => array(
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'checkbox' => '0',
                'default'  => '0'
            )
        ),
        'date_lapsed' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.date_lapsed',
            'config' => array(
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'checkbox' => '0',
                'default'  => '0'
            )
        ),
        'reason_lapsed' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.reason_lapsed',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
        'remarks' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.remarks',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
    ),
    'types' => array(
        '0' => array('showitem' => 'primary_party;;;;1-1-1, relationship_type, secondary_party, date_established;;;;1-1-1, date_lapsed, reason_lapsed, remarks;;;;1-1-1')
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    )
);
