<table class="table-auto min-w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <x-table-header />
    <tbody>
        @foreach ($stars as $star)
        <x-star-row :star="$star" />
        @endforeach
    </tbody>
</table>