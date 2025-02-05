<?php use App\Main\PageData; ?>

<button aria-label="{{ $buttonId }}" id="{{ $buttonId }}"
        class="bg flex w-full items-center justify-between space-x-4 px-4 py-3 dark:text-gray-300 {{ ($pageSelected) ? 'bg-gradient-to-r from-sky-600 to-cyan-400 dark:text-gray-800 text-gray-300 dark:text-white' : 'dark:text-gray-600 '}}">
    <a class="flex items-center space-x-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rtl:ml-4" viewBox="0 0 24 24"
             fill="currentColor">
            {{ $slot }}
        </svg>
        <span
            class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap group-hover:text-gray-200 text-white">{{ $buttonName }}</span>
    </a>
    <svg
        class="size-3 transform {{ ($pageSelected) ? '' : '-rotate-90'}}  transition"
        id="{{ $svgId }}"
        aria-hidden="true"
        xmlns="http://www.w3.org/2000/svg" fill="none"
        viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2"
              d="m1 1 4 4 4-4"/>
    </svg>
</button>
