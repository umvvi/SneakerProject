@extends('layouts.app')

@section('title', 'Event Details')

@section('content')

    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold mb-6">Event Details</h1>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold">Event Name: {{ $event->name }}</h2>
            <p class="mt-4">Date: {{ $event->date }}</p>
            <p class="mt-4">Location: {{ $event->location }}</p>
            <p class="mt-4">Available Tickets: {{ $event->available_tickets }}</p>
            <p class="mt-4">Remarks: {{ $event->remarks }}</p>
        </div>

        <div class="mt-6">
            <a href="{{ route('events.index') }}" class="text-blue-500 underline">Back to Events</a>
        </div>
    </div>

@endsection
