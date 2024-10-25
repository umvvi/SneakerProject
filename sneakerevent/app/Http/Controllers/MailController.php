<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\StandRentedNotification;

class MailController extends Controller
{
    // Send a notification when a stand is rented
    public function sendStandRentedNotification($stand)
    {
        Mail::to($stand->vendor->email)->send(new StandRentedNotification($stand));

        return response()->json(['message' => 'Notification sent.']);
    }
}
