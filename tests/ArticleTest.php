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
    /*
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
        $this->article->title = "   An example article   ";

        $this->assertEquals($this->article->getSlug(), 'An_example_article');
    }

    public function testSlugDoesNotHaveAnyNonWordCharacters()
    {
        $this->article->title = "Read! This! Now!";

        $this->assertEquals($this->article->getSlug(), 'Read_This_Now');
    }
    */

    public function titleProvider(): array
    {
        return [
            'Slug Has Spaces Replaced By Underscores' =>
                ['An example article', 'An_example_article'],
            'Slug Has Underscores Replaced By Single Underscore' =>
                ["An           example  \n   article", 'An_example_article'],
            'Slug Does Not Start Or End With Underscore' =>
                ["   An example article   ", 'An_example_article'],
            'Slug Does Not Have Any Non Word Characters' =>
                ["Read! This! Now!", 'Read_This_Now'],
        ];
    }

    /**
     * @dataProvider titleProvider
     * @param $title
     * @param $slug
     */
    public function testSlug($title, $slug)
    {
        $this->article->title = $title;

        $this->assertEquals($this->article->getSlug(), $slug);
    }
}