<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InternationalToUser extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $country_code, $contact, $email, $department, $report;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $country_code, $contact, $email, $department, $report)
    {
        $this->name = $name;
        $this->country_code = $country_code;
        $this->contact = $contact;
        $this->email = $email;
        $this->department = $department;
        $this->report = $report;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Star Hospitals - International Patient Enquiry',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.internationalToUser',
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
