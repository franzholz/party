<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die('Access denied.');

call_user_func(function ($extensionKey): void {
    if (!defined('PARTY_EXT')) {
        define('PARTY_EXT', 'party');
    }

    // Activate Hooks in TCE-Main for the hotlist updates of static_info_tables
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'EXT:party/hooks/class.tx_party_staticinfotables.php:tx_party_staticinfotables';

    require_once(ExtensionManagementUtility::extPath('party') . 'Classes/Api/Api.php');

    $tableArray = \JambageCom\Party\Api\Api::getTableArray();

    if (isset($tableArray) && is_array($tableArray)) {
        foreach ($tableArray as $tablename) {
            ExtensionManagementUtility::addUserTSConfig('
                options.saveDocNew.' . $tablename . '=1
            ');
        }
    }

}, 'party');
