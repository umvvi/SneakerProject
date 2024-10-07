<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SneakCon</title>
    @vite('resources/css/app.css')

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .animated-btn {
            transition: all 0.3s ease-in-out;
        }

        .animated-btn:hover {
            transform: translateY(-3px);
            background-color: #3B82F6;
        }


        #navbar {
            background-color: transparent;
            transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }


        .navbar-scrolled {
            background-color: white !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }


        .nav-link {
            font-size: 1.125rem;
            color: white;
            transition: color 0.3s ease-in-out;
        }


        .navbar-scrolled .nav-link {
            color: black !important;
        }


        .logo {
            height: 7rem;
            width: 7rem;
            transition: all 0.3s ease-in-out;
        }


        .navbar-scrolled .logo {
            height: 5rem;
            width: 5rem;
        }
    </style>
</head>
<body class="bg-white font-sans scroll-smooth">


<nav id="navbar" class="fixed top-0 left-0 w-full z-30 py-4 transition-all duration-300">
    <div class="container mx-auto flex justify-between items-center px-4 md:px-8">

        <div class="flex items-center space-x-2">
            <img src="{{ asset('img/logo.svg') }}" alt="Logo" class="logo">
        </div>

        <div class="hidden md:flex justify-center space-x-6">
            <a href="{{ route('home') }}" class="nav-link py-2 px-4 transition duration-300">Home</a>
            <a href="{{ route('ticket') }}" class="nav-link py-2 px-4 transition duration-300">Tickets</a>
            <a href="{{ route('stand') }}" class="nav-link py-2 px-4 transition duration-300">Stand</a>
            <a href="{{ route('event') }}" class="nav-link py-2 px-4 transition duration-300">Events</a>
        </div>

        <div>
            <a href="{{ route('ticket') }}" class="bg-blue-500 text-white py-2 px-6 rounded-lg animated-btn">Get Tickets</a>
        </div>
    </div>
</nav>

<main class="w-full">
    @yield('content')
</main>

<footer class="bg-[#5DB7DE] py-6 mt-12">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center text-center md:text-left">
        <div class="mb-4 md:mb-0">
            <img src="{{ asset('img/logo.svg') }}" alt="Logo" class="h-10">
        </div>
        <nav class="mb-4 md:mb-0 space-x-4">
            <a href="{{ route('home') }}" class="text-white hover:underline">Home</a>
            <a href="{{ route('ticket') }}" class="text-white hover:underline">Buy ticket</a>
            <a href="{{ route('stand') }}" class="text-white hover:underline">Meer info</a>
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

@vite('resources/js/app.js')

<script>
    window.addEventListener('scroll', function() {
        var navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
    });
</script>

</body>
</html>
