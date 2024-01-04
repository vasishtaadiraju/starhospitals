<?php

namespace App\Jobs;
use App\Mail\MemRegisterToUser as MailMemUser;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class MemRegisterToUser implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

     public $firstname, $lastname , $email;
    public function __construct($firstname, $lastname , $email)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->email)->send(new MailMemUser($this->firstname,$this->lastname));
    }
}
