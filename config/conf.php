<?php

// config file for miladimos/conf
return [

    // Path for config.json file
    'path' => base_path() . DIRECTORY_SEPARATOR . 'config.json',

    'routes' => [
        'apiVersion' => 'v1',
        'prefix' => 'conf',
    ],

    'middleware' => ['api'], //Set to empty to disable middleware filter
];
