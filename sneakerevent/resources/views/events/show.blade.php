@extends('layouts.app')

@section('title', $event->name)

@section('content')

    <!-- Hero Section -->
    <header class="relative w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/banner-event.jpeg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative flex justify-center items-center h-full text-center text-white">
            <div>
                <h1 class="text-5xl font-extrabold tracking-tight">{{ $event->name }}</h1>
                <p class="text-2xl mt-4">{{ $event->date }} | {{ $event->location }}</p>
            </div>
        </div>
    </header>

    <!-- Event Details Section -->
    <section class="bg-white py-16 px-6 md:px-20">
        <div class="flex flex-col md:flex-row">
            <!-- Left Column (Practical Info) -->
            <div class="md:w-3/5 mb-8 px-10">
                <h2 class="text-4xl font-bold mb-6">PRACTICAL INFO</h2>
                <h3 class="text-xl font-bold mb-4">{{ $event->description_title }}</h3>
                <p class="text-md mb-6">{{ $event->city_description }}</p>
                <p class="text-md">{{ $event->event_description }}</p>
            </div>

            <!-- Right Column (Get Ticket & Admission) -->
            <div class="md:w-2/5 px-10">
                <!-- Get Ticket -->
                <h3 class="text-2xl font-bold mb-4">GET TICKET</h3>
                <a href="{{ $event->ticket_link }}" class="inline-block text-blue-600 hover:text-blue-700 transition underline">→ Buy at our ticket provider</a>

                <!-- Admission Details -->
                <h3 class="text-2xl font-bold mt-8 mb-4">ADMISSION</h3>
                <p class="text-md">{{ $event->admission_details }}</p>

                <!-- Hours -->
                <h3 class="text-2xl font-bold mt-8 mb-4">HOURS</h3>
                <p class="text-md">{{ $event->hours }}</p>
            </div>
        </div>
    </section>

    <!-- Available Tickets Section -->
    <section class="bg-white py-16 px-6 md:px-20">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold">Available Tickets</h2>
        </div>

        @if($event->tickets->isEmpty())
            <p class="text-center">No tickets available for this event yet.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($event->tickets as $ticket)
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold">{{ $ticket->price->name }} Ticket</h3>
                        <p class="text-md mt-2">Price: ${{ $ticket->price->amount }}</p>
                        <p class="text-md mt-2">Number of Tickets Available: {{ $ticket->number_of_tickets }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </section>





@endsection
