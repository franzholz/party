<?php

defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(function ($extensionKey, $table): void {
    $languageSubpath = '/Resources/Private/Language/';
    
    if(ExtensionManagementUtility::isLoaded('wec_map')) {
        $GLOBALS['TCA'][$table]['ctrl']['EXT']['wec_map'] = [
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
               'label' => 'LLL:EXT:wec_map' . $languageSubpath . 'locallang_db.xld:berecord_maplabel',
               'config' => [
                   'type' => 'passthrough',
               'form_type' => 'user',
               'userFunc' => 'tx_wecmap_backend->drawMap',
               ],
            ],
        ];
        ExtensionManagementUtility::addTCAcolumns($table, $mapTCA, 1);
        $GLOBALS['TCA'][$table]['interface']['showRecordFieldList'] .= ',tx_wecmap_map';
        ExtensionManagementUtility::addToAllTCAtypes($table, 'tx_wecmap_map');
    }
    
}, 'party', basename(__FILE__, '.php'));
