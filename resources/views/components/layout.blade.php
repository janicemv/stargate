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

<body class="pb-20">

    <!-- Menu -->
    <div class="bg-purple text-white px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo-full-white.svg') }}" alt="" id="logo">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <x-navlink href="/about" :active="request()->is('about')">About</x-navlink>
                <x-navlink href="/" :active="request()->is('/videos')">Videos</x-navlink>
                <x-navlink href="/stargate" :active="request()->is('stargate')">Stars</x-navlink>
                <x-navlink href=" /constellations" :active="request()->is('constellations')">Constellations</x-navlink>
                <x-navlink href="/references" :active="request()->is('references')">References</x-navlink>

            </div>

            @auth
            <div class="space-x-6 flex">
                <x-navlink href="/dashboard">Dashboard</x-navlink>

                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')

                    <button>Log Out</button>
                </form>
            </div>
            @endauth

            @guest
            <div class="space-x-6">
                <x-navlink href="/register">Sign Up</x-navlink>
                <x-navlink href="/login">Log In</x-navlink>
            </div>
            @endguest
        </nav>


    </div>
    <!-- End menu -->

    <main class="max-w-[986px] mx-auto mt-4">
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