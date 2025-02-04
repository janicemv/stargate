<x-layout>
    <x-page-heading>{{ $constellation->name}}</x-page-heading>


    <x-section>

        <x-section-title>Stars of {{ $constellation->name}}</x-section-title>

        <x-text>Information from the <x-link href="https://exopla.net/star-names/modern-iau-star-names/">IAU Catalog of Star
            Names</x-link> merged with the <x-link href="https://www.iau.org/public/themes/naming_stars/">List of
            IAU-approved Star Names</x-link></x-text>
            
            <x-tables.table>
                <x-tables.thead>
                    <tr>
                        <x-tables.th>Name</x-tables.th>
                        <x-tables.th-hidden>Designation</x-tables.th-hidden>
                        <x-tables.th-hidden>HIP</x-tables.th-hidden>
                        <x-tables.th-hidden>Magnitude</x-tables.th-hidden>
                        <x-tables.th-hidden>Ascension</x-tables.th-hidden>
                        <x-tables.th-hidden>Declination</x-tables.th-hidden>
                    </tr>
                </x-tables.thead>
                <tbody>
                    @foreach ($constellation->stars as $star)
                        <x-tables.tr>
                            <x-tables.td><a class="font-bold hover:underline"
                                    href="/star/{{ $star->name }}">{{ $star->name }}</a></x-tables.td>
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

    <!-- Magic -->

    @php
    $magicData = $constellation->stars->flatMap(function($star) {
    return $star->starMagic->map(function($magic) use ($star) {
    return [
    'planets' => $magic->planets,
    'themagic' => $magic->magic,
    'starName' => $star->name,
    'starId' => $star->id,
    'magic' => $magic
    ];
    });
    })->filter(); // Remove itens vazios

    $groupedByPlanets = $magicData
    ->pluck('planets')
    ->filter()
    ->unique()
    ->values();

    $groupedByMagic = $magicData
    ->pluck('themagic')
    ->filter()
    ->unique()
    ->values();
    @endphp

    @if ($magicData->isNotEmpty())

    <x-section>

        <x-section-title>Magic of {{ $constellation->name}}</x-section-title>

        @if ($constellation->keywords->isNotEmpty())

        <x-text>
            @foreach($constellation->keywords as $keyword)
            <x-tag class="inline-block">{{ $keyword->name }}</x-tag>
            @endforeach
        </x-text>
        @endif

        <x-round-container>

            <x-section-info title="Planets">
                <ul class="list-star list-inside">
                    @foreach($groupedByPlanets as $planet)
                    @php
                    $starData = $magicData->where('planets', $planet)->first();
                    @endphp
                    <x-list-item>
                        {{ $planet }}
                        <x-sup>
                            <a href="/star/{{ $starData['starId'] }}">[{{ $starData['starName'] }}]</a>
                        </x-sup>
                    </x-list-item>
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="Magic">
                <ul class="list-star list-inside">
                    @foreach($groupedByMagic as $themagic)
                    @php
                    $starData = $magicData->where('themagic', $themagic)->first();
                    @endphp
                    <x-list-item>
                        {{ $themagic }}
                        <x-sup>
                            <a href="/star/{{ $starData['starId'] }}">[{{ $starData['starName'] }}]</a>
                        </x-sup>
                    </x-list-item>
                    @endforeach
                </ul>
            </x-section-info>
        </x-round-container>





    </x-section>
    @endif

</x-layout>