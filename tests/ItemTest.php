<?php

use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    public function testDescriptionIsNotEmpty()
    {
        $item = new Item();

        $this->assertNotEmpty($item->getDescription());
    }

    public function testIDisAnInteger()
    {
        $item = new ItemChild();

        $this->assertIsInt($item->getId());
    }

//    non si può fare perché privato
//    public function testTokenIsAString()
//    {
//        $item = new ItemChild();
//
//        $this->assertIsString($item->getToken());
//    }
}