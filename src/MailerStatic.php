<?php

class MailerStatic
{
    public function send(string $email, string $message)
    {
        if (empty($email)) {
            throw new InvalidArgumentException();
        }

        echo "Send '$message' to '$email'";

        return true;
    }
}