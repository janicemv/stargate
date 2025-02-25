<!-- Star Magic -->

@if ($star->starMagic->isNotEmpty() || $star->symbols->isNotEmpty())

    @php
        $magicReferences = [];
    @endphp


    <x-section>

        <x-section-title>Magical Correspondences</x-section-title>

        @if ($star->keywords->isNotEmpty())
            <x-text>
                @foreach ($star->keywords as $keyword)
                    <x-tag>{{ $keyword->name }}</x-tag>
                @endforeach
            </x-text>
        @endif

        <x-round-container>

            @if ($star->symbols())
                <x-section-info title="Stellar glyphs">
                    @foreach ($star->symbols as $symbol)
                        @php
                            if (!isset($magicReferences[$symbol->reference])) {
                                $magicReferences[$symbol->reference] = [
                                    'index' => count($magicReferences) + 1,
                                    'url' => $symbol->url,
                                ];
                            }
                            $magicRefNumber = $magicReferences[$symbol->reference]['index'];
                        @endphp
                        <div class="justify-items-center mb-4">
                            <img src="{{ Vite::asset('storage/app/public/' . $symbol->path) }}"
                                alt="{{ $symbol->description }}" class="star-glyph">
                            <figcaption class="mt-2 text-sm italic">{{ $symbol->description }} <x-sup>[{{ $magicRefNumber }}]</x-sup></figcaption>
                        </div>
                    @endforeach
                </x-section-info>
            @endif

            @if ($star->isBehenian())
                <x-section-info title="Type">
                    {{ $star->name }} is a Behenian Star, one of Cornelius Agrippa's medieval stars.
                </x-section-info>
            @endif


            <x-section-info title="Planets">
                <ul class="list-star list-inside">
                    @foreach ($star->starMagic as $magic)
                        @if ($magic->planets)
                            @php
                                if (!isset($magicReferences[$magic->reference])) {
                                    $magicReferences[$magic->reference] = [
                                        'index' => count($magicReferences) + 1,
                                        'url' => $magic->url,
                                    ];
                                }
                                $magicRefNumber = $magicReferences[$magic->reference]['index'];
                            @endphp
                            <x-list-item>
                                {{ $magic->planets }} <x-sup>[{{ $magicRefNumber }}]</x-sup>
                            </x-list-item>
                        @endif
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="Metals">
                <ul class="list-star list-inside">
                    @foreach ($star->starMagic as $magic)
                        @if ($magic->metals)
                            @php
                                if (!isset($magicReferences[$magic->reference])) {
                                    $magicReferences[$magic->reference] = [
                                        'index' => count($magicReferences) + 1,
                                        'url' => $magic->url,
                                    ];
                                }
                                $magicRefNumber = $magicReferences[$magic->reference]['index'];
                            @endphp
                            <x-list-item>
                                {{ $magic->metals }} <x-sup>[{{ $magicRefNumber }}]</x-sup>
                            </x-list-item>
                        @endif
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="Gemstones">
                <ul class="list-star list-inside">
                    @foreach ($star->starMagic as $magic)
                        @if ($magic->gemstones)
                            @php
                                if (!isset($magicReferences[$magic->reference])) {
                                    $magicReferences[$magic->reference] = [
                                        'index' => count($magicReferences) + 1,
                                        'url' => $magic->url,
                                    ];
                                }
                                $magicRefNumber = $magicReferences[$magic->reference]['index'];
                            @endphp
                            <x-list-item>
                                {{ $magic->gemstones }} <x-sup>[{{ $magicRefNumber }}]</x-sup>
                            </x-list-item>
                        @endif
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="Plants">
                <ul class="list-star list-inside">
                    @foreach ($star->starMagic as $magic)
                        @if ($magic->plants)
                            @php
                                if (!isset($magicReferences[$magic->reference])) {
                                    $magicReferences[$magic->reference] = [
                                        'index' => count($magicReferences) + 1,
                                        'url' => $magic->url,
                                    ];
                                }
                                $magicRefNumber = $magicReferences[$magic->reference]['index'];
                            @endphp
                            <x-list-item>
                                {{ $magic->plants }} <x-sup>[{{ $magicRefNumber }}]</x-sup>
                            </x-list-item>
                        @endif
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="Description">
                <ul class="list-star list-inside">
                    @foreach ($star->starMagic as $magic)
                        @if ($magic->description)
                            @php
                                if (!isset($magicReferences[$magic->reference])) {
                                    $magicReferences[$magic->reference] = [
                                        'index' => count($magicReferences) + 1,
                                        'url' => $magic->url,
                                    ];
                                }
                                $magicRefNumber = $magicReferences[$magic->reference]['index'];
                            @endphp
                            <x-list-item>
                                {{ $magic->description }} <x-sup>[{{ $magicRefNumber }}]</x-sup>
                            </x-list-item>
                        @endif
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="Angel">
                <ul class="list-star list-inside">
                    @foreach ($star->starMagic as $magic)
                        @if ($magic->angel)
                            @php
                                if (!isset($magicReferences[$magic->reference])) {
                                    $magicReferences[$magic->reference] = [
                                        'index' => count($magicReferences) + 1,
                                        'url' => $magic->url,
                                    ];
                                }
                                $magicRefNumber = $magicReferences[$magic->reference]['index'];
                            @endphp
                            <x-list-item>
                                {{ $magic->angel }} <x-sup>[{{ $magicRefNumber }}]</x-sup>
                            </x-list-item>
                        @endif
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="Colors">
                <ul class="list-star list-inside">
                    @foreach ($star->starMagic as $magic)
                        @if ($magic->colors)
                            @php
                                if (!isset($magicReferences[$magic->reference])) {
                                    $magicReferences[$magic->reference] = [
                                        'index' => count($magicReferences) + 1,
                                        'url' => $magic->url,
                                    ];
                                }
                                $magicRefNumber = $magicReferences[$magic->reference]['index'];
                            @endphp
                            <x-list-item>
                                {{ $magic->colors }} <x-sup>[{{ $magicRefNumber }}]</x-sup>
                            </x-list-item>
                        @endif
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="Invocation">
                <ul>
                    @foreach ($star->starMagic as $magic)
                        @if ($magic->invocation)
                            @php
                                if (!isset($magicReferences[$magic->reference])) {
                                    $magicReferences[$magic->reference] = [
                                        'index' => count($magicReferences) + 1,
                                        'url' => $magic->url,
                                    ];
                                }
                                $magicRefNumber = $magicReferences[$magic->reference]['index'];
                            @endphp
                            <li>
                                <blockquote class="italic font-light text-gray-900 dark:text-off-white mb-4">
                                    {{ $magic->invocation }} <x-sup>[{{ $magicRefNumber }}]</x-sup>
                                </blockquote>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="Magic">
                <ul class="list-star list-inside">
                    @foreach ($star->starMagic as $magic)
                        @if ($magic->magic)
                            @php
                                if (!isset($magicReferences[$magic->reference])) {
                                    $magicReferences[$magic->reference] = [
                                        'index' => count($magicReferences) + 1,
                                        'url' => $magic->url,
                                    ];
                                }
                                $magicRefNumber = $magicReferences[$magic->reference]['index'];
                            @endphp
                            <x-list-item>
                                {{ $magic->magic }} <x-sup>[{{ $magicRefNumber }}]</x-sup>
                            </x-list-item>
                        @endif
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="Additional Information">
                <ul class="list-star list-inside">
                    @foreach ($star->starMagic as $magic)
                        @if ($magic->additional_info)
                            @php
                                if (!isset($magicReferences[$magic->reference])) {
                                    $magicReferences[$magic->reference] = [
                                        'index' => count($magicReferences) + 1,
                                        'url' => $magic->url,
                                    ];
                                }
                                $magicRefNumber = $magicReferences[$magic->reference]['index'];
                            @endphp
                            <x-list-item>
                                {{ $magic->additional_info }} <x-sup>[{{ $magicRefNumber }}]</x-sup>
                            </x-list-item>
                        @endif
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="References">
                <ol class="list-decimal pl-5 space-y-2">
                    @foreach ($magicReferences as $magicReference => $data)
                        <li id="ref-{{ $data['index'] }}" class="text-sm blue-icon">
                            @if ($data['url'])
                                <x-link href="{{ $data['url'] }}">{{ $magicReference }}</x-link>
                            @else
                                {{ $magicReference }}
                            @endif
                        </li>
                    @endforeach
                </ol>
            </x-section-info>









        </x-round-container>

    </x-section>


@endif
