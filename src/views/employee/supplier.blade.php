@extends('layouts.employee.app')
@section('content')
    <div>
        <div class="relative mx-4 mt-4 overflow-hidden">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Supplier List</h3>
                    <p class="text-gray-500 dark:text-gray-400">Review each supplier before edit or delete!</p>
                </div>
                <div class="flex flex-col gap-2 shrink-0 sm:flex-row">
                    <a
                        class="flex select-none items-center gap-2 rounded bg-gray-800 dark:bg-gray-700 py-2.5 px-4 text-xs font-semibold text-white shadow-md hover:bg-gray-700 dark:hover:bg-gray-600 transition-all"
                        href="./product/add"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 24" fill="currentColor" aria-hidden="true"
                             stroke-width="2" class="w-4 h-4">
                            <path d="M12 10v4h4v4h2v-4h4v-4h-4V6h-2v4h-4z"></path>

                        </svg>
                        Add Brand
                    </a>
                </div>
            </div>
        </div>
        <!-- component -->
        <section class="antialiased text-gray-600 h-screen pt-4 px-4 dark:text-gray-200 dark:bg-gray-900">
            <div class="flex flex-col justify-center">
                <!-- Table -->
                <div class="w-full mx-auto bg-white shadow-lg rounded-sm border border-gray-200 dark:bg-gray-800 dark:border-gray-700">

                    <div class="p-3">
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th class="p-2 whitespace-nowrap overflow-hidden text-ellipsis">
                                        <div class="font-semibold text-left truncate">Name</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap overflow-hidden text-ellipsis">
                                        <div class="font-semibold text-left truncate">Supplier</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap overflow-hidden text-ellipsis">
                                        <div class="font-semibold text-center truncate">Country</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap overflow-hidden text-ellipsis">
                                        <div class="font-semibold text-center truncate">Action</div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-gray-100 dark:divide-gray-700">
                                <tr>
                                    <td class="p-2 whitespace-nowrap overflow-hidden text-ellipsis">
                                        <div class="flex items-center truncate">
                                            <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg" width="40" height="40" alt="Alex Shatov"></div>
                                            <div class="font-medium text-gray-800 dark:text-gray-200">Alex Shatov</div>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap overflow-hidden text-ellipsis">
                                        <div class="text-left text-gray-700 dark:text-gray-300 truncate">alexshatov@gmail.com</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap overflow-hidden text-ellipsis">
                                        <div class="text-lg text-center text-gray-700 dark:text-gray-300 truncate">🇺🇸</div>
                                    </td>
                                    <td class="p-4 text-center border-slate-200 dark:border-gray-600 overflow-hidden text-ellipsis">
                                        <button class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-slate-900 transition-all hover:bg-slate-900/10 active:bg-slate-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none dark:text-gray-100 dark:hover:bg-gray-700 dark:active:bg-gray-600" type="button">
                    <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-4 h-4">
                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
                        </svg>
                    </span>
                                        </button>
                                        <button class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-red-900 transition-all hover:bg-slate-900/10 active:bg-slate-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none dark:text-red-500 dark:hover:bg-gray-700 dark:active:bg-gray-600" type="button">
                    <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-4 h-4">
                            <path d="M3 6l3 18h12l3-18h-18zm18-4h-5.5l-1-2h-7l-1 2h-5.5v2h20v-2z"></path>
                        </svg>
                    </span>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
