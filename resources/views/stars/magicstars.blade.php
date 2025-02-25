<x-layout>
    <x-page-heading>Star Magic</x-page-heading>

    <x-section>
        <x-section-title>What is Star Magic?</x-section-title>

        <x-text>Star Magic is, well, the act of doing magic with the stars. That is, theoretically, the obvious part,
            right?</x-text>
        <x-text>But let's break this down. Stars are points of light, balls of fire, spread across the dark universe.
            From here on Earth, they are seen in the sky, which is, well, above us.</x-text>
        <x-text>We will gradually unravel the meanings of all this, but in brief, working with the Stars is, first,
            working with our Higher Self. It is knowing your divine essence, what shapes your soul.</x-text>
        <x-text>It's also working with your Shadow, your greatest darkness, and making it your ally in knowing who you
            are as a whole.</x-text>
        <x-text>And, finally, it is working with the Magic of Creation, raw energy, which, despite seeming distant, is
            intimately linked to things as they are on our planet.</x-text>

    </x-section>

    <x-section>
        <x-section-title>Behenian Stars</x-section-title>

        <x-text>Cornelius Agrippa was a very influential esoteric writer in medieval Europe. Many of his writings
            are the
            basis of Western Magic today. One of his legacies were the Behenian stars, from the Arabic “bahman”,
            which means
            “root”; Bahman root is a specific type of root, of the species Withania somnifera, known as Indian
            ginseng or
            Ashwagandha. It is still used today in Ayurvedic medicine to cure various problems and also for
            protection.
            Agrippa associated 15 stars with planets, colors, stones, herbs and sigils.</x-text>
        <x-text>In our personal experiences and in the experiences with the Stellar Laboratory, we associated some
            other
            correspondences. You can use them to work magically with the energy of each of these stars. The symbols
            can be
            drawn on paper, wood or another surface, and you can place candles in place of the circles that they all
            have.</x-text>
        <x-text>Each of the Behenian stars is the alpha (or gamma) star of a constellation. With a few exceptions,
            the basic
            energy of a constellation is generally governed by its alpha star, so this is a starting point for
            working
            magically with each of its constellations.</x-text>

        <div class="w-full flex flex-col items-center justify-center mt-4">
            <x-tables.table>
                <x-tables.thead>
                    <tr>
                        <x-tables.th>Behenian Star Name</x-tables.th>
                        <x-tables.th-hidden>Constel.</x-tables.th-hidden>
                        <x-tables.th>Glyph</x-tables.th>
                        <x-tables.th>Keywords</x-tables.th>
                        <x-tables.th-hidden>Planets</x-tables.th-hidden>
                        <x-tables.th-hidden>Metals</x-tables.th-hidden>
                        <x-tables.th-hidden>Gemstones</x-tables.th-hidden>
                        <x-tables.th-hidden>Plants</x-tables.th-hidden>
                        <x-tables.th-hidden>Angel</x-tables.th-hidden>
                        <x-tables.th-hidden>Colors</x-tables.th-hidden>
                        <x-tables.th-hidden>Magic</x-tables.th-hidden>
                    </tr>
                </x-tables.thead>
                <tbody>
                    @foreach ($stars as $star)
                        @if ($star->isBehenian())
                            <x-tables.tr>
                                <x-tables.td><a class="font-bold hover:underline"
                                        href="/star/{{ $star->name }}">{{ $star->name }}</a></x-tables.td>
                                <x-tables.td-hidden><a href="/constellations/{{ $star->constellation->name }}"
                                        class="text-blue-500 hover:underline"> {{ $star->constellation->abbrev }}
                                    </a></x-tables.td-hidden>
                                <x-tables.td>
                                    @foreach ($star->symbols as $symbol)
                                        <ul class="list-star list-inside">
                                            <li class="li-table mb-2"> <img
                                                    src="{{ Vite::asset('storage/app/public/' . $symbol->path) }}"
                                                    alt="Symbol of {{ $star->name }}" class="w-8">
                                            </li>
                                        </ul>
                                    @endforeach
                                </x-tables.td>
                                <x-tables.td>
                                    <ul class="list-star list-inside">
                                        @foreach ($star->keywords as $keyword)
                                            @if ($keyword)
                                                <li class="li-table">
                                                    {{ $keyword->name }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </x-tables.td>
                                <x-tables.td-hidden>
                                    <ul class="list-star list-inside">
                                        @foreach ($star->starMagic as $magic)
                                            @if ($magic->planets)
                                                <li class="li-table">
                                                    {{ $magic->planets }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </x-tables.td-hidden>
                                <x-tables.td-hidden>
                                    <ul class="list-star list-inside">
                                        @foreach ($star->starMagic as $magic)
                                            @if ($magic->metals)
                                                <li class="li-table">
                                                    {{ $magic->metals }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </x-tables.td-hidden>
                                <x-tables.td-hidden>
                                    <ul class="list-star list-inside">
                                        @foreach ($star->starMagic as $magic)
                                            @if ($magic->gemstones)
                                                <li class="li-table">
                                                    {{ $magic->gemstones }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </x-tables.td-hidden>
                                <x-tables.td-hidden>
                                    <ul class="list-star list-inside">
                                        @foreach ($star->starMagic as $magic)
                                            @if ($magic->plants)
                                                <li class="li-table">
                                                    {{ $magic->plants }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </x-tables.td-hidden>

                                <x-tables.td-hidden>
                                    <ul class="list-star list-inside">
                                        @foreach ($star->starMagic as $magic)
                                            @if ($magic->angel)
                                                <li class="li-table">
                                                    {{ $magic->angel }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </x-tables.td-hidden>
                                <x-tables.td-hidden>
                                    <ul class="list-star list-inside">
                                        @foreach ($star->starMagic as $magic)
                                            @if ($magic->colors)
                                                <li class="li-table">
                                                    {{ $magic->colors }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </x-tables.td-hidden>

                                <x-tables.td-hidden>
                                    <ul class="list-star list-inside">
                                        @foreach ($star->starMagic as $magic)
                                            @if ($magic->magic)
                                                <li class="li-table">
                                                    {{ $magic->magic }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </x-tables.td-hidden>

                            </x-tables.tr>
                        @endif
                    @endforeach
                </tbody>
            </x-tables.table>
        </div>


    </x-section>

    <x-section>
        <x-section-title>Other Magical Stars</x-section-title>

        <div class="w-full flex flex-col items-center justify-center mt-4">
            <x-tables.table>
                <x-tables.thead>
                    <tr>
                        <x-tables.th>Star Name</x-tables.th>
                        <x-tables.th-hidden>Constel.</x-tables.th-hidden>
                        <x-tables.th>Glyph</x-tables.th>
                        <x-tables.th>Keywords</x-tables.th>
                        <x-tables.th-hidden>Planets</x-tables.th-hidden>
                        <x-tables.th-hidden>Metals</x-tables.th-hidden>
                        <x-tables.th-hidden>Gemstones</x-tables.th-hidden>
                        <x-tables.th-hidden>Plants</x-tables.th-hidden>
                        <x-tables.th-hidden>Angel</x-tables.th-hidden>
                        <x-tables.th-hidden>Colors</x-tables.th-hidden>
                        <x-tables.th-hidden>Magic</x-tables.th-hidden>
                    </tr>
                </x-tables.thead>
                <tbody>
                    @foreach ($stars as $star)
                        @if (!$star->isBehenian())
                            @if ($star->starMagic->isNotEmpty() || $star->symbols->isNotEmpty() || $star->keywords->isNotEmpty())
                                <x-tables.tr>
                                    <x-tables.td><a class="font-bold hover:underline"
                                            href="/star/{{ $star->name }}">{{ $star->name }}</a></x-tables.td>
                                    <x-tables.td-hidden><a href="/constellations/{{ $star->constellation->name }}"
                                            class="text-blue-500 hover:underline"> {{ $star->constellation->abbrev }}
                                        </a></x-tables.td-hidden>
                                    <x-tables.td>
                                        @foreach ($star->symbols as $symbol)
                                        <li class="li-table mb-2"> <img
                                            src="{{ Vite::asset('storage/app/public/' . $symbol->path) }}"
                                            alt="Symbol of {{ $star->name }}" class="w-8">
                                    </li>
                                        @endforeach
                                    </x-tables.td>
                                    <x-tables.td>
                                        <ul class="list-star list-inside">
                                            @foreach ($star->keywords as $keyword)
                                                @if ($keyword)
                                                    <li class="li-table">
                                                        {{ $keyword->name }}
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </x-tables.td>
                                    <x-tables.td-hidden>
                                        <ul class="list-star list-inside">
                                            @foreach ($star->starMagic as $magic)
                                                @if ($magic->planets)
                                                    <li class="li-table">
                                                        {{ $magic->planets }}
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </x-tables.td-hidden>
                                    <x-tables.td-hidden>
                                        <ul class="list-star list-inside">
                                            @foreach ($star->starMagic as $magic)
                                                @if ($magic->metals)
                                                    <li class="li-table">
                                                        {{ $magic->metals }}
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </x-tables.td-hidden>
                                    <x-tables.td-hidden>
                                        <ul class="list-star list-inside">
                                            @foreach ($star->starMagic as $magic)
                                                @if ($magic->gemstones)
                                                    <li class="li-table">
                                                        {{ $magic->gemstones }}
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </x-tables.td-hidden>
                                    <x-tables.td-hidden>
                                        <ul class="list-star list-inside">
                                            @foreach ($star->starMagic as $magic)
                                                @if ($magic->plants)
                                                    <li class="li-table">
                                                        {{ $magic->plants }}
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </x-tables.td-hidden>

                                    <x-tables.td-hidden>
                                        <ul class="list-star list-inside">
                                            @foreach ($star->starMagic as $magic)
                                                @if ($magic->angel)
                                                    <li class="li-table">
                                                        {{ $magic->angel }}
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </x-tables.td-hidden>
                                    <x-tables.td-hidden>
                                        <ul class="list-star list-inside">
                                            @foreach ($star->starMagic as $magic)
                                                @if ($magic->colors)
                                                    <li class="li-table">
                                                        {{ $magic->colors }}
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </x-tables.td-hidden>

                                    <x-tables.td-hidden>
                                        <ul class="list-star list-inside">
                                            @foreach ($star->starMagic as $magic)
                                                @if ($magic->magic)
                                                    <li class="li-table">
                                                        {{ $magic->magic }}
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </x-tables.td-hidden>

                                </x-tables.tr>
                            @endif
                        @endif
                    @endforeach
                </tbody>
            </x-tables.table>
        </div>

    </x-section>
</x-layout>
