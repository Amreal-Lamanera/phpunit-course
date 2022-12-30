<?php

class UserStatic
{
    public string $email;

//    protected MailerStatic $mailer;
    protected $mailer_callable;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

//    public function setMailer(MailerStatic $mailer)
//    {
//        $this->mailer = $mailer;
//    }

    public function setMailerCallable(callable $mailer)
    {
        $this->mailer_callable = $mailer;
    }

    public function notify(string $message): bool
    {
//        return MailerStatic::send($this->email, $message);
        return call_user_func($this->mailer_callable,
            $this->email, $message);
    }
}