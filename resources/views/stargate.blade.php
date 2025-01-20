<x-layout>

    <x-page-heading>List of Stars</x-page-heading>
    <table class="table-auto">
        <thead>
            <tr>
                <th>Name</th>
                <th>Designation</th>
                <th>Constellation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stars as $star)
            <tr>
                <td>{{ $star->proper_names }}</td>
                <td>{{ $star->designation }}</td>
                <td>{{ $star->constellation->abbrev }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>