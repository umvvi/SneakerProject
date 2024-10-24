<nav id="navbar" class="fixed top-0 left-0 w-full z-30 py-1 transition-all duration-300">
    <div class="container mx-auto flex justify-between items-center px-2 md:px-6">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('img/new-logo.svg') }}" alt="SneakCon Logo" class="logo">
        </div>

        <div class="hidden md:flex justify-center space-x-8">
            <a href="{{ route('home') }}" class="nav-link py-2 px-4 transition duration-300">Home</a>
            <a href="/tickets/create" class="nav-link py-2 px-4 transition duration-300">Tickets</a>
            <a href="/stands" class="nav-link py-2 px-4 transition duration-300">Stand</a>
            <a href="/events" class="nav-link py-2 px-4 transition duration-300">Events</a>
        </div>

        <div class="flex items-center space-x-2">
            <a href="/tickets/create" class="bg-blue-500 text-white py-2 px-6 rounded-lg animated-btn">Get Tickets</a>
        </div>
    </div>
</nav>
