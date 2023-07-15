<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PhysicalConsultationToUser extends Mailable
{
    use Queueable, SerializesModels;

    public $appointment_id, $patient_id, $patient_name, $patient_email, $doctor, $location, $speciality, $appointment_date, $appointment_time;

    /**
     * Create a new message instance.
     */
    public function __construct($appointment_id, $patient_id, $patient_name, $patient_email, $doctor, $location, $speciality, $appointment_date, $appointment_time)
    {
        $this->appointment_id = $appointment_id;
        $this->patient_id = $patient_id;
        $this->patient_name = $patient_name;
        $this->patient_email = $patient_email;
        $this->doctor = $doctor;
        $this->location = $location;
        $this->speciality = $speciality;
        $this->appointment_date = $appointment_date;
        $this->appointment_time = $appointment_time;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Star Hospitals - Physical Consultation Confirmation',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.physicalConsultationToUser',
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
