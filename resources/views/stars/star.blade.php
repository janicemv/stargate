<x-layout>
    <x-page-heading>{{ $star->name }}</x-page-heading>


    <x-stars.iau :star="$star" />

    <x-stars.astronomy :star="$star" />

    <x-stars.magic :star="$star" />

</x-layout>
