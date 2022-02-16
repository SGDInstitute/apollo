<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class FieldWidth extends Tags
{
    public function index()
    {
        $width = (string) $this->context->get('width');

        $options = [
            100 => 'w-full',
            75 => 'w-3/4',
            66 => 'w-2/3',
            50 => 'w-1/2',
            33 => 'w-1/3',
            25 => 'w-1/4'
        ];

        return $options[$width] ?? 'w-full';
    }
}
