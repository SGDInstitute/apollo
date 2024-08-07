<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Styles
    |--------------------------------------------------------------------------
    |
    | List of toggleable styles.
    |
    */

    'styles' => [

        // 'hero' => [
        //     'type' => 'heading',
        //     'level' => 1,
        //     'name' => 'Hero Heading',
        //     'ident' => 'H',
        //     'class' => 'hero-heading',
        //     'cp_css' => 'font-family: serif',
        // ],

        'lead' => [
            'type' => 'paragraph',
            'name' => 'Lead',
            'ident' => 'L',
            'class' => 'lead',
            'cp_css' => 'font-size: 1.25em; display: block; color: #404040;',
        ],

        // 'brand' => [
        //     'type' => 'span',
        //     'name' => 'Brand Text',
        //     'ident' => 'B',
        //     'class' => 'brand-text',
        //     'cp_css' => 'color: dodgerblue; font-weight: 700',
        // ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Default Classes
    |--------------------------------------------------------------------------
    |
    | Default classes that will be applied to elements with no style set. The
    | standard set will be used if no set is selected in the field config.
    |
    */

    'default_classes' => [
        'standard' => [
            // 'heading' => [
            //     1 => 'heading-1',
            //     2 => 'heading-2',
            //     3 => 'heading-3',
            //     4 => 'heading-4',
            //     5 => 'heading-5',
            //     6 => 'heading-6',
            // ],
            // 'paragraph' => 'paragraph',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Store
    |--------------------------------------------------------------------------
    |
    | By default the class names are saved to your content. If you would prefer
    | to save the style keys instead you can change this option to "key".
    |
    */

    'store' => 'class',

];
