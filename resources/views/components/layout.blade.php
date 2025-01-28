<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Stargate - Adhara Starpath</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="pb-20 dark:bg-purple dark:text-white">

    <!-- Menu -->
    <div class="sticky w-full z-50 top-0 left-0">
        <div class="bg-purple text-white px-4 sm:px-6 lg:px-8 border-b border-gray">
            <nav class="flex justify-center items-center py-4">
                <div class="flex items-center">
                    <a href="/" class="mr-4">
                        <img src="{{ Vite::asset('resources/images/logo-full-white.svg') }}" alt="" id="logo" class="h-8">
                    </a>
                </div>
                <!-- Desktop menu -->
                <div class="hidden lg:flex space-x-6 font-bold">
                    <x-navlink href="/about" :active="request()->is('about')">About</x-navlink>
                    {{-- <x-navlink href="/" :active="request()->is('/videos')">Videos</x-navlink> --}}
                    <x-navlink href="/stargate" :active="request()->is('stargate')">Stars</x-navlink>
                    <x-navlink href="/constellations" :active="request()->is('constellations')">Constellations</x-navlink>
                    <x-navlink href="/references" :active="request()->is('references')">References</x-navlink>
                </div>
                <!-- Auth links, Dark Mode button, and Mobile menu button -->
                <div class="flex items-center space-x-6">
                    <div class="hidden lg:flex items-center space-x-6">
                        {{-- Searchbar --}}
                        <x-forms.form action="/search" class="mx-5 px-5 py-4">
                            <x-forms.input :label="false" name="q" placeholder="Search" />
                        </x-forms.form>
                        {{-- auth --}}
                        @auth
                        <x-navlink href="/dashboard">Dashboard</x-navlink>
                        <form method="POST" action="/logout">
                            @csrf
                            @method('DELETE')
                            <button class="font-bold">Log Out</button>
                        </form>
                        @else
                        <x-navlink href="/register">Sign Up</x-navlink>
                        <x-navlink href="/login">Log In</x-navlink>
                        @endauth
                    </div>
                    <!-- Dark Mode button -->
                    <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg> </button>
                    <!-- Mobile menu button -->
                    <button id="mobile-menu-button" type="button" class="lg:hidden inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-white rounded-lg hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-300">
                        <span class="sr-only">Toggle menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
            </nav>
            <!-- Mobile menu (hidden by default) -->
            <div id="mobile-menu" class="hidden lg:hidden py-4">
                <div class="flex flex-col space-y-4 font-bold">
                    <x-navlink href="/about" :active="request()->is('about')">About</x-navlink>
                    {{-- <x-navlink href="/" :active="request()->is('/videos')">Videos</x-navlink> --}}
                    <x-navlink href="/stargate" :active="request()->is('stargate')">Stars</x-navlink>
                    <x-navlink href="/constellations" :active="request()->is('constellations')">Constellations</x-navlink>
                    <x-navlink href="/references" :active="request()->is('references')">References</x-navlink>
                    <x-navlink href="/searchpage" :active="request()->is('search')">Search</x-navlink>
                    @auth
                    <x-navlink href="/dashboard">Dashboard</x-navlink>
                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button class="font-bold">Log Out</button>
                    </form>
                    @else
                    <x-navlink href="/register">Sign Up</x-navlink>
                    <x-navlink href="/login">Log In</x-navlink>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <!-- End menu -->

    <main class="max-w-[986px] mx-10 lg:mx-auto mt-4">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <div class="container mx-auto">
        <footer class="flex flex-wrap justify-between items-center py-3 my-4 border-t mx-6">
            <div class="flex items-center space-x-2 md:space-x-4">
                <span class="mb-3 text-gray-500">© 2025 Janice de Miranda V. Vilela</span>
            </div>

            <ul class="flex space-x-3">
                <li><a class="text-gray-500" href="https://github.com/janicemv" target="_blank"><i class="fa-brands fa-github"></i></i></a></li>
                <li><a class="text-gray-500" href="https://www.linkedin.com/in/janicevilela/" target="_blank"><i class="fa-brands fa-linkedin"></i></i></a></li>
                <li><a class="text-gray-500" href="https://www.researchgate.net/profile/Janice-Vilela-2" target="_blank"><i class="fa-brands fa-researchgate"></i></i></a></li>

            </ul>
        </footer>
    </div>
    <!-- End footer -->


</body>

</html>