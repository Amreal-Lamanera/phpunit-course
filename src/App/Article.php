<?php

namespace App;

class Article
{
    public $title;

    public function getSlug(): string
    {
        if(is_null($this->title))
            return '';

        $slug = $this->title;

        $slug = preg_replace('/\s+/', '_', $slug);

        $slug = trim($slug, '_');

        return $slug;
    }
}