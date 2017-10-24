<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
    'client_id' => '137869753503722',
    'client_secret' => '75dd8372902f8a722f74cc2c1bfee236',
    'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'google' => [
    'client_id' => '1023317909177-l1ju57h8fnso9ql3d6l12a7o0ksl0i8d.apps.googleusercontent.com',
    'client_secret' => 'dfzVFtxVOy47czKYHzJDMvnm',
    'redirect' => 'http://localhost:8000/login/google/callback',
    ],
];
