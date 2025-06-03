<?php



return [
    'client' => env('REDIS_CLIENT', 'predis'),//phpredis
    'default' => [
        'url' => env('REDIS_URL'),
        'host' => env('REDIS_HOST', '127.0.0.1'),
        'username' => env('REDIS_USERNAME'),
        'password' => env('REDIS_PASSWORD'),
        'port' => env('REDIS_PORT', '6379'),
        'database' => env('REDIS_DB', '0'),
    ],

    'sentinel' => [
        [
            'host'     => env('REDIS_SENTINEL_1_HOST', '10.5.29.62'),
            'port'     => env('REDIS_SENTINEL_1_PORT', 8805),
            'timeout' =>  env('REDIS_SENTINEL_TIMEOUT', 0.2),
        ],
        [
            'host'     => env('REDIS_SENTINEL_2_HOST', '10.5.30.202'),
            'port'     => env('REDIS_SENTINEL_2_PORT', 8805),
            'timeout' =>  env('REDIS_SENTINEL_TIMEOUT', 0.2),
        ],
        [
            'host'     => env('REDIS_SENTINEL_3_HOST', '10.5.30.214'),
            'port'     => env('REDIS_SENTINEL_3_PORT', 8805),
            'timeout' =>  env('REDIS_SENTINEL_TIMEOUT', 0.2),
        ],
        'options' => [
            'replication' => 'sentinel',
            'service' => env('REDIS_SENTINEL_SERVICE', '8805-sentinel-crm-service'),
            'parameters' => [
                'database' => env('REDIS_QUEUE_SENTINEL_DB', 0),
                'password' => env('REDIS_SENTINEL_PASSWORD', null),
            ]
        ],
    ],
];
