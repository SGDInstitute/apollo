<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class Grid extends Tags
{
    public function index()
    {
        $widths = (string) $this->context->get('column_widths');

        if ($widths === 'half') {
            return 'grid-cols-2 gap-12';
        } elseif ($widths === 'third_left' || $widths === 'third_right') {
            return 'grid-cols-3 gap-12';
        } elseif ($widths === 'quarter_left' || $widths === 'quarter_right') {
            return 'grid-cols-4 gap-12';
        } elseif ($widths === 'two_fifths_left' || $widths === 'two_fifths_right' || $widths === 'one_fifth_left' || $widths === 'one_fifth_right') {
            return 'grid-cols-5 gap-12';
        }
    }

    public function left()
    {
        $widths = (string) $this->context->get('column_widths');

        if ($widths === 'half') {
            return '';
        } elseif ($widths === 'third_left') {
            return '';
        } elseif ($widths === 'third_right') {
            return 'col-span-2';
        } elseif ($widths === 'quarter_left') {
            return '';
        } elseif ($widths === 'quarter_right') {
            return 'col-span-3';
        } elseif ($widths === 'two_fifths_left') {
            return 'col-span-2';
        } elseif ($widths === 'two_fifths_right') {
            return 'col-span-3';
        } elseif ($widths === 'one_fifth_left') {
            return '';
        } elseif ($widths === 'one_fifth_right') {
            return 'col-span-4';
        }
    }

    public function right()
    {
        $widths = (string) $this->context->get('column_widths');

        if ($widths === 'half') {
            return '';
        } elseif ($widths === 'third_left') {
            return 'col-span-2';
        } elseif ($widths === 'third_right') {
            return '';
        } elseif ($widths === 'quarter_left') {
            return 'col-span-3';
        } elseif ($widths === 'quarter_right') {
            return '';
        } elseif ($widths === 'two_fifths_left') {
            return 'col-span-3';
        } elseif ($widths === 'two_fifths_right') {
            return 'col-span-2';
        } elseif ($widths === 'one_fifth_left') {
            return 'col-span-4';
        } elseif ($widths === 'one_fifth_right') {
            return '';
        }
    }
}
