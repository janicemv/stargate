<div class="w-full max-w-md bg-white sm:p-8 dark:bg-purple dark:border-gray">
    <div class="flex items-center justify-between mb-2">
        <h6 class="text-sm font-bold leading-none text-gray-900 dark:text-white">{{ $title }}</h6>
        <a href="{{ $link }}" class="text-xs font-medium text-purple-medium hover:underline dark:text-purple-medium">
            {{ $linkText }}
        </a>
    </div>
    <div class="flow-root">
        <ul role="list" class="divide-y divide-gray dark:divide-gray">
            {{ $slot }}
        </ul>
    </div>
</div>