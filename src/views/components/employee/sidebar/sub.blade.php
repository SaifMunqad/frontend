<?php use App\Main\PageData; ?>
<li class="min-w-max">
    <a href="{{ $pageLink }}" aria-label="{{ $pageName }}"
       class="bg group flex items-center space-x-4 px-4 py-2 dark:text-gray-300 {{ ($menuSelected) ? "bg-gradient-to-r from-sky-800 to-cyan-500 dark:text-gray-800 dark:text-gray-800 text-gray-300 dark:text-white" : 'dark:text-gray-600'}}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
             fill="currentColor"
             clip-rule="evenodd"
             class="size-4 rtl:ml-4">
            {{ $slot }}
        </svg>
        <span
            class="px-1 dark:text-gray-300 group-hover:text-gray-500"> {{ $pageName }} </span>
    </a>
</li>
