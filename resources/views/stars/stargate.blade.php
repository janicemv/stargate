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
                        <x-tables.th>
                            <a
                                href="{{ url('/stargate?sort=name&direction=' . ($sortColumn == 'name' && $sortDirection == 'asc' ? 'desc' : 'asc')) }}">
                                Name
                                @if ($sortColumn == 'name')
                                    <span>{{ $sortDirection == 'asc' ? '↑' : '↓' }}</span>
                                @endif
                            </a>
                        </x-tables.th>
                        <x-tables.th>Bayer ID</x-tables.th>

                        <x-tables.th>
                            <a
                                href="{{ url('/stargate?sort=constellation_id&direction=' . ($sortColumn == 'constellation_id' && $sortDirection == 'asc' ? 'desc' : 'asc')) }}">
                                Constellation
                                @if ($sortColumn == 'constellation_id')
                                    <span>{{ $sortDirection == 'asc' ? '↑' : '↓' }}</span>
                                @endif
                            </a>
                        </x-tables.th>

                        <x-tables.th-hidden>
                            <a
                                href="{{ url('/stargate?sort=iau_desig&direction=' . ($sortColumn == 'iau_desig' && $sortDirection == 'asc' ? 'desc' : 'asc')) }}">
                                Designation
                                @if ($sortColumn == 'iau_desig')
                                    <span>{{ $sortDirection == 'asc' ? '↑' : '↓' }}</span>
                                @endif
                            </a>
                        </x-tables.th-hidden>


                        <x-tables.th-hidden>
                            <a
                                href="{{ url('/stargate?sort=iau_HIP&direction=' . ($sortColumn == 'iau_HIP' && $sortDirection == 'asc' ? 'desc' : 'asc')) }}">
                                HIP
                                @if ($sortColumn == 'iau_HIP')
                                    <span>{{ $sortDirection == 'asc' ? '↑' : '↓' }}</span>
                                @endif
                            </a>
                        </x-tables.th-hidden>

                        <x-tables.th-hidden>
                            <a
                                href="{{ url('/stargate?sort=Vmag&direction=' . ($sortColumn == 'Vmag' && $sortDirection == 'asc' ? 'desc' : 'asc')) }}">
                                Magnitude
                                @if ($sortColumn == 'Vmag')
                                    <span>{{ $sortDirection == 'asc' ? '↑' : '↓' }}</span>
                                @endif
                            </a>
                        </x-tables.th-hidden>

                        <x-tables.th-hidden>
                            <a
                                href="{{ url('/stargate?sort=RA_J2000&direction=' . ($sortColumn == 'RA_J2000' && $sortDirection == 'asc' ? 'desc' : 'asc')) }}">
                                Ascension
                                @if ($sortColumn == 'RA_J2000')
                                    <span>{{ $sortDirection == 'asc' ? '↑' : '↓' }}</span>
                                @endif
                            </a>
                        </x-tables.th-hidden>

                        <x-tables.th-hidden>
                            <a
                                href="{{ url('/stargate?sort=Dec_J2000&direction=' . ($sortColumn == 'Dec_J2000' && $sortDirection == 'asc' ? 'desc' : 'asc')) }}">
                                Declination
                                @if ($sortColumn == 'Dec_J2000')
                                    <span>{{ $sortDirection == 'asc' ? '↑' : '↓' }}</span>
                                @endif
                            </a>
                        </x-tables.th-hidden>
                    </tr>
                </x-tables.thead>
                <tbody>
                    @foreach ($stars as $star)
                        <x-tables.tr>
                            <x-tables.td><a class="font-bold hover:underline"
                                    href="/star/{{ $star->id }}">{{ $star->name }}</a></x-tables.td>
                            <x-tables.td>{{ $star->BayerId }}</x-tables.td>

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

            <div class="mx-auto mt-3 justify-center">
                {{ $stars->appends(['sort' => $sortColumn, 'direction' => $sortDirection])->links() }}
            </div>
        </x-section>

    </div>


</x-layout>
