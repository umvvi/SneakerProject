<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Stand;

class StandRentedNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $stand;

    public function __construct(Stand $stand)
    {
        $this->stand = $stand;
    }

    public function build()
    {
        return $this->subject('Stand Rented Confirmation')
            ->view('emails.stand_rented')
            ->with(['stand' => $this->stand]);
    }
}
