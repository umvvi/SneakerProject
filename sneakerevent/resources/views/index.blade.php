@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- Hero Section -->
    <section class="relative h-screen flex flex-col justify-center items-center text-center bg-gray-900 text-white">
        <img src="img/banner-home.jpg" alt="Sneakers" class="absolute inset-0 w-full h-full object-cover opacity-50">
        <!-- Placeholder image -->
        <div class="relative z-10 max-w-2xl px-4">
            <h1 class="text-3xl md:text-5xl font-bold mb-4 md:mb-6">
                ONZE PASSIE VOOR SNEAKERS MAAKT DAT ONS EVENEMENTEN CREËERT
            </h1>
            <p class="text-base md:text-lg text-gray-300 mb-6 md:mb-8">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
            </p>
            <div class="flex justify-center space-y-4 md:space-y-0 md:space-x-4">
                <a href="{{ route('ticket') }}" class="bg-[#5DB7DE] text-white px-6 py-3 rounded-lg text-center">
                    Tickets Kopen
                </a>
                <a href="{{ route('event') }}" class="bg-gray-700 text-white px-6 py-3 rounded-lg text-center">
                    Meer Info
                </a>
            </div>
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section class="py-12 px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Upcoming Events</h2>
            <p class="text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
        </div>

        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Event 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden h-[500px]">
                <img src="img/home-card-1.png" alt="Event Amsterdam" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Event - Amsterdam</h3>
                    <p class="text-gray-600 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
                    </p>
                    <div class="flex space-x-4">
                        <a href="{{ route('ticket') }}" class="bg-[#5DB7DE] text-white px-4 py-2 rounded-lg">
                            Koop tickets
                        </a>
                        <a href="{{ route('stand') }}" class="text-[#5DB7DE] px-4 py-2 rounded-lg border border-[#5DB7DE]">
                            Meer info
                        </a>
                    </div>
                </div>
            </div>

            <!-- Event 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden h-[500px]">
                <img src="img/home-card-2.png" alt="Event Utrecht" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Event - Utrecht</h3>
                    <p class="text-gray-600 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
                    </p>
                    <div class="flex space-x-4">
                        <a href="{{ route('ticket') }}" class="bg-[#5DB7DE] text-white px-4 py-2 rounded-lg">
                            Koop tickets
                        </a>
                        <a href="{{ route('stand') }}" class="text-[#5DB7DE] px-4 py-2 rounded-lg border border-[#5DB7DE]">
                            Meer info
                        </a>
                    </div>
                </div>
            </div>
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
                        <img src="img/Vector.png" alt="Networking Icon" class="w-12 h-12 mr-3">
                        <div>
                            <h4 class="font-bold text-lg">Networking</h4>
                            <p class="text-gray-600">Connect with sneaker enthusiasts and industry experts.</p>
                        </div>
                    </div>
                    <!-- Icon 2 -->
                    <div class="flex items-start">
                        <img src="img/Vector-1.png" alt="Earn Money Icon" class="w-12 h-12 mr-3">
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
