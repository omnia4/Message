<?php

namespace App\Jobs;

use App\Mail\CustomMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendEmailsBatchJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $users;
    protected $message;

    public function __construct($users, $message)
    {
        $this->users = $users;
        $this->message = $message;
    }

    public function handle()
    {
        foreach ($this->users as $user) {
            Mail::to($user->email)->queue(new CustomMessage($this->message));
        }
    }
}
