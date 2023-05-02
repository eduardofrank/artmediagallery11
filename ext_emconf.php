<?php

/**
 * Extension Manager/Repository config file for ext "artmediagallery".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'artmediagallery',
    'description' => 'Sitepackage for Artmedia Gallery',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'EduardoFrank\\Artmediagallery\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Eduardo Frank',
    'author_email' => 'efrank@eduardofrank.co',
    'author_company' => 'Eduardo Frank',
    'version' => '1.0.0',
];
