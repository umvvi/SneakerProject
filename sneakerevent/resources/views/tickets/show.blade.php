@extends('layouts.app')

@section('title', 'Ticket Details')

@section('content')

    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold mb-6">Ticket Details</h1>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold">Type: {{ $ticket->type }}</h2>
            <p class="mt-4">Quantity: {{ $ticket->quantity }}</p>
            <p class="mt-4">Price: {{ $ticket->price }}</p>
            <p class="mt-4">Date Purchased: {{ $ticket->created_at }}</p>
        </div>

        <div class="mt-6">
            <a href="{{ route('tickets.index') }}" class="text-blue-500 underline">Back to Tickets</a>
        </div>
    </div>

@endsection
