<?php

use PHPUnit\Framework\TestCase;

class UserStaticTest extends TestCase
{
    public function testNotifyReturnsTrue()
    {
        $user = new UserStatic('a@a.a');

        $mailer = $this->createMock(MailerStatic::class);

        $mailer->expects($this->once())
            ->method('send')
            ->willReturn(true);

        $user->setMailer($mailer);

        $this->assertTrue($user->notify('CIAOOOOO'));
    }
}