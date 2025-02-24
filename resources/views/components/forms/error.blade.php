@props(['error' => false])

@if ($error)
    <p class="text-sm text-red mt-1">{{ $error }}</p>
@endif
