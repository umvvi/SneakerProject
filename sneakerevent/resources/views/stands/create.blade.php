@extends('layouts.app')

@section('title', 'Create Stand')

@section('content')

    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold mb-6">Create a Stand</h1>

        <form action="{{ route('stands.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="stand_type" class="block mb-2">Stand Type</label>
                <select name="stand_type" id="stand_type" class="w-full p-2 border border-gray-300 rounded" required>
                    <option value="" disabled selected>Select a type</option>
                    <option value="AA+">AA+</option>
                    <option value="AA">AA</option>
                    <option value="A">A</option>
                </select>
            </div>
            <div>
                <label for="price" class="block mb-2">Price</label>
                <input type="number" name="price" id="price" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <button type="submit" class="w-full p-3 bg-blue-500 text-white rounded hover:bg-blue-600">Create Stand</button>
        </form>
    </div>

@endsection
