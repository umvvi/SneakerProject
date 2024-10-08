<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class StandRented extends Mailable
{
    use Queueable, SerializesModels;

    public array $data; // Declare the type for the data property

    public function __construct(array $data) // Declare the type for the constructor parameter
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(subject: 'Stand Rented');
    }

    public function content(): Content
    {
        return new Content(view: 'emails.stand_rented', with: ['data' => $this->data]);
    }

    public function attachments(): array
    {
        return []; // Add any attachments here if needed
    }
}
