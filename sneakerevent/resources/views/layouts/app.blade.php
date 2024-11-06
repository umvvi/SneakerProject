<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - SneakCon</title>

    <meta name="description" content="Join us for SneakCon, the ultimate sneaker event featuring art, sport, fashion, and music. Get your tickets now!">

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Custom Styles (if needed) -->
    @vite(['resources/css/app.css', 'resources/css/custom.css'])
</head>
<body class="bg-white font-sans scroll-smooth">

<!-- Include Navbar Component -->
<x-navbar />

<main class="w-full" style="padding-top: calc(3.5rem + 1px);"> <!-- Adjusted padding to account for navbar height -->
    @yield('content')
</main>

<!-- Include Footer Component -->
<x-footer />

<!-- JavaScript -->
@vite('resources/js/app.js')

<script>
    window.addEventListener('scroll', function () {
        const header = document.querySelector('header');
        header.classList.toggle('scrolled', window.scrollY > 50);
    });
</script>

</body>
</html>
