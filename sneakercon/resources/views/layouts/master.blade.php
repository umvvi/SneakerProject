<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SneakerCon</title>
    @vite('resources/css/app.css')

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Navbar styling: starts as transparent and fixed at the top */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 50;
            background-color: transparent;
            color: white;
            transition: background-color 0.3s, color 0.3s;
        }

        /* When the user scrolls past the banner, navbar gets a solid background */
        .navbar.scrolled {
            background-color: white;
            color: black;
        }

        .navbar.scrolled .nav-link {
            color: black;
        }

        .navbar.scrolled .nav-link:hover {
            color: #60A5FA;
        }

        .nav-link {
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #60A5FA;
        }

        /* Button animation */
        .animated-btn {
            transition: all 0.3s ease-in-out;
        }

        .animated-btn:hover {
            transform: translateY(-3px);
            background-color: #3B82F6;
        }

        /* Banner and background section */
        header {
            position: relative;
            width: 100%;
            height: 70vh; /* Adjust height as needed */
            background-size: cover;
            background-position: center;
        }

        header .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5); /* Add overlay */
        }

        header .content {
            position: relative;
            z-index: 1;
            text-align: center;
            color: white;
        }

        /* Responsive layout adjustments */
        @media (max-width: 768px) {
            .navbar .nav-links {
                display: none; /* Hide for mobile */
            }

            .navbar .hamburger {
                display: block; /* Show hamburger for mobile */
            }

            #mobile-menu {
                display: none;
                background-color: white;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                z-index: 50;
            }

            #mobile-menu a {
                display: block;
                padding: 12px;
                color: black;
                text-align: center;
                text-decoration: none;
            }

            #mobile-menu a:hover {
                background-color: #60A5FA;
                color: white;
            }
        }

        /* Show mobile menu when toggled */
        .show-mobile-menu {
            display: block !important;
        }
    </style>
</head>
<body class="bg-white font-sans">

<!-- Primary Navigation -->
<nav id="navbar" class="navbar text-white py-4">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <img src="public/images/logo.svg" alt="Logo" class="h-10 w-10">
            <span class="text-xl font-bold">SneakCon</span>
        </div>

        <!-- Navbar Links (Desktop) -->
        <div class="flex-grow text-center nav-links">
            <div class="flex justify-center space-x-4">
                <a href="{{ route('home') }}" class="nav-link py-2 px-4">Home</a>
                <a href="{{ route('ticket') }}" class="nav-link py-2 px-4">Tickets</a>
                <a href="{{ route('stand') }}" class="nav-link py-2 px-4">Stand</a>
                <a href="{{ route('event') }}" class="nav-link py-2 px-4">Events</a>
            </div>
        </div>

        <!-- Button (Desktop) -->
        <div class="hidden md:block">
            <a href="{{ route('ticket') }}" class="bg-blue-500 text-white py-2 px-4 rounded animated-btn">Get Tickets</a>
        </div>

        <!-- Hamburger Menu (Mobile) -->
        <div class="hamburger md:hidden">
            <button id="menu-btn" class="text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu md:hidden">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('ticket') }}">Tickets</a>
        <a href="{{ route('stand') }}">Stand</a>
        <a href="{{ route('event') }}">Events</a>
        <a href="{{ route('ticket') }}" class="bg-blue-500 text-white py-2 px-4 block mt-2">Get Tickets</a>
    </div>
</nav>



<!-- Main Content -->
<main class="container mx-auto w-full">
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-blue-100 py-8 mt-12">
    <div class="container mx-auto px-4 text-center">
        <img src="https://via.placeholder.com/150x50" alt="Logo" class="mx-auto mb-4">
        <div class="flex justify-center space-x-6">
            <a href="#" class="text-black hover:text-blue-500">Link One</a>
            <a href="#" class="text-black hover:text-blue-500">Link Two</a>
            <a href="#" class="text-black hover:text-blue-500">Link Three</a>
            <a href="#" class="text-black hover:text-blue-500">Link Four</a>
            <a href="#" class="text-black hover:text-blue-500">Link Five</a>
        </div>
        <p class="text-sm mt-6">© 2024 SneakCon. All rights reserved.</p>
    </div>
</footer>

@vite('resources/js/app.js')

<!-- JavaScript for Navbar Scroll and Mobile Menu -->
<script>
    window.addEventListener('scroll', function() {
        var navbar = document.getElementById('navbar');
        var bannerHeight = document.querySelector('header').offsetHeight;

        if (window.scrollY > bannerHeight) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Mobile Menu Toggle
    var menuBtn = document.getElementById('menu-btn');
    var mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', function() {
        mobileMenu.classList.toggle('show-mobile-menu');
    });
</script>

</body>
</html>
