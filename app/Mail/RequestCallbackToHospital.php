<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RequestCallbackToHospital extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $contact, $email, $department, $date;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $contact, $email, $department, $date)
    {
        $this->name = $name;
        $this->contact = $contact;
        $this->email = $email;
        $this->department = $department;
        $this->date = $date;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Request Callback lead',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.requestCallbackToHospital',
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
