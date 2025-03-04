<div class="w-full max-w-md sm:p-8  dark:border-gray">
    <div class="flex items-center justify-between mb-2">
        <h6 class="text-sm font-bold leading-none text-gray-900mx-4 lg:mx-1">{{ $title }}</h6>
        <a href="{{ $link }}" class="text-xs font-medium hover:underline mr-4 lg:mr-1">
            {{ $linkText }}
        </a>
    </div>
    <div class="flow-root">
        <ul role="list" class="divide-y divide-gray dark:divide-gray">
            {{ $slot }}
        </ul>
    </div>
</div>