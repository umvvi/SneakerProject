<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Event;
use App\Models\Price;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    // Display the ticket purchase form for an event with all prices
    public function index()
    {
        $events = Event::with('prices')->get(); // Fetch all events with associated prices
        return view('tickets.index', compact('events'));
    }

    // Display the ticket purchase page for a specific event
    public function purchase(Event $event)
    {
        $prices = Price::where('event_id', $event->id)->get(); // Get prices based on event ID
        return view('tickets.purchase', compact('event', 'prices'));
    }

    // Handle the ticket purchase
    public function store(Request $request)
    {
        $request->validate([
            'visitor_name' => 'required',
            'visitor_email' => 'required|email',
            'price_id' => 'required|exists:prices,id',
            'number_of_tickets' => 'required|integer|min:1',
        ]);

        $price = Price::findOrFail($request->price_id);

        // Create a ticket
        Ticket::create([
            'visitor_name' => $request->visitor_name,
            'visitor_email' => $request->visitor_email,
            'event_id' => $price->event_id,
            'price_id' => $request->price_id,
            'number_of_tickets' => $request->number_of_tickets,
        ]);


        return redirect()->route('tickets.index')->with('success', 'Tickets purchased successfully.');
    }
}
