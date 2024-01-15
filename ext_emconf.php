<?php

########################################################################
# Extension Manager/Repository config file for ext "party".
########################################################################

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Party Management Framework',
    'description' => 'Management of party-related data, such as persons, organisations, names, addresses, etc. based on the OASIS-Standard xPIL (Extensible Party Information Language).',
    'category' => 'be',
    'author' => 'franz Holzinger, David Bruehlmeier',
    'author_email' => 'franz@ttproducts.de',
    'shy' => '',
    'dependencies' => 'div2007,static_info_tables',
    'conflicts' => '',
    'priority' => '',
    'module' => '',
    'state' => 'experimental',
    'internal' => '',
    'uploadfolder' => 1,
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'author_company' => '',
    'version' => '0.3.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '11.5.0-12.4.99',
            'div2007' => '2.0.0-',
            'static_info_tables' => '2.0.1-',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
            'wec_map' => ''
        ),
    ),
);
