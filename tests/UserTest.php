<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
    public function testReturnsFullName()
    {
        // posso rimuovere il require perché andrò ad utilizzare la cartella
        // source(src) tramite composer
        //require 'User.php';

        $user = new User;

        $user->first_name = 'Teresa';
        $user->surname = 'Green';

        $this->assertEquals('Teresa Green', $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault()
    {
        $user = new User;

        $this->assertEquals('', $user->getFullName());
    }

    /**
     * @test
     */
    public function user_has_first_name()
    {
        $user = new User;

        $user->first_name = 'Teresa';

        $this->assertEquals('Teresa', $user->first_name);
    }

    public function testNotificationIsSent()
    {
        $user = new User;

        $mock_mailer = $this->createMock(Mailer::class);

        $mock_mailer->method('sendMessage')
            ->willReturn(true);

        $user->setMailer($mock_mailer);
//        $user->setMailer(new Mailer);

        $user->email = 'fp@aaa.a';

        $this->assertTrue($user->notify('Ciao'));
    }
}