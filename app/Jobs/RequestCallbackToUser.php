<?php

namespace App\Jobs;

use App\Mail\RequestCallbackToUser as MailRequestCallbackToUser;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class RequestCallbackToUser implements ShouldQueue
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
        Mail::to($this->email)->send(new MailRequestCallbackToUser($this->name, $this->contact, $this->email, $this->department, $this->date));
    }
}
