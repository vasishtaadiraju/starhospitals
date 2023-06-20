<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VideoConsultationToHospital extends Mailable
{
    use Queueable, SerializesModels;

    public $firstname, $lastname, $guardian_name, $country_code, $contact, $email, $branch, $coe, $speciality, $doctor, $date;

    /**
     * Create a new message instance.
     */
    public function __construct($firstname, $lastname, $guardian_name, $country_code, $contact, $email, $branch, $coe, $speciality, $doctor, $date)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->guardian_name = $guardian_name;
        $this->country_code = $country_code;
        $this->contact = $contact;
        $this->email = $email;
        $this->branch = $branch;
        $this->coe = $coe;
        $this->speciality = $speciality;
        $this->doctor = $doctor;
        $this->date = $date;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Video Consultation lead',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.mail.videoConsultationToHospital',
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
