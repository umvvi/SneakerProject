<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // Add this line to import the PDF facade
use Illuminate\Support\Facades\Mail; // Add this line to import the Mail facade
use App\Mail\TicketConfirmationMail; // Add this line to import the mailable class

class TicketController extends Controller
{
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
            Ticket::create([
                'event_id' => 1, // Replace with actual event ID
                'ticket_type' => $request->ticket_type,
                'name' => $request->first_name . ' ' . $request->last_name,
                'event_date' => '2024-09-01', // Adjust to your actual event date
                'city' => $request->location,
            ]);

            // Flash success message
            session()->flash('notification', 'Uw ticket is succesvol besteld.');

            // Redirect to success page
            return redirect()->route('success');
        } catch (\Exception $e) {
            \Log::error('Ticket order failed: ' . $e->getMessage());
            session()->flash('error', 'Er is iets misgegaan bij het bestellen van uw ticket.');
            return redirect()->back()->withInput(); // Preserve input on failure
        }
    }

}
