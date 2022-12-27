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

    public function testAddDoesNotReturnsTheIncorrectSum()
    {
        $this->assertNotEquals(5, add(2, 2));
//        $this->assertNotEquals(4, add(2, 2));
    }

}