<?php

defined('TYPO3') || die('Access denied.');




$GLOBALS['TCA']['tx_party_revenues'] = array (
    'ctrl' => $GLOBALS['TCA']['tx_party_revenues']['ctrl'],
    'interface' => array (
        'showRecordFieldList' => 'party,currency,amount,amount_precision,after_tax,type,period_from,period_to,source,remarks'
    ),
    'feInterface' => $GLOBALS['TCA']['tx_party_revenues']['feInterface'],
    'columns' => array (
        'party' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_revenues.party',
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
        'currency' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_revenues.currency',
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
        'type' => Array (
            'exclude' => 1,
            'label' => 'LLL:EXT:party/locallang_db.xml:tx_party_revenues.type',
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
        '0' => array('showitem' => 'party;;;;1-1-1, type, currency, amount;;1, period_from;;;;1-1-1, period_to, source;;;;1-1-1, remarks;;;;1-1-1')
    ),
    'palettes' => array (
        '1' => array('showitem' => 'amount_precision, after_tax'),
    )
);
