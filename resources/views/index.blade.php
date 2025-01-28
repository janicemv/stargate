<x-layout>

    <div class="relative px-6 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        {{-- Searchbar --}}
        <div class="mx-auto max-w-2xl py-15 sm:py-15 lg:py-20">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <x-forms.form action="/search" class="mt-6 px-5 py-4">
                    <x-forms.input :label="false" name="q" placeholder="Search" />
                </x-forms.form>
            </div>
        {{-- end searchbar --}}
            <div class="text-center">
                <h1 class="text-balance text-5xl font-extrabold tracking-tight uppercase">Your virtual
                    Stargate</h1>
                <p class="mt-8 text-pretty text-lg font-medium  sm:text-xl/8"> Discover a comprehensive
                    database of Stars and Constellations, featuring astronomical data alongside their cultural, magical,
                    spiritual, and historical connections. </p>
                <p class="mt-8 text-pretty text-lg font-medium  sm:text-xl/8">Explore the universe like
                    never before!</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="/about" class="text-sm font-semibold text-blue-medium">Learn more <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>

        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>

</x-layout>
