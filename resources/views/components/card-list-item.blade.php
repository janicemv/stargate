<li class="py-1 sm:py-1 mx-4 lg:mx-1">
    <div class="flex items-center">
        <div class="flex-shrink-0">
            <i class="fa-solid fa-star text-sm"></i>
        </div>
        <div class="flex-1 min-w-0 ms-4">
            <p class="text-xs font-medium  truncate">
                {{ $name }}
                <span class="text-xs truncate text-purple-medium">{{ $code }}</span>
            </p>
        </div>
        <div class="inline-flex items-center text-base font-semibold text-purple-medium">
            <a href="{{ $link }}">
                <i class="fa-solid fa-arrow-right"></i>

            </a>
        </div>
    </div>
</li>
