<?php

namespace App\Mail;

use App\Twill\Capsules\Appointments\Models\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Registration extends Mailable
{
  use Queueable;
  use SerializesModels;

  /**
   * Create a new message instance.
   */
  public function __construct(
    private string $name,
    private string $email,
    private Appointment $appointment
  ) {
  }

  /**
   * Get the message envelope.
   */
  public function envelope(): Envelope
  {
    return new Envelope(
      subject: '[Anmeldung] ' . $this->name,
      replyTo: [$this->email]
    );
  }

  /**
   * Get the message content definition.
   */
  public function content(): Content
  {
    return new Content(
      view: 'mail.registration',
      with: [
        'name' => $this->name,
        'email' => $this->email,
        'appointment' => $this->appointment,
      ]
    );
  }
}
