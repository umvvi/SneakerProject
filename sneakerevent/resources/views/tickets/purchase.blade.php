@extends('layouts.app')

@section('title', 'Purchase Tickets')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold">Purchase Tickets for {{ $event->name }}</h1>
        <form method="POST" action="{{ route('tickets.store') }}">
            @csrf
            <input type="hidden" name="event_id" value="{{ $event->id }}">

            <div class="mb-4">
                <label for="visitor_name" class="block text-gray-700">Your Name</label>
                <input type="text" id="visitor_name" name="visitor_name" class="mt-1 block w-full border border-gray-300 rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="visitor_email" class="block text-gray-700">Your Email</label>
                <input type="email" id="visitor_email" name="visitor_email" class="mt-1 block w-full border border-gray-300 rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="number_of_tickets" class="block text-gray-700">Number of Tickets</label>
                <input type="number" id="number_of_tickets" name="number_of_tickets" class="mt-1 block w-full border border-gray-300 rounded-lg" min="1" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Purchase</button>
        </form>
    </div>
@endsection
