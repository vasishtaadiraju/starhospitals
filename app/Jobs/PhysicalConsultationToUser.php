<?php

namespace App\Jobs;

use App\Mail\PhysicalConsultationToUser as MailPhysicalConsultationToUser;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class PhysicalConsultationToUser implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $appointment_id, $patient_id, $patient_name, $patient_email, $doctor, $location, $speciality, $appointment_date, $appointment_time;

    /**
     * Create a new job instance.
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
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->patient_email)->send(new MailPhysicalConsultationToUser($this->appointment_id, $this->patient_id, $this->patient_name, $this->patient_email, $this->doctor, $this->location, $this->speciality, $this->appointment_date, $this->appointment_time));
    }
}
