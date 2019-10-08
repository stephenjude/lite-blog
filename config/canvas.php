<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Canvas Path
    |--------------------------------------------------------------------------
    |
    | This is the URI path where Canvas will be accessible from. You are free
    | to change this path to anything you like. Note that updating the URI
    | will affect the internal API paths that are not exposed to users.
    |
    */

    'path' => env('CANVAS_PATH_NAME', 'editor'),

    /*
    |--------------------------------------------------------------------------
    | Route Middleware
    |--------------------------------------------------------------------------
    |
    | These middleware will be attached to every route in Canvas, giving you
    | the chance to add your own middleware to this list or change any of
    | the existing middleware. Or, you can simply stick with the list.
    |
    */

    'middleware' => [
        'web',
        'auth',
    ],

    /*
    |--------------------------------------------------------------------------
    | Uploads Disk
    |--------------------------------------------------------------------------
    |
    | This is the storage disk Canvas will use to put file uploads, you may
    | use any of the disks defined in the config/filesystems.php file and
    | You may also configure the path where files are to be stored.
    |
    */

    'storage_disk' => env('CANVAS_STORAGE_DISK', 'local'),

    'storage_path' => env('CANVAS_STORAGE_PATH', 'public/canvas'),

    /*
    |--------------------------------------------------------------------------
    | Unsplash Integration
    |--------------------------------------------------------------------------
    |
    | Visit https://unsplash.com/oauth/applications to create a new Unsplash
    | app. Use the confidential Access Key given to you to integrate with
    | the API. Note that demo apps are limited to 50 requests per hour.
    |
    */

    'unsplash' => [
        'access_key' => env('CANVAS_UNSPLASH_ACCESS_KEY'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Notifications
    |--------------------------------------------------------------------------
    |
    | This option enables Canvas to send e-mail notifications via the default
    | mail driver. If enabled, a weekly summary will be sent to each user
    | that has authored content providing them with unique analytics.
    |
    */

    'mail' => [
        'enabled' => env('CANVAS_MAIL_ENABLED', false),
    ],

];
