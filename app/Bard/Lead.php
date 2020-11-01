<?php

namespace App\Bard;

use ProseMirrorToHtml\Marks\Mark;

class Lead extends Mark
{
    protected $markType = 'lead';
    protected $tagName = 'p';

    public function matching(): bool
    {
        return $this->mark->type === $this->markType;
    }

    public function tag(): ?array
    {
        return [
            ['tag' => 'p',
                'attrs' => [
                    'class' => "lead",
                ],
            ],
        ];
    }
}
