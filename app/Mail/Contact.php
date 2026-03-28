<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(
        private readonly string $name,
        private readonly string $email,
        private readonly string $text,
    ) {
    }

    public function envelope(): Envelope
    {
        return new Envelope(subject: '[Nachricht] '.$this->name, replyTo: [$this->email]);
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.contact',
            with: [
                'name' => $this->name,
                'email' => $this->email,
                'text' => $this->text,
            ]
        );
    }
}
