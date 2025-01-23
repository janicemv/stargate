@props(['label', 'name'])

@php
$defaults = [
'type' => 'text',
'id' => $name,
'name' => $name,
'class' => 'rounded-2xl bg-white/10 focus:outline-none focus:border-purple focus:ring-1 focus:ring-purple px-5 py-4 w-full',
'value' => old($name)
];
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }}>
</x-forms.field>