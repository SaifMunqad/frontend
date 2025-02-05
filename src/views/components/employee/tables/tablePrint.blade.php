<table class="mt-4 min-w-full divide-y divide-gray-200 overflow-x-auto">
    <thead class="bg-gray-50">
    <tr>
        @foreach($tableHeads as $th)
            <th scope="col"
                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">
                <p class="flex items-center justify-between gap-2 font-sans text-sm font-normal leading-none">
                    {{ $th }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                    </svg>
                </p>
            </th>
        @endforeach
    </tr>
    </thead>
    {{ $slot }}
</table>
