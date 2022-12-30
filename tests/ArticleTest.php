<?php

use App\Article;
use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    protected $article;

    protected function setUp(): void
    {
        $this->article = new App\Article;
    }

    public function testTitleIsEmptyByDefault()
    {
        //$article = new App\Article;

        $this->assertEmpty($this->article->title);
    }

    public function testSlugIsEmptyWithNoTitle()
    {
        //$article = new App\Article;

        $this->assertSame($this->article->getSlug(), "");
    }

    public function testSlugHasSpacesReplacedByUnderscores()
    {
        $this->article->title = 'An example article';

        $this->assertEquals($this->article->getSlug(), 'An_example_article');
    }

    public function testSlugHasUnderscoresReplacedBySingleUnderscore()
    {
        $this->article->title = "An           example  \n   article";

        $this->assertEquals($this->article->getSlug(), 'An_example_article');
    }

    public function testSlugDoesNotStartOrEndWithUnderscore()
    {
        $this->article->title = "   An           example  \n   article   ";

        $this->assertEquals($this->article->getSlug(), 'An_example_article');
    }
}