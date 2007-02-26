<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA["tx_party_birth_signs"] = array (
	"ctrl" => $TCA["tx_party_birth_signs"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title"
	),
	"feInterface" => $TCA["tx_party_birth_signs"]["feInterface"],
	"columns" => array (
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
		"short_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_birth_signs.short_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_birth_signs.title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "60",	
				"eval" => "trim",
			)
		),
		"long_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_birth_signs.long_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, short_title, title;;;;2-2-2, long_title;;;;3-3-3")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_birth_stars"] = array (
	"ctrl" => $TCA["tx_party_birth_stars"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title"
	),
	"feInterface" => $TCA["tx_party_birth_stars"]["feInterface"],
	"columns" => array (
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
				'foreign_table'       => 'tx_party_birth_stars',
				'foreign_table_where' => 'AND tx_party_birth_stars.pid=###CURRENT_PID### AND tx_party_birth_stars.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array (		
			'config' => array (
				'type' => 'passthrough'
			)
		),
		"short_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_birth_stars.short_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_birth_stars.title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "60",	
				"eval" => "trim",
			)
		),
		"long_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_birth_stars.long_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, short_title, title;;;;2-2-2, long_title;;;;3-3-3")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_ethnicities"] = array (
	"ctrl" => $TCA["tx_party_ethnicities"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title"
	),
	"feInterface" => $TCA["tx_party_ethnicities"]["feInterface"],
	"columns" => array (
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
		"short_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_ethnicities.short_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_ethnicities.title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "60",	
				"eval" => "trim",
			)
		),
		"long_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_ethnicities.long_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, short_title, title;;;;2-2-2, long_title;;;;3-3-3")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_habits"] = array (
	"ctrl" => $TCA["tx_party_habits"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "short_title,title,long_title"
	),
	"feInterface" => $TCA["tx_party_habits"]["feInterface"],
	"columns" => array (
		"short_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_habits.short_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_habits.title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "60",	
				"eval" => "trim",
			)
		),
		"long_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_habits.long_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "short_title;;;;1-1-1, title;;;;2-2-2, long_title;;;;3-3-3")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_hobbies"] = array (
	"ctrl" => $TCA["tx_party_hobbies"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title"
	),
	"feInterface" => $TCA["tx_party_hobbies"]["feInterface"],
	"columns" => array (
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
		"short_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_hobbies.short_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_hobbies.title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "60",	
				"eval" => "trim",
			)
		),
		"long_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_hobbies.long_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, short_title, title;;;;2-2-2, long_title;;;;3-3-3")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_occupation_ranks"] = array (
	"ctrl" => $TCA["tx_party_occupation_ranks"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title"
	),
	"feInterface" => $TCA["tx_party_occupation_ranks"]["feInterface"],
	"columns" => array (
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
		"short_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_occupation_ranks.short_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_occupation_ranks.title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "60",	
				"eval" => "trim",
			)
		),
		"long_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_occupation_ranks.long_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, short_title, title;;;;2-2-2, long_title;;;;3-3-3")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_occupation_roles"] = array (
	"ctrl" => $TCA["tx_party_occupation_roles"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title"
	),
	"feInterface" => $TCA["tx_party_occupation_roles"]["feInterface"],
	"columns" => array (
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
		"short_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_occupation_roles.short_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_occupation_roles.title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "60",	
				"eval" => "trim",
			)
		),
		"long_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_occupation_roles.long_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, short_title, title;;;;2-2-2, long_title;;;;3-3-3")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_organisation_natures"] = array (
	"ctrl" => $TCA["tx_party_organisation_natures"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title"
	),
	"feInterface" => $TCA["tx_party_organisation_natures"]["feInterface"],
	"columns" => array (
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
		"short_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_organisation_natures.short_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_organisation_natures.title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "60",	
				"eval" => "trim",
			)
		),
		"long_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_organisation_natures.long_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, short_title, title;;;;2-2-2, long_title;;;;3-3-3")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_person_name_titles"] = array (
	"ctrl" => $TCA["tx_party_person_name_titles"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title"
	),
	"feInterface" => $TCA["tx_party_person_name_titles"]["feInterface"],
	"columns" => array (
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
		"short_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_person_name_titles.short_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_person_name_titles.title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "60",	
				"eval" => "trim",
			)
		),
		"long_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_person_name_titles.long_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, short_title, title;;;;2-2-2, long_title;;;;3-3-3")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_physical_status"] = array (
	"ctrl" => $TCA["tx_party_physical_status"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title"
	),
	"feInterface" => $TCA["tx_party_physical_status"]["feInterface"],
	"columns" => array (
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
		"short_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_physical_status.short_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_physical_status.title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "60",	
				"eval" => "trim",
			)
		),
		"long_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_physical_status.long_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, short_title, title;;;;2-2-2, long_title;;;;3-3-3")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_qualification_status"] = array (
	"ctrl" => $TCA["tx_party_qualification_status"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title"
	),
	"feInterface" => $TCA["tx_party_qualification_status"]["feInterface"],
	"columns" => array (
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
		"short_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_qualification_status.short_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_qualification_status.title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "60",	
				"eval" => "trim",
			)
		),
		"long_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_qualification_status.long_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, short_title, title;;;;2-2-2, long_title;;;;3-3-3")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_religions"] = array (
	"ctrl" => $TCA["tx_party_religions"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title"
	),
	"feInterface" => $TCA["tx_party_religions"]["feInterface"],
	"columns" => array (
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
		"short_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_religions.short_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_religions.title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "60",	
				"eval" => "trim",
			)
		),
		"long_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_religions.long_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, short_title, title;;;;2-2-2, long_title;;;;3-3-3")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_types"] = array (
	"ctrl" => $TCA["tx_party_types"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title,allowed_for"
	),
	"feInterface" => $TCA["tx_party_types"]["feInterface"],
	"columns" => array (
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
		"short_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_types.short_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_types.title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "60",	
				"eval" => "trim",
			)
		),
		"long_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_types.long_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"allowed_for" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for",		
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for.I.0", "ADDRESS_PREMISE_TYPE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for.I.1", "CONTACT_TYPE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for.I.2", "COUNTRY_OF_RESIDENCE_RESIDENCY_TYPE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for.I.3", "DOCUMENT_DOCUMENT_TYPE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for.I.4", "ACCOUNT_ACCOUNT_TYPE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for.I.5", "LANGUAGE_TYPE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for.I.6", "ACCOUNT_OWNERSHIP_TYPE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for.I.7", "NATIONALITY_NATIONALITY_TYPE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for.I.8", "OCCUPATION_EMPLOYMENT_TYPE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for.I.9", "ORGANISATION_ORGANISATION_TYPE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for.I.10", "REVENUE_TYPE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_types.allowed_for.I.11", "VEHICLE_TYPE"),
				),
				"size" => 12,	
				"maxitems" => 12,
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, short_title, title;;;;2-2-2, long_title;;;;3-3-3, allowed_for")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_vehicle_manufacturer"] = array (
	"ctrl" => $TCA["tx_party_vehicle_manufacturer"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "sys_language_uid,l18n_parent,l18n_diffsource,short_title,title,long_title"
	),
	"feInterface" => $TCA["tx_party_vehicle_manufacturer"]["feInterface"],
	"columns" => array (
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
				'foreign_table'       => 'tx_party_vehicle_manufacturer',
				'foreign_table_where' => 'AND tx_party_vehicle_manufacturer.pid=###CURRENT_PID### AND tx_party_vehicle_manufacturer.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array (		
			'config' => array (
				'type' => 'passthrough'
			)
		),
		"short_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_vehicle_manufacturer.short_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_vehicle_manufacturer.title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "60",	
				"eval" => "trim",
			)
		),
		"long_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_vehicle_manufacturer.long_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, short_title, title;;;;2-2-2, long_title;;;;3-3-3")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_accounts"] = array (
	"ctrl" => $TCA["tx_party_accounts"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "ownership_type,account_id,issuing_authority,account_type,remarks,organisation"
	),
	"feInterface" => $TCA["tx_party_accounts"]["feInterface"],
	"columns" => array (
		"ownership_type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_accounts.ownership_type",		
			"config" => Array (
				"type" => "select",	
				"items" => Array (
					Array("",0),
				),
				"foreign_table" => "tx_party_types",	
				"foreign_table_where" => "AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"account_id" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_accounts.account_id",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"issuing_authority" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_accounts.issuing_authority",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"account_type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_accounts.account_type",		
			"config" => Array (
				"type" => "group",	
				"internal_type" => "db",	
				"allowed" => "tx_party_types",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_accounts.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
		"organisation" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_accounts.organisation",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_organisations",	
				"foreign_table_where" => "AND tx_party_organisations.pid=###STORAGE_PID### ORDER BY tx_party_organisations.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "ownership_type;;;;1-1-1, account_id, issuing_authority, account_type, remarks, organisation")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_addresses"] = array (
	"ctrl" => $TCA["tx_party_addresses"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "locality,thoroughfare,thoroughfare_number,building_name,location,lot,premise_type,internal_thoroughfare,reference_location,post_code,rural_delivery,longitude,latitude,postal_delivery_point,post_office,post_town,administrative_area,country,remarks"
	),
	"feInterface" => $TCA["tx_party_addresses"]["feInterface"],
	"columns" => array (
		"locality" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.locality",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"thoroughfare" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.thoroughfare",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"thoroughfare_number" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.thoroughfare_number",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"building_name" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.building_name",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"location" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.location",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"lot" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.lot",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"premise_type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.premise_type",		
			"config" => Array (
				"type" => "group",	
				"internal_type" => "db",	
				"allowed" => "tx_party_types",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"internal_thoroughfare" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.internal_thoroughfare",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"reference_location" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.reference_location",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"post_code" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.post_code",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"rural_delivery" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.rural_delivery",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"longitude" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.longitude",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"latitude" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.latitude",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"postal_delivery_point" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.postal_delivery_point",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"post_office" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.post_office",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"post_town" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.post_town",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"administrative_area" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.administrative_area",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "static_country_zones",	
				"foreign_table_where" => "AND static_country_zones.pid=###SITEROOT### ORDER BY static_country_zones.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"country" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.country",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "static_countries",	
				"foreign_table_where" => "AND static_countries.pid=###SITEROOT### ORDER BY static_countries.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_addresses.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "locality;;;;1-1-1, thoroughfare, thoroughfare_number, building_name, location, lot, premise_type, internal_thoroughfare, reference_location, post_code, rural_delivery, longitude, latitude, postal_delivery_point, post_office, post_town, administrative_area, country, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_contacts"] = array (
	"ctrl" => $TCA["tx_party_contacts"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "type,contact,remarks"
	),
	"feInterface" => $TCA["tx_party_contacts"]["feInterface"],
	"columns" => array (
		"type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_contacts.type",		
			"config" => Array (
				"type" => "group",	
				"internal_type" => "db",	
				"allowed" => "tx_party_types",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"contact" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_contacts.contact",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_contacts.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "type;;;;1-1-1, contact, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_contact_numbers"] = array (
	"ctrl" => $TCA["tx_party_contact_numbers"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "media_type,country_code,area_code,local_number,extension,pin,contact_hours,remarks"
	),
	"feInterface" => $TCA["tx_party_contact_numbers"]["feInterface"],
	"columns" => array (
		"media_type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.media_type",		
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.media_type.I.0", "TELEPHONE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.media_type.I.1", "MOBILE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.media_type.I.2", "FAX"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.media_type.I.3", "MODEM"),
				),
				"size" => 1,	
				"maxitems" => 1,
			)
		),
		"country_code" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.country_code",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "static_countries",	
				"foreign_table_where" => "AND static_countries.pid=###SITEROOT### ORDER BY static_countries.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"area_code" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.area_code",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"local_number" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.local_number",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"extension" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.extension",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"pin" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.pin",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"contact_hours" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.contact_hours",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_contact_numbers.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "media_type;;;;1-1-1, country_code, area_code, local_number, extension, pin, contact_hours, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_countries_of_residence"] = array (
	"ctrl" => $TCA["tx_party_countries_of_residence"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "country,residency_type,remarks"
	),
	"feInterface" => $TCA["tx_party_countries_of_residence"]["feInterface"],
	"columns" => array (
		"country" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_countries_of_residence.country",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "static_countries",	
				"foreign_table_where" => "AND static_countries.pid=###SITEROOT### ORDER BY static_countries.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"residency_type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_countries_of_residence.residency_type",		
			"config" => Array (
				"type" => "group",	
				"internal_type" => "db",	
				"allowed" => "tx_party_types",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_countries_of_residence.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "country;;;;1-1-1, residency_type, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_disabilities"] = array (
	"ctrl" => $TCA["tx_party_disabilities"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "disability,cause,remarks"
	),
	"feInterface" => $TCA["tx_party_disabilities"]["feInterface"],
	"columns" => array (
		"disability" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_disabilities.disability",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"cause" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_disabilities.cause",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_disabilities.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "disability;;;;1-1-1, cause, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_documents"] = array (
	"ctrl" => $TCA["tx_party_documents"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "document_type,document_id,issued_by,issue_place,privilege,restriction,group_name,name_on_document,remarks"
	),
	"feInterface" => $TCA["tx_party_documents"]["feInterface"],
	"columns" => array (
		"document_type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_documents.document_type",		
			"config" => Array (
				"type" => "group",	
				"internal_type" => "db",	
				"allowed" => "tx_party_types",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"document_id" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_documents.document_id",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"issued_by" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_documents.issued_by",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_parties",	
				"foreign_table_where" => "AND tx_party_parties.pid=###STORAGE_PID### ORDER BY tx_party_parties.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"issue_place" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_documents.issue_place",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"privilege" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_documents.privilege",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"restriction" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_documents.restriction",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"group_name" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_documents.group_name",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"name_on_document" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_documents.name_on_document",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_documents.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "document_type;;;;1-1-1, document_id, issued_by, issue_place, privilege, restriction, group_name, name_on_document, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_eletronic_address_identifiers"] = array (
	"ctrl" => $TCA["tx_party_eletronic_address_identifiers"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "type,electronic_address_identifier,remarks"
	),
	"feInterface" => $TCA["tx_party_eletronic_address_identifiers"]["feInterface"],
	"columns" => array (
		"type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_eletronic_address_identifiers.type",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_types",	
				"foreign_table_where" => "AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"electronic_address_identifier" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_eletronic_address_identifiers.electronic_address_identifier",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_eletronic_address_identifiers.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "type;;;;1-1-1, electronic_address_identifier, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_images"] = array (
	"ctrl" => $TCA["tx_party_images"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "image,title,description,remarks"
	),
	"feInterface" => $TCA["tx_party_images"]["feInterface"],
	"columns" => array (
		"image" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_images.image",		
			"config" => Array (
				"type" => "group",
				"internal_type" => "file",
				"allowed" => $GLOBALS["TYPO3_CONF_VARS"]["GFX"]["imagefile_ext"],	
				"max_size" => 500,	
				"uploadfolder" => "uploads/tx_party",
				"show_thumbs" => 1,	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_images.title",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"description" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_images.description",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_images.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "image;;;;1-1-1, title;;;;2-2-2, description;;;;3-3-3, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_languages"] = array (
	"ctrl" => $TCA["tx_party_languages"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "language,type,read_skills,write_skills,listen_skills,speak_skills,preference,remarks"
	),
	"feInterface" => $TCA["tx_party_languages"]["feInterface"],
	"columns" => array (
		"language" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_languages.language",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "static_languages",	
				"foreign_table_where" => "AND static_languages.pid=###SITEROOT### ORDER BY static_languages.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_languages.type",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_types",	
				"foreign_table_where" => "AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"read_skills" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_languages.read_skills",		
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:party/locallang_db.xml:tx_party_languages.read_skills.I.0", "YES"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_languages.read_skills.I.1", "NO"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_languages.read_skills.I.2", "POOR"),
				),
				"size" => 1,	
				"maxitems" => 1,
			)
		),
		"write_skills" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_languages.write_skills",		
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:party/locallang_db.xml:tx_party_languages.write_skills.I.0", "YES"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_languages.write_skills.I.1", "NO"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_languages.write_skills.I.2", "POOR"),
				),
				"size" => 1,	
				"maxitems" => 1,
			)
		),
		"listen_skills" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_languages.listen_skills",		
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:party/locallang_db.xml:tx_party_languages.listen_skills.I.0", "YES"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_languages.listen_skills.I.1", "NO"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_languages.listen_skills.I.2", "POOR"),
				),
				"size" => 1,	
				"maxitems" => 1,
			)
		),
		"speak_skills" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_languages.speak_skills",		
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:party/locallang_db.xml:tx_party_languages.speak_skills.I.0", "YES"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_languages.speak_skills.I.1", "NO"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_languages.speak_skills.I.2", "POOR"),
				),
				"size" => 1,	
				"maxitems" => 1,
			)
		),
		"preference" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_languages.preference",		
			"config" => Array (
				"type" => "check",
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_languages.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "language;;;;1-1-1, type, read_skills, write_skills, listen_skills, speak_skills, preference, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_marks"] = array (
	"ctrl" => $TCA["tx_party_marks"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "mark,body_part,body_part_mark_location,remarks"
	),
	"feInterface" => $TCA["tx_party_marks"]["feInterface"],
	"columns" => array (
		"mark" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_marks.mark",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"body_part" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_marks.body_part",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"body_part_mark_location" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_marks.body_part_mark_location",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_marks.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "mark;;;;1-1-1, body_part, body_part_mark_location, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_nationalities"] = array (
	"ctrl" => $TCA["tx_party_nationalities"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "country,nationality_type,remarks"
	),
	"feInterface" => $TCA["tx_party_nationalities"]["feInterface"],
	"columns" => array (
		"country" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_nationalities.country",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "static_countries",	
				"foreign_table_where" => "AND static_countries.pid=###SITEROOT### ORDER BY static_countries.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"nationality_type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_nationalities.nationality_type",		
			"config" => Array (
				"type" => "group",	
				"internal_type" => "db",	
				"allowed" => "tx_party_types",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_nationalities.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "country;;;;1-1-1, nationality_type, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_occupations"] = array (
	"ctrl" => $TCA["tx_party_occupations"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "role,rank,employment_type,position_title,cost_centre,reports_to,remarks"
	),
	"feInterface" => $TCA["tx_party_occupations"]["feInterface"],
	"columns" => array (
		"role" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_occupations.role",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_occupation_roles",	
				"foreign_table_where" => "AND tx_party_occupation_roles.pid=###STORAGE_PID### ORDER BY tx_party_occupation_roles.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"rank" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_occupations.rank",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_occupation_ranks",	
				"foreign_table_where" => "AND tx_party_occupation_ranks.pid=###STORAGE_PID### ORDER BY tx_party_occupation_ranks.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"employment_type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_occupations.employment_type",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_types",	
				"foreign_table_where" => "AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"position_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_occupations.position_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"cost_centre" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_occupations.cost_centre",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"reports_to" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_occupations.reports_to",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_occupations.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "role;;;;1-1-1, rank, employment_type, position_title, cost_centre, reports_to, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_names"] = array (
	"ctrl" => $TCA["tx_party_names"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "party,type,person_name_title,first_name,middle_name,ancestor_name,last_name,other_name,preceding_title,alias,generation_identifier,place_name,organisation_name_type,organisation_name,abbreviation,remarks"
	),
	"feInterface" => $TCA["tx_party_names"]["feInterface"],
	"columns" => array (
		"party" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_names.party",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_parties",	
				"foreign_table_where" => "AND tx_party_parties.pid=###STORAGE_PID### ORDER BY tx_party_parties.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_names.type",		
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:party/locallang_db.xml:tx_party_names.type.I.0", "0"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_names.type.I.1", "1"),
				),
				"size" => 1,	
				"maxitems" => 1,
			)
		),
		"person_name_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_names.person_name_title",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_person_name_titles",	
				"foreign_table_where" => "AND tx_party_person_name_titles.pid=###STORAGE_PID### ORDER BY tx_party_person_name_titles.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"first_name" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_names.first_name",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"middle_name" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_names.middle_name",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"ancestor_name" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_names.ancestor_name",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"last_name" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_names.last_name",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"other_name" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_names.other_name",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"preceding_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_names.preceding_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"alias" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_names.alias",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"generation_identifier" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_names.generation_identifier",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"place_name" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_names.place_name",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"organisation_name_type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name_type",		
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name_type.I.0", "NAME_ONLY"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name_type.I.1", "ORGANISATION_TYPE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name_type.I.2", "NAME_AND_TYPE"),
				),
				"size" => 1,	
				"maxitems" => 1,
			)
		),
		"organisation_name" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_names.organisation_name",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"abbreviation" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_names.abbreviation",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_names.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "party;;;;1-1-1, type, person_name_title, first_name, middle_name, ancestor_name, last_name, other_name, preceding_title, alias, generation_identifier, place_name, organisation_name_type, organisation_name, abbreviation, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_qualifications"] = array (
	"ctrl" => $TCA["tx_party_qualifications"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "qualification_name,status,institution,start_date,completion_date,way_of_study,major_subject,minor_subject,mark,course_duration,award,restriction,registration,remarks"
	),
	"feInterface" => $TCA["tx_party_qualifications"]["feInterface"],
	"columns" => array (
		"qualification_name" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_qualifications.qualification_name",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"status" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_qualifications.status",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_qualification_status",	
				"foreign_table_where" => "AND tx_party_qualification_status.pid=###STORAGE_PID### ORDER BY tx_party_qualification_status.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"institution" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_qualifications.institution",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_organisations",	
				"foreign_table_where" => "AND tx_party_organisations.pid=###STORAGE_PID### ORDER BY tx_party_organisations.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"start_date" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_qualifications.start_date",		
			"config" => Array (
				"type"     => "input",
				"size"     => "8",
				"max"      => "20",
				"eval"     => "date",
				"checkbox" => "0",
				"default"  => "0"
			)
		),
		"completion_date" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_qualifications.completion_date",		
			"config" => Array (
				"type"     => "input",
				"size"     => "8",
				"max"      => "20",
				"eval"     => "date",
				"checkbox" => "0",
				"default"  => "0"
			)
		),
		"way_of_study" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_qualifications.way_of_study",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"major_subject" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_qualifications.major_subject",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"minor_subject" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_qualifications.minor_subject",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"mark" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_qualifications.mark",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"course_duration" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_qualifications.course_duration",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"award" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_qualifications.award",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"restriction" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_qualifications.restriction",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"registration" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_qualifications.registration",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_qualifications.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "qualification_name;;;;1-1-1, status, institution, start_date, completion_date, way_of_study, major_subject, minor_subject, mark, course_duration, award, restriction, registration, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_relationship_types"] = array (
	"ctrl" => $TCA["tx_party_relationship_types"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "relationship_type,description_as_primary,description_as_secondary,organisation_allowed_as_primary,organisation_allowed_as_secondary,person_allowed_as_primary,person_allowed_as_secondary"
	),
	"feInterface" => $TCA["tx_party_relationship_types"]["feInterface"],
	"columns" => array (
		"relationship_type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.relationship_type",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"description_as_primary" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.description_as_primary",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"description_as_secondary" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.description_as_secondary",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"organisation_allowed_as_primary" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.organisation_allowed_as_primary",		
			"config" => Array (
				"type" => "check",
			)
		),
		"organisation_allowed_as_secondary" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.organisation_allowed_as_secondary",		
			"config" => Array (
				"type" => "check",
			)
		),
		"person_allowed_as_primary" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.person_allowed_as_primary",		
			"config" => Array (
				"type" => "check",
			)
		),
		"person_allowed_as_secondary" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_relationship_types.person_allowed_as_secondary",		
			"config" => Array (
				"type" => "check",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "relationship_type;;;;1-1-1, description_as_primary, description_as_secondary, organisation_allowed_as_primary, organisation_allowed_as_secondary, person_allowed_as_primary, person_allowed_as_secondary")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_revenues"] = array (
	"ctrl" => $TCA["tx_party_revenues"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "currency,amount,amount_precision,after_tax,type,period_from,period_to,source,remarks"
	),
	"feInterface" => $TCA["tx_party_revenues"]["feInterface"],
	"columns" => array (
		"currency" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_revenues.currency",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "static_currencies",	
				"foreign_table_where" => "AND static_currencies.pid=###SITEROOT### ORDER BY static_currencies.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"amount" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_revenues.amount",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "double2,nospace",
			)
		),
		"amount_precision" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_revenues.amount_precision",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "double2,nospace",
			)
		),
		"after_tax" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_revenues.after_tax",		
			"config" => Array (
				"type" => "check",
			)
		),
		"type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_revenues.type",		
			"config" => Array (
				"type" => "group",	
				"internal_type" => "db",	
				"allowed" => "tx_party_types",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"period_from" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_revenues.period_from",		
			"config" => Array (
				"type"     => "input",
				"size"     => "8",
				"max"      => "20",
				"eval"     => "date",
				"checkbox" => "0",
				"default"  => "0"
			)
		),
		"period_to" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_revenues.period_to",		
			"config" => Array (
				"type"     => "input",
				"size"     => "8",
				"max"      => "20",
				"eval"     => "date",
				"checkbox" => "0",
				"default"  => "0"
			)
		),
		"source" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_revenues.source",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_revenues.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "currency;;;;1-1-1, amount, amount_precision, after_tax, type, period_from, period_to, source, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_stock_markets"] = array (
	"ctrl" => $TCA["tx_party_stock_markets"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "market,listed_code,remarks"
	),
	"feInterface" => $TCA["tx_party_stock_markets"]["feInterface"],
	"columns" => array (
		"market" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_stock_markets.market",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "pages",	
				"foreign_table_where" => "AND pages.pid=###STORAGE_PID### ORDER BY pages.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"listed_code" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_stock_markets.listed_code",		
			"config" => Array (
				"type" => "input",	
				"size" => "10",	
				"max" => "10",	
				"eval" => "trim",
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_stock_markets.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "market;;;;1-1-1, listed_code, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_vehicles"] = array (
	"ctrl" => $TCA["tx_party_vehicles"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "make,type,model,license_place,manufacture_date,engine_number,chassis_number,body_number,remarks"
	),
	"feInterface" => $TCA["tx_party_vehicles"]["feInterface"],
	"columns" => array (
		"make" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_vehicles.make",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_vehicle_manufacturer",	
				"foreign_table_where" => "AND tx_party_vehicle_manufacturer.pid=###STORAGE_PID### ORDER BY tx_party_vehicle_manufacturer.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_vehicles.type",		
			"config" => Array (
				"type" => "group",	
				"internal_type" => "db",	
				"allowed" => "tx_party_types",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"model" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_vehicles.model",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"license_place" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_vehicles.license_place",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"manufacture_date" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_vehicles.manufacture_date",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"engine_number" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_vehicles.engine_number",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"chassis_number" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_vehicles.chassis_number",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"body_number" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_vehicles.body_number",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_vehicles.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "make;;;;1-1-1, type, model, license_place, manufacture_date, engine_number, chassis_number, body_number, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_visas"] = array (
	"ctrl" => $TCA["tx_party_visas"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "country,number,code,issue_date,issue_place,maximum_stay,restriction,privilege,special_condition,remarks"
	),
	"feInterface" => $TCA["tx_party_visas"]["feInterface"],
	"columns" => array (
		"country" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_visas.country",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "static_countries",	
				"foreign_table_where" => "AND static_countries.pid=###SITEROOT### ORDER BY static_countries.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"number" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_visas.number",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"code" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_visas.code",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"issue_date" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_visas.issue_date",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"issue_place" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_visas.issue_place",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"maximum_stay" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_visas.maximum_stay",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"restriction" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_visas.restriction",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"privilege" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_visas.privilege",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"special_condition" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_visas.special_condition",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_visas.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "country;;;;1-1-1, number, code, issue_date, issue_place, maximum_stay, restriction, privilege, special_condition, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_parties"] = array (
	"ctrl" => $TCA["tx_party_parties"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "type,marital_status,religion,birth_place,birth_date_time,birth_date_time_precision,birth_sign,birth_star,weight,height,breast,waist,hip,hair_colour,eye_colour,skin_colour,blood_group,physical_status,ethnicity,gender,hobbies,habits,organisation_type,organisation_nature,company_registration_id,company_registration_date,number_of_employees,remarks,names,addresses,accounts,contact_numbers,countries_of_residence,documents,emailaddresses,images,nationalities,relationships,revenues,urls,vehicles,visas,disabilities,languages,marks,occupations,qualifications,stock_markets,events,identifiers,memberships,allergies,favourites,preferences"
	),
	"feInterface" => $TCA["tx_party_parties"]["feInterface"],
	"columns" => array (
		"type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.type",		
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.type.I.0", "0", t3lib_extMgm::extRelPath("party")."selicon_tx_party_parties_type_0.gif"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.type.I.1", "1", t3lib_extMgm::extRelPath("party")."selicon_tx_party_parties_type_1.gif"),
				),
				"size" => 1,	
				"maxitems" => 1,
			)
		),
		"marital_status" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status",		
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.0", "SINGLE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.1", "ENGAGED"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.2", "MARRIED"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.3", "SEPARATED"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.4", "DIVORCED"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.marital_status.I.5", "WIDOWED"),
				),
				"size" => 1,	
				"maxitems" => 1,
			)
		),
		"religion" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.religion",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_religions",	
				"foreign_table_where" => "AND tx_party_religions.pid=###STORAGE_PID### ORDER BY tx_party_religions.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"birth_place" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_place",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"birth_date_time" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_date_time",		
			"config" => Array (
				"type"     => "input",
				"size"     => "12",
				"max"      => "20",
				"eval"     => "datetime",
				"checkbox" => "0",
				"default"  => "0"
			)
		),
		"birth_date_time_precision" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_date_time_precision",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"birth_sign" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_sign",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_birth_signs",	
				"foreign_table_where" => "AND tx_party_birth_signs.pid=###SITEROOT### ORDER BY tx_party_birth_signs.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"birth_star" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.birth_star",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_birth_stars",	
				"foreign_table_where" => "AND tx_party_birth_stars.pid=###STORAGE_PID### ORDER BY tx_party_birth_stars.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"weight" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.weight",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"checkbox" => "0",	
				"eval" => "int,nospace",
			)
		),
		"height" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.height",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"checkbox" => "0",	
				"eval" => "int,nospace",
			)
		),
		"breast" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.breast",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"checkbox" => "0",	
				"eval" => "int,nospace",
			)
		),
		"waist" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.waist",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"checkbox" => "0",	
				"eval" => "int,nospace",
			)
		),
		"hip" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.hip",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"checkbox" => "0",	
				"eval" => "int,nospace",
			)
		),
		"hair_colour" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.hair_colour",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"eye_colour" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour",		
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.0", "AMBER"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.1", "BLUE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.2", "BROWN"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.3", "GRAY"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.4", "GREEN"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.eye_colour.I.5", "HAZEL"),
				),
				"size" => 1,	
				"maxitems" => 1,
			)
		),
		"skin_colour" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.skin_colour",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"blood_group" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group",		
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.0", "O_NEGATIVE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.1", "O_POSITIVE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.2", "A_NEGATIVE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.3", "3A_POSITIVE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.4", "B_NEGATIVE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.5", "B_POSITIVE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.6", "AB_NEGATIVE"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.blood_group.I.7", "AB_POSITIVE"),
				),
				"size" => 1,	
				"maxitems" => 1,
			)
		),
		"physical_status" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.physical_status",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_physical_status",	
				"foreign_table_where" => "AND tx_party_physical_status.pid=###SITEROOT### ORDER BY tx_party_physical_status.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"ethnicity" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.ethnicity",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_ethnicities",	
				"foreign_table_where" => "AND tx_party_ethnicities.pid=###STORAGE_PID### ORDER BY tx_party_ethnicities.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"gender" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.gender",		
			"config" => Array (
				"type" => "select",
				"items" => Array (
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.gender.I.0", "0"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.gender.I.1", "1"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.gender.I.2", "2"),
					Array("LLL:EXT:party/locallang_db.xml:tx_party_parties.gender.I.3", "9"),
				),
				"size" => 1,	
				"maxitems" => 1,
			)
		),
		"hobbies" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.hobbies",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_hobbies",	
				"foreign_table_where" => "AND tx_party_hobbies.pid=###STORAGE_PID### ORDER BY tx_party_hobbies.uid",	
				"size" => 10,	
				"minitems" => 0,
				"maxitems" => 99,	
				"MM" => "tx_party_parties_hobbies_mm",
			)
		),
		"habits" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.habits",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_habits",	
				"foreign_table_where" => "AND tx_party_habits.pid=###STORAGE_PID### ORDER BY tx_party_habits.uid",	
				"size" => 10,	
				"minitems" => 0,
				"maxitems" => 99,	
				"MM" => "tx_party_parties_habits_mm",
			)
		),
		"organisation_type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.organisation_type",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_types",	
				"foreign_table_where" => "AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"organisation_nature" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.organisation_nature",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_organisation_natures",	
				"foreign_table_where" => "AND tx_party_organisation_natures.pid=###STORAGE_PID### ORDER BY tx_party_organisation_natures.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"company_registration_id" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.company_registration_id",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"company_registration_date" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.company_registration_date",		
			"config" => Array (
				"type"     => "input",
				"size"     => "8",
				"max"      => "20",
				"eval"     => "date",
				"checkbox" => "0",
				"default"  => "0"
			)
		),
		"number_of_employees" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.number_of_employees",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"checkbox" => "0",	
				"eval" => "int,nospace",
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
		"names" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.names",		
			"config" => Array (
				"type" => "none",
			)
		),
		"addresses" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.addresses",		
			"config" => Array (
				"type" => "none",
			)
		),
		"accounts" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.accounts",		
			"config" => Array (
				"type" => "none",
			)
		),
		"contact_numbers" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.contact_numbers",		
			"config" => Array (
				"type" => "none",
			)
		),
		"countries_of_residence" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.countries_of_residence",		
			"config" => Array (
				"type" => "none",
			)
		),
		"documents" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.documents",		
			"config" => Array (
				"type" => "none",
			)
		),
		"emailaddresses" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.emailaddresses",		
			"config" => Array (
				"type" => "none",
			)
		),
		"images" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.images",		
			"config" => Array (
				"type" => "none",
			)
		),
		"nationalities" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.nationalities",		
			"config" => Array (
				"type" => "none",
			)
		),
		"relationships" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.relationships",		
			"config" => Array (
				"type" => "none",
			)
		),
		"revenues" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.revenues",		
			"config" => Array (
				"type" => "none",
			)
		),
		"urls" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.urls",		
			"config" => Array (
				"type" => "none",
			)
		),
		"vehicles" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.vehicles",		
			"config" => Array (
				"type" => "none",
			)
		),
		"visas" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.visas",		
			"config" => Array (
				"type" => "none",
			)
		),
		"disabilities" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.disabilities",		
			"config" => Array (
				"type" => "none",
			)
		),
		"languages" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.languages",		
			"config" => Array (
				"type" => "none",
			)
		),
		"marks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.marks",		
			"config" => Array (
				"type" => "none",
			)
		),
		"occupations" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.occupations",		
			"config" => Array (
				"type" => "none",
			)
		),
		"qualifications" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.qualifications",		
			"config" => Array (
				"type" => "none",
			)
		),
		"stock_markets" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.stock_markets",		
			"config" => Array (
				"type" => "none",
			)
		),
		"events" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.events",		
			"config" => Array (
				"type" => "none",
			)
		),
		"identifiers" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.identifiers",		
			"config" => Array (
				"type" => "none",
			)
		),
		"memberships" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.memberships",		
			"config" => Array (
				"type" => "none",
			)
		),
		"allergies" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.allergies",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_allergies",	
				"foreign_table_where" => "AND tx_party_allergies.pid=###STORAGE_PID### ORDER BY tx_party_allergies.uid",	
				"size" => 10,	
				"minitems" => 0,
				"maxitems" => 99,	
				"MM" => "tx_party_parties_allergies_mm",
			)
		),
		"favourites" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.favourites",		
			"config" => Array (
				"type" => "none",
			)
		),
		"preferences" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_parties.preferences",		
			"config" => Array (
				"type" => "none",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "type;;;;1-1-1, marital_status, religion, birth_place, birth_date_time, birth_date_time_precision, birth_sign, birth_star, weight, height, breast, waist, hip, hair_colour, eye_colour, skin_colour, blood_group, physical_status, ethnicity, gender, hobbies, habits, organisation_type, organisation_nature, company_registration_id, company_registration_date, number_of_employees, remarks, names, addresses, accounts, contact_numbers, countries_of_residence, documents, emailaddresses, images, nationalities, relationships, revenues, urls, vehicles, visas, disabilities, languages, marks, occupations, qualifications, stock_markets, events, identifiers, memberships, allergies, favourites, preferences")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_events"] = array (
	"ctrl" => $TCA["tx_party_events"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "type,date,date_from,date_to,remarks"
	),
	"feInterface" => $TCA["tx_party_events"]["feInterface"],
	"columns" => array (
		"type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_events.type",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_types",	
				"foreign_table_where" => "AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"date" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_events.date",		
			"config" => Array (
				"type"     => "input",
				"size"     => "8",
				"max"      => "20",
				"eval"     => "date",
				"checkbox" => "0",
				"default"  => "0"
			)
		),
		"date_from" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_events.date_from",		
			"config" => Array (
				"type"     => "input",
				"size"     => "8",
				"max"      => "20",
				"eval"     => "date",
				"checkbox" => "0",
				"default"  => "0"
			)
		),
		"date_to" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_events.date_to",		
			"config" => Array (
				"type"     => "input",
				"size"     => "8",
				"max"      => "20",
				"eval"     => "date",
				"checkbox" => "0",
				"default"  => "0"
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_events.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "type;;;;1-1-1, date, date_from, date_to, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_identifiers"] = array (
	"ctrl" => $TCA["tx_party_identifiers"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "type,identifier,issue_date,expiry_date,remarks"
	),
	"feInterface" => $TCA["tx_party_identifiers"]["feInterface"],
	"columns" => array (
		"type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_identifiers.type",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_types",	
				"foreign_table_where" => "AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"identifier" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_identifiers.identifier",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"issue_date" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_identifiers.issue_date",		
			"config" => Array (
				"type"     => "input",
				"size"     => "8",
				"max"      => "20",
				"eval"     => "date",
				"checkbox" => "0",
				"default"  => "0"
			)
		),
		"expiry_date" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_identifiers.expiry_date",		
			"config" => Array (
				"type"     => "input",
				"size"     => "8",
				"max"      => "20",
				"eval"     => "date",
				"checkbox" => "0",
				"default"  => "0"
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_identifiers.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "type;;;;1-1-1, identifier, issue_date, expiry_date, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_memberships"] = array (
	"ctrl" => $TCA["tx_party_memberships"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "type,organisation,issue_date,expiry_date,remarks"
	),
	"feInterface" => $TCA["tx_party_memberships"]["feInterface"],
	"columns" => array (
		"type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_memberships.type",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_types",	
				"foreign_table_where" => "AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"organisation" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_memberships.organisation",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_parties",	
				"foreign_table_where" => "AND tx_party_parties.pid=###STORAGE_PID### ORDER BY tx_party_parties.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"issue_date" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_memberships.issue_date",		
			"config" => Array (
				"type"     => "input",
				"size"     => "8",
				"max"      => "20",
				"eval"     => "date",
				"checkbox" => "0",
				"default"  => "0"
			)
		),
		"expiry_date" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_memberships.expiry_date",		
			"config" => Array (
				"type"     => "input",
				"size"     => "8",
				"max"      => "20",
				"eval"     => "date",
				"checkbox" => "0",
				"default"  => "0"
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_memberships.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "type;;;;1-1-1, organisation, issue_date, expiry_date, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_allergies"] = array (
	"ctrl" => $TCA["tx_party_allergies"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "short_title,title,long_title"
	),
	"feInterface" => $TCA["tx_party_allergies"]["feInterface"],
	"columns" => array (
		"short_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_allergies.short_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_allergies.title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "60",	
				"eval" => "trim",
			)
		),
		"long_title" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_allergies.long_title",		
			"config" => Array (
				"type" => "input",	
				"size" => "48",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "short_title;;;;1-1-1, title;;;;2-2-2, long_title;;;;3-3-3")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_favourites"] = array (
	"ctrl" => $TCA["tx_party_favourites"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "type,favourite,remarks"
	),
	"feInterface" => $TCA["tx_party_favourites"]["feInterface"],
	"columns" => array (
		"type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_favourites.type",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_types",	
				"foreign_table_where" => "AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"favourite" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_favourites.favourite",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_favourites.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "type;;;;1-1-1, favourite, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);



$TCA["tx_party_preferences"] = array (
	"ctrl" => $TCA["tx_party_preferences"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "type,preference,remarks"
	),
	"feInterface" => $TCA["tx_party_preferences"]["feInterface"],
	"columns" => array (
		"type" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_preferences.type",		
			"config" => Array (
				"type" => "select",	
				"foreign_table" => "tx_party_types",	
				"foreign_table_where" => "AND tx_party_types.pid=###STORAGE_PID### ORDER BY tx_party_types.uid",	
				"size" => 1,	
				"minitems" => 0,
				"maxitems" => 1,
			)
		),
		"preference" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_preferences.preference",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "90",	
				"eval" => "trim",
			)
		),
		"remarks" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:party/locallang_db.xml:tx_party_preferences.remarks",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "type;;;;1-1-1, preference, remarks")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);
?>