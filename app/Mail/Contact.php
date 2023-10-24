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

  /**
   * Create a new message instance.
   */
  public function __construct(private $name, private $email, private $text)
  {
  }

  /**
   * Get the message envelope.
   */
  public function envelope(): Envelope
  {
    return new Envelope(
      subject: '[Nachricht] ' . $this->name,
      replyTo: $this->email
    );
  }

  /**
   * Get the message content definition.
   */
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
