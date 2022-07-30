<?php

interface MailInterface
{
    public function send();
}

class SmtpMailer implements MailInterface
{
    public function send()
    {

        var_dump('send with smtp');
    }
}


class MailgunMailer implements MailInterface
{
    public function send()
    {
        var_dump('send with mailgun');
    }
}

class MailDecorator
{
    protected $mailer;

    public function __construct(MailInterface $mailer)
    {
        $this->mailer = $mailer;
    }
    public function __call($name, $arguments)
    {
        $this->mailer->{$name}($arguments);
    }
}

$mail = new MailDecorator(new SmtpMailer());


$mail->send();


