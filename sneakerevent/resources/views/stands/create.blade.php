@extends('layouts.app')

@section('title', 'Stands')

@section('content')

    <section class="relative h-screen flex flex-col justify-center items-center text-center bg-gray-900 text-white">
        <img src="{{ asset('img/stand-banner.jpeg') }}" alt="Sneakers" class="absolute inset-0 w-full h-full object-cover opacity-50">
        <div class="relative z-10 max-w-2xl">
            <h1 class="text-4xl font-bold mb-6">NEEM JIJ JE COLLECTIE SNEAKERS MEE NAAR HET NIEUWE EVENEMENT?</h1>
            <p class="text-gray-300 mb-8">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
            </p>
            <div class="space-x-4">
                <a href="#" class="bg-[#5DB7DE] px-6 py-3 rounded-lg">Huur je stand</a>
                <a href="#" class="bg-blue-700 px-6 py-3 rounded-lg">Meer Info</a>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold">Stands Beschikbaar</h2>
            <p class="text-gray-600">Bekijk de beschikbare stands voor het evenement.</p>
        </div>

        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-10">
            @foreach($stands as $stand) <!-- Loop through the stands -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden h-[500px]">
                <img src="{{ asset('img/stand-' . $stand->id . '.png') }}" alt="Stand {{ $stand->stand_type }}" class="w-full h-80 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">{{ $stand->stand_type }}</h3>
                    <p class="text-gray-600 mb-4">
                        Price: €{{ $stand->price }} <br>
                        Status: {{ $stand->is_rented ? 'Rented' : 'Available' }} <br>
                        Remarks: {{ $stand->remarks }}
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-[#5DB7DE] text-blue px-4 py-2 rounded-lg">Huur hier</a>
                        <a href="#" class="text-[#5DB7DE] px-4 py-2 rounded-lg border border-[#5DB7DE]">Meer info</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold">More About Us</h2>
        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>

    <div class="max-w-md mx-auto bg-white shadow-lg p-8 rounded-lg">
        <h2 class="text-2xl font-bold mb-6 text-center">Aanvraagformulier Stand</h2>

        <!-- Form for Verkoper -->
        <form id="formVerkoper" class="space-y-4">
            <input type="text" name="naam" placeholder="Naam verkoper" class="w-full p-2 border border-gray-300 rounded" required>
            <input type="email" name="email" placeholder="Email" class="w-full p-2 border border-gray-300 rounded" required>
            <select name="soort_stand" class="w-full p-2 border border-gray-300 rounded" required>
                <option value="" disabled selected>Soort stand</option>
                <option value="AA+">AA+</option>
                <option value="AA">AA</option>
                <option value="A">A</option>
            </select>
            <input type="number" name="aantal_stands" placeholder="Aantal stands" class="w-full p-2 border border-gray-300 rounded" required min="1">
            <button type="submit" class="w-full p-3 bg-blue-500 text-white rounded hover:bg-blue-600">STAND HUREN</button>
        </form>
    </div>

@endsection
