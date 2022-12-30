<?php

use PHPUnit\Framework\TestCase;

class AbstractPersonTest extends TestCase
{
    public function testNameAndTitleReturned()
    {
        $doctor = new Doctor('Green');

        $this->assertEquals('Doctor Green', $doctor->getNameAndTitle());
    }

    public function testNameAndTitleIncludesValueFromGetTitle()
    {
        $mock = $this->getMockBuilder(AbstractPerson::class)
            ->setConstructorArgs(['Green'])
            ->getMockForAbstractClass();

        $mock->method('getTitle')->willReturn('Doctor');

        $this->assertEquals('Doctor Green', $mock->getNameAndTitle());
    }
}
