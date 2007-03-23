<?php

########################################################################
# Extension Manager/Repository config file for ext: "party"
#
# Auto generated 28-02-2007 07:59
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Party Information Framework',
	'description' => 'Management of party-related data, such as persons, organisations, names, addresses, etc. Based on the OASIS-Standard xPIL (Extensible Party Information Language).',
	'category' => 'be',
	'author' => 'David Bruehlmeier',
	'author_email' => 'typo3@bruehlmeier.com',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.1-',
			'php' => '5.0.0-',
			'lib' => '0.0.20-',
			'div' => '0.0.9-',			
			'static_info_tables' => '2.0.1-',			
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

?>