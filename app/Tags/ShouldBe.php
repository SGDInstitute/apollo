<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class ShouldBe extends Tags
{
    public function skipped()
    {
        if($this->context->raw('exclude')) {
            $id = $this->context->get('id');
            $articles = collect($this->context->value('sections'))->firstWhere('type', 'news_feature')['articles']->raw();
            $collection = collect($articles);
            return $collection->contains($id);
        }

        return false;
    }
}
