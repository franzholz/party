<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die('Access denied.');

$result = [
    'ctrl' => [
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses',
        'label'     => 'locality',
        'label_userFunc' => 'tx_party_labels->getLabel',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY locality',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_addresses.gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'parties,locality,thoroughfare,thoroughfare_number,building_name,location,lot,premise_type,internal_thoroughfare,reference_location,post_code,rural_delivery,latitude_degrees_measure,latitude_minutes_measure,latitude_seconds_measure,latitude_direction_code,longitude_degrees_measure,longitude_minutes_measure,longitude_seconds_measure,longitude_direction_code,postal_delivery_point,post_office,post_town,administrative_area,country,images,remarks',
    ],
    'columns' => [
        'parties' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.parties',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_address_usages',
                'foreign_field' => 'address',
                'foreign_label' => 'party',
                'foreign_selector' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['combined'],
            ],
        ],
        'locality' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.locality',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'thoroughfare' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.thoroughfare',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'thoroughfare_number' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.thoroughfare_number',
            'config' => [
                'type' => 'input',
                'size' => '3',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'building_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.building_name',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'location' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.location',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'lot' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.lot',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'premise_type' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.premise_type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_ADDRESSES-PREMISE_TYPE%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'internal_thoroughfare' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.internal_thoroughfare',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'reference_location' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.reference_location',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'post_code' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.post_code',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'rural_delivery' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.rural_delivery',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'latitude_degrees_measure' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.latitude_degrees_measure',
            'config' => [
                'type' => 'number',
                'size' => '5',
                'max' => '5',
                'range' => [
                    'lower' => 0,
                    'upper' => 90,
                ],
                'checkbox' => '0',
                'eval' => 'nospace',
            ],
        ],
        'latitude_minutes_measure' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.latitude_minutes_measure',
            'config' => [
                'type' => 'number',
                'size' => '5',
                'max' => '5',
                'range' => [
                    'lower' => 0,
                    'upper' => 60,
                ],
                'checkbox' => '0',
                'eval' => 'nospace',
            ],
        ],
        'latitude_seconds_measure' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.latitude_seconds_measure',
            'config' => [
                'type' => 'number',
                'size' => '5',
                'max' => '5',
                'range' => [
                    'lower' => 0,
                    'upper' => 60,
                ],
                'checkbox' => '0',
                'eval' => 'nospace',
            ],
        ],
        'latitude_direction_code' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.latitude_direction_code',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.latitude_direction_code.I.0', 'value' => 'N'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.latitude_direction_code.I.1', 'value' => 'S']],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'longitude_degrees_measure' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.longitude_degrees_measure',
            'config' => [
                'type' => 'number',
                'size' => '5',
                'max' => '5',
                'range' => [
                    'lower' => 0,
                    'upper' => 180,
                ],
                'checkbox' => '0',
                'eval' => 'nospace',
            ],
        ],
        'longitude_minutes_measure' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.longitude_minutes_measure',
            'config' => [
                'type' => 'number',
                'size' => '5',
                'max' => '5',
                'range' => [
                    'lower' => 0,
                    'upper' => 60,
                ],
                'checkbox' => '0',
                'eval' => 'nospace',
            ],
        ],
        'longitude_seconds_measure' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.longitude_seconds_measure',
            'config' => [
                'type' => 'number',
                'size' => '5',
                'max' => '5',
                'range' => [
                    'lower' => 0,
                    'upper' => 60,
                ],
                'checkbox' => '0',
                'eval' => 'nospace',
            ],
        ],
        'longitude_direction_code' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.longitude_direction_code',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.longitude_direction_code.I.0', 'value' => 'W'], ['label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.longitude_direction_code.I.1', 'value' => 'E']],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'postal_delivery_point' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.postal_delivery_point',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'post_office' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.post_office',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'post_town' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.post_town',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            ],
        ],
        'administrative_area' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.administrative_area',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'static_country_zones',
                'foreign_table_where' => 'ORDER BY static_country_zones.zn_name_local',
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
        'country' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.country',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'static_countries',
                'foreign_table_where' => 'ORDER BY static_countries.cn_official_name_en',
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
        'images' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.images',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_party_images',
                'foreign_field' => 'address',
                'foreign_type' => 1,
                // Image type = 1 (Address)
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            ],
        ],
        'remarks' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.remarks',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'parties,--palette--,thoroughfare,--palette--;;1,post_code,--palette--;;2,locality,--palette--;;3,administrative_area,--palette--;;4,country,--palette--;LLL:EXT:party/locallang_db.xml:tx_party_addresses.latitude;5,--palette--;LLL:EXT:party/locallang_db.xml:tx_party_addresses.longitude;6,images,remarks,--palette--',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => 'thoroughfare_number, building_name, location, lot',
        ],
        '2' => [
            'showitem' => 'premise_type, internal_thoroughfare, reference_location',
        ],
        '3' => [
            'showitem' => 'rural_delivery',
        ],
        '4' => [
            'showitem' => 'postal_delivery_point, post_office, post_town',
        ],
        '5' => [
            'showitem' => 'latitude_degrees_measure, latitude_minutes_measure, latitude_seconds_measure, latitude_direction_code',
        ],
        '6' => [
            'showitem' => 'longitude_degrees_measure, longitude_minutes_measure, longitude_seconds_measure, longitude_direction_code',
        ],
    ],
];


if(ExtensionManagementUtility::isLoaded('wec_map')) {
    $GLOBALS['TCA']['tx_party_addresses']['ctrl']['EXT']['wec_map'] = [
        'isMappable' => 1,
        'addressFields' => [
            'street' => 'thoroughfare',
            'city' => 'locality',
            'state' => 'administrative_area',
            'zip' => 'post_code',
            'country' => 'country',
        ],
    ];

    $mapTCA = [
        'tx_wecmap_map' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:wec_map/locallang_db.xml:berecord_maplabel',
            'config' => [
                'type' => 'passthrough',
                'form_type' => 'user',
                'userFunc' => 'tx_wecmap_backend->drawMap',
            ],
        ],
    ];
    ExtensionManagementUtility::addTCAcolumns('tx_party_addresses', $mapTCA, 1);
    $GLOBALS['TCA']['tx_party_addresses']['interface']['showRecordFieldList'] .= ',tx_wecmap_map';
    ib_extMgm::addToAllTCAtypes('tx_party_addresses', 'tx_wecmap_map');
}


return $result;
