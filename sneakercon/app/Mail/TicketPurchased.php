<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TicketPurchased extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct($data)
    {
        $this->data = $data; // Store the ticket purchase data
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Ticket Purchased',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.ticket_purchased', // Update this to your view name
            with: ['data' => $this->data], // Pass the data to the view
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
