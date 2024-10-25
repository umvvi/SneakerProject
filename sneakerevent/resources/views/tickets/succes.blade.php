@extends('layouts.app')

@section('title', 'Ticket Purchase Successful')

@section('content')
    <div class="max-w-md mx-auto mt-10">
        <h1 class="text-2xl font-bold">Ticket Purchase Successful!</h1>
        <p class="mt-4">Thank you for your purchase. Your ticket has been emailed to you.</p>
        <a href="{{ route('tickets.index') }}" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded">Back to Tickets</a>
    </div>
@endsection
