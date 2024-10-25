@extends('layouts.app')

@section('title', 'Tickets')

@section('content')

    @if(session('success'))
        <div id="notification" class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-green-500 text-white py-2 px-4 rounded-lg z-50">
            {{ session('success') }}
        </div>
    @endif

    <!-- Header Section -->
    <header class="relative w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/banner-ticket.png') }}');">
        <div class="absolute bottom-16 left-8 text-white">
            <h1 class="text-3xl md:text-5xl font-bold">TICKETVERHUUR</h1>
            <h2 class="text-2xl md:text-4xl font-light mt-2">SUMMER HEAT EDITION</h2>
            <p class="mt-4 text-base md:text-lg">10 juni 2023</p>
        </div>
    </header>

    <!-- Content Section -->
    <div class="max-w-5xl mx-auto px-4 py-10 md:flex md:space-x-6">
        <div class="md:w-3/5 mb-6 md:mb-0">
            <h1 class="text-3xl md:text-4xl font-bold text-black mb-4">KOOP HIER JE TICKETS!</h1>
            <p class="text-base md:text-lg leading-relaxed text-gray-700 mb-4">
                Sneakers have become more than just shoes—they're a global symbol of style, identity, and culture.
                ...
            </p>
        </div>

        <!-- Ticket Options (Right) -->
        <div class="md:w-1/3 space-y-4">
            @foreach (['EARLY ACCESS', 'REGULAR TICKET', 'AFTERNOON TICKET', 'BUITEN(FREE)'] as $ticket)
                <div class="bg-black text-white py-3 px-5 rounded-lg">
                    <h2 class="text-sm md:text-base font-semibold mb-2">{{ $ticket }}</h2>
                    <p class="text-sm md:text-lg">11:30–18:00</p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Ticket Cards Section -->
    <div class="flex flex-wrap justify-center items-center py-10 space-y-6 md:space-y-0 md:space-x-6">
        @foreach ([['type' => 'REGULAR TICKET', 'price' => '€20', 'time' => '01 SEP 2024 Toegang vanaf 11:30'],
                  ['type' => 'AFTERNOON TICKET', 'price' => '€15', 'time' => '01 SEP 2024 Toegang vanaf 13:30'],
                  ['type' => 'EARLY ACCESS', 'price' => '€30', 'time' => '01 SEP 2024 Toegang vanaf 10:30']] as $ticket)
            <div class="bg-white shadow-lg rounded-lg w-full md:w-64 mx-2">
                <div class="bg-black text-white text-center py-2 rounded-t-lg">
                    <h2 class="text-sm md:text-lg font-bold">{{ $ticket['type'] }}</h2>
                </div>
                <div class="p-6 text-center">
                    <p class="text-3xl md:text-4xl font-bold my-2">{{ $ticket['price'] }}</p>
                    <p class="text-sm text-gray-500">+ €1,45 administratiekosten</p>
                    <p class="text-sm text-gray-500 mt-4">{{ $ticket['time'] }}</p>
                    <button onclick="scrollToForm('{{ strtolower(str_replace(' ', '-', $ticket['type'])) }}')" class="bg-[#5DB7DE] text-white font-bold py-2 px-4 mt-4 rounded-md">TICKET KOPEN</button>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Ticket Form Section -->
    <div id="ticket-form-section" class="flex justify-center items-center min-h-screen py-10">
        <div class="bg-white shadow-lg rounded-l-2xl overflow-hidden flex flex-col lg:flex-row max-w-4xl w-full">
            <div class="hidden lg:block lg:w-1/2">
                <img src="{{ asset('img/ticket-buy.png') }}" alt="Sneaker Image" class="object-cover w-full h-full rounded-l-2xl">
            </div>
            <div class="lg:w-1/2 p-6 flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-4">KOOP JE TICKET</h2>

                @if ($errors->any())
                    <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form id="ticket-form" method="POST" action="{{ route('tickets.store') }}" class="space-y-4">
                    @csrf
                    <input type="hidden" name="ticket_type" id="ticket-type">

                    <div>
                        <input type="text" name="first_name" placeholder="Naam" required>
                    </div>

                    <div>
                        <input type="text" name="last_name" placeholder="Achternaam" required>
                    </div>

                    <div>
                        <input type="email" name="email" placeholder="E-mail" required>
                    </div>

                    <div>
                        <select name="location" required>
                            <option value="" disabled selected>Locatie</option>
                            <option value="amsterdam">Amsterdam</option>
                            <option value="rotterdam">Rotterdam</option>
                            <option value="utrecht">Utrecht</option>
                        </select>
                    </div>

                    <input type="submit" value="TICKET KOPEN" class="bg-[#5DB7DE] text-white font-bold py-3 px-6 rounded-lg cursor-pointer">
                </form>


            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        function scrollToForm(ticketType) {
            const formSection = document.getElementById('ticket-form-section');
            formSection.scrollIntoView({ behavior: 'smooth' });
            document.getElementById('ticket-type').value = ticketType;
        }
    </script>

@endsection
