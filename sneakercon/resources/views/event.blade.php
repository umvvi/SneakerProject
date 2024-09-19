@extends('layouts.master')

@section('title', 'Events')

@section('content')

    <!-- Header Section (Banner) -->
    <header class="relative w-full h-[70vh] bg-cover bg-center" style="background-image: url('https://via.placeholder.com/1920x1080');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative flex justify-center items-center h-full text-center text-white">
            <div>
                <h1 class="text-5xl font-bold">ROTTERDAM 2024</h1>
                <p class="text-xl mt-4">26 – 27 October, 2024 | Van Nelle Fabriek</p>
            </div>
        </div>
    </header>

    <!-- Blue Section (Second Navigation) -->
    <section class="bg-black text-white py-4 w-full">
        <div class="px-6 flex justify-center">
            <div class="flex space-x-4">
                <a href="#" class="underline-link py-2 px-4">INFO</a>
                <a href="#" class="underline-link py-2 px-4">PHOTOS</a>
                <a href="#" class="underline-link py-2 px-4">SCHEDULE</a>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="bg-white py-16 w-full">
        <div class="px-6 flex flex-col md:flex-row">
            <div class="md:w-3/5">
                <h2 class="text-4xl font-bold mb-4">PRACTICAL INFO</h2>
                <p class="text-3xl mb-6">Rotterdam: Immense, ever new, a must-see to us.</p>
                <p class="text-md">Rotterdam is a fascinating must-see – and we are thrilled to bring our convention to the Dutch city’s cultural landscape. Be prepared to discover international brands, extraordinary sneaker stores, and some of the most exquisite private sellers and collectors.</p>
            </div>
            <div class="md:w-2/5 flex flex-col space-y-6 mt-8 md:mt-0">
                <div>
                    <h3 class="text-2xl font-bold">GET TICKETS</h3>
                    <a href="#" class="text-blue-500 animated-btn py-2 px-4 inline-block bg-gray-900 text-white rounded">Buy at our ticket provider</a>
                </div>
                <div>
                    <h3 class="text-2xl font-bold">ADMISSION</h3>
                    <p>Presale: 1-Day SAT entrance from €19</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold">HOURS</h3>
                    <p>SAT 11.00–19.00 / SUN 11.00–18.00</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Photo Recap Section -->
    <section class="bg-gray-100 py-16 w-full">
        <div class="px-0">
            <h2 class="text-3xl font-bold mb-8 text-center">PHOTO RECAP</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                <img src="https://via.placeholder.com/600x400" alt="Image 1" class="w-full h-auto object-cover">
                <img src="https://via.placeholder.com/600x400" alt="Image 2" class="w-full h-auto object-cover">
                <img src="https://via.placeholder.com/600x400" alt="Image 3" class="w-full h-auto object-cover">
                <img src="https://via.placeholder.com/600x400" alt="Image 4" class="w-full h-auto object-cover">
            </div>
        </div>
    </section>

    <!-- Schedule Section -->
    <section class="bg-white py-16 w-full">
        <div class="px-6">
            <h2 class="text-3xl font-bold mb-8 text-center">Schedule of the Day</h2>
            <div class="flex flex-col md:flex-row items-start md:space-x-12">
                <div class="w-full md:w-2/5">
                    <img src="https://via.placeholder.com/600x400" alt="Schedule Image" class="w-full h-auto mb-6">
                </div>
                <div class="w-full md:w-3/5">
                    <ul class="space-y-6">
                        <li>
                            <div class="flex items-center">
                                <span class="text-xl font-bold">Startup 12:00</span>
                            </div>
                            <p>All the stands are ready and the early bird ticket owners can start buying.</p>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <span class="text-xl font-bold">Mid day 15:00</span>
                            </div>
                            <p>Anybody with midday tickets can come in, and all the food trucks will be ready outside.</p>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <span class="text-xl font-bold">End of the day 18:00</span>
                            </div>
                            <p>People can buy their last pair of kicks or enjoy a snack and end their day.</p>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <span class="text-xl font-bold">After party 20:00</span>
                            </div>
                            <p>The after party starts when all the stands are cleaned up...</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
