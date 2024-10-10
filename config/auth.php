<?php

return [


    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],



    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'adminProvider',
        ],
        'dealer' => [
            'driver' => 'session',
            'provider' => 'dealers',
        ],
        'trader' => [
            'driver' => 'session',
            'provider' => 'traders',
        ],
    ],


    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
        'adminProvider' => [
            'driver' => 'eloquent',
            'model' => App\Models\AdminModel::class,
        ],
        'dealers' => [
            'driver' => 'eloquent',
            'model' => App\Models\Dealer::class,
        ],
        'traders' => [
            'driver' => 'eloquent',
            'model' => App\Models\Traderregis::class,
        ],
    ],



    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
        'dealers' => [
            'provider' => 'dealers',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
        'traders' => [
            'provider' => 'traders',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],


    'password_timeout' => 10800,

];
