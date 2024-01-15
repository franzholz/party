<?php
defined('TYPO3') || die('Access denied.');

if (!defined ('PARTY_EXT')) {
	define('PARTY_EXT', $_EXTKEY);
}

if (!defined ('PATH_BE_PARTY')) {
	define('PATH_BE_PARTY', t3lib_extMgm::extPath($_EXTKEY));
}

if (!defined ('PATH_BE_PARTY_REL')) {
	define('PATH_BE_PARTY_REL', t3lib_extMgm::extRelPath($_EXTKEY));
}


// Activate Hooks in TCE-Main for the hotlist updates of static_info_tables
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'EXT:party/hooks/class.tx_party_staticinfotables.php:tx_party_staticinfotables';

require_once(PATH_BE_PARTY . 'api/class.tx_party_api.php');

$tableArray = tx_party_api::getTableArray();

if (isset($tableArray) && is_array($tableArray)) {
	foreach ($tableArray as $tablename) {
		t3lib_extMgm::addUserTSConfig('
			options.saveDocNew.' . $tablename . '=1
		');
	}
}


if (
	isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']) &&
	is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch'])
) {
	// TYPO3 4.5 with livesearch
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch'] = array_merge(
		$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch'],
		array(
			'tx_party_addresses' => 'tx_party_addresses',
			'tx_party_parties' => 'tx_party_parties',
			'tx_party_names' => 'tx_party_names',
			'tx_party_identifiers' => 'tx_party_identifiers'
		)
	);
}


// support for new Caching Framework

// Register cache 'tx_party_cache'
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tx_party_cache'])) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tx_party_cache'] = array();
}

	// Hook for extending the tt_products classes
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tt_products']['fieldClass']['address'][$_EXTKEY] =
	array (
		'addresses' => 'tx_party_models_addresses'
	);

?>
