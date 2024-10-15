<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade\Pdf;

class TicketConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pdf;

    public function __construct($pdf)
    {
        $this->pdf = $pdf;
    }

    public function build()
    {
        return $this->view('emails.ticket_confirmation') // Create this view for email content
        ->attachData($this->pdf->output(), 'ticket.pdf', [
            'mime' => 'application/pdf',
        ])
            ->subject('Ticket Confirmation');
    }
}
