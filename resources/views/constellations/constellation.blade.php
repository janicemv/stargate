<x-layout>
    <x-page-heading>{{ $constellation->constellation}}</x-page-heading>


    <x-section>

        <x-section-title>Stars of {{ $constellation->name}}</x-section-title>

        <x-text>Information from the <x-link href="https://exopla.net/star-names/modern-iau-star-names/">IAU Catalog of Star Names</x-navlink></x-text>


        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-light dark:bg-gray dark:text-gray-light">
                <tr>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Designation</th>
                    <th scope="col" class="px-6 py-3">Constellation</th>
                    <th scope="col" class="px-6 py-3">HIP</th>
                    <th scope="col" class="px-6 py-3">Magnitude</th>
                    <th scope="col" class="px-6 py-3">Ascension</th>
                    <th scope="col" class="px-6 py-3">Declination</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($constellation->stars as $star)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4"><a class="font-bold hover:underline" href="/star/{{ $star->id }}">{{ $star->name }}</a></td>
                    <td class="px-6 py-4">{{ $star->iau_desig }}</td>
                    <td class="px-6 py-4"><a href="/constellations/{{ $star->constellation->id }}" class="text-blue-500 hover:underline">
                            {{ $star->constellation->abbrev }}
                        </a></td>
                    <td class="px-6 py-4">{{ $star->iau_HIP }}</td>
                    <td class="px-6 py-4">{{ $star->Vmag }}</td>
                    <td class="px-6 py-4">{{ $star->RA_J2000 }}</td>
                    <td class="px-6 py-4">{{ $star->Dec_J2000 }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


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