<?php

defined('TYPO3') || die('Access denied.');



$GLOBALS['TCA']['tx_party_images'] = array (
    'ctrl' => array (
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_images',
        'label'     => 'title',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY title',
        'delete' => 'deleted',
        'type' => 'type',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_images.gif',
    ),
    'interface' => array (
        'showRecordFieldList' => 'type,party,address,image,title,description,remarks'
    ),
    'columns' => array (
        'type' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_images.type',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('LLL:EXT:party/locallang_db.xml:tx_party_images.type.I.0', '0'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_images.type.I.1', '1'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'party' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_images.party',
            'config' => Array (
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_party_parties',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'address' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_images.address',
            'config' => Array (
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_party_addresses',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'image' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_images.image',
            'config' => Array (
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'max_size' => 500,
                'uploadfolder' => 'uploads/tx_party',
                'show_thumbs' => 1,
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'title' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_images.title',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'description' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_images.description',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'remarks' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_images.remarks',
            'config' => Array (
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => 'type;;;;1-1-1, party, image, title;;;;2-2-2, description;;;;3-3-3, remarks'),
                      '1' => array('showitem' => 'type;;;;1-1-1, address, image, title;;;;2-2-2, description;;;;3-3-3, remarks')
    ),
);
