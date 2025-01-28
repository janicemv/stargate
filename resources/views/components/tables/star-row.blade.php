<tr class="bg-white border-b dark:bg-purple dark:border-gray hover:bg-gray-50 dark:hover:bg-gray">
    <td class="px-4 py-2"><a class="font-bold hover:underline" href="/star/{{ $star->id }}">{{ $star->name }}</a></td>
    <td class="px-4 py-2 hidden md:table-cell">{{ $star->iau_desig }}</td>
    <td class="px-4 py-2"><a href="/constellations/{{ $star->constellation->id }}" class="text-blue-500 hover:underline">
        {{ $star->constellation->name }}
    </a></td>
    <td class="px-4 py-2 hidden md:table-cell">{{ $star->iau_HIP }}</td>
    <td class="px-4 py-2 hidden md:table-cell">{{ $star->Vmag }}</td>
    <td class="px-4 py-2 hidden md:table-cell">{{ $star->RA_J2000 }}</td>
    <td class="px-4 py-2 hidden md:table-cell">{{ $star->Dec_J2000 }}</td>
</tr>