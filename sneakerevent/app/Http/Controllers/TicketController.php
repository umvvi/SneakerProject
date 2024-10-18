<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use App\Mail\TicketConfirmationMail;

class TicketController extends Controller
{
    // Show the ticket purchase form
    public function create()
    {
        return view('tickets.create'); // Create a view for the ticket form
    }

    // Handle the ticket purchase request
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        // Validate form inputs
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'location' => 'required|string|max:255',
            'ticket_type' => 'required|string|max:255',
        ]);

        try {
            // Store the ticket
            $ticket = Ticket::create([
                'event_id' => $request->event_id, // Assume you pass the event ID from the form
                'ticket_type' => $request->ticket_type,
                'name' => $request->first_name . ' ' . $request->last_name,
                'email' => $request->email,
                'event_date' => $request->event_date, // Pass this dynamically as well
                'city' => $request->location,
            ]);

            // Generate PDF for the ticket
            $pdf = Pdf::loadView('tickets.pdf', ['ticket' => $ticket]);

            // Send confirmation email
            Mail::to($request->email)->send(new TicketConfirmationMail($ticket, $pdf));

            // Flash success message
            session()->flash('notification', 'Uw ticket is succesvol besteld.');

            // Redirect to success page
            return redirect()->route('success');
        } catch (\Exception $e) {
            \Log::error('Ticket order failed: ' . $e->getMessage());
            session()->flash('error', 'Er is iets misgegaan bij het bestellen van uw ticket.');
            return redirect()->back()->withInput();
        }
    }
}
