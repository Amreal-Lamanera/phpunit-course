<?php

class UserStatic
{
    public string $email;

    protected MailerStatic $mailer;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function setMailer(MailerStatic $mailer)
    {
        $this->mailer = $mailer;
    }

    public function notify(string $message): bool
    {
        return $this->mailer->send($this->email, $message);
    }
}