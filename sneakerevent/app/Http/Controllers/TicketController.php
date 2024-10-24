<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Event;
use Illuminate\Support\Facades\Mail;
use PDF;

class TicketController extends Controller
{
    public function create()
    {
        $events = Event::all(); // Get all events
        return view('tickets.create', compact('events')); // Pass events to the view
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'event_id' => 'required|exists:evenements,id', // Ensure this matches your event table name
            'entry_time' => 'required|string',
            'ticket_count' => 'required|integer|min:1',
        ]);

        $ticket = Ticket::create([
            'bezoekerId' => auth()->user()->id, // Assuming the user is logged in
            'evenementId' => $validated['event_id'],
            'aantalTickets' => $validated['ticket_count'],
            'datum' => now(), // Current date/time
            // Add other fields as necessary
        ]);

        // Generate PDF
        $pdf = PDF::loadView('tickets.pdf', ['ticket' => $ticket]);
        $pdf->save(storage_path('tickets/' . $ticket->id . '.pdf'));

        // Send email
        Mail::to($validated['email'])->send(new \App\Mail\TicketPurchased($ticket));

        return redirect()->route('tickets.success')->with('success', 'Ticket purchased successfully.');
    }

    public function show($id)
    {
        // Retrieve the ticket using the ID
        $ticket = Ticket::findOrFail($id); // Adjust based on your Ticket model and database structure

        // Pass the ticket data to the view
        return view('tickets.show', compact('ticket'));
    }

    public function success()
    {
        return view('tickets.success'); // Your success view
    }
}
