<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class HospitalTalkToDoctor extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $contact, $email, $speciality, $query;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $contact, $email, $speciality, $query)
    {
        $this->name = $name;
        $this->contact = $contact;
        $this->email = $email;
        $this->speciality = $speciality;
        $this->query = $query;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Talk to a Doctor lead',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.mail.hospitalTalkToDoctor',
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
