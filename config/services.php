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
        'model' => emeract\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
    'client_id' => '345766799196674',
    'client_secret' => '30a1492b2bff2e6f30a8fb9fb2250a01',
    'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],

    'twitter' => [
    'client_id' => 'qKhWSQ8GpVXs6RvvAstBquZKk',
    'client_secret' => 'SEt2OW5BJDnSiNkwY8M0x4PSsOXtNnbYPCWPCxQzrRr5YpWxP5',
    'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],

    'google' => [
    'client_id' => '211854968598-fohtkhc3r2gl5dpjkh4vjg06u7g31ktc.apps.googleusercontent.com',
    'client_secret' => 'NKmZK0tnEmIfiz69OJUprXDk',
    'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

];
