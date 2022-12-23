<?php

// per fare tests con phpunit si deve creare una classe che estenda
// TestCase contenente una (o più credo) funzioni pubbliche con il
// nome che inizia per 'test'

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testAddingTwoPlusTwoResultsInFour()
    {
        $this->assertEquals(4, 2 + 2);
//        $this->assertEquals(5, 2 + 2);
    }

    public function testAddingThreePlusTwoResultsInFour()
    {
        $this->assertEquals(5, 3 + 2);
//        $this->assertEquals(5, 2 + 2);
    }
}