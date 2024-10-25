@extends('layouts.app')

@section('title', 'event')

@section('content')

    <!-- Hero Section -->
    <header class="relative w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/banner-event.jpeg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative flex justify-center items-center h-full text-center text-white">
            <div>
                <h1 class="text-5xl font-extrabold tracking-tight">ROTTERDAM 2024</h1>
                <p class="text-2xl mt-4">26 – 27 October, 2024 | Van Nelle Fabriek</p>
            </div>
        </div>
    </header>

    <!-- Navigation Section -->
    <section class="bg-black text-white py-4">
        <div class="flex justify-center space-x-8">
            <a href="#info" class="underline-link py-2">INFO</a>
            <a href="#photos" class="underline-link py-2">PHOTOS</a>
            <a href="#schedule" class="underline-link py-2">SCHEDULE</a>
        </div>
    </section>

    <!-- Info Section -->
    <section id="info" class="bg-white py-16 px-6 md:px-20">
        <div class="flex flex-col md:flex-row">
            <!-- Left Column (Practical Info) -->
            <div class="md:w-3/5 mb-8 px-10"> <!-- Added px-4 for padding on both sides -->
                <h2 class="text-4xl font-bold mb-6">PRACTICAL INFO</h2>
                <h3 class="text-xl font-bold mb-4">Rotterdam: Immense, ever new, a must-see to us.</h3>
                <p class="text-md mb-6">Think great architecture, an immense harbor, a wild (street) art scene, amazing places for music, plus an innovative sneaker community, and you get the second largest city of the Netherlands: Rotterdam. The city's cultural richness is minted by its dramatic history: During World War II Rotterdam got bombarded, but its diverse inhabitants have been reconstructing and reshaping the city in many ways ever since.</p>
                <p class="text-md">Thus, Rotterdam is a fascinating must-see to us – and we are thrilled to bring our convention to the Dutch city's cultural landscape. Be prepared to discover international brands, extraordinary sneaker stores, and some of the most exquisite private sellers and collectors from all over the place at this year’s Sneakerness Rotterdam.</p>
            </div>

            <!-- Right Column (Get Ticket & Admission) -->
            <div class="md:w-2/5  px-10">
                <!-- Get Ticket -->
                <h3 class="text-2xl font-bold mb-4">GET TICKET</h3>
                <a href="#" class="inline-block text-blue-600 hover:text-blue-700 transition underline">→ Buy at our ticket provider</a>

                <!-- Admission Details -->
                <h3 class="text-2xl font-bold mt-8 mb-4">ADMISSION</h3>
                <p class="text-md">Presale: 1-Day SAT entrance from 12.00 € 19.– / 1-Day SAT entrance from 14.00 € 17.– / 1-Day SAT entrance from 16.00 € 15.– / 2-Day SAT + SUN early entrance from 11.00 € 50.– / 1-Day SUN entrance from 11.00 € 17.– / 1-Day SUN entrance from 13.00 € 15.– / 1-Day SUN entrance from 15.00 € 13.–</p>

                <!-- Hours -->
                <h3 class="text-2xl font-bold mt-8 mb-4">HOURS</h3>
                <p class="text-md">SAT 11.00–19.00 / SUN 11.00–18.00</p>
            </div>
        </div>
    </section>

    <!-- Photo Section -->
    <section id="photos" class="bg-gray-100 py-16">
        <div class="grid grid-cols-4 gap-0">
            <img src="img/grid-1.png" alt="Event photo 1" class="col-span-2 w-full h-full object-cover">
            <img src="img/grid-2.png" alt="Event photo 2" class="col-span-2 w-full h-full object-cover">
            <img src="img/grid-3.png" alt="Event photo 3" class="col-span-3 w-full h-full object-cover">
            <img src="img/grid-4.png" alt="Event photo 4" class="col-span-1 w-full h-full object-cover">
            <img src="img/grid-5.png" alt="Event photo 5" class="col-span-1 w-full h-full object-cover">
            <img src="img/grid-6.png" alt="Event photo 6" class="col-span-3 w-full h-full object-cover">
        </div>
    </section>

    <!-- Schedule Section -->
    <section id="schedule" class="bg-white py-24 px-6 md:px-20">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold">SCHEDULE</h2>
        </div>
        <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-8">
            <!-- Left image -->
            <div class="md:w-1/2 flex justify-center md:justify-start animate-fade-in-left">
                <img src="img/trump.png" alt="Event image" class="w-full h-auto object-cover">
            </div>

            <!-- Day 1 schedule with icons and vertical line -->
            <div class="md:w-2/2 relative">
                <!-- Vertical line -->
                <div class="absolute left-0 top-0 h-full w-1 bg-gray-300"></div>

                <!-- Schedule items -->
                <div class="pl-10">
                    <h3 class="text-2xl font-bold mb-4">Day 1</h3>
                    <ul class="list-none space-y-10 relative">
                        <li class="flex items-start schedule-item">
                            <!-- Icon and line -->
                            <div class="flex flex-col items-center">
                                <div class="bg-blue-600 text-white rounded-full h-10 w-10 flex items-center justify-center">📅</div>
                                <div class="h-full w-1 bg-gray-300"></div>
                            </div>
                            <!-- Schedule text -->
                            <div class="ml-4">
                                <strong>10:00 AM</strong> - Opening Ceremony
                            </div>
                        </li>
                        <li class="flex items-start schedule-item">
                            <div class="flex flex-col items-center">
                                <div class="bg-blue-600 text-white rounded-full h-10 w-10 flex items-center justify-center">🎤</div>
                                <div class="h-full w-1 bg-gray-300"></div>
                            </div>
                            <div class="ml-4">
                                <strong>11:00 AM</strong> - Panel Discussion
                            </div>
                        </li>
                        <li class="flex items-start schedule-item">
                            <div class="flex flex-col items-center">
                                <div class="bg-blue-600 text-white rounded-full h-10 w-10 flex items-center justify-center">👟</div>
                                <div class="h-full w-1 bg-gray-300"></div>
                            </div>
                            <div class="ml-4">
                                <strong>1:00 PM</strong> - Sneaker Exhibition
                            </div>
                        </li>
                        <li class="flex items-start schedule-item">
                            <div class="flex flex-col items-center">
                                <div class="bg-blue-600 text-white rounded-full h-10 w-10 flex items-center justify-center">❓</div>
                                <div class="h-full w-1 bg-gray-300"></div>
                            </div>
                            <div class="ml-4">
                                <strong>3:00 PM</strong> - Q&A Session
                            </div>
                        </li>
                        <li class="flex items-start schedule-item">
                            <div class="flex flex-col items-center">
                                <div class="bg-blue-600 text-white rounded-full h-10 w-10 flex items-center justify-center">🎵</div>
                            </div>
                            <div class="ml-4">
                                <strong>6:00 PM</strong> - Live Performance
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
