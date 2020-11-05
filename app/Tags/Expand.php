<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class Expand extends Tags
{
    public function margin()
    {
        $directions = $this->context->raw('margin_directions');
        $top = $this->context->raw('margin_top') ?? '';
        $right = $this->context->raw('margin_right') ?? '';
        $bottom = $this->context->raw('margin_bottom') ?? '';
        $left = $this->context->raw('margin_left') ?? '';
        $margin = $this->context->raw('margin') ?? '';

        if($directions === 'same') {
            return $margin;
        }

        return "{$top} {$right} {$bottom} {$left}";
    }
}
