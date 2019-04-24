<?php

declare(strict_types=1);

namespace App\Mail\Mailtrap;

class Message
{
    protected $mailer;

    public function __construct($mailer)
    {
        $this->mailer = $mailer;
    }

    public function to($address): void
    {
        $this->mailer->addAddress($address);
    }

    public function subject($subject): void
    {
        $this->mailer->Subject = $subject;
    }

    public function body($body): void
    {
        $this->mailer->Body = $body;
    }
}
