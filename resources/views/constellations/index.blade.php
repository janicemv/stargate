<x-layout>

    <x-page-heading>Constellations</x-page-heading>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mx-auto">
        @foreach ($constellations as $constellation)

        <x-card>
            <x-slot name="header">
                <x-card-header
                    :image="Vite::asset('./storage/app/public/stars/sirius.png')"
                    alt="{{ $constellation->name }}"
                    title="{{ $constellation->name }}"
                    subtitle="{{ $constellation->abbrev }}"
                    link="/constellations/{{ $constellation->name }}" />
            </x-slot>

            @if ($constellation->stars->isNotEmpty())

            <x-card-list title="{{ $constellation->abbrev }} Stars" link="/constellations/{{ $constellation->name }}" linkText="View all">
                @foreach ($constellation->stars as $star)
                <x-card-list-item
                    :image="Vite::asset('resources/images/stars/sirius.svg')"
                    alt="{{ $star->name }}"
                    name="{{ $star->name }}"
                    code="{{ $star->iau_desig }}"
                    link="/star/{{ $star->name }}" />
                @endforeach
        
          
               
            </x-card-list>
            @endif

            <x-slot name="footer">
                <x-card-footer link="/constellations/{{ $constellation->name }}" text="Read more" />
            </x-slot>
        </x-card>

        @endforeach


    </div>

</x-layout>