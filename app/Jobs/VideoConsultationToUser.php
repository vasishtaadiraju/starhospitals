<?php

namespace App\Jobs;

use App\Mail\VideoConsultationToUser as MailVideoConsultationToUser;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class VideoConsultationToUser implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $firstname, $lastname, $guardian_name, $country_code, $contact, $email, $branch, $coe, $speciality, $doctor, $date;

    /**
     * Create a new job instance.
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
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->email)->send(new MailVideoConsultationToUser($this->firstname, $this->lastname, $this->guardian_name, $this->country_code, $this->contact, $this->email, $this->branch, $this->coe, $this->speciality, $this->doctor, $this->date));
    }
}
