<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormToHospital extends Mailable
{
    use Queueable, SerializesModels;

    public $type, $name, $contact, $email, $subject, $query;

    /**
     * Create a new message instance.
     */
    public function __construct($type, $name, $contact, $email, $subject, $query)
    {
        $this->type = $type;
        $this->name = $name;
        $this->contact = $contact;
        $this->email = $email;
        $this->subject = $subject;
        $this->query = $query;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Us Form lead',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.mail.contactFormToHospital',
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
