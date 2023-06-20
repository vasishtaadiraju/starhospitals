<?php

namespace App\Jobs;

use App\Mail\ContactFormToHospital as MailContactFormToHospital;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ContactFormToHospital implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $type, $name, $contact, $email, $subject, $query;

    /**
     * Create a new job instance.
     */
    public function __construct($type, $name, $contact, $email, $subject, $query)
    {
        $this->type = $type;
        $this->name = $name;
        $this->contact = $contact;
        $this->email = $email;
        $this->subject = $subject;
        $this->query = $query;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to('veerukumarv1@gmail.com')->send(new MailContactFormToHospital($this->type, $this->name, $this->contact, $this->email, $this->subject, $this->query));
    }
}
