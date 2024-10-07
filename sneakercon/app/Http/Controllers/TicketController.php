<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Mail\TicketPurchased;
use Illuminate\Support\Facades\Mail;

class TicketController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'location' => 'required|string',
            'ticket_type' => 'required|string',
        ]);

        // Process the ticket purchase (saving to database or other business logic)
        $ticket = Ticket::create($validated);

        // Send a confirmation email
        Mail::to($validated['email'])->send(new TicketPurchased($ticket));

        // Redirect with a success message
        return back()->with('success', 'Uw ticket is in behandeling.');
    }
}
