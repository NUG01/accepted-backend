<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PasswordResetEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $payload;

    public function __construct($data)
    {
        $this->payload = $data;
    }

    public function build()
    {
        $payload = $this->payload;
        return $this->from(env('MAIL_USERNAME'), env('MAIL_NAME'))
            ->subject('Recover your password.')
            ->view(
                'mail.PasswordResetEmail',
                [
                    'name' => $payload['name'],
                    'email' => $payload['email'],
                    'url' => env('FRONTEND_URL') . '/recover-password/' . $payload['code'],
                    'role' => $payload['role']
                ]
            );
    }
}
