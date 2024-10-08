@extends('layouts.master')

@section('title', 'Stands')

@section('content')

    <!-- Hero Section -->
    <section class="relative h-screen flex flex-col justify-center items-center text-center bg-gray-900 text-white">
        <img src="{{ asset('images/30.png') }}" alt="Sneakers" class="absolute inset-0 w-full h-full object-cover opacity-60">
        <div class="relative z-10 max-w-2xl">
            <h1 class="text-5xl font-bold mb-6">NEEM JIJ JE COLLECTIE MEE?</h1>
            <p class="text-lg mb-8">Huur een stand op het evenement en laat jouw sneakers shinen.</p>
            <div class="space-x-4">
                <a href="#" class="bg-[#5DB7DE] px-6 py-3 rounded-lg hover:bg-[#4ca6d0]">Huur je stand</a>
                <a href="#" class="bg-blue-600 px-6 py-3 rounded-lg hover:bg-blue-700">Meer Info</a>
            </div>
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section class="py-16 bg-gray-100">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold">Upcoming Events</h2>
            <p class="text-gray-600">Bekijk onze evenementen en huur een stand.</p>
        </div>
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Small Stand -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden h-80">
                <img src="{{ asset('images/stand-small.png') }}" alt="Small Stand" class="w-full h-2/3 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Small Stand</h3>
                    <p class="text-gray-600 mb-4">Perfect voor kleine collecties en nieuwkomers.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-[#5DB7DE] text-white px-4 py-2 rounded-lg">Huur hier</a>
                        <a href="#" class="text-[#5DB7DE] border border-[#5DB7DE] px-4 py-2 rounded-lg">Meer info</a>
                    </div>
                </div>
            </div>
            <!-- Big Stand -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden h-80">
                <img src="{{ asset('images/stand-big.png') }}" alt="Big Stand" class="w-full h-2/3 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Big Stand</h3>
                    <p class="text-gray-600 mb-4">Voor grote collecties of merken.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-[#5DB7DE] text-white px-4 py-2 rounded-lg">Huur hier</a>
                        <a href="#" class="text-[#5DB7DE] border border-[#5DB7DE] px-4 py-2 rounded-lg">Meer info</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- More Info Section -->
    <section class="text-center py-16">
        <h2 class="text-4xl font-bold">More About Us</h2>
        <p class="text-gray-600">Meer over hoe je als bezoeker of verkoper kunt deelnemen.</p>
        <div class="max-w-lg mx-auto bg-white shadow-lg p-8 rounded-lg mt-8">
            <div class="flex mb-6 space-x-4">
                <button id="btnBezoeker" class="flex-1 text-center p-2 bg-gray-200 rounded-lg" onclick="showForm('bezoeker')">Bezoeker</button>
                <button id="btnVerkoper" class="flex-1 text-center p-2 bg-gray-100 rounded-lg" onclick="showForm('verkoper')">Verkoper</button>
            </div>
            <!-- Visitor Form -->
            <form id="formBezoeker" class="hidden">
                <div class="mb-4">
                    <label for="emailBezoeker" class="block text-left">Email</label>
                    <input id="emailBezoeker" type="email" class="w-full p-2 border rounded-lg" placeholder="Enter your email">
                </div>
                <button type="submit" class="w-full py-2 bg-[#5DB7DE] text-white rounded-lg">Submit</button>
            </form>
            <!-- Seller Form -->
            <form id="formVerkoper" class="hidden">
                <div class="mb-4">
                    <label for="emailVerkoper" class="block text-left">Email</label>
                    <input id="emailVerkoper" type="email" class="w-full p-2 border rounded-lg" placeholder="Enter your email">
                </div>
                <div class="mb-4">
                    <label for="standSize" class="block text-left">Stand Size</label>
                    <select id="standSize" class="w-full p-2 border rounded-lg">
                        <option value="small">Small</option>
                        <option value="big">Big</option>
                    </select>
                </div>
                <button type="submit" class="w-full py-2 bg-[#5DB7DE] text-white rounded-lg">Submit</button>
            </form>
        </div>
    </section>

    <script>
        function showForm(type) {
            document.getElementById('formBezoeker').classList.add('hidden');
            document.getElementById('formVerkoper').classList.add('hidden');
            if (type === 'bezoeker') {
                document.getElementById('formBezoeker').classList.remove('hidden');
            } else {
                document.getElementById('formVerkoper').classList.remove('hidden');
            }
        }
    </script>

@endsection
