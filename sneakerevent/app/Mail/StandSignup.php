<?php

use App\Models\Stand;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StandSignup extends Mailable
{
    use Queueable, SerializesModels;

    public $stand;

    public function __construct(Stand $stand)
    {
        $this->stand = $stand;
    }

    public function build()
    {
        return $this->view('emails.stand_signup')
            ->subject('Your Stand is Booked')
            ->with([
                'email' => $this->stand->email,
                'stand_size' => $this->stand->stand_size,
            ]);
    }
}
