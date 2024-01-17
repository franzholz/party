<?php

defined('TYPO3') || die('Access denied.');

call_user_func(function ($extensionKey): void {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$extensionKey]['inline_appearance']['default'] = [
        'collapseAll' => 1,
        'expandSingle' => 1,
        'newRecordLinkPosition' => 'bottom',
        'newRecordLinkAddTitle' => 1,
    ];

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$extensionKey]['inline_appearance']['combined'] = [
        'collapseAll' => 1,
        'expandSingle' => 1,
        'newRecordLinkPosition' => 'bottom',
        'newRecordLinkAddTitle' => 1,
        'useCombination' => 1,
    ];
}, 'party');
