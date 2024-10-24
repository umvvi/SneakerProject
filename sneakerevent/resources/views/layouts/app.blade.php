<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - SneakCon</title>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/css/custom.css'])

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white font-sans scroll-smooth">

<!-- Include Navbar Component -->
<x-navbar />

<main class="w-full">
    @yield('content')
</main>

<!-- Include Footer Component -->
<x-footer />

@vite('resources/js/app.js')

<script>
    window.addEventListener('scroll', function () {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
    });
</script>
</body>
</html>
