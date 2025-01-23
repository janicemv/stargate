<x-card>
    <x-slot name="header">
        <x-card-header
            :image="Vite::asset('resources/images/stars/sirius.svg')"
            alt="Canis Major"
            title="Canis Major"
            subtitle="CMa" />
    </x-slot>

    <x-card-list title="Canis Major Stars" link="/star" linkText="View all">
        <x-card-list-item
            :image="Vite::asset('resources/images/stars/sirius.svg')"
            alt="Sirius"
            name="Sirius"
            code="α CMa"
            link="/star" />
        <x-card-list-item
            :image="Vite::asset('resources/images/stars/sirius.svg')"
            alt="Adhara"
            name="Adhara"
            code="ε CMa"
            link="#" />
        <x-card-list-item
            :image="Vite::asset('resources/images/stars/sirius.svg')"
            alt="Aludra"
            name="Aludra"
            code="η CMa"
            link="#" />
    </x-card-list>

    <x-slot name="footer">
        <x-card-footer link="#" text="Read more" />
    </x-slot>
</x-card>