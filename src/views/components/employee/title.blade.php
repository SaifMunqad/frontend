<div class="relative mx-4 mt-4 overflow-hidden">
    <div class="flex items-center justify-between">
        <div>
            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">{{ $title }}</h3>
            <p class="text-gray-500 dark:text-gray-400">{{ $description }}</p>
        </div>
        <div class="flex flex-col gap-2 shrink-0 sm:flex-row">
            {{ $slot }}
        </div>
    </div>
</div>
