<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@400;500;600&display=swap" rel="stylesheet">

    <title>Re learn Laravel</title>
    @vite(['resources/js/app.js'])

</head>

<body class="bg-black text-white font-hanken-grotesk">

    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Your Company">
                </a>
            </div>

            <!-- menu -->
            <div>
                <x-nav-link href="/" id="home" :active="request()->is('/')" type="button">Home</x-nav-link>
                <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                <x-nav-link href="#">Careers</x-nav-link>
                <x-nav-link href="#">Company</x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            </div>

            <div>
                @guest
                <x-nav-link href="/login" :active="request()->is('login')">Login</x-nav-link>
                <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                @endguest

                @auth
                <x-button href="/jobs/create">Create a job</x-button>
                <form action="/logout" method="post">
                    @csrf
                    <x-form-button>Logout</x-form-button>
                </form>

                @endauth
            </div>
        </nav>
    </div>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

</body>

</html>