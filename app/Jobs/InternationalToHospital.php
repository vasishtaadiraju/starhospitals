<?php

namespace App\Jobs;

use App\Mail\InternationalToHospital as MailInternationalToHospital;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class InternationalToHospital implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $name, $country_code, $contact, $email, $department, $report;

    /**
     * Create a new job instance.
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
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to('info@starhospitals.co.in')->send(new MailInternationalToHospital($this->name, $this->country_code, $this->contact, $this->email, $this->department, $this->report));
    }
}
