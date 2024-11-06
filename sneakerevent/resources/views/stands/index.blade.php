@extends('layouts.app')

@section('title', 'Stands')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold text-center">Stands</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($stands as $stand)
                <div class="bg-white shadow-md rounded-lg p-5">
                    <h2 class="font-bold text-xl">{{ $stand->type }}</h2>
                    <p>Seller: {{ $stand->seller->name }}</p>
                    <a href="{{ route('stands.show', $stand->id) }}" class="text-blue-500 hover:underline">View Details</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
