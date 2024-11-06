<header class="bg-white shadow-md fixed top-0 left-0 w-full z-30">
    <div class="container mx-auto flex justify-between items-center px-4 py-2 md:px-6">
        <!-- Logo Section -->
        <div class="flex items-center space-x-2">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/new-logo.svg') }}" alt="SneakCon Logo" class="h-12">
            </a>
        </div>

        <!-- Navigation Links -->
        <nav class="hidden md:flex justify-center space-x-8">
            <a href="{{ route('home') }}" class="nav-link text-gray-700 py-2 px-4 transition duration-300 hover:text-blue-500">Home</a>
            <a href="{{ route('tickets.index') }}" class="nav-link text-gray-700 py-2 px-4 transition duration-300 hover:text-blue-500">Tickets</a>
            <a href="{{ route('stands.index') }}" class="nav-link text-gray-700 py-2 px-4 transition duration-300 hover:text-blue-500">Stands</a>
        </nav>

        <!-- Get Tickets Button -->
        <div class="flex items-center space-x-2">
            <a href="{{ route('tickets.purchase') }}" class="bg-blue-500 text-white py-2 px-6 rounded-lg transition duration-300 hover:bg-blue-600 animated-btn">Get Tickets</a>
        </div>
    </div>
</header>
