<?php

namespace App\Scopes;

use Statamic\Query\Scopes\Scope;

class Excluded extends Scope
{
    public function apply($query, $values)
    {
        dd($values);
            $query->whereNotIn('id', $values);
    }
}
