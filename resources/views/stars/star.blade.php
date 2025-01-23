<x-layout>
    <x-page-heading>{{ $star->name }}</x-page-heading>


    <x-section>
        <h2>Keywords Associadas:</h2>
        @if($star->keywords->isEmpty())
        <p>Esta estrela não tem keywords associadas.</p>
        @else
        <ul>
            @foreach($star->keywords as $keyword)
            <li>{{ $keyword->name }}</li>
            @endforeach
        </ul>
        @endif

        <h2>Names:</h2>
        @if($star->names->isEmpty())
        <p>Esta estrela não tem names associadas.</p>
        @else
        <ul>
            @foreach($star->names as $name)
            <li>{{ $name->name }}</li>
            @endforeach
        </ul>
        @endif
    </x-section>
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


    </div>



</x-layout>