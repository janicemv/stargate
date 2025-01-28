<div class="flex px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-0 items-center justify-between hover:bg-blue-light hover:text-off-white">
    <dt class="{{ $titleClass ?? 'text-purple text-sm/6 font-medium dark:text-off-white underline sm:no-underline capitalize' }}">
         <x-link href="{{ $linkUrl ?? '#' }}" target="_blank">
            {{ $title }}
         </x-link>
    </dt>

    <dd class="mt-1 text-sm/6 text-white-700 sm:col-span-2 sm:mt-0 dark:text-off-white">
        {{ $slot }}
    </dd>

    <div class="inline-flex text-base font-semibold text-gray-900 dark:text-white">

        <x-link href="{{ $linkUrl ?? '#' }}" target="_blank">
            <i class="fa-solid fa-arrow-right"></i>
        </x-link>
    </div>


</div>