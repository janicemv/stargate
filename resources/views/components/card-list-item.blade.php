<li class="py-1 sm:py-1">
    <div class="flex items-center">
        <div class="flex-shrink-0">
            <i class="fa-solid fa-star text-sm"></i>        
        </div>
        <div class="flex-1 min-w-0 ms-4">
            <p class="text-xs font-medium  truncate dark:text-white">
                {{ $name }}
                <span class="text-xstruncate text-blue-light">{{ $code }}</span>
            </p>
        </div>
        <div class="inline-flex items-center text-base font-semibold dark:text-purple-light">
            <a href="{{ $link }}">
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
</li>