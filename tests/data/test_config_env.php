<?php

return [
    'settings' => [
        'default.timezone' => env('LB_DEFAULT_TIMEZONE', 'US/Central'),
        'registration' => [
            'allow.self.registration' => env('LB_REGISTRATION_ALLOW_SELF', 'true'),
        ],
        'database' => [
            'type' => env('LB_DATABASE_TYPE', 'mysql'),
        ]
    ],
];
