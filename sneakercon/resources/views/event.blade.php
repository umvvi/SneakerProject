@extends('layouts.master')

@section('title', 'Events')

@section('content')

    <!-- Hero Section -->
    <header class="relative w-full h-screen bg-cover bg-center" style="background-image: url('https://via.placeholder.com/1920x1080');">
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
            <div class="md:w-3/5 mb-8">
                <h2 class="text-4xl font-bold mb-6">PRACTICAL INFO</h2>
                <p class="text-xl mb-6">Rotterdam: Immense, ever new, a must-see city.</p>
                <p class="text-md">Rotterdam is a fascinating destination...</p>
            </div>
            <div class="md:w-2/5">
                <h3 class="text-2xl font-bold mb-4">GET TICKETS</h3>
                <a href="#" class="inline-block py-3 px-6 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Buy at our ticket provider</a>
            </div>
        </div>
    </section>

    <!-- Photo Section -->
    <section id="photos" class="bg-gray-100 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <img src="https://via.placeholder.com/600x400" alt="Event photo 1" class="w-full object-cover">
            <img src="https://via.placeholder.com/600x400" alt="Event photo 2" class="w-full object-cover">
            <img src="https://via.placeholder.com/600x400" alt="Event photo 3" class="w-full object-cover">
            <img src="https://via.placeholder.com/600x400" alt="Event photo 4" class="w-full object-cover">
        </div>
    </section>

    <!-- Schedule Section -->
    <section id="schedule" class="bg-white py-16 px-6 md:px-20">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold">SCHEDULE</h2>
        </div>
        <div class="flex flex-col md:flex-row space-y-6 md:space-x-8">
            <div class="md:w-1/2">
                <h3 class="text-2xl font-bold mb-4">Day 1</h3>
                <ul class="list-none space-y-4">
                    <li><strong>10:00 AM</strong> - Opening Ceremony</li>
                    <li><strong>11:00 AM</strong> - Panel Discussion</li>
                    <li><strong>1:00 PM</strong> - Sneaker Exhibition</li>
                    <li><strong>3:00 PM</strong> - Q&A Session</li>
                    <li><strong>6:00 PM</strong> - Live Performance</li>
                </ul>
            </div>
            <div class="md:w-1/2">
                <h3 class="text-2xl font-bold mb-4">Day 2</h3>
                <ul class="list-none space-y-4">
                    <li><strong>10:00 AM</strong> - Opening Ceremony</li>
                    <li><strong>11:00 AM</strong> - Workshop</li>
                    <li><strong>1:00 PM</strong> - Sneaker Exhibition</li>
                    <li><strong>3:00 PM</strong> - Q&A Session</li>
                    <li><strong>6:00 PM</strong> - Live Performance</li>
                </ul>
            </div>
        </div>
    </section>

@endsection
