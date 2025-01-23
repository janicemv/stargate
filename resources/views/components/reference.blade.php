<div class="flex px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-0 items-center">
    <dt class="{{ $titleClass ?? 'text-purple text-sm/6 font-medium text-white-900 underline sm:no-underline capitalize' }}">
        {{ $title }}
    </dt>

    <dd class="mt-1 text-sm/6 text-white-700 sm:col-span-2 sm:mt-0">
        {{ $slot }}
    </dd>

    <div class="inline-flex text-base font-semibold text-gray-900 dark:text-white">

        <a href="{{ $linkUrl ?? '#' }}" target="_blank">
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>


</div>