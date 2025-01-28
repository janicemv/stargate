<x-layout>

    <x-page-heading>List of Stars</x-page-heading>

    <x-text>Information from the <x-link href="https://exopla.net/star-names/modern-iau-star-names/">IAU Catalog of Star
            Names</x-link> merged with the <x-link href="https://www.iau.org/public/themes/naming_stars/">List of
            IAU-approved Star Names</x-link></x-text>

    <div class="w-full flex flex-col items-center justify-center mt-4">

        <x-section>
            <x-section-title>Stars</x-section-title>
            <x-tables.table>
                <x-tables.thead>
                    <tr>
                        <x-tables.th>Name</x-tables.th>
                        <x-tables.th-hidden>Designation</x-tables.th-hidden>
                        <x-tables.th>Constellation</x-tables.th>
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
                            <x-tables.td-hidden>{{ $star->iau_desig }}</x-tables.td-hidden>
                            <x-tables.td><a href="/constellations/{{ $star->constellation->id }}"
                                    class="text-blue-500 hover:underline"> {{ $star->constellation->name }}
                                </a></x-tables.td>
                            <x-tables.td-hidden>{{ $star->iau_HIP }}</x-tables.td-hidden>
                            <x-tables.td-hidden>{{ $star->Vmag }}</x-tables.td-hidden>
                            <x-tables.td-hidden>{{ $star->RA_J2000 }}</x-tables.td-hidden>
                            <x-tables.td-hidden>{{ $star->Dec_J2000 }}</x-tables.td-hidden>
                        </x-tables.tr>
                    @endforeach
                </tbody>
            </x-tables.table>

        <div class="mx-auto mt-3 justify-center">
            {{ $stars->links() }}
        </div>
    </x-section>

    </div>


</x-layout>
