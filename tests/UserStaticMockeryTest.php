<?php

use PHPUnit\Framework\TestCase;

class UserStaticMockeryTest extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
    }

    public function testNotifyReturnsTrue() {
        $user = new UserStatic('a@a.a');

        $mock = Mockery::mock('alias:MailerStatic');

        $mock->shouldReceive('send')
            ->once()
            ->with($user->email, 'CIAO!')
            ->andReturn(true);

        $this->assertTrue($user->notify('CIAOOOOO'));
    }
}