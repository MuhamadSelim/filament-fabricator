<?php

// config for Z3d0X/FilamentFabricator
use Illuminate\Routing\Middleware\SubstituteBindings;

return [
    'routing' => [
        'enabled' => true,
        'prefix' => null, // ex .'/pages'
        'laravel_localization' => false, // if set to true LaravelLocalization::setLocale() will be added as prefix
        'middlewares' => [
            SubstituteBindings::class,
            //add Localization Middleware to register
        ]
    ],
    'localization' => false,
    'layouts' => [
        'namespace' => 'App\\Filament\\Fabricator\\Layouts',
        'path' => app_path('Filament/Fabricator/Layouts'),
        'register' => [
            //
        ],
    ],

    'page-blocks' => [
        'namespace' => 'App\\Filament\\Fabricator\\PageBlocks',
        'path' => app_path('Filament/Fabricator/PageBlocks'),
        'register' => [
            //
        ],
    ],
];
