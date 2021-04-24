<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sites
    |--------------------------------------------------------------------------
    |
    | Each site should have root URL that is either relative or absolute. Sites
    | are typically used for localization (eg. English/French) but may also
    | be used for related content (eg. different franchise locations).
    |
    */

    'sites' => [
        'sgdinstitute' => [
            'name' => 'SGD Institute',
            'locale' => 'en_US',
            'url' => env('APP_URL'),
        ],
        'mblgtacc' => [
            'name' => 'MBLGTACC',
            'locale' => 'en_US',
            'url' => env('MBLGTACC_URL'),
        ],
    ],
];
