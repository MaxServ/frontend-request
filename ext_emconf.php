<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Frontend Request',
    'description' => 'This extension provides a way to make a frontend request to a TYPO3 page from within the backend and parse the response.',
    'category' => 'backend',
    'author' => 'MaxServ',
    'author_company' => 'MaxServ B.V.',
    'author_email' => 'support@maxserv.com',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
        ],
    ],
    'autoload' => [
        'psr-4' => ['MaxServ\\FrontendRequest\\' => 'Classes'],
    ],
];
