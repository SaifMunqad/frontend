<td class="px-3 py-2 whitespace-normal overflow-auto">
    <div class="flex items-center gap-3">

        <img class="relative inline-block size-9 !rounded-full object-cover object-center"
             src="{{ $photoLink }}"
             alt="{{ $dataTop }}"
        />

        <div class="flex flex-col">
            <p class="text-sm capitalize font-semibold text-slate-700 dark:text-gray-100">
                {{ $dataTop }}
            </p>
            <p class="text-sm capitalize text-slate-500 dark:text-gray-300">
                {{ $dataButtom }}
            </p>
        </div>
    </div>
</td>
