<?php

class User
{
    public $first_name;
    public $surname;
    public $email;

    public function getFullName()
    {
        return trim("{$this->first_name} {$this->surname}");
    }

    public function notify($message)
    {
        $mailer = new Mailer;

        $mailer->sendMessage($this->email, $message);
    }
}