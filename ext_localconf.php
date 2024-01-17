<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die('Access denied.');

call_user_func(function ($extensionKey): void {
    require_once(ExtensionManagementUtility::extPath($extensionKey) . 'Classes/Api/Api.php');

    $tableArray = \JambageCom\Party\Api\Api::getTableArray();

    if (isset($tableArray) && is_array($tableArray)) {
        foreach ($tableArray as $tablename) {
            ExtensionManagementUtility::addUserTSConfig('
                options.saveDocNew.' . $tablename . '=1
            ');
        }
    }
}, 'party');
