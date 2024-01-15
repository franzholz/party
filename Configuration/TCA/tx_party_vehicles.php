<?php

defined('TYPO3') || die('Access denied.');




$GLOBALS['TCA']['tx_party_vehicles'] = array(
    'ctrl' => array(
        'title'     => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles',
        'label'     => 'license_plate',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY license_plate',
        'delete' => 'deleted',
        'iconfile'          => PATH_BE_PARTY_REL . 'icons/icon_tx_party_vehicles.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'party,make,type,model,license_plate,manufacture_date,engine_number,chassis_number,body_number,remarks'
    ),
    'columns' => array(
        'party' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.party',
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
        'make' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.make',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_party_vehicle_manufacturers',
                'foreign_table_where' => 'AND tx_party_vehicle_manufacturers.pid=###STORAGE_PID### ORDER BY tx_party_vehicle_manufacturers.uid',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'type' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.type',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_party_types',
                'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_vehicles-type%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )
        ),
        'model' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.model',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'license_plate' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.license_plate',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'manufacture_date' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.manufacture_date',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'engine_number' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.engine_number',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'chassis_number' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.chassis_number',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'body_number' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.body_number',
            'config' => array(
                'type' => 'input',
                'size' => '30',
                'max' => '90',
                'eval' => 'trim',
            )
        ),
        'remarks' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.remarks',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
    ),
    'types' => array(
        '0' => array('showitem' => 'party;;;;1-1-1, type, make, model, license_plate;;;;1-1-1, manufacture_date, engine_number, chassis_number, body_number, remarks;;;;1-1-1')
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    )
);
