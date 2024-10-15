@extends('layouts.app')

@section('title', 'Bestelling Succesvol')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen">
        <h1 class="text-3xl font-bold text-green-600">Bestelling Succesvol!</h1>
        <p class="text-lg mt-4">Bedankt voor uw bestelling. U ontvangt een bevestigingsmail met uw ticketinformatie.</p>

        <div class="mt-6">
            <a href="{{ url('/') }}" class="bg-[#5DB7DE] text-white py-2 px-4 rounded-md">Terug naar Home</a>
        </div>
    </div>

    <script>
        // Redirect to home after 5 seconds
        setTimeout(() => {
            window.location.href = '{{ url('/') }}';
        }, 5000);
    </script>
@endsection
