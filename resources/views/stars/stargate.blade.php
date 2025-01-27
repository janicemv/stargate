<x-layout>

    <x-section>

        <x-forms.form action="/search" class="mt-6">
            <x-forms.input :label="false" name="q" placeholder="Search for a star" />
        </x-forms.form>

    </x-section>


    <x-page-heading>List of Stars</x-page-heading>

    <x-text>Information from the <x-link href="https://exopla.net/star-names/modern-iau-star-names/">IAU Catalog of Star Names</x-link> merged with the <x-link href="https://www.iau.org/public/themes/naming_stars/">List of IAU-approved Star Names</x-link></x-text>
<div class="w-full flex flex-col items-center justify-center mt-4">
    
        <div class="overflow-x-auto text-center justify-center">
            <table class="table-auto min-w-full text-sm text-left rtl:text-right">
                <thead class="text-xs text-gray-700 uppercase bg-purple text-white dark:bg-purple-medium">
                    <tr>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="hidden md:table-cell px-6 py-3">Designation</th>
                        <th scope="col" class="px-6 py-3">Constellation</th>
                        <th scope="col" class="hidden md:table-cell px-6 py-3">HIP</th>
                        <th scope="col" class="hidden md:table-cell px-6 py-3">Magnitude</th>
                        <th scope="col" class="hidden md:table-cell px-6 py-3">Ascension</th>
                        <th scope="col" class="hidden md:table-cell px-6 py-3">Declination</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stars as $star)
                    <tr class="bg-white border-b dark:bg-purple dark:border-gray hover:bg-gray-50 dark:hover:bg-gray">
                        <td class="px-6 py-4"><a class="font-bold hover:underline" href="/star/{{ $star->id }}">{{ $star->name }}</a></td>
                        <td class="hidden md:table-cell px-6 py-4">{{ $star->iau_desig }}</td>
                        <td class="px-6 py-4"><a href="/constellations/{{ $star->constellation->id }}" class="text-blue-500 hover:underline">
                                {{ $star->constellation->abbrev }}
                            </a></td>
                        <td class="hidden md:table-cell px-6 py-4">{{ $star->iau_HIP }}</td>
                        <td class="hidden md:table-cell px-6 py-4">{{ $star->Vmag }}</td>
                        <td class="hidden md:table-cell px-6 py-4">{{ $star->RA_J2000 }}</td>
                        <td class="hidden md:table-cell px-6 py-4">{{ $star->Dec_J2000 }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
        <div class="mx-auto mt-3 justify-center">
            {{ $stars->links() }}
        </div>
</div>


</x-layout>