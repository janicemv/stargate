<x-layout>

    <x-section>

        <x-forms.form action="/search" class="mt-6">
            <x-forms.input :label="false" name="q" placeholder="Search for a star" />
        </x-forms.form>

    </x-section>


    <x-page-heading>List of Stars</x-page-heading>

    <x-text>Information from the <x-link href="https://exopla.net/star-names/modern-iau-star-names/">IAU Catalog of Star Names</x-link> merged with the <x-link href="https://www.iau.org/public/themes/naming_stars/">List of IAU-approved Star Names</x-link></x-text>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-light dark:bg-gray dark:text-gray-light">
            <tr>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Designation</th>
                <th scope="col" class="px-6 py-3">Constellation</th>
                <th scope="col" class="px-6 py-3">HIP</th>
                <th scope="col" class="px-6 py-3">Magnitude</th>
                <th scope="col" class="px-6 py-3">Ascension</th>
                <th scope="col" class="px-6 py-3">Declination</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stars as $star)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4"><a class="font-bold hover:underline" href="/star/{{ $star->id }}">{{ $star->name }}</a></td>
                <td class="px-6 py-4">{{ $star->iau_desig }}</td>
                <td class="px-6 py-4"><a href="/constellations/{{ $star->constellation->id }}" class="text-blue-500 hover:underline">
                        {{ $star->constellation->abbrev }}
                    </a></td>
                <td class="px-6 py-4">{{ $star->iau_HIP }}</td>
                <td class="px-6 py-4">{{ $star->Vmag }}</td>
                <td class="px-6 py-4">{{ $star->RA_J2000 }}</td>
                <td class="px-6 py-4">{{ $star->Dec_J2000 }}</td>




            </tr>
            @endforeach
        </tbody>
    </table>

    <div class=" mt-4">
        {{ $stars->links() }}
    </div>


</x-layout>