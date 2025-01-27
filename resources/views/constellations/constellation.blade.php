<x-layout>
    <x-page-heading>{{ $constellation->constellation}}</x-page-heading>


    <x-section>

        <x-section-title>Stars of {{ $constellation->name}}</x-section-title>

        <x-text>Information from the <x-link href="https://exopla.net/star-names/modern-iau-star-names/">IAU Catalog of Star Names</x-navlink></x-text>


        <div class="overflow-x-auto">
            <table class="table-auto min-w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-purple text-white dark:bg-purple-medium">
                    <tr>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3 hidden md:table-cell">Designation</th>
                        <th scope="col" class="px-6 py-3 hidden md:table-cell">HIP</th>
                        <th scope="col" class="px-6 py-3 hidden md:table-cell">Magnitude</th>
                        <th scope="col" class="px-6 py-3 hidden md:table-cell">Ascension</th>
                        <th scope="col" class="px-6 py-3 hidden md:table-cell">Declination</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($constellation->stars as $star)
                    <tr class="bg-white border-b dark:bg-purple dark:border-gray hover:bg-gray-50 dark:hover:bg-gray">
                        <td class="px-6 py-4"><a class="font-bold hover:underline" href="/star/{{ $star->id }}">{{ $star->name }}</a></td>
                        <td class="px-6 py-4 hidden md:table-cell">{{ $star->iau_desig }}</td>
                        <td class="px-6 py-4 hidden md:table-cell">{{ $star->iau_HIP }}</td>
                        <td class="px-6 py-4 hidden md:table-cell">{{ $star->Vmag }}</td>
                        <td class="px-6 py-4 hidden md:table-cell">{{ $star->RA_J2000 }}</td>
                        <td class="px-6 py-4 hidden md:table-cell">{{ $star->Dec_J2000 }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


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