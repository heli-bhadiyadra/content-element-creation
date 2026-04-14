<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'my-site-package',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Nitsan\\MySitePackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'heli',
    'author_email' => 'heli.bhadiyadra@mail.nitsan.ai',
    'author_company' => 'nitsan',
    'version' => '1.0.0',
];
