<?php

use PHPUnit\Framework\TestCase;

class MailerTest extends TestCase
{
    public function testSendMessageReturnsTrue()
    {
        $this->assertTrue(MailerStatic::send('aaa@a.a', 'bel messaggio'));
    }

    public function testInvalidArgumentExceptionIfEmailIsEmpty()
    {
        $this->expectException(InvalidArgumentException::class);

        MailerStatic::send('', 'bel messaggio');
    }
}