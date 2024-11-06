@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- Hero Section -->
    <section class="relative h-screen flex flex-col justify-center items-center text-center bg-gray-900 text-white">
        <img src="{{ asset('img/banner-home.jpg') }}" alt="Sneakers" class="absolute inset-0 w-full h-full object-cover opacity-50">
        <div class="relative z-10 max-w-2xl px-4">
            <h1 class="text-3xl md:text-5xl font-bold mb-4 md:mb-6">
                ONZE PASSIE VOOR SNEAKERS MAAKT DAT ONS EVENEMENTEN CREËERT
            </h1>
            <p class="text-base md:text-lg text-gray-300 mb-6 md:mb-8">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
            </p>
            <div class="flex justify-center space-y-4 md:space-y-0 md:space-x-4">
                <a href="{{ route('tickets.purchase') }}" class="bg-[#5DB7DE] text-white px-6 py-3 rounded-lg text-center">
                    Tickets Kopen
                </a>
                <a href="{{ route('events.index') }}" class="bg-gray-700 text-white px-6 py-3 rounded-lg text-center">
                    Meer Info
                </a>
            </div>
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section class="upcoming-events py-10">
        <h2 class="text-center text-3xl font-bold mb-8">Upcoming Events</h2>

        <div class="container mx-auto">
            @if($events->isEmpty())
                <p class="text-center text-gray-600">No upcoming events available at the moment.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($events as $event)
                        @if($event->is_active)
                            <div class="event-card p-5 bg-white shadow rounded-lg hover:shadow-lg transition">
                                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->name }}" class="w-full h-48 object-cover rounded-t-lg">
                                <h3 class="text-xl font-semibold mt-4">{{ $event->name }}</h3>
                                <p class="text-gray-600">{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }} - {{ $event->location }}</p>
                                <p class="mt-2">{{ $event->description }}</p>
                                <a href="{{ route('events.show', $event->id) }}" class="text-blue-500 hover:underline mt-3 block">View Details</a>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- Sneakerness Section -->
    <section class="py-12 px-4">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <!-- Left Text Section -->
            <div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    WIJ ZIJN SNEAKERNESS, EEN INTERNATIONAAL NETWERK.
                </h2>
                <p class="text-gray-700 mb-6">
                    Ons netwerk is een wereldwijd conglomeraat van liefhebbers, experts en professionals in branding en lifestyle.
                </p>
                <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-8">
                    <!-- Icon 1 -->
                    <div class="flex items-start">
                        <img src="{{ asset('img/Vector.png') }}" alt="Networking Icon" class="w-12 h-12 mr-3">
                        <div>
                            <h4 class="font-bold text-lg">Networking</h4>
                            <p class="text-gray-600">Connect with sneaker enthusiasts and industry experts.</p>
                        </div>
                    </div>
                    <!-- Icon 2 -->
                    <div class="flex items-start">
                        <img src="{{ asset('img/Vector-1.png') }}" alt="Earn Money Icon" class="w-12 h-12 mr-3">
                        <div>
                            <h4 class="font-bold text-lg">Earn Money</h4>
                            <p class="text-gray-600">Turn your passion for sneakers into a profitable venture.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Image Section -->
            <div>
                <img src="https://via.placeholder.com/800x600" alt="Sneakers" class="w-full h-auto rounded-lg shadow-lg">
            </div>
        </div>
    </section>

@endsection
