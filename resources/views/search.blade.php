<x-layout>
    <x-section>
        <x-page-heading>Search for a Star or Constellation</x-page-heading>


        <div class="mx-auto max-w-2xl text-center justify-center">
            <x-text><em>You can search <strong>Stars</strong> by name, designation, Bayer ID or HIP and <strong>Constellations</strong> by name or abbreviation</em></x-text>

            <div class="sm:mb-8 flex justify-center">
                <x-forms.form action="/search" class="mt-6 px-5">
                    <x-forms.input :label="false" name="q" placeholder="Search" />
                    <x-forms.button>Search</x-forms.button>
                </x-forms.form>
            </div>
    </x-section>

    @if (request()->has('q'))
    <x-page-heading>Search Result of "{{ $q }}"</x-page-heading>



            @if ($stars->isNotEmpty())
                <x-section>
                    <x-section-title>Stars</x-section-title>
                    <x-tables.table>
                        <x-tables.thead>
                            <tr>
                                <x-tables.th>Name</x-tables.th>
                                <x-tables.th>Bayer ID</x-tables.th>
                                <x-tables.th>Constellation</x-tables.th>
                                <x-tables.th-hidden>Designation</x-tables.th-hidden>
                                <x-tables.th-hidden>HIP</x-tables.th-hidden>
                                <x-tables.th-hidden>Magnitude</x-tables.th-hidden>
                                <x-tables.th-hidden>Ascension</x-tables.th-hidden>
                                <x-tables.th-hidden>Declination</x-tables.th-hidden>
                            </tr>
                        </x-tables.thead>
                        <tbody>
                            @foreach ($stars as $star)
                                <x-tables.tr>
                                    <x-tables.td><a class="font-bold hover:underline"
                                            href="/star/{{ $star->id }}">{{ $star->name }}</a></x-tables.td>
                                            <x-tables.td-hidden>{{ $star->BayerId }}</x-tables.td-hidden>
                                            <x-tables.td><a href="/constellations/{{ $star->constellation->id }}"
                                                class="text-blue-500 hover:underline"> {{ $star->constellation->name }}
                                            </a></x-tables.td>
                                    <x-tables.td-hidden>{{ $star->iau_desig }}</x-tables.td-hidden>
                                    <x-tables.td-hidden>{{ $star->iau_HIP }}</x-tables.td-hidden>
                                    <x-tables.td-hidden>{{ $star->Vmag }}</x-tables.td-hidden>
                                    <x-tables.td-hidden>{{ $star->RA_J2000 }}</x-tables.td-hidden>
                                    <x-tables.td-hidden>{{ $star->Dec_J2000 }}</x-tables.td-hidden>
                                </x-tables.tr>
                            @endforeach
                        </tbody>
                    </x-tables.table>
                </x-section>
            @endif

            @if ($constellations->isNotEmpty())
                <x-section>
                    <x-section-title>Constellations</x-section-title>

                    <x-tables.table>
                        <x-tables.thead>
                            <tr>
                                <x-tables.th>Name</x-tables.th>
                                <x-tables.th>Abbreviation</x-tables.th>
                            </tr>
                        </x-tables.thead>
                        <tbody>

                            @foreach ($constellations as $constellation)
                                <x-tables.tr>
                                    <x-tables.td><a class="font-bold hover:underline"
                                            href="/constellations/{{ $constellation->id }}">{{ $constellation->name }}</a></x-tables.td>
                                    <x-tables.td>{{ $constellation->abbrev }}</x-tables.td>
                                </x-tables.tr>
                            @endforeach
                        </tbody>
                    </x-tables.table>
                </x-section>
            @endif

    @endif

</x-layout>
