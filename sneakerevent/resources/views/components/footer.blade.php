<footer class="bg-[#5DB7DE] py-6 mt-12">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center text-center md:text-left">
        <div class="mb-4 md:mb-0">
            <img src="{{ asset('img/new-logo.svg') }}" alt="SneakCon Logo" class="h-10">
        </div>
        <nav class="mb-4 md:mb-0 space-x-4">
            <a href="{{ route('home') }}" class="text-white hover:underline">Home</a>
            <a href="{{ route('tickets.index') }}" class="text-white hover:underline">Buy ticket</a>
            <a href="{{ route('stands.index') }}" class="text-white hover:underline">Meer info</a>
        </nav>
        <div class="space-x-4">
            <a href="#" class="text-white"><img src="{{ asset('img/facebook.png') }}" alt="Facebook" class="w-6 h-6"></a>
            <a href="#" class="text-white"><img src="{{ asset('img/instagram.png') }}" alt="Instagram" class="w-6 h-6"></a>
            <a href="#" class="text-white"><img src="{{ asset('img/twitter.png') }}" alt="Twitter" class="w-6 h-6"></a>
        </div>
    </div>
    <div class="text-center text-white mt-6">
        <p class="text-sm">© 2024 SneakCon. All rights reserved.</p>
    </div>
</footer>
