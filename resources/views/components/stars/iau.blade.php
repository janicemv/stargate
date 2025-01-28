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