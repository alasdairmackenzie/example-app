<?php

use GoldSpecDigital\ObjectOrientedOAS\Objects\SecurityScheme;

return [

    'collections' => [

        'default' => [

            'info' => [
                'title' => config('app.name'),
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br/> <br/> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
                'version' => '2.0.1',
                'extensions' => [
                    'logo' => [
                        'url' => "https://static.designmynight.com/uploads/2017/01/DesignMyNight-Logo.png",
                        'altText' => "DesignMyNight"
                    ]
                ],
            ],

            'servers' => [
                [
                    'url' => env('APP_URL'),
                ],
            ],

            'tags' => [
                [
                    'name' => 'User',
                    'description' => 'Application users',
                ],
            ],

            'security' => [
                GoldSpecDigital\ObjectOrientedOAS\Objects\SecurityRequirement::create()->securityScheme(
                    App\OpenApi\SecuritySchemes\BasicSecurityScheme::class
                )
            ],

            // Route for exposing specification.
            // Leave uri null to disable.
            'route' => [
                'uri' => '/openapi',
                'middleware' => ['App\Http\Middleware\OpenApi'],
            ],

            // Register custom middlewares for different objects.
            'middlewares' => [
                'paths' => [
                    //
                ],
            ],

        ],

    ],

    // Directories to use for locating OpenAPI object definitions.
    'locations' => [
        'callbacks' => [
            app_path('OpenApi/Callbacks'),
        ],

        'request_bodies' => [
            app_path('OpenApi/RequestBodies'),
        ],

        'responses' => [
            app_path('OpenApi/Responses'),
        ],

        'schemas' => [
            app_path('OpenApi/Schemas'),
        ],

        'security_schemes' => [
            app_path('OpenApi/SecuritySchemes'),
        ],
    ],

];
