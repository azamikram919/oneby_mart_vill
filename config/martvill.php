<?php

return [

    /*
    |--------------------------------------------------------------------------
    | The application is in demo mode or not
    |--------------------------------------------------------------------------
    |
    | This option controls the demo mode of the application.
    |
    | value: true, false
    |
    */

    'is_demo' => env('IS_DEMO', false),

    /* The application version */
    'version' => env('MARTVILL_VERSION', '1.0.0'),

    /*
    |--------------------------------------------------------------------------
    | Unique Item Code
    |--------------------------------------------------------------------------
    |
    | This key represents the unique item code.
    | It is essential not to remove or modify this code if you intend to receive updates and maintain compatibility with our scripts.
    |
    | Warning: Don't remove or modify item code. If you want to take updates and maintain compatibility with our scripts, preserve this code intact.
    |
    */
    'item_code' => '43288879',

    /* The application file version */
    'file_version' => '1.7.0',

    /** Martvill versions
     *
     * All of the martvill versions are listed here.
     * **/
    'versions' => [
        '1.0.0',
        '1.1.0',
        '1.2.0',
        '1.3.0',
        '1.4.0',
        '1.5.0',
        '1.6.0',
        '1.7.0',
    ],

    /**
     * Thumbnail path
     *
     * Note:If you want to change the thumbnail_dir name,
     * You must change dir name from public/uploads/[old thumbnail directory name]
     * */
    'thumbnail_dir' => 'sizes',


    /* Demo account credentails, Only work when the application on demo mode */
    'credentials' => [
        'admin' => [
            'email' => 'admin@techvill.net',
            'password' => '123456'
        ],
        'vendor' => [
            'email' => 'vendor@techvill.net',
            'password' => '123456'
        ],
        'customer' => [
            'email' => 'user@techvill.net',
            'password' => '123456'
        ]
    ],

    'server_url ' => 'https://support.techvill.org'
];
