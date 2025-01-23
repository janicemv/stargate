<div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
    <dt class="{{ $titleClass ?? 'text-purple text-sm/6 font-medium text-white-900 underline sm:no-underline capitalize' }}">
        {{ $title }}
    </dt>
    <dd class="mt-1 text-sm/6 text-white-700 sm:col-span-2 sm:mt-0">
        {{ $slot }}
    </dd>
</div>