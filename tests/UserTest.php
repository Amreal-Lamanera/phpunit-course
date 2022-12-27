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

        $mock_mailer->expects($this->once())
            ->method('sendMessage')
            ->with($this->equalTo('fp@aaa.a'), $this->equalTo('Ciao'))
            ->willReturn(true);

        $user->setMailer($mock_mailer);
//        $user->setMailer(new Mailer);

        $user->email = 'fp@aaa.a';

        $this->assertTrue($user->notify('Ciao'));
    }

    public function testCannotNotifyUserWithNoEmail()
    {
        $user = new User;

        $mock_mailer = $this->getMockBuilder(Mailer::class)
            // stub only some of the methods from the original object
                // in questo caso nessuno, quindi null
            ->setMethods(null)
            ->getMock();

        $user->setMailer($mock_mailer);

        $this->expectException(Exception::class);

        $user->notify('Ciao');
    }
}