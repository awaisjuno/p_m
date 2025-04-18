<?php

return [
    'default' => env('DB_CONNECTION', 'mysql'),

    'connections' => [
        'mysql' => [
            'driver' => 'pdo_mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'dbname' => env('DB_DATABASE', 'management'),
            'user' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
        ],
    ],

    'migrations' => [
        'directory' => database_path('migrations'),
        'namespace' => 'Database\Migrations',
    ],
];
