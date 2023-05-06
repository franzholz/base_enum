<?php

########################################################################
# Extension Manager/Repository config file for ext "base_enum".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'PHP Enum Library',
    'description' => 'A library to make the PHP enum operator possible.',
    'category' => 'misc',
    'version' => '1.8.4',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'PHP Enum contributors',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.3.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
