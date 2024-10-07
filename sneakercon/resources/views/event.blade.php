@extends('layouts.master')

@section('title', 'Events')

@section('content')

    <header class="relative w-full h-[70vh] bg-cover bg-center" style="background-image: url('https://via.placeholder.com/1920x1080');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative flex justify-center items-center h-full text-center text-white">
            <div>
                <h1 class="text-5xl font-bold">ROTTERDAM 2024</h1>
                <p class="text-xl mt-4">26 – 27 October, 2024 | Van Nelle Fabriek</p>
            </div>
        </div>
    </header>

    <section class="bg-black text-white py-4 w-full">
        <div class="flex justify-center space-x-4">
            <a href="#info" class="underline-link py-2 px-4">INFO</a>
            <a href="#photos" class="underline-link py-2 px-4">PHOTOS</a>
            <a href="#schedule" class="underline-link py-2 px-4">SCHEDULE</a>
        </div>
    </section>

    <section id="info" class="bg-white py-16 px-4 md:px-20">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-3/5">
                <h2 class="text-4xl font-bold mb-4">PRACTICAL INFO</h2>
                <p class="text-3xl mb-6">Rotterdam: Immense, ever new, a must-see to us.</p>
                <p class="text-md">Rotterdam is a fascinating must-see...</p>
            </div>
            <div class="md:w-2/5 flex flex-col space-y-6 mt-8 md:mt-0">
                <div>
                    <h3 class="text-2xl font-bold">GET TICKETS</h3>
                    <a href="#" class="text-blue-500 animated-btn py-2 px-4 inline-block bg-gray-900 text-white rounded">Buy at our ticket provider</a>
                </div>
            </div>
        </div>
    </section>

    <section id="photos" class="bg-gray-100 py-16 px-4 md:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
            <img src="https://via.placeholder.com/600x400" alt="Image 1" class="w-full h-auto object-cover">
            <img src="https://via.placeholder.com/600x400" alt="Image 2" class="w-full h-auto object-cover">
            <img src="https://via.placeholder.com/600x400" alt="Image 3" class="w-full h-auto object-cover">
            <img src="https://via.placeholder.com/600x400" alt="Image 4" class="w-full h-auto object-cover">
        </div>
    </section>

    <section id="schedule" class="bg-white py-16 px-4 md:px-20">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold">SCHEDULE</h2>
        </div>
        <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-8">
            <div class="md:w-1/2">
                <h3 class="text-2xl font-bold mb-4">Day 1</h3>
                <ul class="list-none space-y-2">
                    <li><strong>10:00 AM</strong> - Opening Ceremony</li>
                    <li><strong>11:00 AM</strong> - Panel Discussion</li>
                    <li><strong>1:00 PM</strong> - Sneaker Exhibition</li>
                    <li><strong>3:00 PM</strong> - Q&A Session</li>
                    <li><strong>6:00 PM</strong> - Live Performance</li>
                </ul>
            </div>
            <div class="md:w-1/2">
                <h3 class="text-2xl font-bold mb-4">Day 2</h3>
                <ul class="list-none space-y-2">
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
