<!-- Astronomy -->

@if ($star->astronomy->isNotEmpty() || $star->names->isNotEmpty())

@php
$astroReferences = [];
@endphp


<x-section>

    <x-section-title>Astronomical Information</x-section-title>

   
    <x-round-container>
        @if($star->names->isNotEmpty())
        <x-section-info title="Names">
            <ul class="list-star list-inside">
                @foreach ($star->names as $name)
                @if($name)
                @php
                if (!isset($astroReferences[$name->reference])) {
                $astroReferences[$name->reference] = [
                'index' => count($astroReferences) + 1,
                'url' => $name->url
                ];
                }
                $astroRefNumber = $astroReferences[$name->reference]['index'];
                @endphp
                <x-list-item>
                    {{ $name->name }} <x-sup>[{{ $astroRefNumber }}]</x-sup>
                </x-list-item>
                @endif
                @endforeach
            </ul>
        </x-section-info>
        @endif

        @if($star->astronomy->isNotEmpty())
        @foreach($star->astronomy as $info)
        @if($info)
        <x-section-info title="{{ $info->type }}">
            @php
            if (!isset($astroReferences[$info->reference])) {
            $astroReferences[$info->reference] = [
            'index' => count($astroReferences) + 1,
            'url' => $info->url
            ];
            }
            $astroRefNumber = $astroReferences[$info->reference]['index'];
            @endphp
            <x-text>{{ $info->description }} <x-sup>[{{ $astroRefNumber }}]</x-sup></x-text>
        </x-section-info>

        @endif
        @endforeach
        @endif



        <x-section-info title="References">
            <ol class="list-decimal pl-5 space-y-2">
                @foreach ($astroReferences as $astroReference => $data)
                <li id="ref-{{ $data['index'] }}" class="text-sm blue-icon">
                    @if($data['url'])
                    <a href="{{ $data['url'] }}" target="_blank">{{ $astroReference }}</a>
                    @else
                    {{ $astroReference }}
                    @endif
                </li>
                @endforeach
            </ol>
        </x-section-info>

    </x-round-container>

</x-section>

@endif