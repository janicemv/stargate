<div class="w-full max-w-md bg-white sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="flex items-center justify-between mb-2">
        <h6 class="text-sm font-bold leading-none text-gray-900 dark:text-white">{{ $title }}</h6>
        <a href="{{ $link }}" class="text-xs font-medium text-blue-600 hover:underline dark:text-blue-500">
            {{ $linkText }}
        </a>
    </div>
    <div class="flow-root">
        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
            {{ $slot }}
        </ul>
    </div>
</div>