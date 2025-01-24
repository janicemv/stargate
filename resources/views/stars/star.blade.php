<x-layout>
    <x-page-heading>{{ $star->name }}</x-page-heading>


    <x-section>
        <x-section-title>Official IAU Information</x-section-title>

        <x-text>Information from the <x-link href="https://exopla.net/star-names/modern-iau-star-names/">IAU Catalog of Star Names</x-navlink></x-text>


        <x-round-container>
            <x-section-info title="IAU name">
                {{ $star->name }}
            </x-section-info>

            <x-section-info title="designation">
                {{ $star->iau_desig }}
            </x-section-info>

            <x-section-info title="HIP">
                {{ $star->iau_HIP }}
            </x-section-info>

            <x-section-info title="Bayer ID">
                {{ $star->BayerId }}
            </x-section-info>

            <x-section-info title="Constellation">
                <a class="font-bold hover:underline" href="/constellations/{{ $star->constellation->id }}}">
                    {{ $star->constellation->name }}
                </a> </x-section-info>

            <x-section-info title="Origin">
                {{ $star->origin }}
            </x-section-info>

            <x-section-info title="Ethnical/Cultural Group or language">
                {{ $star->group }}
            </x-section-info>

            <x-section-info title="Date of adoption">
                {{ $star->date_of_adoption }}
            </x-section-info>

            <x-section-info title="Reference">
                {{ $star->reference }}
            </x-section-info>

        </x-round-container>
    </x-section>

    <!-- Astronomy -->

    @if ($star->astronomy->isNotEmpty())


    @php
    $references = [];
    @endphp


    <x-section>

        <x-section-title>Astronomical Information</x-section-title>

        <x-text>@foreach($star->keywords as $keyword)
            <x-tag>{{ $keyword->name }}</x-tag>
            @endforeach
        </x-text>

        <x-round-container>
            <x-section-info title="Names">
                <ul class="list-star list-inside">
                    @foreach ($star->names as $name)
                    @if($name)
                    @php
                    if (!isset($references[$name->reference])) {
                    $references[$name->reference] = [
                    'index' => count($references) + 1,
                    'url' => $name->url ?? '#'
                    ];
                    }
                    $refNumber = $references[$name->reference]['index'];
                    @endphp
                    <x-list-item>
                        {{ $name->name }} <x-sup><a href="#ref-{{ $refNumber }}">[{{ $refNumber }}]</a></x-sup>
                    </x-list-item>
                    @endif
                    @endforeach
                </ul>
            </x-section-info>

            @foreach($star->astronomy as $info)
            @if($info)
            <x-section-info title="{{ $info->type }}">
                @php
                if (!isset($references[$info->reference])) {
                $references[$info->reference] = [
                'index' => count($references) + 1,
                'url' => $info->url
                ];
                }
                $refNumber = $references[$info->reference]['index'];
                @endphp
                <x-text>{{ $info->description }} <x-sup><a href="#ref-{{ $refNumber }}">[{{ $refNumber }}]</a></x-sup></x-text>
            </x-section-info>

            @endif
            @endforeach



            <x-section-info title="References">
                <ol class="list-decimal pl-5 space-y-2">
                    @foreach ($references as $reference => $data)
                    <li id="ref-{{ $data['index'] }}" class="text-sm text-gray-600">
                        @if($data['url'])
                        <a href="{{ $data['url'] }}" target="_blank">{{ $reference }}</a>
                        @else
                        {{ $reference }}
                        @endif
                    </li>
                    @endforeach
                </ol>
            </x-section-info>

        </x-round-container>

    </x-section>

    @endif



    <!-- Star Magic -->

    @if ($star->starMagic->isNotEmpty())

    @php
    $references = [];
    @endphp


    <x-section>

        <x-section-title>Magical Correspondences</x-section-title>

        <x-text>@foreach($star->keywords as $keyword)
            <x-tag>{{ $keyword->name }}</x-tag>
            @endforeach
        </x-text>

        <x-round-container>

            @if ($star->behenians)
            <x-section-info title="Type">
                {{ $star->name }} is a Behenian Star, one of Cornelius Agrippa's medieval stars.
            </x-section-info>
            @endif


            <x-section-info title="Planets">
                <ul class="list-star list-inside">
                    @foreach ($star->starMagic as $magic)
                    @if($magic->planets)
                    @php
                    if (!isset($references[$magic->reference])) {
                    $references[$magic->reference] = [
                    'index' => count($references) + 1,
                    'url' => $magic->url
                    ];
                    }
                    $refNumber = $references[$magic->reference]['index'];
                    @endphp
                    <x-list-item>
                        {{ $magic->planets }} <x-sup><a href="#ref-{{ $refNumber }}">[{{ $refNumber }}]</a></x-sup>
                    </x-list-item>
                    @endif
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="Metals">
                <ul class="list-star list-inside">
                    @foreach ($star->starMagic as $magic)
                    @if($magic->metals)
                    @php
                    if (!isset($references[$magic->reference])) {
                    $references[$magic->reference] = [
                    'index' => count($references) + 1,
                    'url' => $magic->url
                    ];
                    }
                    $refNumber = $references[$magic->reference]['index'];
                    @endphp
                    <x-list-item>
                        {{ $magic->metals }} <x-sup><a href="#ref-{{ $refNumber }}">[{{ $refNumber }}]</a></x-sup>
                    </x-list-item>
                    @endif
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="Gemstones">
                <ul class="list-star list-inside">
                    @foreach ($star->starMagic as $magic)
                    @if($magic->gemstones)
                    @php
                    if (!isset($references[$magic->reference])) {
                    $references[$magic->reference] = [
                    'index' => count($references) + 1,
                    'url' => $magic->url
                    ];
                    }
                    $refNumber = $references[$magic->reference]['index'];
                    @endphp
                    <x-list-item>
                        {{ $magic->gemstones }} <x-sup><a href="#ref-{{ $refNumber }}">[{{ $refNumber }}]</a></x-sup>
                    </x-list-item>
                    @endif
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="Plants">
                <ul class="list-star list-inside">
                    @foreach ($star->starMagic as $magic)
                    @if($magic->plants)
                    @php
                    if (!isset($references[$magic->reference])) {
                    $references[$magic->reference] = [
                    'index' => count($references) + 1,
                    'url' => $magic->url
                    ];
                    }
                    $refNumber = $references[$magic->reference]['index'];
                    @endphp
                    <x-list-item>
                        {{ $magic->plants }} <x-sup><a href="#ref-{{ $refNumber }}">[{{ $refNumber }}]</a></x-sup>
                    </x-list-item>
                    @endif
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="Description">
                <ul class="list-star list-inside">
                    @foreach ($star->starMagic as $magic)
                    @if($magic->description)
                    @php
                    if (!isset($references[$magic->reference])) {
                    $references[$magic->reference] = [
                    'index' => count($references) + 1,
                    'url' => $magic->url
                    ];
                    }
                    $refNumber = $references[$magic->reference]['index'];
                    @endphp
                    <x-list-item>
                        {{ $magic->description }} <x-sup><a href="#ref-{{ $refNumber }}">[{{ $refNumber }}]</a></x-sup>
                    </x-list-item>
                    @endif
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="Angel">
                <ul class="list-star list-inside">
                    @foreach ($star->starMagic as $magic)
                    @if($magic->angel)
                    @php
                    if (!isset($references[$magic->reference])) {
                    $references[$magic->reference] = [
                    'index' => count($references) + 1,
                    'url' => $magic->url
                    ];
                    }
                    $refNumber = $references[$magic->reference]['index'];
                    @endphp
                    <x-list-item>
                        {{ $magic->angel }} <x-sup><a href="#ref-{{ $refNumber }}">[{{ $refNumber }}]</a></x-sup>
                    </x-list-item>
                    @endif
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="Colors">
                <ul class="list-star list-inside">
                    @foreach ($star->starMagic as $magic)
                    @if($magic->colors)
                    @php
                    if (!isset($references[$magic->reference])) {
                    $references[$magic->reference] = [
                    'index' => count($references) + 1,
                    'url' => $magic->url
                    ];
                    }
                    $refNumber = $references[$magic->reference]['index'];
                    @endphp
                    <x-list-item>
                        {{ $magic->colors }} <x-sup><a href="#ref-{{ $refNumber }}">[{{ $refNumber }}]</a></x-sup>
                    </x-list-item>
                    @endif
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="Invocation">
                <ul>
                    @foreach ($star->starMagic as $magic)
                    @if($magic->invocation)
                    @php
                    if (!isset($references[$magic->reference])) {
                    $references[$magic->reference] = [
                    'index' => count($references) + 1,
                    'url' => $magic->url
                    ];
                    }
                    $refNumber = $references[$magic->reference]['index'];
                    @endphp
                    <li>
                        <blockquote class="italic font-light text-gray-900 dark:text-white mb-4">{{ $magic->invocation }} <x-sup><a href=" #ref-{{ $refNumber }}">[{{ $refNumber }}]</a></x-sup>
                        </blockquote>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </x-section-info>

            <x-section-info title="Magic">
                <ul class="list-star list-inside">
                    @foreach ($star->starMagic as $magic)
                    @if($magic->magic)
                    @php
                    if (!isset($references[$magic->reference])) {
                    $references[$magic->reference] = [
                    'index' => count($references) + 1,
                    'url' => $magic->url
                    ];
                    }
                    $refNumber = $references[$magic->reference]['index'];
                    @endphp
                    <x-list-item>
                        {{ $magic->magic }} <x-sup><a href="#ref-{{ $refNumber }}">[{{ $refNumber }}]</a></x-sup>
                    </x-list-item>
                    @endif
                    @endforeach
                </ul>
            </x-section-info>
            <x-section-info title="References">
                <ol class="list-decimal pl-5 space-y-2">
                    @foreach ($references as $reference => $data)
                    <li id="ref-{{ $data['index'] }}" class="text-sm text-gray-600">
                        @if($data['url'])
                        <a href="{{ $data['url'] }}" target="_blank">{{ $reference }}</a>
                        @else
                        {{ $reference }}
                        @endif
                    </li>
                    @endforeach
                </ol>
            </x-section-info>









        </x-round-container>

    </x-section>


    @endif

    </div>



</x-layout>