<?php

defined('TYPO3') || die('Access denied.');

$TCA['tx_party_addresses'] = array (
    'ctrl' => $TCA['tx_party_addresses']['ctrl'],
    'interface' => array (
        'showRecordFieldList' => 'parties,locality,thoroughfare,thoroughfare_number,building_name,location,lot,premise_type,internal_thoroughfare,reference_location,post_code,rural_delivery,latitude_degrees_measure,latitude_minutes_measure,latitude_seconds_measure,latitude_direction_code,longitude_degrees_measure,longitude_minutes_measure,longitude_seconds_measure,longitude_direction_code,postal_delivery_point,post_office,post_town,administrative_area,country,images,remarks'
    ),
    'feInterface' => $TCA['tx_party_addresses']['feInterface'],
    'columns' => array (
        'parties' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.parties',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_address_usages',
                'foreign_field' => 'address',
                'foreign_label' => 'party',
                'foreign_selector' => 'party',
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['combined'],
            )
        ),
        'locality' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.locality',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'thoroughfare' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.thoroughfare',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'thoroughfare_number' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.thoroughfare_number',
            'config' => Array (
                'type' => 'input',
                'size' => '3',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'building_name' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.building_name',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'location' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.location',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'lot' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.lot',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'premise_type' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.premise_type',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                ),
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_ADDRESSES-PREMISE_TYPE%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'internal_thoroughfare' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.internal_thoroughfare',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'reference_location' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.reference_location',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'post_code' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.post_code',
            'config' => Array (
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'rural_delivery' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.rural_delivery',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'latitude_degrees_measure' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.latitude_degrees_measure',
            'config' => Array (
                'type' => 'input',
                'size' => '5',
                'max' => '5',
                'range' => Array ('lower'=>0,'upper'=>90),
                               'checkbox' => '0',
                               'eval' => 'int,nospace',
            )
        ),
        'latitude_minutes_measure' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.latitude_minutes_measure',
            'config' => Array (
                'type' => 'input',
                'size' => '5',
                'max' => '5',
                'range' => Array ('lower'=>0,'upper'=>60),
                               'checkbox' => '0',
                               'eval' => 'int,nospace',
            )
        ),
        'latitude_seconds_measure' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.latitude_seconds_measure',
            'config' => Array (
                'type' => 'input',
                'size' => '5',
                'max' => '5',
                'range' => Array ('lower'=>0,'upper'=>60),
                               'checkbox' => '0',
                               'eval' => 'int,nospace',
            )
        ),
        'latitude_direction_code' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.latitude_direction_code',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('LLL:EXT:party/locallang_db.xml:tx_party_addresses.latitude_direction_code.I.0', 'N'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_addresses.latitude_direction_code.I.1', 'S'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'longitude_degrees_measure' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.longitude_degrees_measure',
            'config' => Array (
                'type' => 'input',
                'size' => '5',
                'max' => '5',
                'range' => Array ('lower'=>0,'upper'=>180),
                               'checkbox' => '0',
                               'eval' => 'int,nospace',
            )
        ),
        'longitude_minutes_measure' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.longitude_minutes_measure',
            'config' => Array (
                'type' => 'input',
                'size' => '5',
                'max' => '5',
                'range' => Array ('lower'=>0,'upper'=>60),
                               'checkbox' => '0',
                               'eval' => 'int,nospace',
            )
        ),
        'longitude_seconds_measure' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.longitude_seconds_measure',
            'config' => Array (
                'type' => 'input',
                'size' => '5',
                'max' => '5',
                'range' => Array ('lower'=>0,'upper'=>60),
                               'checkbox' => '0',
                               'eval' => 'int,nospace',
            )
        ),
        'longitude_direction_code' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.longitude_direction_code',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('LLL:EXT:party/locallang_db.xml:tx_party_addresses.longitude_direction_code.I.0', 'W'),
                                  Array('LLL:EXT:party/locallang_db.xml:tx_party_addresses.longitude_direction_code.I.1', 'E'),
                ),
                'size' => 1,
                'maxitems' => 1,
            )
        ),
        'postal_delivery_point' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.postal_delivery_point',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'post_office' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.post_office',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'post_town' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.post_town',
            'config' => Array (
                'type' => 'input',
                'size' => '10',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'administrative_area' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.administrative_area',
            'config' => Array (
                'type' => 'select',
                'items' => Array (
                    Array('', 0),
                ),
                'foreign_table' => 'static_country_zones',
                'foreign_table_where' => 'ORDER BY static_country_zones.zn_name_local',
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
        'country' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.country',
            'config' => Array (
                'type' => 'select',
                'foreign_table' => 'static_countries',
                'foreign_table_where' => 'ORDER BY static_countries.cn_official_name_en',
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
        'images' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.images',
            'config' => Array (
                'type' => 'inline',
                'foreign_table' => 'tx_party_images',
                'foreign_field' => 'address',
                'foreign_type' => 1,	// Image type = 1 (Address)
                'maxitems' => 99,
                'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
            )
        ),
        'remarks' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.remarks',
            'config' => Array (
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
    ),
    'types' => array (
        '0' => array('showitem' => 'parties;;;;1-1-1, thoroughfare;;1, post_code;;2, locality;;3, administrative_area;;4, country, --palette--;LLL:EXT:party/locallang_db.xml:tx_party_addresses.latitude;5;;1-1-1, --palette--;LLL:EXT:party/locallang_db.xml:tx_party_addresses.longitude;6, images, remarks;;;;1-1-1')
    ),
    'palettes' => array (
        '1' => array('showitem' => 'thoroughfare_number, building_name, location, lot'),
                         '2' => array('showitem' => 'premise_type, internal_thoroughfare, reference_location'),
                         '3' => array('showitem' => 'rural_delivery'),
                         '4' => array('showitem' => 'postal_delivery_point, post_office, post_town'),
                         '5' => array('showitem' => 'latitude_degrees_measure, latitude_minutes_measure, latitude_seconds_measure, latitude_direction_code'),
                         '6' => array('showitem' => 'longitude_degrees_measure, longitude_minutes_measure, longitude_seconds_measure, longitude_direction_code'),
    )
);


if(t3lib_extMgm::isLoaded('wec_map')) {
    $TCA['tx_party_addresses']['ctrl']['EXT']['wec_map'] = array (
        'isMappable' => 1,
        'addressFields' => array (
            'street' => 'thoroughfare',
            'city' => 'locality',
            'state' => 'administrative_area',
            'zip' => 'post_code',
            'country' => 'country',
        ),
    );
    
    $mapTCA = array (
        'tx_wecmap_map' => array (
            'exclude' => 1,
            'label' => 'LLL:EXT:wec_map/locallang_db.xml:berecord_maplabel',
            'config' => array (
                'type' => 'passthrough',
                'form_type' => 'user',
                'userFunc' => 'tx_wecmap_backend->drawMap',
            ),
        ),
    );
    t3lib_extMgm::addTCAcolumns('tx_party_addresses', $mapTCA, 1);
    $TCA['tx_party_addresses']['interface']['showRecordFieldList'] .= ',tx_wecmap_map';
    ib_extMgm::addToAllTCAtypes('tx_party_addresses', 'tx_wecmap_map');
}
