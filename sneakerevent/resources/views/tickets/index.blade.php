@extends('layouts.app')

@section('title', 'Tickets')

@section('content')

    <!-- Header Section -->
    <header class="relative w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/banner-ticket.png') }}');">
        <div class="absolute bottom-16 left-8 text-white">
            <h1 class="text-4xl md:text-6xl font-bold">TICKETVERHUUR</h1>
            <h2 class="text-3xl md:text-5xl font-light mt-2">SUMMER HEAT EDITION</h2>
            <p class="mt-4 text-lg md:text-xl">10 juni 2023</p>
        </div>
    </header>

    <!-- Main Content Section -->
    <div class="max-w-7xl mx-auto px-4 py-10">
        <h1 class="text-3xl md:text-4xl font-bold text-black mb-6">Kies Je Tickets</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10" id="ticket-cards">
            <!-- Ticket cards will be dynamically loaded here -->
        </div>

        <!-- Ticket Form Section -->
        <div id="ticket-form-section" class="hidden mt-10 p-6 bg-white shadow-lg rounded-lg">
            <h2 class="text-2xl font-bold mb-4">Vul je gegevens in</h2>
            <form id="ticket-form" method="POST" action="{{ route('tickets.purchase') }}" class="space-y-4">
                @csrf
                <input type="hidden" name="ticket_type" id="ticket-type">
                <input type="hidden" name="price" id="ticket-price">
                <input type="hidden" name="event_id" id="event-id">

                <div>
                    <label for="first_name" class="block mb-1">Naam</label>
                    <input type="text" name="first_name" id="first_name" required class="border border-gray-300 rounded-lg p-2 w-full">
                </div>

                <div>
                    <label for="last_name" class="block mb-1">Achternaam</label>
                    <input type="text" name="last_name" id="last_name" required class="border border-gray-300 rounded-lg p-2 w-full">
                </div>

                <div>
                    <label for="email" class="block mb-1">E-mail</label>
                    <input type="email" name="email" id="email" required class="border border-gray-300 rounded-lg p-2 w-full">
                </div>

                <div>
                    <label for="location" class="block mb-1">Locatie</label>
                    <select name="location" id="location" required class="border border-gray-300 rounded-lg p-2 w-full">
                        <option value="" disabled selected>Locatie</option>
                        <option value="amsterdam">Amsterdam</option>
                        <option value="rotterdam">Rotterdam</option>
                        <option value="utrecht">Utrecht</option>
                    </select>
                </div>

                <button type="submit" class="bg-[#5DB7DE] text-white font-bold py-3 px-6 rounded-lg cursor-pointer transition hover:bg-[#4a9dc4]">TICKET KOPEN</button>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            loadTickets(); // Load tickets when the page loads
        });

        function loadTickets() {
            const tickets = [
                { id: 1, type: 'REGULAR TICKET', price: 2000, date: '2024-09-01T11:30:00' },
                { id: 2, type: 'AFTERNOON TICKET', price: 1500, date: '2024-09-01T13:30:00' },
                { id: 3, type: 'EARLY ACCESS', price: 3000, date: '2024-09-01T10:30:00' }
            ];

            const ticketCardsContainer = document.getElementById('ticket-cards');
            tickets.forEach(ticket => {
                const card = document.createElement('div');
                card.className = 'bg-white shadow-lg rounded-lg p-4 text-center';
                card.innerHTML = `
                    <h3 class="font-bold text-lg mb-2">${ticket.type}</h3>
                    <p class="text-2xl font-bold mb-2">€${(ticket.price / 100).toFixed(2)}</p>
                    <p class="text-sm text-gray-500">Toegang vanaf: ${new Date(ticket.date).toLocaleString([], { hour: '2-digit', minute: '2-digit', hour12: false })}</p>
                    <button class="mt-4 bg-[#5DB7DE] text-white font-bold py-2 px-4 rounded-md transition hover:bg-[#4a9dc4]"
                        onclick="selectTicket(${ticket.id}, '${ticket.type}', ${ticket.price})">Kies Dit Ticket</button>
                `;
                ticketCardsContainer.appendChild(card);
            });
        }

        function selectTicket(ticketId, ticketType, price) {
            document.getElementById('ticket-type').value = ticketType;
            document.getElementById('ticket-price').value = price;
            document.getElementById('event-id').value = ticketId;

            document.getElementById('ticket-form-section').classList.remove('hidden');
            scrollToForm();
        }

        function scrollToForm() {
            const formSection = document.getElementById('ticket-form-section');
            formSection.scrollIntoView({ behavior: 'smooth' });
        }
    </script>

@endsection
