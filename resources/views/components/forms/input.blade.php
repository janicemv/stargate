@props(['label', 'name'])

@php
$defaults = [
'type' => 'text',
'id' => $name,
'name' => $name,
'class' => 'rounded-2xl bg-white/10 focus:outline-nonecus:ring-purple px-5 py-4 w-full  dark:bg-purple dark:border-gray dark:text-gray-light dark:focus:border-purple-medium dark:focus:ring-1 dark:focus:ring-purple',
'value' => old($name)
];
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }}>
</x-forms.field>