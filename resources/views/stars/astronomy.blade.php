<x-section>
    <x-section-title>Official IAU Information</x-section-title>


    <x-round-container>
        <x-section-info title="IAU name">
            {{ $star->proper_names }}
        </x-section-info>

        <x-section-info title="designation">
            {{ $star->desigation }}
        </x-section-info>

        <x-section-info title="HIP">
            {{ $star->HIP }}
        </x-section-info>

        <x-section-info title="Bayer ID">
            {{ $star->BayerId }}
        </x-section-info>

        <x-section-info title="Constellation">
            {{ $star->constellation->constellation }}
        </x-section-info>

        <x-section-info title="Origin">
            {{ $star->origin }}
        </x-section-info>

    </x-round-container>
</x-section>