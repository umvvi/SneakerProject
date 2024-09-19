@extends('layouts.master')

@section('title', 'Stand Renting')

@section('content')
    <div class="text-center">
        <h1 class="text-4xl font-bold mb-6">Rent a Stand</h1>
        <p class="text-lg mb-8">Showcase your sneaker collection at SneakerCon by renting a stand.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-2">Small Stand</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded">Rent Now</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-2">Medium Stand</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded">Rent Now</a>
            </div>
        </div>
    </div>
@endsection
