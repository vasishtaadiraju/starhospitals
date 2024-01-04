<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\MemRegisterToHospital as MailMemHospital;
use Illuminate\Support\Facades\Mail;

class MemRegisterToHospital implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $firstname,$lastname,$email,$country_code,$contact,$userMessage;
    public function __construct($firstname,$lastname,$email,$country_code,$contact,$userMessage)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->country_code = $country_code;
        $this->contact = $contact;
        $this->userMessage = $userMessage;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to('vasishta@outshade.com')->send(new MailMemHospital($this->firstname,$this->lastname,$this->email,$this->country_code,$this->contact,$this->userMessage));

    }
}
