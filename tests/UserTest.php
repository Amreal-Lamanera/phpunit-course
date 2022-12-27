<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
    public function testReturnsFullName()
    {
        require 'User.php';

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
}