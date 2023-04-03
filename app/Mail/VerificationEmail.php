<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VerificationEmail extends Mailable
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
            ->subject('Please verify your account.')
            ->view(
                'mail.VerificationEmail',
                [
                    'name' => $payload['name'],
                    'email' => $payload['email'],
                    'url' => env('FRONTEND_URL') . '/account-verification/' . $payload['code'],
                    'role' => $payload['role']
                ]
            );
    }
}
