@extends('layouts.app')

@section('title', 'Create Ticket')

@section('content')

    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold mb-6">Create a Ticket</h1>

        <form action="{{ route('tickets.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="type" class="block mb-2">Ticket Type</label>
                <select name="type" id="type" class="w-full p-2 border border-gray-300 rounded" required>
                    <option value="" disabled selected>Select a type</option>
                    <option value="Regular">Regular Ticket</option>
                    <option value="VIP">VIP Ticket</option>
                    <option value="Student">Student Ticket</option>
                </select>
            </div>
            <div>
                <label for="quantity" class="block mb-2">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="w-full p-2 border border-gray-300 rounded" min="1" required>
            </div>
            <button type="submit" class="w-full p-3 bg-blue-500 text-white rounded hover:bg-blue-600">Create Ticket</button>
        </form>
    </div>

@endsection
