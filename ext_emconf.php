<?php

########################################################################
# Extension Manager/Repository config file for ext "party".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'Party Management Framework',
    'description' => 'Management of party-related data, such as persons, organisations, names, addresses, etc. based on the OASIS-Standard xPIL (Extensible Party Information Language).',
    'category' => 'be',
    'author' => 'franz Holzinger, David Bruehlmeier',
    'author_email' => 'franz@ttproducts.de',
    'state' => 'beta',
    'author_company' => '',
    'version' => '0.3.0',
    'constraints' => [
        'depends' => [
            'php' => '8.1.0-8.4.99',
            'typo3' => '11.5.0-12.4.99',
            'static_info_tables' => '11.5.0-',
            'typo3db_legacy' => '1.1.0-1.2.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
            'wec_map' => '',
        ],
    ],
];
