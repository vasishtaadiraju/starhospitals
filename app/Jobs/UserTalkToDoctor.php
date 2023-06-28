<?php

namespace App\Jobs;

use App\Mail\UserTalkToDoctor as MailUserTalkToDoctor;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class UserTalkToDoctor implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $name, $contact, $email, $speciality, $query;

    /**
     * Create a new job instance.
     */
    public function __construct($name, $contact, $email, $speciality, $query)
    {
        $this->name = $name;
        $this->contact = $contact;
        $this->email = $email;
        $this->speciality = $speciality;
        $this->query = $query;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->email)->send(new MailUserTalkToDoctor($this->name, $this->contact, $this->email, $this->speciality, $this->query));
    }
}
