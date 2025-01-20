@props(['active' => false])

<a class="{{ $active ? 'text-white font-bold': 'text-gray-light font-normal'}} hover:font-bold"
    aria-current="{{ $active ? 'page': 'false' }}"
    {{ $attributes }}>{{ $slot }}</a>