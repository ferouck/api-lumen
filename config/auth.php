
<?php

return [
    'driver' => 'doctrine',
    'model' => App\Entities\User::class,
    'defaults' => [
        'guard' => 'api',
        'passwords' => 'users',
    ],
    'guards' => [
        'api' => [
            'driver' => 'jwt',
            'provider' => 'users',
        ],
    ],
    'providers' => [
        'users' => [
            'driver' => 'doctrine',
            'model' => App\Entities\User::class,
        ]
    ],
    'password' => [
        'email' => 'emails.password',
        'table' => 'password_resets',
        'expire' => 60,
    ],
]; 