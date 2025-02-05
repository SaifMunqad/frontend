<?php

use App\Main\PageData;

PageData::setPage('Sales');
?>

@extends('layouts.employee.app')
@section('content')

    <div
            class=" mr-3 mb-3 rounded-md lg:col-span-2 dark:bg-gray-900 text-gray-700 dark:text-gray-300 ">
        <div class="relative mx-4 mt-4 overflow-hidden">
            <div class="flex items-center justify-between max-w-7xl mx-auto">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Sales</h3>
                    {{--                    <p class="text-gray-500 dark:text-gray-400">Review each item before edit or delete!</p>--}}
                </div>
                <div class="flex flex-col gap-2 shrink-0 sm:flex-row">
                    <a
                            class="flex select-none items-center gap-2 rounded bg-indigo-600 dark:bg-gray-800 dark:bg-gray-700 py-2.5 px-4 text-xs font-semibold text-white shadow-md hover:bg-gray-700 dark:hover:bg-gray-600 transition-all"
                            href="/store/hr/employee/add"
                            type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"/>
                        </svg>
                        Sell Product
                    </a>
                </div>
            </div>
            <div>
                <div class="w-full pt-12 p-4 max-w-7xl mx-auto">
                    <div class="grid gap-14 md:grid-cols-2 lg:grid-cols-3 lg:gap-5">
                        <a href="/sales/customers"
                           class="rounded-xl bg-white  hover:-translate-y-1 dark:bg-gray-800 shadow-xl transition hover:opacity-85 p-6 my-2 text-center ring-1 dark:ring-gray-600">
                            <div
                                    class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-blue-400 dark:bg-blue-600 shadow-lg ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"
                                     class="size-6">
                                    <path fill-rule="evenodd"
                                          d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
                                          clip-rule="evenodd"/>
                                    <path
                                            d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z"/>
                                </svg>
                            </div>

                            <h1 class="text-darken mb-3 text-md font-medium lg:px-14 dark:text-gray-300">Customers</h1>
                            <p class="px-4 text-gray-500 dark:text-gray-400 text-sm">Add, edit, delete or customize
                                customer.
                            </p>
                        </a>

                        <a href="/sales/orders"
                           class="rounded-xl bg-white  hover:-translate-y-1 dark:bg-gray-800 shadow-xl transition hover:opacity-85 p-6 my-2 text-center ring-1 dark:ring-gray-600">
                            <div
                                    class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-green-400 dark:bg-green-600 shadow-lg ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                     class="h-5 w-5">
                                    <path fill-rule="evenodd"
                                          class="fill-current text-gray-300 "
                                          d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z"
                                          clip-rule="evenodd"/>
                                    <path fill-rule="evenodd"
                                          class="text-gray-600"
                                          d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375Zm9.586 4.594a.75.75 0 0 0-1.172-.938l-2.476 3.096-.908-.907a.75.75 0 0 0-1.06 1.06l1.5 1.5a.75.75 0 0 0 1.116-.062l3-3.75Z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>

                            <h1 class="text-darken mb-3 text-md font-medium lg:px-14 dark:text-gray-300">Sales
                                Orders</h1>
                            <p class="px-4 text-gray-500 dark:text-gray-400 text-sm">Add, edit, delete or customize
                                sales orders
                                form inside the store.
                            </p>
                        </a>

                        <a href="/sales/packages"
                           class="rounded-xl bg-white  hover:-translate-y-1 dark:bg-gray-800 shadow-xl transition hover:opacity-85 p-6 my-2 text-center ring-1 dark:ring-gray-600">
                            <div
                                    class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-yellow-400 dark:bg-yellow-600 shadow-lg ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                     class="size-6">
                                    <path
                                            d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z"/>
                                    <path fill-rule="evenodd"
                                          d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087Zm6.163 3.75A.75.75 0 0 1 10 12h4a.75.75 0 0 1 0 1.5h-4a.75.75 0 0 1-.75-.75Z"
                                          clip-rule="evenodd"/>
                                </svg>

                            </div>

                            <h1 class="text-darken mb-3 text-md font-medium lg:px-14 dark:text-gray-300">Packages</h1>
                            <p class="px-4 text-gray-500 dark:text-gray-400 text-sm">Packages that are going outside the
                                city or
                                country.
                            </p>
                        </a>

                        <a href="/sales/packages"
                           class="rounded-xl bg-white hover:-translate-y-1 dark:bg-gray-800 shadow-xl transition hover:opacity-85 p-6 my-2 text-center ring-1 dark:ring-gray-600">
                            <div
                                    class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-cyan-400 dark:bg-cyan-600 shadow-lg ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                     class="size-6">
                                    <path fill-rule="evenodd"
                                          d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z"
                                          clip-rule="evenodd"/>
                                </svg>


                            </div>

                            <h1 class="text-darken mb-3 text-md font-medium lg:px-14 dark:text-gray-300">Sell
                                Product</h1>
                            <p class="px-4 text-gray-500 dark:text-gray-400 text-sm">Sell product directly without
                                delivery or
                                shipment.
                            </p>
                        </a>

                        <a href="/sales/invoices"
                           class="rounded-xl bg-white  hover:-translate-y-1 dark:bg-gray-800 shadow-xl transition hover:opacity-85 p-6 my-2 text-center ring-1 dark:ring-gray-600">
                            <div
                                    class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-purple-400 dark:bg-purple-600 shadow-lg ">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                     class="size-6">
                                    <path fill-rule="evenodd"
                                          d="M3.75 3.375c0-1.036.84-1.875 1.875-1.875H9a3.75 3.75 0 0 1 3.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 0 1 3.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 0 1-1.875-1.875V3.375Zm7.464 9.442c.459-.573 1.019-.817 1.536-.817.517 0 1.077.244 1.536.817a.75.75 0 1 0 1.171-.937c-.713-.892-1.689-1.38-2.707-1.38-1.018 0-1.994.488-2.707 1.38a4.61 4.61 0 0 0-.705 1.245H8.25a.75.75 0 0 0 0 1.5h.763c-.017.25-.017.5 0 .75H8.25a.75.75 0 0 0 0 1.5h1.088c.17.449.406.87.705 1.245.713.892 1.689 1.38 2.707 1.38 1.018 0 1.994-.488 2.707-1.38a.75.75 0 0 0-1.171-.937c-.459.573-1.019.817-1.536.817-.517 0-1.077-.244-1.536-.817-.078-.098-.15-.2-.215-.308h1.751a.75.75 0 0 0 0-1.5h-2.232a3.965 3.965 0 0 1 0-.75h2.232a.75.75 0 0 0 0-1.5H11c.065-.107.136-.21.214-.308Z"
                                          clip-rule="evenodd"/>
                                    <path
                                            d="M14.25 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 16.5 7.5h-1.875a.375.375 0 0 1-.375-.375V5.25Z"/>
                                </svg>

                            </div>

                            <h1 class="text-darken mb-3 text-md font-medium lg:px-14 dark:text-gray-300">Sales
                                Invoices</h1>
                            <p class="px-4 text-gray-500 dark:text-gray-400 text-sm">An invoice is a request for payment
                                sent by
                                the seller to the buyer. Issued before payment is made.
                            </p>
                        </a>

                        <a href="/sales/receipts"
                           class="rounded-xl bg-white  hover:-translate-y-1 dark:bg-gray-800 shadow-xl transition hover:opacity-85 p-6 my-2 text-center ring-1 dark:ring-gray-600">
                            <div
                                    class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-teal-400 dark:bg-teal-600 shadow-lg">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                     class="size-6">
                                    <path fill-rule="evenodd"
                                          d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 0 0 3 3h15a3 3 0 0 1-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125ZM12 9.75a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H12Zm-.75-2.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5H12a.75.75 0 0 1-.75-.75ZM6 12.75a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5H6Zm-.75 3.75a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75ZM6 6.75a.75.75 0 0 0-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-3A.75.75 0 0 0 9 6.75H6Z"
                                          clip-rule="evenodd"/>
                                    <path
                                            d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 0 1-3 0V6.75Z"/>
                                </svg>

                            </div>
                            <h1 class="text-darken mb-3 text-md font-medium lg:px-14 dark:text-gray-300">Sales
                                Receipts</h1>
                            <p class="px-4 text-gray-500 dark:text-gray-400 text-sm">A receipt is proof of payment given
                                by the
                                seller to the buyer. Issued after payment is made.
                            </p>
                        </a>

                        <a href="/sales/receipts"
                           class="rounded-xl bg-white  hover:-translate-y-1 dark:bg-gray-800 shadow-xl transition hover:opacity-85 p-6 my-2 text-center ring-1 dark:ring-gray-600">
                            <div
                                    class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-gray-400 dark:bg-gray-600 shadow-lg ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                     class="size-6">
                                    <path fill-rule="evenodd"
                                          d="M12 1.5c-1.921 0-3.816.111-5.68.327-1.497.174-2.57 1.46-2.57 2.93V21.75a.75.75 0 0 0 1.029.696l3.471-1.388 3.472 1.388a.75.75 0 0 0 .556 0l3.472-1.388 3.471 1.388a.75.75 0 0 0 1.029-.696V4.757c0-1.47-1.073-2.756-2.57-2.93A49.255 49.255 0 0 0 12 1.5Zm-.97 6.53a.75.75 0 1 0-1.06-1.06L7.72 9.22a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06l-.97-.97h3.065a1.875 1.875 0 0 1 0 3.75H12a.75.75 0 0 0 0 1.5h1.125a3.375 3.375 0 1 0 0-6.75h-3.064l.97-.97Z"
                                          clip-rule="evenodd"/>
                                </svg>


                            </div>
                            <h1 class="text-darken mb-3 text-md font-medium lg:px-14 dark:text-gray-300">Sales Return
                            </h1>
                            <p class="px-4 text-gray-500 dark:text-gray-400 text-sm">Return Request, Refund/Replacement,
                                Wrong
                                Product, Inspection and more...</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
