<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Event;
use Illuminate\Support\Facades\Mail;
use PDF;

class TicketController extends Controller
{
    public function index()
    {

    }

    // Show the form to create a new ticket
    public function create()
    {
        $events = Event::all(); // Get all events
        return view('tickets.create', compact('events')); // Pass events to the view
    }

    // Store a newly created ticket in storage
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'location' => 'required|string',
            'ticket_type' => 'required|string',
            'ticket_count' => 'required|integer|min:1', // Ensure at least one ticket is purchased
            'event_id' => 'required|exists:events,id', // Ensure event_id is validated
        ]);

        // Create a new ticket record
        $ticket = Ticket::create([
            'visitor_id' => auth()->user()->id, // Adjust if needed based on your user authentication
            'event_id' => $validated['event_id'],
            'price_id' => null, // Set to null or replace with the actual price ID when available
            'ticket_count' => $validated['ticket_count'],
            'is_active' => true, // Set active status as necessary
            'comment' => null, // You can replace this with $validated['comment'] if you add a comment field
        ]);

        // Additional logic for sending emails or generating PDFs can go here

        return redirect()->route('tickets.index')->with('success', 'Ticket purchased successfully.');
    }

    // Show the details of a specific ticket
    public function show($id)
    {
        // Retrieve the ticket using the ID
        $ticket = Ticket::findOrFail($id); // Adjust based on your Ticket model and database structure

        // Pass the ticket data to the view
        return view('tickets.show', compact('ticket'));
    }

    // Show success view after ticket purchase
    public function success()
    {
        return view('tickets.success'); // Your success view
    }
}
