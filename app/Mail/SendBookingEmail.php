<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\Mime\Address;

class SendBookingEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $dataForm;

    /**
     * Create a new message instance.
     */
    public function __construct(private $name, private $email, private $tanggal, private $paket)
    {
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Send Booking Email',
            // from: new \Illuminate\Mail\Mailables\Address('hallavinsen@gmail.com', 'Admin'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.booking-confirmation',
            with: [
                'name' => $this->name,
                'email' => $this->email,
                'tanggal' => $this->tanggal,
                'paket' => $this->paket,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
