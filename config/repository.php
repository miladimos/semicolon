<?php

return [

    /**
     * Application Namespace
     * app()->getNamespace()
     */
    'application_namespace' => 'App',

    /**
     *  Path that contains Models
     *
     *  application_namespace + \ + models_namespace ==> App\Models
     */
    'models_namespace' => 'Models',

    /**
     * Path that contains Repositories
     *
     * application_namespace + repositories_namespace ==> App\Repositories
     *
     */
    'repositories_namespace' => 'Repositories',

    /**
     *  Path that contains Repository Interfaces
     *
     *  application_namespace + repositories_namespace ==> App\Repositories\Interfaces;
     */
    'interfaces_namespace' => 'Interfaces',

    /**
     * Suffix for Created Repositories
     *
     * ex: $modelNameRepository
     *
     */
    'repositories_suffix' => 'Repository',

    /**
     * Suffix for Created Repositories
     *
     * ex: $modelNameInterface
     *
     */
    'interfaces_suffix' => 'Interface',
];
