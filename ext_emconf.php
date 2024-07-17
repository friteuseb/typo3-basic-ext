<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Talan Basic Extension',
    'description' => 'A basic TYPO3 extension with backend module, plugin, and dashboard widget',
    'category' => 'plugin',
    'author' => 'Cyril Wolfangel',
    'author_email' => 'cyril.wolfangel@example.com',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];