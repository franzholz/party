<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}


// table tx_party_addresses
$TCA['tx_party_addresses'] = array (
	'ctrl' => $TCA['tx_party_addresses']['ctrl'],
	'interface' => array (
	'showRecordFieldList' => 'party_id,locality,thoroughfare,thoroughfare_number,building_name,location,lot,premise_type_id,internal_thoroughfare,reference_location,post_code,rural_delivery,latitude_degrees_measure,latitude_minutes_measure,latitude_seconds_measure,latitude_direction_code,longitude_degrees_measure,longitude_minutes_measure,longitude_seconds_measure,longitude_direction_code,postal_delivery_point,post_office,post_town,administrative_area_id,country,images,remarks'
	),
	'feInterface' => $TCA['tx_party_addresses']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.parties',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_address_usages',
				'foreign_field' => 'address',
				'foreign_label' => 'party_id',
				'foreign_selector' => 'party_id',
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
		'premise_type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.premise_type_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_types',
				'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_addresses-premise_type_id%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
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
		'administrative_area_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_addresses.administrative_area_id',
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
		'0' => array('showitem' => 'party_id;;;;1-1-1, thoroughfare;;1, post_code;;2, locality;;3, administrative_area_id;;4, country, --palette--;LLL:EXT:party/locallang_db.xml:tx_party_addresses.latitude;5;;1-1-1, --palette--;LLL:EXT:party/locallang_db.xml:tx_party_addresses.longitude;6, images, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => 'thoroughfare_number, building_name, location, lot'),
		'2' => array('showitem' => 'premise_type_id, internal_thoroughfare, reference_location'),
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
			'state' => 'administrative_area_id',
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
	t3lib_extMgm::addToAllTCAtypes('tx_party_addresses', 'tx_wecmap_map');
}

// table tx_party_birth_signs
$TCA['tx_party_birth_signs'] = array (
	'ctrl' => $TCA['tx_party_birth_signs']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title'
	),
	'feInterface' => $TCA['tx_party_birth_signs']['feInterface'],
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
				'foreign_table'       => 'tx_party_birth_signs',
				'foreign_table_where' => 'AND tx_party_birth_signs.pid=###CURRENT_PID### AND tx_party_birth_signs.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array (
			'config' => array (
				'type' => 'passthrough'
			)
		),
		'short_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_birth_signs.short_title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
				'eval' => 'trim',
			)
		),
		'title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_birth_signs.title',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '60',
				'eval' => 'trim',
			)
		),
		'long_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_birth_signs.long_title',
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


// table tx_party_ethnicities
$TCA['tx_party_ethnicities'] = array (
	'ctrl' => $TCA['tx_party_ethnicities']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title'
	),
	'feInterface' => $TCA['tx_party_ethnicities']['feInterface'],
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
				'foreign_table'       => 'tx_party_ethnicities',
				'foreign_table_where' => 'AND tx_party_ethnicities.pid=###CURRENT_PID### AND tx_party_ethnicities.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array (
			'config' => array (
				'type' => 'passthrough'
			)
		),
		'short_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_ethnicities.short_title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
				'eval' => 'trim',
			)
		),
		'title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_ethnicities.title',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '60',
				'eval' => 'trim',
			)
		),
		'long_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_ethnicities.long_title',
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



// table tx_party_habits
$TCA['tx_party_habits'] = array (
	'ctrl' => $TCA['tx_party_habits']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title'
	),
	'feInterface' => $TCA['tx_party_habits']['feInterface'],
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
				'foreign_table'       => 'tx_party_habits',
				'foreign_table_where' => 'AND tx_party_habits.pid=###CURRENT_PID### AND tx_party_habits.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array (
			'config' => array (
				'type' => 'passthrough'
			)
		),
		'short_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_habits.short_title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
				'eval' => 'trim',
			)
		),
		'title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_habits.title',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '60',
				'eval' => 'trim',
			)
		),
		'long_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_habits.long_title',
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


// table tx_party_hobbies
$TCA['tx_party_hobbies'] = array (
	'ctrl' => $TCA['tx_party_hobbies']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title'
	),
	'feInterface' => $TCA['tx_party_hobbies']['feInterface'],
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
				'foreign_table'       => 'tx_party_hobbies',
				'foreign_table_where' => 'AND tx_party_hobbies.pid=###CURRENT_PID### AND tx_party_hobbies.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array (
			'config' => array (
				'type' => 'passthrough'
			)
		),
		'short_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_hobbies.short_title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
				'eval' => 'trim',
			)
		),
		'title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_hobbies.title',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '60',
				'eval' => 'trim',
			)
		),
		'long_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_hobbies.long_title',
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


// table tx_party_occupation_ranks
$TCA['tx_party_occupation_ranks'] = array (
	'ctrl' => $TCA['tx_party_occupation_ranks']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title'
	),
	'feInterface' => $TCA['tx_party_occupation_ranks']['feInterface'],
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
				'foreign_table'       => 'tx_party_occupation_ranks',
				'foreign_table_where' => 'AND tx_party_occupation_ranks.pid=###CURRENT_PID### AND tx_party_occupation_ranks.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array (
			'config' => array (
				'type' => 'passthrough'
			)
		),
		'short_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupation_ranks.short_title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
				'eval' => 'trim',
			)
		),
		'title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupation_ranks.title',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '60',
				'eval' => 'trim',
			)
		),
		'long_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupation_ranks.long_title',
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


// table tx_party_occupation_roles
$TCA['tx_party_occupation_roles'] = array (
	'ctrl' => $TCA['tx_party_occupation_roles']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title'
	),
	'feInterface' => $TCA['tx_party_occupation_roles']['feInterface'],
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
				'foreign_table'       => 'tx_party_occupation_roles',
				'foreign_table_where' => 'AND tx_party_occupation_roles.pid=###CURRENT_PID### AND tx_party_occupation_roles.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array (
			'config' => array (
				'type' => 'passthrough'
			)
		),
		'short_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupation_roles.short_title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
				'eval' => 'trim',
			)
		),
		'title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupation_roles.title',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '60',
				'eval' => 'trim',
			)
		),
		'long_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupation_roles.long_title',
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


// table tx_party_organisation_natures
$TCA['tx_party_organisation_natures'] = array (
	'ctrl' => $TCA['tx_party_organisation_natures']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title'
	),
	'feInterface' => $TCA['tx_party_organisation_natures']['feInterface'],
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
				'foreign_table'       => 'tx_party_organisation_natures',
				'foreign_table_where' => 'AND tx_party_organisation_natures.pid=###CURRENT_PID### AND tx_party_organisation_natures.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array (
			'config' => array (
				'type' => 'passthrough'
			)
		),
		'short_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_organisation_natures.short_title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
				'eval' => 'trim',
			)
		),
		'title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_organisation_natures.title',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '60',
				'eval' => 'trim',
			)
		),
		'long_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_organisation_natures.long_title',
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


// table tx_party_parties
$TCA['tx_party_parties'] = array (
	'ctrl' => $TCA['tx_party_parties']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'type,marital_status,religion_id,birth_place,birth_date_time,birth_date_time_precision,birth_sign_id,birth_star,weight,height,breast,waist,hip,hair_colour,eye_colour,skin_colour,blood_group,physical_status_id,ethnicity_id,gender,hobby_id,habit_id,organisation_type_id,organisation_nature_id,company_registration_identifier,company_registration_date,number_of_employees,remarks,name_id,address_id,account_id,contact_number_id,country_of_residence_id,document_id,electronic_address_identifier_id,image_id,nationality_id,relationship_id,revenue_id,vehicle_id,contact_id,visa_id,disability_id,language_id,mark_id,occupations,qualifications,stock_market_id,event_id,identifier_id,membership_id,allergy_id,favourite_id,preference_id'
	),
	'feInterface' => $TCA['tx_party_parties']['feInterface'],
	'columns' => array (
		'type' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.type',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.type.I.0', '0', PATH_BE_PARTY_REL . 'icons/selicon_tx_party_parties_type_0.gif'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.type.I.1', '1', PATH_BE_PARTY_REL . 'icons/selicon_tx_party_parties_type_1.gif'),
				),
				'size' => 1,
				'maxitems' => 1,
			)
		),
		'marital_status' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', ''),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.0', 'SINGLE'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.1', 'ENGAGED'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.2', 'MARRIED'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.3', 'SEPARATED'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.4', 'DIVORCED'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.5', 'WIDOWED'),
				),
				'size' => 1,
				'maxitems' => 1,
			)
		),
		'religion_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.religion_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_religions',
				'foreign_table_where' => 'AND tx_party_religions.pid=###STORAGE_PID### ORDER BY tx_party_religions.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'birth_place' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_place',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'birth_date_time' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_date_time',
			'config' => Array (
				'type'     => 'input',
				'size'     => '12',
				'max'      => '20',
				'eval'     => 'datetime',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'birth_date_time_precision' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_date_time_precision',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'birth_sign_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_sign_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_birth_signs',
				'foreign_table_where' => 'AND tx_party_birth_signs.pid=###SITEROOT### ORDER BY tx_party_birth_signs.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'birth_star' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_star',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'weight' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.weight',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'checkbox' => '0',
				'eval' => 'int,nospace',
			)
		),
		'height' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.height',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'checkbox' => '0',
				'eval' => 'int,nospace',
			)
		),
		'breast' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.breast',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'checkbox' => '0',
				'eval' => 'int,nospace',
			)
		),
		'waist' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.waist',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'checkbox' => '0',
				'eval' => 'int,nospace',
			)
		),
		'hip' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hip',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'checkbox' => '0',
				'eval' => 'int,nospace',
			)
		),
		'hair_colour' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', ''),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.0', 'BROWN'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.1', 'BLACK'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.2', 'BLONDE'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.3', 'RED'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.4', 'GREY'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.5', 'WHITE'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.6', 'GINGER'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.7', 'PURPLE'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.8', 'BLUE'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.9', 'GREEN'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour.I.10', 'PINK'),
				),
				'size' => 1,
				'maxitems' => 1,
			)
		),
		'eye_colour' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', ''),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.0', 'AMBER'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.1', 'BLUE'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.2', 'BROWN'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.3', 'GRAY'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.4', 'GREEN'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.5', 'HAZEL'),
				),
				'size' => 1,
				'maxitems' => 1,
			)
		),
		'skin_colour' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.skin_colour',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'blood_group' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', ''),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.0', 'O_NEGATIVE'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.1', 'O_POSITIVE'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.2', 'A_NEGATIVE'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.3', 'A_POSITIVE'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.4', 'B_NEGATIVE'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.5', 'B_POSITIVE'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.6', 'AB_NEGATIVE'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.7', 'AB_POSITIVE'),
				),
				'size' => 1,
				'maxitems' => 1,
			)
		),
		'physical_status_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.physical_status_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_physical_status',
				'foreign_table_where' => 'AND tx_party_physical_status.pid=###STORAGE_PID### ORDER BY tx_party_physical_status.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'ethnicity_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.ethnicity_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_ethnicities',
				'foreign_table_where' => 'AND tx_party_ethnicities.pid=###STORAGE_PID### ORDER BY tx_party_ethnicities.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'gender' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.gender',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.gender.I.0', '0'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.gender.I.1', '1'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.gender.I.2', '2'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_parties.gender.I.3', '9'),
				),
				'size' => 1,
				'maxitems' => 1,
			)
		),
		'hobby_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.hobby_id',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'tx_party_hobbies',
				'foreign_table_where' => 'AND tx_party_hobbies.pid=###STORAGE_PID### ORDER BY tx_party_hobbies.uid',
				'size' => 5,
				'autoSizeMax' => 20,
				'minitems' => 0,
				'maxitems' => 99,
				'MM' => 'tx_party_parties_mm_hobbies',
			)
		),
		'habit_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.habit_id',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'tx_party_habits',
				'foreign_table_where' => 'AND tx_party_habits.pid=###STORAGE_PID### ORDER BY tx_party_habits.uid',
				'size' => 5,
				'autoSizeMax' => 20,
				'minitems' => 0,
				'maxitems' => 99,
				'MM' => 'tx_party_parties_mm_habits',
			)
		),
		'organisation_type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.organisation_type_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_types',
				'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_organisations-organisation_type_id%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'organisation_nature_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.organisation_nature_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_organisation_natures',
				'foreign_table_where' => 'AND tx_party_organisation_natures.pid=###STORAGE_PID### ORDER BY tx_party_organisation_natures.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'company_registration_identifier' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.company_registration_identifier',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'company_registration_date' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.company_registration_date',
			'config' => Array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'number_of_employees' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.number_of_employees',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'checkbox' => '0',
				'eval' => 'int,nospace',
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
		'name_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.name_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_names',
				'foreign_field' => 'party_id',
				'foreign_type' => array(
					'0' => '0',		// Party type = 0 (Person) => Name type = 0 (Person name)
					'1' => '1',		// Party type = 1 (Organisation) => Name type = 1 (Organisation name)
				),
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'address_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.address_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_address_usages',
				'foreign_field' => 'party_id',
				'foreign_label' => 'address_id',
				'foreign_selector' => 'address_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['combined'],
			)
		),
		'account_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.account_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_accounts',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'contact_number_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.contact_number_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_contact_number_usages',
				'foreign_field' => 'party_id',
				'foreign_label' => 'contact_number',
				'foreign_selector' => 'contact_number',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['combined'],
			)
		),
		'country_of_residence_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.country_of_residence_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_countries_of_residence',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'document_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.document_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_documents',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'electronic_address_identifier_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.electronic_address_identifier_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_electronic_address_identifier_usages',
				'foreign_field' => 'party_id',
				'foreign_label' => 'electronic_address_identifier',
				'foreign_selector' => 'electronic_address_identifier',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['combined'],
			)
		),
		'image_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.image_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_images',
				'foreign_field' => 'party_id',
				'foreign_type' => 0,	// Any party type => Image type = 0 (Party)
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'nationality_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.nationality_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_nationalities',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'relationship_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.relationship_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_relationships',
				'foreign_field' => 'primary_party',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'revenue_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.revenue_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_revenues',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'vehicle_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.vehicle_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_vehicles',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'contact_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.contact_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_contacts',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'visa_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.visa_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_visas',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'disability_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.disability_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_disabilities',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'language_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.language_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_languages',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'mark_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.mark_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_marks',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'occupation_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.occupation_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_occupations',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'qualification_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.qualification_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_qualifications',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'stock_market_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.stock_market_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_stock_markets',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'event_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.event_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_events',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'identifier_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.identifier_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_identifiers',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'membership_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.membership_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_memberships',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'allergy_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.allergy_id',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'tx_party_allergies',
				'foreign_table_where' => 'AND tx_party_allergies.pid=###STORAGE_PID### ORDER BY tx_party_allergies.uid',
				'size' => 5,
				'autoSizeMax' => 20,
				'minitems' => 0,
				'maxitems' => 99,
				'MM' => 'tx_party_parties_mm_allergies',
			)
		),
		'favourite_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.favourite_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_favourites',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
		'preference_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_parties.preference_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_preferences',
				'foreign_field' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			)
		),
	),
	'types' => array (
	'0' => array('showitem' => '
		type,

		name_id;;;;1-1-1,
		address_id,
		contact_number_id,
		electronic_address_identifier_id,

		image_id;;;;1-1-1,

		relationship_id;;;;1-1-1,

		identifier_id;;;;1-1-1,

		remarks;;;;1-1-1,

		--div--;LLL:EXT:party/locallang_db.xml:tx_party_parties.person,

		marital_status,
		religion_id,

		hobby_id;;;;1-1-1,
		habit_id,

		favourite_id;;;;1-1-1,
		preference_id,

		language_id;;;;1-1-1,
		qualification_id,

		occupation_id;;;;1-1-1,

		--div--;LLL:EXT:party/locallang_db.xml:tx_party_parties.events,

		birth_date_time;;1,
		birth_place;;2,

		contact_id;;;;1-1-1,
		event_id,

		--div--;LLL:EXT:party/locallang_db.xml:tx_party_parties.physical,

		gender,

		weight;;;;1-1-1,
		height,
		breast,
		waist,
		hip,

		hair_colour;;;;1-1-1,
		eye_colour,
		skin_colour,

		blood_group;;;;1-1-1,
		physical_status_id,
		ethnicity_id,

		allergy_id;;;;1-1-1,
		mark_id,
		disability_id,

		--div--;LLL:EXT:party/locallang_db.xml:tx_party_parties.ownership,

		nationality_id,
		country_of_residence_id,

		visa_id;;;;1-1-1,

		account_id;;;;1-1-1,
		memberships,

		documents;;;;1-1-1,

		revenue_id;;;;1-1-1,

		vehicle_id;;;;1-1-1
	'),
	'1' => array('showitem' => '
		type,

		name_id;;;;1-1-1,
		address_id,
		contact_number_id,
		electronic_address_identifier_id,

		image_id;;;;1-1-1,

		relationship_id;;;;1-1-1,

		identifier_id;;;;1-1-1,

		remarks;;;;1-1-1,

		--div--;LLL:EXT:party/locallang_db.xml:tx_party_parties.organisation,

		organisation_type_id,
		organisation_nature_id;;;;1-1-1,

		company_registration_identifier;;;;1-1-1,

		number_of_employees;;;;1-1-1,

		stock_market_id;;;;1-1-1,

		--div--;LLL:EXT:party/locallang_db.xml:tx_party_parties.events,

		company_registration_date,

		contact_id;;;;1-1-1,
		event_id,

		--div--;LLL:EXT:party/locallang_db.xml:tx_party_parties.ownership,

		nationality_id,
		country_of_residence_id,

		account_id;;;;1-1-1,
		membership_id,

		document_id;;;;1-1-1,

		revenue_id;;;;1-1-1,

		vehicle_id;;;;1-1-1
	'),
	),
	'palettes' => array (
		'1' => array('showitem' => 'birth_date_time_precision'),
		'2' => array('showitem' => 'birth_sign_id, birth_star'),
	),
);


// table tx_party_person_name_titles
$TCA['tx_party_person_name_titles'] = array (
	'ctrl' => $TCA['tx_party_person_name_titles']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title'
	),
	'feInterface' => $TCA['tx_party_person_name_titles']['feInterface'],
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
				'foreign_table'       => 'tx_party_person_name_titles',
				'foreign_table_where' => 'AND tx_party_person_name_titles.pid=###CURRENT_PID### AND tx_party_person_name_titles.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array (
			'config' => array (
				'type' => 'passthrough'
			)
		),
		'short_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_person_name_titles.short_title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
				'eval' => 'trim',
			)
		),
		'title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_person_name_titles.title',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '60',
				'eval' => 'trim',
			)
		),
		'long_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_person_name_titles.long_title',
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


// table tx_party_physical_status
$TCA['tx_party_physical_status'] = array (
	'ctrl' => $TCA['tx_party_physical_status']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title'
	),
	'feInterface' => $TCA['tx_party_physical_status']['feInterface'],
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
				'foreign_table'       => 'tx_party_physical_status',
				'foreign_table_where' => 'AND tx_party_physical_status.pid=###CURRENT_PID### AND tx_party_physical_status.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array (
			'config' => array (
				'type' => 'passthrough'
			)
		),
		'short_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_physical_status.short_title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
				'eval' => 'trim',
			)
		),
		'title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_physical_status.title',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '60',
				'eval' => 'trim',
			)
		),
		'long_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_physical_status.long_title',
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


// table tx_party_qualification_status
$TCA['tx_party_qualification_status'] = array (
	'ctrl' => $TCA['tx_party_qualification_status']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title'
	),
	'feInterface' => $TCA['tx_party_qualification_status']['feInterface'],
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
				'foreign_table'       => 'tx_party_qualification_status',
				'foreign_table_where' => 'AND tx_party_qualification_status.pid=###CURRENT_PID### AND tx_party_qualification_status.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array (
			'config' => array (
				'type' => 'passthrough'
			)
		),
		'short_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualification_status.short_title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
				'eval' => 'trim',
			)
		),
		'title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualification_status.title',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '60',
				'eval' => 'trim',
			)
		),
		'long_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualification_status.long_title',
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


// table tx_party_religions
$TCA['tx_party_religions'] = array (
	'ctrl' => $TCA['tx_party_religions']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title'
	),
	'feInterface' => $TCA['tx_party_religions']['feInterface'],
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


// table tx_party_types
$TCA['tx_party_types'] = array (
	'ctrl' => $TCA['tx_party_types']['ctrl'],
	'interface' => array (
	'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title,allowed_for_field,allowed_for_party_type'
	),
	'feInterface' => $TCA['tx_party_types']['feInterface'],
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
				'foreign_table'       => 'tx_party_types',
				'foreign_table_where' => 'AND tx_party_types.pid=###CURRENT_PID### AND tx_party_types.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array (
			'config' => array (
				'type' => 'passthrough'
			)
		),
		'short_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_types.short_title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
				'eval' => 'trim',
			)
		),
		'title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_types.title',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '60',
				'eval' => 'trim',
			)
		),
		'long_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_types.long_title',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'allowed_for_field' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.0',  'tx_party_addresses-premise_type_id'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.1',  'tx_party_contacts-type'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.2',  'tx_party_countries_of_residence-residency_type'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.3',  'tx_party_documents-document_type'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.4',  'tx_party_accounts-account_type'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.5',  'tx_party_languages-type'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.6',  'tx_party_accounts-ownership_type'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.7',  'tx_party_nationalities-nationality_type'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.8',  'tx_party_occupations-employment_type'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.9',  'tx_party_organisations-organisation_type'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.10', 'tx_party_revenues-type'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.11', 'tx_party_vehicles-type'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.12', 'tx_party_electronic_address_identifiers-type'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.13', 'tx_party_events-type'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.14', 'tx_party_identifiers-type'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.15', 'tx_party_memberships-type'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.16', 'tx_party_favourites-type'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_field.I.17', 'tx_party_preferences-type'),
				),
				'size' => 1,
				'maxitems' => 1,
			)
		),
		'allowed_for_party_type' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_party_type',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_party_type.I.0', 'ALL'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_party_type.I.1', 'PERSONS'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for_party_type.I.2', 'ORGANISATIONS'),
				),
				'size' => 1,
				'maxitems' => 1,
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, short_title, title;;;;2-2-2, long_title;;;;3-3-3, allowed_for_field, allowed_for_party_type')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_vehicle_manufacturers
$TCA['tx_party_vehicle_manufacturers'] = array (
	'ctrl' => $TCA['tx_party_vehicle_manufacturers']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title'
	),
	'feInterface' => $TCA['tx_party_vehicle_manufacturers']['feInterface'],
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
				'foreign_table'       => 'tx_party_vehicle_manufacturers',
				'foreign_table_where' => 'AND tx_party_vehicle_manufacturers.pid=###CURRENT_PID### AND tx_party_vehicle_manufacturers.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array (
			'config' => array (
				'type' => 'passthrough'
			)
		),
		'short_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicle_manufacturers.short_title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
				'eval' => 'trim',
			)
		),
		'title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicle_manufacturers.title',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '60',
				'eval' => 'trim',
			)
		),
		'long_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicle_manufacturers.long_title',
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


// table tx_party_accounts
$TCA['tx_party_accounts'] = array (
	'ctrl' => $TCA['tx_party_accounts']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,organisation_id,ownership_type_id,account_no,issuing_authority,account_type_id,remarks'
	),
	'feInterface' => $TCA['tx_party_accounts']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_accounts.party_id',
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
		'organisation_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_accounts.organisation_id',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'tx_party_parties',
				'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### AND tx_party_parties.type=1 ORDER BY tx_party_parties.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'ownership_type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_accounts.ownership_type',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_types',
				'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_accounts-ownership_type_id%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'account_no' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_accounts.account_no',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
				'eval' => 'trim',
			)
		),
		'issuing_authority' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_accounts.issuing_authority',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
				'eval' => 'trim',
			)
		),
		'account_type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_accounts.account_type',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_types',
				'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_accounts-account_type_id%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_accounts.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
	'0' => array('showitem' => 'party_id;;;;1-1-1, account_no, organisation_id, ownership_type_id, issuing_authority;;;;1-1-1, account_type_id, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_contacts
$TCA['tx_party_contacts'] = array (
	'ctrl' => $TCA['tx_party_contacts']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,type_id,contact,remarks'
	),
	'feInterface' => $TCA['tx_party_contacts']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contacts.party_id',
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
		'type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contacts.type_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_types',
				'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_contacts-type_id%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'contact' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contacts.contact',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contacts.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, type_id, contact, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_contact_numbers
$TCA['tx_party_contact_numbers'] = array (
	'ctrl' => $TCA['tx_party_contact_numbers']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,media_type,country_id,area_code,local_number,extension,pin,contact_hours,remarks'
	),
	'feInterface' => $TCA['tx_party_contact_numbers']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.parties',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_contact_number_usages',
				'foreign_field' => 'contact_number',
				'foreign_label' => 'party_id',
				'foreign_selector' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['combined'],
			)
		),
		'media_type' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.media_type',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.media_type.I.0', 'TELEPHONE'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.media_type.I.1', 'MOBILE'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.media_type.I.2', 'FAX'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.media_type.I.3', 'MODEM'),
				),
				'size' => 1,
				'maxitems' => 1,
			)
		),
		'country_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.country_id',
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
		'area_code' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.area_code',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'local_number' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.local_number',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'extension' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.extension',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'pin' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.pin',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'contact_hours' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.contact_hours',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, media_type, country_id, area_code, local_number;;1, contact_hours;;;;1-1-1, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => 'extension, pin')
	)
);


// table tx_party_countries_of_residence
$TCA['tx_party_countries_of_residence'] = array (
	'ctrl' => $TCA['tx_party_countries_of_residence']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,country_id,residency_type_id,remarks'
	),
	'feInterface' => $TCA['tx_party_countries_of_residence']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_countries_of_residence.party_id',
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
		'country_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_countries_of_residence.country',
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
		'residency_type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_countries_of_residence.residency_type_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_types',
				'foreign_table_where' => "AND tx_party_types.allowed_for_field like '%tx_party_countries_of_residence-residency_type_id%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_countries_of_residence.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, residency_type_id, country_id, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_disabilities
$TCA['tx_party_disabilities'] = array (
	'ctrl' => $TCA['tx_party_disabilities']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,disability,cause,remarks'
	),
	'feInterface' => $TCA['tx_party_disabilities']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_disabilities.party_id',
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
		'disability' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_disabilities.disability',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'cause' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_disabilities.cause',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_disabilities.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, disability, cause, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_documents
$TCA['tx_party_documents'] = array (
	'ctrl' => $TCA['tx_party_documents']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,document_type_id,document_no,issued_by_id,issue_place,privilege,restriction,group_name,name_on_document,remarks'
	),
	'feInterface' => $TCA['tx_party_documents']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.party_id',
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
		'document_type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.document_type_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_types',
				'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_documents-document_type_id%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'document_no' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.document_no',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'issued_by_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.issued_by_id',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'tx_party_parties',
				'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### ORDER BY tx_party_parties.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'issue_place' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.issue_place',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'privilege' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.privilege',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'restriction' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.restriction',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'group_name' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.group_name',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'name_on_document' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.name_on_document',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_documents.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, document_type_id, document_no, issued_by_id;;;;1-1-1, issue_place, name_on_document;;1;;1-1-1, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => 'privilege, restriction, group_name'),
	)
);


// table tx_party_electronic_address_identifiers
$TCA['tx_party_electronic_address_identifiers'] = array (
	'ctrl' => $TCA['tx_party_electronic_address_identifiers']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,type,electronic_address_identifier,remarks'
	),
	'feInterface' => $TCA['tx_party_electronic_address_identifiers']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifiers.party_id',
			'config' => Array (
				'type' => 'inline',
				'foreign_table' => 'tx_party_electronic_address_identifier_usages',
				'foreign_field' => 'electronic_address_identifier',
				'foreign_label' => 'party_id',
				'foreign_selector' => 'party_id',
				'maxitems' => 99,
				'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['combined'],
			)
		),
		'type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifiers.type_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_types',
				'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_electronic_address_identifiers-type_id%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'electronic_address_identifier' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifiers.electronic_address_identifier',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifiers.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'pary_id;;;;1-1-1, type_id, electronic_address_identifier, remarks')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_images
$TCA['tx_party_images'] = array (
	'ctrl' => $TCA['tx_party_images']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'type,party_id,address_id,image,title,description,remarks'
	),
	'feInterface' => $TCA['tx_party_images']['feInterface'],
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
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_images.party_id',
			'config' => Array (
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'tx_party_parties',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'address_id' => Array (
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
		'0' => array('showitem' => 'type;;;;1-1-1, party_id, image, title;;;;2-2-2, description;;;;3-3-3, remarks'),
		'1' => array('showitem' => 'type;;;;1-1-1, address_id, image, title;;;;2-2-2, description;;;;3-3-3, remarks')
	),
);


// table tx_party_languages
$TCA['tx_party_languages'] = array (
	'ctrl' => $TCA['tx_party_languages']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,language_id,type_id,read_skills,write_skills,listen_skills,speak_skills,preference,remarks'
	),
	'feInterface' => $TCA['tx_party_languages']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.party_id',
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
		'language_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.language_id',
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
		'type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_languages.type_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_types',
				'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_languages-type_id%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
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
		'0' => array('showitem' => 'party_id;;;;1-1-1, type_id, language_id, preference, read_skills;;;;1-1-1, write_skills, listen_skills, speak_skills, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_marks
$TCA['tx_party_marks'] = array (
	'ctrl' => $TCA['tx_party_marks']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,mark,body_part,body_part_mark_location,remarks'
	),
	'feInterface' => $TCA['tx_party_marks']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_marks.party_id',
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
		'mark' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_marks.mark',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'body_part' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_marks.body_part',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'body_part_mark_location' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_marks.body_part_mark_location',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_marks.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, mark, body_part;;;;1-1-1, body_part_mark_location, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_nationalities
$TCA['tx_party_nationalities'] = array (
	'ctrl' => $TCA['tx_party_nationalities']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,country_id,nationality_type_id,remarks'
	),
	'feInterface' => $TCA['tx_party_nationalities']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_nationalities.party_id',
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
		'country_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_nationalities.country_id',
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
		'nationality_type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_nationalities.nationality_type_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_types',
				'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_nationalities-nationality_type_id%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_nationalities.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, nationality_type_id, country_id, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_occupations
$TCA['tx_party_occupations'] = array (
	'ctrl' => $TCA['tx_party_occupations']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,role_id,rank_id,employment_type_id,position_title,cost_centre,reports_to,remarks'
	),
	'feInterface' => $TCA['tx_party_occupations']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupations.party_id',
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
		'role_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupations.role_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_occupation_roles',
				'foreign_table_where' => 'AND tx_party_occupation_roles.pid=###STORAGE_PID### ORDER BY tx_party_occupation_roles.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'rank_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupations.rank_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_occupation_ranks',
				'foreign_table_where' => 'AND tx_party_occupation_ranks.pid=###STORAGE_PID### ORDER BY tx_party_occupation_ranks.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'employment_type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupations.employment_type_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_types',
				'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_occupations-employment_type_id%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'position_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupations.position_title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'cost_centre' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupations.cost_centre',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'reports_to' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupations.reports_to',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_occupations.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, role_id;;1, position_title;;2, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => 'rank_id, employment_type'),
		'2' => array('showitem' => 'cost_centre, reports_to'),
	)
);


// table tx_party_names
$TCA['tx_party_names'] = array (
	'ctrl' => $TCA['tx_party_names']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,type,standard,person_name_title_id,first_name,middle_name,ancestor_name,last_name,other_name,preceding_title,alias,generation_identifier,place_name,organisation_name_type,organisation_name,abbreviation,remarks'
	),
	'feInterface' => $TCA['tx_party_names']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.party_id',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'tx_party_parties',
				'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### ORDER BY tx_party_parties.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'type' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.type',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('LLL:EXT:party/locallang_db.xml:tx_party_names.type.I.0', '0'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_names.type.I.1', '1'),
				),
				'size' => 1,
				'maxitems' => 1,
			)
		),
		'standard' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.standard',
			'config' => Array (
				'type' => 'check',
			)
		),
		'person_name_title_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.person_name_title_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_person_name_titles',
				'foreign_table_where' => 'AND tx_party_person_name_titles.pid=###STORAGE_PID### ORDER BY tx_party_person_name_titles.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'first_name' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.first_name',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'middle_name' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.middle_name',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'ancestor_name' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.ancestor_name',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'last_name' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.last_name',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'other_name' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.other_name',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'preceding_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.preceding_title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'alias' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.alias',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'generation_identifier' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.generation_identifier',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'place_name' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.place_name',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'organisation_name_type' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name_type',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name_type.I.0', 'NAME_ONLY'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name_type.I.1', 'ORGANISATION_TYPE'),
					Array('LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name_type.I.2', 'NAME_AND_TYPE'),
				),
				'size' => 1,
				'maxitems' => 1,
			)
		),
		'organisation_name' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'abbreviation' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.abbreviation',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_names.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, type, standard, person_name_title_id;;1, first_name;;2, last_name;;3, remarks;;;;1-1-1'),
		'1' => array('showitem' => 'party_id;;;;1-1-1, type, standard, organisation_name_type, organisation_name, abbreviation, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => 'preceding_title'),
		'2' => array('showitem' => 'middle_name, ancestor_name'),
		'3' => array('showitem' => 'other_name, alias, generation_identifier, place_name'),
	)
);


// table tx_party_qualifications
$TCA['tx_party_qualifications'] = array (
	'ctrl' => $TCA['tx_party_qualifications']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,qualification_name,status_id,institution,start_date,completion_date,way_of_study,major_subject,minor_subject,mark,course_duration,award,restriction,registration,remarks'
	),
	'feInterface' => $TCA['tx_party_qualifications']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.party_id',
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
		'qualification_name' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.qualification_name',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'status_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.status_id',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'tx_party_qualification_status',
				'foreign_table_where' => 'AND tx_party_qualification_status.pid=###STORAGE_PID### ORDER BY tx_party_qualification_status.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'institution_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.institution_id',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'tx_party_parties',
				'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### AND tx_party_parties.type=1 ORDER BY tx_party_parties.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'start_date' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.start_date',
			'config' => Array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'completion_date' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.completion_date',
			'config' => Array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'way_of_study' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.way_of_study',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'major_subject' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.major_subject',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'minor_subject' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.minor_subject',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'mark' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.mark',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'course_duration' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.course_duration',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'award' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.award',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'restriction' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.restriction',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'registration' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.registration',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_qualifications.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, qualification_name, institution_id, status_id, start_date;;;;1-1-1, completion_date;;1, major_subject;;;;1-1-1, minor_subject, mark;;2, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => 'way_of_study'),
		'2' => array('showitem' => 'course_duration, award, restriction, registration'),
	)
);


// table tx_party_relationship_types
$TCA['tx_party_relationship_types'] = array (
	'ctrl' => $TCA['tx_party_relationship_types']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'relationship_type,description_as_primary,description_as_secondary,organisation_allowed_as_primary,organisation_allowed_as_secondary,person_allowed_as_primary,person_allowed_as_secondary'
	),
	'feInterface' => $TCA['tx_party_relationship_types']['feInterface'],
	'columns' => array (
		'relationship_type' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.relationship_type',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'description_as_primary' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.description_as_primary',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'description_as_secondary' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.description_as_secondary',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'organisation_allowed_as_primary' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.organisation_allowed_as_primary',
			'config' => Array (
				'type' => 'check',
			)
		),
		'organisation_allowed_as_secondary' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.organisation_allowed_as_secondary',
			'config' => Array (
				'type' => 'check',
			)
		),
		'person_allowed_as_primary' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.person_allowed_as_primary',
			'config' => Array (
				'type' => 'check',
			)
		),
		'person_allowed_as_secondary' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.person_allowed_as_secondary',
			'config' => Array (
				'type' => 'check',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'relationship_type;;;;1-1-1, description_as_primary, description_as_secondary, organisation_allowed_as_primary, organisation_allowed_as_secondary, person_allowed_as_primary, person_allowed_as_secondary')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_revenues
$TCA['tx_party_revenues'] = array (
	'ctrl' => $TCA['tx_party_revenues']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,currency_id,amount,amount_precision,after_tax,type_id,period_from,period_to,source,remarks'
	),
	'feInterface' => $TCA['tx_party_revenues']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_revenues.party_id',
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
		'currency_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_revenues.currency_id',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'static_currencies',
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
		'amount' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_revenues.amount',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'double2,nospace',
			)
		),
		'amount_precision' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_revenues.amount_precision',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '90',
				'eval' => 'double2,nospace',
			)
		),
		'after_tax' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_revenues.after_tax',
			'config' => Array (
				'type' => 'check',
			)
		),
		'type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_revenues.type_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_types',
				'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_revenues-type%' aND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'period_from' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_revenues.period_from',
			'config' => Array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'period_to' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_revenues.period_to',
			'config' => Array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'source' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_revenues.source',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_revenues.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, type_id, currency_id, amount;;1, period_from;;;;1-1-1, period_to, source;;;;1-1-1, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => 'amount_precision, after_tax'),
	)
);


// table tx_party_stock_markets
$TCA['tx_party_stock_markets'] = array (
	'ctrl' => $TCA['tx_party_stock_markets']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,market_id,listed_code,remarks'
	),
	'feInterface' => $TCA['tx_party_stock_markets']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_stock_markets.party_id',
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
		'market_id' => Array (
			'exclude' => 1,
			'displayCond' => 'EXT:static_info_tables_markets:LOADED:TRUE',
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_stock_markets.market_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'static_markets',
				'foreign_table_where' => 'AND static_markets.pid=###SITEROOT### ORDER BY static_markets.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'listed_code' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_stock_markets.listed_code',
			'config' => Array (
				'type' => 'input',
				'size' => '10',
				'max' => '10',
				'eval' => 'trim',
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_stock_markets.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, market_id, listed_code, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_vehicles
$TCA['tx_party_vehicles'] = array (
	'ctrl' => $TCA['tx_party_vehicles']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,make_id,type_id,model,license_plate,manufacture_date,engine_number,chassis_number,body_number,remarks'
	),
	'feInterface' => $TCA['tx_party_vehicles']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.party_id',
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
		'make_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.make_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_vehicle_manufacturers',
				'foreign_table_where' => 'AND tx_party_vehicle_manufacturers.pid=###STORAGE_PID### ORDER BY tx_party_vehicle_manufacturers.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.type_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_types',
				'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_vehicles-type_id%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'model' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.model',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'license_plate' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.license_plate',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'manufacture_date' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.manufacture_date',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'engine_number' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.engine_number',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'chassis_number' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.chassis_number',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'body_number' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.body_number',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_vehicles.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, type, make, model, license_plate;;;;1-1-1, manufacture_date, engine_number, chassis_number, body_number, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_visas
$TCA['tx_party_visas'] = array (
	'ctrl' => $TCA['tx_party_visas']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,country_id,number,code,issue_date,issue_place,maximum_stay,restriction,privilege,special_condition,remarks'
	),
	'feInterface' => $TCA['tx_party_visas']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_visas.party_id',
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
		'country_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_visas.country_id',
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
		'number' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_visas.number',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'code' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_visas.code',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'issue_date' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_visas.issue_date',
			'config' => Array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'issue_place' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_visas.issue_place',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'maximum_stay' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_visas.maximum_stay',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'restriction' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_visas.restriction',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'privilege' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_visas.privilege',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'special_condition' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_visas.special_condition',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_visas.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, country_id, number, code, issue_date;;;;1-1-1, issue_place, maximum_stay;;;;1-1-1, restriction, privilege, special_condition, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_events
$TCA['tx_party_events'] = array (
	'ctrl' => $TCA['tx_party_events']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,type_id,date,date_from,date_to,remarks'
	),
	'feInterface' => $TCA['tx_party_events']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_events.party_id',
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
		'type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_events.type_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_types',
				'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_events-type%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'date' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_events.date',
			'config' => Array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'date_from' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_events.date_from',
			'config' => Array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'date_to' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_events.date_to',
			'config' => Array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_events.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, type_id, date;;;;1-1-1, date_from;;;;1-1-1, date_to, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_identifiers
$TCA['tx_party_identifiers'] = array (
	'ctrl' => $TCA['tx_party_identifiers']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,type_id,identifier,issue_date,expiry_date,remarks'
	),
	'feInterface' => $TCA['tx_party_identifiers']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_identifiers.party_id',
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
		'type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_identifiers.type_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_types',
				'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_identifiers-type%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'identifier' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_identifiers.identifier',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'issue_date' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_identifiers.issue_date',
			'config' => Array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'expiry_date' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_identifiers.expiry_date',
			'config' => Array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_identifiers.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, type_id, identifier, issue_date;;;;1-1-1, expiry_date, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_memberships
$TCA['tx_party_memberships'] = array (
	'ctrl' => $TCA['tx_party_memberships']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,type_id,organisation_id,issue_date,expiry_date,remarks'
	),
	'feInterface' => $TCA['tx_party_memberships']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_memberships.party_id',
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
		'type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_memberships.type',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_types',
				'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_memberships-type_id%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'organisation_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_memberships.organisation_id',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'tx_party_parties',
				'foreign_table_where' => 'AND tx_party_parties.pid=###STORAGE_PID### ORDER BY tx_party_parties.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'issue_date' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_memberships.issue_date',
			'config' => Array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'expiry_date' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_memberships.expiry_date',
			'config' => Array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_memberships.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, type_id, organisation_id, issue_date;;;;1-1-1, expiry_date, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_allergies
$TCA['tx_party_allergies'] = array (
	'ctrl' => $TCA['tx_party_allergies']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'short_title,title,long_title'
	),
	'feInterface' => $TCA['tx_party_allergies']['feInterface'],
	'columns' => array (
		'short_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_allergies.short_title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
				'eval' => 'trim',
			)
		),
		'title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_allergies.title',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '60',
				'eval' => 'trim',
			)
		),
		'long_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_allergies.long_title',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '90',
				'eval' => 'trim',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'short_title;;;;1-1-1, title;;;;2-2-2, long_title;;;;3-3-3')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_favourites
$TCA['tx_party_favourites'] = array (
	'ctrl' => $TCA['tx_party_favourites']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,type_id,favourite,remarks'
	),
	'feInterface' => $TCA['tx_party_favourites']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_favourites.party_id',
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
		'type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_favourites.type_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_types',
				'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_favourites-type_id%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'favourite' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_favourites.favourite',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_favourites.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, type_id, favourite, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_preferences
$TCA['tx_party_preferences'] = array (
	'ctrl' => $TCA['tx_party_preferences']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,type_id,preference,remarks'
	),
	'feInterface' => $TCA['tx_party_preferences']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_preferences.party_id',
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
		'type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_preferences.type_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_types',
				'foreign_table_where' => "AND tx_party_types.allowed_for_field LIKE '%tx_party_preferences-type%' AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'preference' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_preferences.preference',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_preferences.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, type_id, preference, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_address_usages
$TCA['tx_party_address_usages'] = array (
	'ctrl' => $TCA['tx_party_address_usages']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,address_id,address_usage_id,standard'
	),
	'feInterface' => $TCA['tx_party_address_usages']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_address_usages.party_id',
			'config' => Array (
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'tx_party_parties',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'address_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_address_usages.address_id',
			// 'config' => Array (
			// 	'type' => 'inline',
			// 	'foreign_table' => 'tx_party_addresses',
			// 	'foreign_field' => 'uid',
			// 	'maxitems' => 99,
			// 	'appearance' => $GLOBALS['TYPO3_CONF_VARS']['extconf']['party']['inline_appearance']['default'],
			// )
			'config' => Array (
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'tx_party_addresses',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'address_usage_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_address_usages.address_usage_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_usages',
				'foreign_table_where' => 'AND tx_party_usages.pid=###STORAGE_PID### ORDER BY tx_party_usages.title',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'standard' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_address_usages.standard',
			'config' => Array (
				'type' => 'check',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, address_id, address_usage_id, standard')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_contact_number_usages
$TCA['tx_party_contact_number_usages'] = array (
	'ctrl' => $TCA['tx_party_contact_number_usages']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,contact_number_id,contact_number_usage_id,standard'
	),
	'feInterface' => $TCA['tx_party_contact_number_usages']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_number_usages.party_id',
			'config' => Array (
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'tx_party_parties',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'contact_number_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_number_usages.contact_number_id',
			'config' => Array (
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'tx_party_contact_numbers',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'contact_number_usage_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_number_usages.contact_number_usage_id',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_usages',
				'foreign_table_where' => 'AND tx_party_usages.pid=###STORAGE_PID### ORDER BY tx_party_usages.title',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'standard' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_contact_number_usages.standard',
			'config' => Array (
				'type' => 'check',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, contact_number_id, contact_number_usage_id, standard')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_electronic_address_identifier_usages
$TCA['tx_party_electronic_address_identifier_usages'] = array (
	'ctrl' => $TCA['tx_party_electronic_address_identifier_usages']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'party_id,electronic_address_identifier_id,electronic_address_identifier_usage_id,standard'
	),
	'feInterface' => $TCA['tx_party_electronic_address_identifier_usages']['feInterface'],
	'columns' => array (
		'party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages.party_id',
			'config' => Array (
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'tx_party_parties',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'electronic_address_identifier_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages.electronic_address_identifier',
			'config' => Array (
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'tx_party_electronic_address_identifiers',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'electronic_address_identifier_usage_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages.electronic_address_identifier_usage',
			'config' => Array (
				'type' => 'select',
				'items' => Array (
					Array('', 0),
				),
				'foreign_table' => 'tx_party_usages',
				'foreign_table_where' => 'AND tx_party_usages.pid=###STORAGE_PID### ORDER BY tx_party_usages.title',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'standard' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_electronic_address_identifier_usages.standard',
			'config' => Array (
				'type' => 'check',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'party_id;;;;1-1-1, electronic_address_identifier_id, electronic_address_identifier_usage_id, standard')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_usages
$TCA['tx_party_usages'] = array (
	'ctrl' => $TCA['tx_party_usages']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'short_title,title,long_title'
	),
	'feInterface' => $TCA['tx_party_usages']['feInterface'],
	'columns' => array (
		'short_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_usages.short_title',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
				'eval' => 'trim',
			)
		),
		'title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_usages.title',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '60',
				'eval' => 'trim',
			)
		),
		'long_title' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_usages.long_title',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '90',
				'eval' => 'trim',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'short_title;;;;1-1-1, title;;;;2-2-2, long_title;;;;3-3-3')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);


// table tx_party_relationships
$TCA['tx_party_relationships'] = array (
	'ctrl' => $TCA['tx_party_relationships']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'primary_party_id,secondary_party_id,relationship_type_id,date_established,date_lapsed,reason_lapsed,remarks'
	),
	'feInterface' => $TCA['tx_party_relationships']['feInterface'],
	'columns' => array (
		'primary_party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.primary_party_id',
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
		'secondary_party_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.secondary_party_id',
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
		'relationship_type_id' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.relationship_type_id',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'tx_party_relationship_types',
				'foreign_table_where' => 'AND tx_party_relationship_types.pid=###STORAGE_PID### ORDER BY tx_party_relationship_types.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'date_established' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.date_established',
			'config' => Array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'date_lapsed' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.date_lapsed',
			'config' => Array (
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0'
			)
		),
		'reason_lapsed' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.reason_lapsed',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
		'remarks' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_relationships.remarks',
			'config' => Array (
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'primary_party_id;;;;1-1-1, relationship_type_id, secondary_party_id, date_established;;;;1-1-1, date_lapsed, reason_lapsed, remarks;;;;1-1-1')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);

?>