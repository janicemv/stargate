@props(['name', 'label'])

<div class="inline-flex items-center gap-x-2">
    <span class="text-sm"><i class="fa-solid fa-star"></i></span>
    <label class="font-bold" for="{{ $name }}">{{ $label }}</label>
</div>
