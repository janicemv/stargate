<x-layout>
    <div id="about" class="relative overflow-hidden mt-16">
        
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white dark:bg-purple dark:text-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white dark:text-purple transform translate-x-1/2"
                    fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100"></polygon>
                </svg>

                <div class="pt-1"></div>

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center text-center lg:text-left">
                        <x-page-heading> Hi! I'm Janice. </x-page-heading>

                        <p class="mb-3">I have this special connection with stars. When I look at the sky, I feel a profound sense of belonging.</p>
                        <p class="mb-3">That is why I created this platform. </p>
                        <p class="mb-3">Whether you love astronomy and want to have all the official information about stars and constellations, or you want to learn how to connect spiritually with stars, this is your Stargate!</p>
                        <p class="mb-3">Welcome and make yourself at home! </p>
                        <p class="mb-3">You can browse as much as you want, and if you have something to share, you can always create your account and register your knowledge on our database!</p>
                    </div>
                </main>
            </div>
        </div>

        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover object-top sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
        </div>
    </div>
</x-layout>