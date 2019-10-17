<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'unsplash' => [
        'key' => env('UNSPLASH_ACCESS_KEY'),
    ],

    'meta' => [
        'site_name' => 'My Perosnal Blog',
        'mantra' => 'Web & Mobile Developer',
    ],
    'social' => [
        'linkedin' => 'https://www.linkedin.com/in/username/',
        'email' => 'mailto:mail@gmail.com',
        'medium' => 'https://medium.com/@username',
        'github' => 'https://github.com/username',
        'twitter' => 'https://twitter.com/username',
        'atom' => '#',
    ]
];
