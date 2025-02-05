<?php


?>

<div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 mr-3 mb-3 rounded-md lg:col-span-2">
    <div class="relative mx-4 mt-4 overflow-hidden text-slate-700 bg-white rounded-none bg-clip-border ">
        <div class="flex items-center justify-between ">
            <div>
                <h3 class="text-lg font-semibold text-slate-800">Product List</h3>
                <p class="text-slate-500">Review each product before edit or delete!</p>
            </div>
            <div class="flex flex-col gap-2 shrink-0 sm:flex-row">
                <!--                <button-->
                <!--                    class="rounded border border-slate-300 py-2.5 px-3 text-center text-xs font-semibold text-slate-600 transition-all hover:opacity-75 focus:ring focus:ring-slate-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"-->
                <!--                    type="button">-->
                <!--                    View All-->
                <!--                </button>-->
                <!--            add new product             -->
                <a
                    class="flex select-none items-center gap-2 rounded bg-slate-800 py-2.5 px-4 text-xs font-semibold text-white shadow-md shadow-slate-900/10 transition-all hover:bg-slate-700 focus:shadow-none active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    href="./products/add"
                    type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 24" fill="currentColor" aria-hidden="true"
                         stroke-width="2" class="w-4 h-4"> <!-- Plus icon path -->
                        <path d="M2 8v2h6v6h2v-6h6V8h-6V2H8v6H2z"/> <!-- Existing paths -->
                        <path d="M12 3h2l3 9h10l3-9h-16z"></path>
                        <path
                            d="M15 22a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm12 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM15 16h12v-2h-12v2z">
                        </path>
                    </svg>
                    Add product
                </a>
            </div>
        </div>

    </div>
    <div class="px-4">
        <table class="w-full mt-4 text-left table-auto min-w-max">
            <thead>
            <tr>
                <th
                    class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                    <p
                        class="flex items-center justify-between gap-2 font-sans text-sm font-normal leading-none text-slate-500">
                        Product
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
                <th
                    class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                    <p
                        class="flex items-center justify-between gap-2 font-sans text-sm font-normal leading-none text-slate-500">
                        Sell Price / Buy Price
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
                <th
                    class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                    <p
                        class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
                        Stock
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
                <th
                    class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                    <p
                        class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
                        Status
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
                <th
                    class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                    <p
                        class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
                        Added By
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
                <th
                    class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                    <p
                        class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
                        Added-On
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
                <th
                    class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                    <p
                        class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
                        Action
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                    </p>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php for ($i = 0; $i < 20; $i++): ?>
                <tr>
                    <td class="p-4 border-b border-slate-200">
                        <div class="flex items-center gap-3">
                            <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/team-3.jpg"
                                 alt="John Michael"
                                 class="relative inline-block h-9 w-9 !rounded-full object-cover object-center"/>
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold text-slate-700">
                                    Book
                                </p>
                                <p
                                    class="text-sm text-slate-500">
                                    Library
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 border-b border-slate-200">
                        <div class="flex flex-col">
                            <p class="text-sm font-semibold text-slate-700">
                                190
                            </p>
                            <p
                                class="text-sm text-slate-500">
                                150
                            </p>
                        </div>
                    </td>
                    <td class="p-4 border-b border-slate-200">
                        <p class="text-sm text-slate-500">
                            2334
                        </p>
                    </td>
                    <td class="p-4 border-b border-slate-200">
                        <div class="w-max">
                            <div
                                class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-green-900 uppercase rounded-md select-none whitespace-nowrap bg-green-500/20">
                                <span class="">online</span>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 border-b border-slate-200">
                        <p class="text-sm text-slate-500">
                            Najeebullah
                        </p>
                    </td>
                    <td class="p-4 border-b border-slate-200">
                        <p class="text-sm text-slate-500">
                            24/01/01
                        </p>
                    </td>
                    <td class="p-4 border-b border-slate-200">
                        <button
                            class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-slate-900 transition-all hover:bg-slate-900/10 active:bg-slate-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button">
                    <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             aria-hidden="true"
                             class="w-4 h-4">
                        <path
                            d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                        </path>
                        </svg>
                    </span>
                        </button>
                        <button
                            class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-red-900 transition-all hover:bg-slate-900/10 active:bg-slate-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button">
                    <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             aria-hidden="true"
                             class="w-4 h-4">
                        <path
                            d="M3 6l3 18h12l3-18h-18zm18-4h-5.5l-1-2h-7l-1 2h-5.5v2h20v-2z">
                            </path>
                        </svg>
                    </span>
                        </button>
                    </td>
                </tr>
            <?php endfor; ?>
            <!--            <tr>-->
            <!--                <td class="p-4 border-b border-slate-200">-->
            <!--                    <div class="flex items-center gap-3">-->
            <!--                        <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/team-2.jpg"-->
            <!--                             alt="Alexa Liras"-->
            <!--                             class="relative inline-block h-9 w-9 !rounded-full object-cover object-center"/>-->
            <!--                        <div class="flex flex-col">-->
            <!--                            <p class="text-sm font-semibold text-slate-700">-->
            <!--                                Alexa Liras-->
            <!--                            </p>-->
            <!--                            <p-->
            <!--                                class="text-sm text-slate-500">-->
            <!--                                alexa@creative-tim.com-->
            <!--                            </p>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </td>-->
            <!--                <td class="p-4 border-b border-slate-200">-->
            <!--                    <div class="flex flex-col">-->
            <!--                        <p class="text-sm font-semibold text-slate-700">-->
            <!--                            Designer-->
            <!--                        </p>-->
            <!--                        <p-->
            <!--                            class="text-sm text-slate-500">-->
            <!--                            Marketing-->
            <!--                        </p>-->
            <!--                    </div>-->
            <!--                </td>-->
            <!--                <td class="p-4 border-b border-slate-200">-->
            <!--                    <div class="w-max">-->
            <!--                        <div-->
            <!--                            class="relative grid items-center px-2 py-1 font-sans text-xs font-bold uppercase rounded-md select-none whitespace-nowrap bg-slate-100 text-slate-500">-->
            <!--                            <span class="">offline</span>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </td>-->
            <!--                <td class="p-4 border-b border-slate-200">-->
            <!--                    <p class="text-sm text-slate-500">-->
            <!--                        23/04/18-->
            <!--                    </p>-->
            <!--                </td>-->
            <!--                <td class="p-4 border-b border-slate-200">-->
            <!--                    <button-->
            <!--                        class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-slate-900 transition-all hover:bg-slate-900/10 active:bg-slate-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"-->
            <!--                        type="button">-->
            <!--                    <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">-->
            <!--                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"-->
            <!--                             aria-hidden="true"-->
            <!--                             class="w-4 h-4">-->
            <!--                        <path-->
            <!--                            d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">-->
            <!--                        </path>-->
            <!--                        </svg>-->
            <!--                    </span>-->
            <!--                    </button>-->
            <!--                </td>-->
            <!--            </tr>-->
            </tbody>
        </table>
    </div>

</div>

<div>
    <div id="popup-modal" tabindex="-1"
         class="hidden fixed inset-0 z-50 flex items-center justify-center overflow-y-auto overflow-x-hidden w-full h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                        delete this product?</h3>
                    <button data-modal-hide="popup-modal" type="button"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Yes, I'm sure
                    </button>
                    <button data-modal-hide="popup-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        No, cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>