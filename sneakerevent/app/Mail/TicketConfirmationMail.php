<?php

namespace App\Mail;

use App\Models\Ticket;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade\Pdf;

class TicketConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $ticket;
    public $pdf;

    public function __construct(Ticket $ticket, $pdf)
    {
        $this->ticket = $ticket;
        $this->pdf = $pdf;
    }

    public function build()
    {
        return $this->subject('Ticket Bevestiging')
            ->markdown('emails.tickets.confirmation')
            ->attachData($this->pdf->output(), 'ticket.pdf', [
                'mime' => 'application/pdf',
            ]);
    }
}

