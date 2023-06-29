<?php

namespace App\Jobs;

use App\Mail\RequestCallbackToHospital as MailRequestCallbackToHospital;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class RequestCallbackToHospital implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $name, $contact, $email, $department, $date;

    /**
     * Create a new job instance.
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
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to('noreply@starhospitals.co.in')->send(new MailRequestCallbackToHospital($this->name, $this->contact, $this->email, $this->department, $this->date));
    }
}
