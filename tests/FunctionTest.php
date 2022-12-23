<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testAddReturnsTheCorrectSum()
    {
        require  'functions.php';

        $this->assertEquals(4, add(2,2));
        $this->assertEquals(3, add(2,1));
    }
}