<?php

namespace App\Listeners;

use App\Events\UserPasswordForgot;
use App\Mail\PasswordResetEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SendPasswordRecoverEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserPasswordForgot $event): void
    {


        $token = Str::random(45);
        $passwordReset =  DB::table('password_reset_tokens')->insert(
            [
                'email' => $event->data['email'],
                'token' => $token,
            ]
        );
        $payload = [
            'name' => $event->data['name'],
            'email' => $event->data['email'],
            'code' => $token,
            'role' => $event->data['role_id'],
        ];
        Mail::to($payload['email'])->send(new PasswordResetEmail($payload));
    }
}
