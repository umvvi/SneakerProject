<footer class="bg-gray-900 text-gray-300 py-10">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4 md:px-0">
        <!-- Logo and Description -->
        <div class="flex flex-col space-y-4">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/new-logo.svg') }}" alt="SneakCon Logo" class="h-12">
            </a>
            <p class="text-sm">
                Join us at SneakCon, where sneaker culture meets fashion, art, and music. Discover unique pieces, meet fellow enthusiasts, and be part of an unforgettable experience.
            </p>
        </div>

        <!-- Quick Links -->
        <div>
            <h3 class="text-lg font-semibold text-white mb-4">Quick Links</h3>
            <nav class="flex flex-col space-y-2">
                <a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition duration-200">Home</a>
                <a href="{{ route('tickets.index') }}" class="text-gray-300 hover:text-white transition duration-200">Buy Tickets</a>
                <a href="{{ route('stands.index') }}" class="text-gray-300 hover:text-white transition duration-200">More Info</a>
                <a href="{{ route('events.index') }}" class="text-gray-300 hover:text-white transition duration-200">Events</a>
            </nav>
        </div>

        <!-- Social Media Links -->
        <div>
            <h3 class="text-lg font-semibold text-white mb-4">Follow Us</h3>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-300 hover:text-white transition duration-200">
                    <img src="{{ asset('img/facebook.png') }}" alt="Facebook" class="w-6 h-6">
                </a>
                <a href="#" class="text-gray-300 hover:text-white transition duration-200">
                    <img src="{{ asset('img/instagram.png') }}" alt="Instagram" class="w-6 h-6">
                </a>
                <a href="#" class="text-gray-300 hover:text-white transition duration-200">
                    <img src="{{ asset('img/twitter.png') }}" alt="Twitter" class="w-6 h-6">
                </a>
                <a href="#" class="text-gray-300 hover:text-white transition duration-200">
                    <img src="{{ asset('img/youtube.png') }}" alt="YouTube" class="w-6 h-6">
                </a>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="border-t border-gray-700 mt-8 pt-6">
        <p class="text-center text-sm text-gray-400">
            &copy; {{ date('Y') }} SneakCon. All rights reserved.
        </p>
    </div>
</footer>
