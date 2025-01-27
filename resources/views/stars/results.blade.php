<x-layout>

    <x-page-heading>Search Result of "{{ $q }}"</x-page-heading>
    <div class="overflow-x-auto">
        <table class="table-auto min-w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-light dark:bg-gray dark:text-gray-light">
                <tr>
                    <th scope="col" class="px-4 py-2">Name</th>
                    <th scope="col" class="px-4 py-2 hidden md:table-cell">Designation</th>
                    <th scope="col" class="px-4 py-2 whitespace-nowrap">Constellation</th>
                    <th scope="col" class="px-4 py-2 hidden md:table-cell">HIP</th>
                    <th scope="col" class="px-4 py-2 hidden md:table-cell">Magnitude</th>
                    <th scope="col" class="px-4 py-2 hidden md:table-cell">Ascension</th>
                    <th scope="col" class="px-4 py-2 hidden md:table-cell">Declination</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stars as $star)
                <tr class="bg-white border-b dark:bg-purpe dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-4 py-2"><a class="font-bold hover:underline" href="/star/{{ $star->id }}">{{ $star->name }}</a></td>
                    <td class="px-4 py-2 hidden md:table-cell">{{ $star->iau_desig }}</td>
                    <td class="px-4 py-2"><a href="/constellations/{{ $star->constellation->id }}" class="text-blue-500 hover:underline">
                            {{ $star->constellation->abbrev }}
                        </a></td>
                    <td class="px-4 py-2 hidden md:table-cell">{{ $star->iau_HIP }}</td>
                    <td class="px-4 py-2 hidden md:table-cell">{{ $star->Vmag }}</td>
                    <td class="px-4 py-2 hidden md:table-cell">{{ $star->RA_J2000 }}</td>
                    <td class="px-4 py-2 hidden md:table-cell">{{ $star->Dec_J2000 }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layout>