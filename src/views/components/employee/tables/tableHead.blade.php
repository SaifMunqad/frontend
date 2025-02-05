<table class="mt-4 min-w-full divide-y divide-gray-200 overflow-x-auto">
    <thead class="bg-gray-50 dark:bg-gray-950">
    <tr>
        @foreach($tableHeads as $th)
            <th scope="col"
                class="px-3 py-3 text-left  font-medium text-gray-500 dark:text-gray-400 uppercase dark:hover:bg-gray-900 tracking-wider cursor-pointer whitespace-normal">
                <p class="flex items-center justify-between gap-2 font-sans text-xs leading-none">
                    {{ $th }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                    </svg>
                </p>
            </th>
        @endforeach
        <th scope="col"
            class="px-3 py-3 text-left text-xs  font-medium font-sans text-gray-500 dark:text-gray-400 uppercase tracking-wider whitespace-normal">
            Actions
        </th>
    </tr>
    </thead>
    <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-400">
    {{ $slot }}
    </tbody>
</table>
