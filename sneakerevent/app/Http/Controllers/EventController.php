<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Show the details of a specific event
    public function show(Event $event)
    {
        // Eager load the tickets relationship
        $event->load('tickets');

        return view('events.show', compact('event'));
    }

    // Show the form to create a new event (optional if you still want to create events)
    public function create()
    {
        return view('admin.events.create');
    }

    // Store a new event
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            'location' => 'required',
            'number_of_tickets_per_timeslot' => 'required|integer',
            'available_stands' => 'required|integer',
        ], [
            'name.required' => 'Event name is required.',
            'date.required' => 'Event date is required.',
            'location.required' => 'Event location is required.',
            'number_of_tickets_per_timeslot.required' => 'Number of tickets per timeslot is required.',
            'available_stands.required' => 'Number of available stands is required.',
        ]);

        Event::create($request->all());

        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    // Show the form to edit an existing event (optional if you still want to edit events)
    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    // Update an existing event
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            'location' => 'required',
            'number_of_tickets_per_timeslot' => 'required|integer',
            'available_stands' => 'required|integer',
        ], [
            'name.required' => 'Event name is required.',
            'date.required' => 'Event date is required.',
            'location.required' => 'Event location is required.',
            'number_of_tickets_per_timeslot.required' => 'Number of tickets per timeslot is required.',
            'available_stands.required' => 'Number of available stands is required.',
        ]);

        $event->update($request->all());

        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    // Delete an event
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
}
