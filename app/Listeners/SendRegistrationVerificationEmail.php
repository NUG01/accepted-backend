<?php

namespace App\Listeners;

use App\Events\UserRegistration;
use App\Mail\VerificationEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendRegistrationVerificationEmail
{

    // public $user;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegistration $event)
    {

        $payload = [
            'name' => $event->data['name'],
            'email' => $event->data['email'],
            'code' => $event->data['verification_code'],
            'role' => $event->data['role_id'],
        ];
        Mail::to($payload['email'])->send(new VerificationEmail($payload));
    }
}
