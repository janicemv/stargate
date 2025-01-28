<x-layout>
    <x-section>
        <x-page-heading>Search for a Star or Constellation</x-page-heading>

        <div class="mx-auto max-w-2xl text-center justify-center">
            <div class="sm:mb-8 flex justify-center">
                <x-forms.form action="/search" class="mt-6 px-5">
                    <x-forms.input :label="false" name="q" placeholder="Search" />
                    <x-forms.button>Search</x-forms.button>
                </x-forms.form>
            </div>
    </x-section>

@if(request()->has('q'))
    <div>
        <x-page-heading>Search Result of "{{ $q }}"</x-page-heading>

        @if ($stars->isNotEmpty())
            <x-section>
                <x-section-title>Stars</x-section-title>
                <div class="overflow-x-auto">
                    <table
                        class="table-auto min-w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-purple text-white dark:bg-purple-medium">
                            <tr>
                                <th scope="col" class="px-4 py-2">Name</th>
                                <th scope="col" class="px-4 py-2 hidden md:table-cell">Designation</th>
                                <th scope="col" class="px-4 py-2 whitespace-nowrap">Constellation</th>
                                <th scope="col" class="px-4 py-2 hidden md:table-cell">HIP</th>
                                <th scope="col" class="px-4 py-2 hidden md:table-cell">Magnitude</th>
                                <th scope="col" class="px-4 py-2 hidden md:table-cell">Ascension</th>
                                <th scope="col" class="px-4 py-2 hidden md:table-cell">Declination</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stars as $star)
                                <tr
                                    class="bg-white border-b dark:bg-purple dark:border-gray hover:bg-gray-50 dark:hover:bg-gray">
                                    <td class="px-4 py-2"><a class="font-bold hover:underline"
                                            href="/star/{{ $star->id }}">{{ $star->name }}</a></td>
                                    <td class="px-4 py-2 hidden md:table-cell">{{ $star->iau_desig }}</td>
                                    <td class="px-4 py-2"><a href="/constellations/{{ $star->constellation->id }}"
                                            class="text-blue-500 hover:underline">
                                            {{ $star->constellation->name }}
                                        </a></td>
                                    <td class="px-4 py-2 hidden md:table-cell">{{ $star->iau_HIP }}</td>
                                    <td class="px-4 py-2 hidden md:table-cell">{{ $star->Vmag }}</td>
                                    <td class="px-4 py-2 hidden md:table-cell">{{ $star->RA_J2000 }}</td>
                                    <td class="px-4 py-2 hidden md:table-cell">{{ $star->Dec_J2000 }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </x-section>

        @endif

        @if ($constellations->isNotEmpty())
            <x-section>
                <x-section-title>Constellations</x-section-title>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mx-auto">
                    @foreach ($constellations as $constellation)
                        <x-card>
                            <x-slot name="header">
                                <x-card-header :image="Vite::asset('resources/images/stars/sirius.svg')" alt="{{ $constellation->name }}"
                                    title="{{ $constellation->name }}" subtitle="{{ $constellation->abbrev }}"
                                    link="/constellations/{{ $constellation->id }}" />
                            </x-slot>
                            @if ($constellation->stars->isNotEmpty())
                                <x-card-list title="{{ $constellation->abbrev }} Stars"
                                    link="/constellations/{{ $constellation->id }}" linkText="View all">
                                    @foreach ($constellation->stars as $star)
                                        <x-card-list-item :image="Vite::asset('resources/images/stars/sirius.svg')" alt="{{ $star->name }}"
                                            name="{{ $star->name }}" code="{{ $star->iau_desig }}"
                                            link="/star/{{ $star->id }}" />
                                    @endforeach



                                </x-card-list>
                            @endif
                            <x-slot name="footer">
                                <x-card-footer link="/constellations/{{ $constellation->id }}" text="Read more" />
                            </x-slot>
                        </x-card>
                    @endforeach
                </div>
            </x-section>
        @endif
        </div>
        @endif

</x-layout>
