<?php

namespace views;

$page = 'product';


?>

    <!DOCTYPE html>
    <html lang="en">
<head dir="ltr">
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://cdn.tailwindcss.com"></script>

    <!--    <link rel="stylesheet" href="./assets/css/navbar.css">-->
    <link rel="stylesheet" href="./assets/css/product/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.5.0/remixicon.css">
    <style> .container {
            position: relative;
            width: 100%;
        }

    </style>
    <title>Shop</title>
</head>
<body>
<?php //require "./includes/header/nav.php";
require './includes/searchbar/searchbar.include.php';
?>
<main class="p-8">
    <div class="bg-white border border-gray-100 shadow-lg shadow-black/5 p-6 rounded-md lg:col-span-2">
        <section class="mx-auto max-w-screen-xl px-4 py-2 sm:px-6 sm:py-6 lg:px-8">
            <header>
                <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Discover Categories</h2>

                <p class="mt-4 max-w-md text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
                    dicta incidunt est ipsam, officia dolor fugit natus?
                </p>
            </header>
            <div class="overflow-x-auto py-3">
                <div class="flex gap-4 w-full max-w-screen-lg">
                    <div class="card flex-shrink-0 w-1/1 lg:w-1/3 md:w-1/2">
                        <article
                            class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg max-w-[250px] sm:max-w-none">
                            <img
                                alt=""
                                src="https://images.unsplash.com/photo-1661956602116-aa6865609028?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80"
                                class="absolute inset-0 h-full w-full object-cover"
                            />

                            <div
                                class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
                                <div class="p-4 sm:p-6">
                                    <!--                        <time datetime="2022-10-10" class="block text-xs text-white/90"> 10th Oct 2022</time>-->

                                    <a href="#">
                                        <h3 class="mt-0.5 text-lg text-white">Kitchenware</h3>
                                    </a>

                                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores,
                                        possimus
                                        pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet
                                        corporis
                                        quidem, mollitia itaque minus soluta, voluptates neque explicabo tempora nisi
                                        culpa
                                        eius
                                        atque dignissimos. Molestias explicabo corporis voluptatem?
                                    </p>
                                    <a href="#"
                                       class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-white">
                                        Find out more

                                        <span aria-hidden="true"
                                              class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
        &rarr;
      </span>
                                    </a>
                                </div>

                            </div>

                        </article>
                    </div>
                    <div class="card flex-shrink-0 w-1/1 lg:w-1/3 md:w-1/2">
                        <article
                            class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg max-w-[250px] sm:max-w-none">
                            <img
                                alt=""
                                src="https://images.unsplash.com/photo-1661956602116-aa6865609028?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80"
                                class="absolute inset-0 h-full w-full object-cover"
                            />

                            <div
                                class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
                                <div class="p-4 sm:p-6">
                                    <!--                        <time datetime="2022-10-10" class="block text-xs text-white/90"> 10th Oct 2022</time>-->

                                    <a href="#">
                                        <h3 class="mt-0.5 text-lg text-white">Kitchenware</h3>
                                    </a>

                                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores,
                                        possimus
                                        pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet
                                        corporis
                                        quidem, mollitia itaque minus soluta, voluptates neque explicabo tempora nisi
                                        culpa
                                        eius
                                        atque dignissimos. Molestias explicabo corporis voluptatem?
                                    </p>
                                    <a href="#"
                                       class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-white">
                                        Find out more

                                        <span aria-hidden="true"
                                              class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
        &rarr;
      </span>
                                    </a>
                                </div>

                            </div>

                        </article>
                    </div>
                    <div class="card flex-shrink-0 w-1/1 lg:w-1/3 md:w-1/2">
                        <article
                            class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg max-w-[250px] sm:max-w-none">
                            <img
                                alt=""
                                src="https://images.unsplash.com/photo-1661956602116-aa6865609028?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80"
                                class="absolute inset-0 h-full w-full object-cover"
                            />

                            <div
                                class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
                                <div class="p-4 sm:p-6">
                                    <!--                        <time datetime="2022-10-10" class="block text-xs text-white/90"> 10th Oct 2022</time>-->

                                    <a href="#">
                                        <h3 class="mt-0.5 text-lg text-white">Kitchenware</h3>
                                    </a>

                                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores,
                                        possimus
                                        pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet
                                        corporis
                                        quidem, mollitia itaque minus soluta, voluptates neque explicabo tempora nisi
                                        culpa
                                        eius
                                        atque dignissimos. Molestias explicabo corporis voluptatem?
                                    </p>
                                    <a href="#"
                                       class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-white">
                                        Find out more

                                        <span aria-hidden="true"
                                              class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
        &rarr;
      </span>
                                    </a>
                                </div>

                            </div>

                        </article>
                    </div>
                    <div class="card flex-shrink-0 w-1/1 lg:w-1/3 md:w-1/2">
                        <article
                            class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg max-w-[250px] sm:max-w-none">
                            <img
                                alt=""
                                src="https://images.unsplash.com/photo-1661956602116-aa6865609028?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80"
                                class="absolute inset-0 h-full w-full object-cover"
                            />

                            <div
                                class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
                                <div class="p-4 sm:p-6">
                                    <!--                        <time datetime="2022-10-10" class="block text-xs text-white/90"> 10th Oct 2022</time>-->

                                    <a href="#">
                                        <h3 class="mt-0.5 text-lg text-white">Kitchenware</h3>
                                    </a>

                                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores,
                                        possimus
                                        pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet
                                        corporis
                                        quidem, mollitia itaque minus soluta, voluptates neque explicabo tempora nisi
                                        culpa
                                        eius
                                        atque dignissimos. Molestias explicabo corporis voluptatem?
                                    </p>
                                    <a href="#"
                                       class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-white">
                                        Find out more

                                        <span aria-hidden="true"
                                              class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
        &rarr;
      </span>
                                    </a>
                                </div>

                            </div>

                        </article>
                    </div>
                    <div class="card flex-shrink-0 w-1/1 lg:w-1/3 md:w-1/2">
                        <article
                            class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg max-w-[250px] sm:max-w-none">
                            <img
                                alt=""
                                src="https://images.unsplash.com/photo-1661956602116-aa6865609028?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80"
                                class="absolute inset-0 h-full w-full object-cover"
                            />

                            <div
                                class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
                                <div class="p-4 sm:p-6">
                                    <!--                        <time datetime="2022-10-10" class="block text-xs text-white/90"> 10th Oct 2022</time>-->

                                    <a href="#">
                                        <h3 class="mt-0.5 text-lg text-white">Kitchenware</h3>
                                    </a>

                                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores,
                                        possimus
                                        pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet
                                        corporis
                                        quidem, mollitia itaque minus soluta, voluptates neque explicabo tempora nisi
                                        culpa
                                        eius
                                        atque dignissimos. Molestias explicabo corporis voluptatem?
                                    </p>
                                    <a href="#"
                                       class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-white">
                                        Find out more

                                        <span aria-hidden="true"
                                              class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
        &rarr;
      </span>
                                    </a>
                                </div>

                            </div>

                        </article>
                    </div>
                    <div class="card flex-shrink-0 w-1/1 lg:w-1/3 md:w-1/2">
                        <article
                            class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg max-w-[250px] sm:max-w-none">
                            <img
                                alt=""
                                src="https://images.unsplash.com/photo-1661956602116-aa6865609028?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80"
                                class="absolute inset-0 h-full w-full object-cover"
                            />

                            <div
                                class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
                                <div class="p-4 sm:p-6">
                                    <!--                        <time datetime="2022-10-10" class="block text-xs text-white/90"> 10th Oct 2022</time>-->

                                    <a href="#">
                                        <h3 class="mt-0.5 text-lg text-white">Kitchenware</h3>
                                    </a>

                                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores,
                                        possimus
                                        pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet
                                        corporis
                                        quidem, mollitia itaque minus soluta, voluptates neque explicabo tempora nisi
                                        culpa
                                        eius
                                        atque dignissimos. Molestias explicabo corporis voluptatem?
                                    </p>
                                    <a href="#"
                                       class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-white">
                                        Find out more

                                        <span aria-hidden="true"
                                              class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
        &rarr;
      </span>
                                    </a>
                                </div>

                            </div>

                        </article>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <!--
Heads up! 👋

This component comes with some `rtl` classes. Please remove them if they are not needed in your project.

Plugins:
- @tailwindcss/forms
-->

    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-2 sm:px-6 sm:py-6 lg:px-8">
            <header>
                <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Product Collection</h2>

                <p class="mt-4 max-w-md text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
                    dicta incidunt est ipsam, officia dolor fugit natus?
                </p>
            </header>

            <div class="mt-8 block lg:hidden">
                <button
                    class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600"
                >
                    <span class="text-sm font-medium"> Filters & Sorting </span>

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-4 rtl:rotate-180"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                    </svg>
                </button>
            </div>

            <div class="mt-4 lg:mt-8 lg:grid lg:grid-cols-4 lg:items-start lg:gap-8">
                <div class="hidden space-y-4 lg:block">
                    <div>
                        <label for="SortBy" class="block text-xs font-medium text-gray-700"> Sort By </label>

                        <select id="SortBy" class="mt-1 rounded border-gray-300 text-sm">
                            <option>Sort By</option>
                            <option value="Title, DESC">Title, DESC</option>
                            <option value="Title, ASC">Title, ASC</option>
                            <option value="Price, DESC">Price, DESC</option>
                            <option value="Price, ASC">Price, ASC</option>
                        </select>
                    </div>

                    <div>
                        <p class="block text-xs font-medium text-gray-700">Filters</p>

                        <div class="mt-1 space-y-2">
                            <details
                                class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden"
                            >
                                <summary
                                    class="flex cursor-pointer items-center justify-between gap-2 p-4 text-gray-900 transition"
                                >
                                    <span class="text-sm font-medium"> Availability </span>

                                    <span class="transition group-open:-rotate-180">
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="size-4"
                  >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                    />
                  </svg>
                </span>
                                </summary>

                                <div class="border-t border-gray-200 bg-white">
                                    <header class="flex items-center justify-between p-4">
                                        <span class="text-sm text-gray-700"> 0 Selected </span>

                                        <button type="button"
                                                class="text-sm text-gray-900 underline underline-offset-4">
                                            Reset
                                        </button>
                                    </header>

                                    <ul class="space-y-1 border-t border-gray-200 p-4">
                                        <li>
                                            <label for="FilterInStock" class="inline-flex items-center gap-2">
                                                <input
                                                    type="checkbox"
                                                    id="FilterInStock"
                                                    class="size-5 rounded border-gray-300"
                                                />

                                                <span
                                                    class="text-sm font-medium text-gray-700"> In Stock (5+) </span>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="FilterPreOrder" class="inline-flex items-center gap-2">
                                                <input
                                                    type="checkbox"
                                                    id="FilterPreOrder"
                                                    class="size-5 rounded border-gray-300"
                                                />

                                                <span
                                                    class="text-sm font-medium text-gray-700"> Pre Order (3+) </span>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                                                <input
                                                    type="checkbox"
                                                    id="FilterOutOfStock"
                                                    class="size-5 rounded border-gray-300"
                                                />

                                                <span
                                                    class="text-sm font-medium text-gray-700"> Out of Stock (10+) </span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </details>

                            <details
                                class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden"
                            >
                                <summary
                                    class="flex cursor-pointer items-center justify-between gap-2 p-4 text-gray-900 transition"
                                >
                                    <span class="text-sm font-medium"> Price </span>

                                    <span class="transition group-open:-rotate-180">
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="size-4"
                  >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                    />
                  </svg>
                </span>
                                </summary>

                                <div class="border-t border-gray-200 bg-white">
                                    <header class="flex items-center justify-between p-4">
                                        <span class="text-sm text-gray-700"> The highest price is $600 </span>

                                        <button type="button"
                                                class="text-sm text-gray-900 underline underline-offset-4">
                                            Reset
                                        </button>
                                    </header>

                                    <div class="border-t border-gray-200 p-4">
                                        <div class="flex justify-between gap-4">
                                            <label for="FilterPriceFrom" class="flex items-center gap-2">
                                                <span class="text-sm text-gray-600">$</span>

                                                <input
                                                    type="number"
                                                    id="FilterPriceFrom"
                                                    placeholder="From"
                                                    class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                                                />
                                            </label>

                                            <label for="FilterPriceTo" class="flex items-center gap-2">
                                                <span class="text-sm text-gray-600">$</span>

                                                <input
                                                    type="number"
                                                    id="FilterPriceTo"
                                                    placeholder="To"
                                                    class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                                                />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </details>

                            <details
                                class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden"
                            >
                                <summary
                                    class="flex cursor-pointer items-center justify-between gap-2 p-4 text-gray-900 transition"
                                >
                                    <span class="text-sm font-medium"> Colors </span>

                                    <span class="transition group-open:-rotate-180">
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="size-4"
                  >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                    />
                  </svg>
                </span>
                                </summary>

                                <div class="border-t border-gray-200 bg-white">
                                    <header class="flex items-center justify-between p-4">
                                        <span class="text-sm text-gray-700"> 0 Selected </span>

                                        <button type="button"
                                                class="text-sm text-gray-900 underline underline-offset-4">
                                            Reset
                                        </button>
                                    </header>

                                    <ul class="space-y-1 border-t border-gray-200 p-4">
                                        <li>
                                            <label for="FilterRed" class="inline-flex items-center gap-2">
                                                <input
                                                    type="checkbox"
                                                    id="FilterRed"
                                                    class="size-5 rounded border-gray-300"
                                                />

                                                <span class="text-sm font-medium text-gray-700"> Red </span>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="FilterBlue" class="inline-flex items-center gap-2">
                                                <input
                                                    type="checkbox"
                                                    id="FilterBlue"
                                                    class="size-5 rounded border-gray-300"
                                                />

                                                <span class="text-sm font-medium text-gray-700"> Blue </span>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="FilterGreen" class="inline-flex items-center gap-2">
                                                <input
                                                    type="checkbox"
                                                    id="FilterGreen"
                                                    class="size-5 rounded border-gray-300"
                                                />

                                                <span class="text-sm font-medium text-gray-700"> Green </span>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="FilterOrange" class="inline-flex items-center gap-2">
                                                <input
                                                    type="checkbox"
                                                    id="FilterOrange"
                                                    class="size-5 rounded border-gray-300"
                                                />

                                                <span class="text-sm font-medium text-gray-700"> Orange </span>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="FilterPurple" class="inline-flex items-center gap-2">
                                                <input
                                                    type="checkbox"
                                                    id="FilterPurple"
                                                    class="size-5 rounded border-gray-300"
                                                />

                                                <span class="text-sm font-medium text-gray-700"> Purple </span>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="FilterTeal" class="inline-flex items-center gap-2">
                                                <input
                                                    type="checkbox"
                                                    id="FilterTeal"
                                                    class="size-5 rounded border-gray-300"
                                                />

                                                <span class="text-sm font-medium text-gray-700"> Teal </span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </details>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3">
                    <ul class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        <li>
                            <!--
Heads up! 👋

This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

                            <article class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm">
                                <img
                                    alt=""
                                    src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                    class="h-56 w-full object-cover"
                                />

                                <div class="p-4 sm:p-6">
                                    <a href="#">
                                        <h3 class="text-lg font-medium text-gray-900">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        </h3>
                                    </a>

                                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
                                        dolores, possimus
                                        pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum
                                        eveniet corporis quidem,
                                        mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa
                                        eius atque
                                        dignissimos. Molestias explicabo corporis voluptatem?
                                    </p>

                                    <a href="#"
                                       class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
                                        Find out more

                                        <span aria-hidden="true"
                                              class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
        &rarr;
      </span>
                                    </a>
                                </div>
                            </article>
                        </li>

                        <li>
                            <!--
                              Heads up! 👋

                              This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
                            -->

                            <article class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm">
                                <img
                                    alt=""
                                    src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                    class="h-56 w-full object-cover"
                                />

                                <div class="p-4 sm:p-6">
                                    <a href="#">
                                        <h3 class="text-lg font-medium text-gray-900">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        </h3>
                                    </a>

                                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
                                        dolores, possimus
                                        pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum
                                        eveniet corporis quidem,
                                        mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa
                                        eius atque
                                        dignissimos. Molestias explicabo corporis voluptatem?
                                    </p>

                                    <a href="#"
                                       class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
                                        Find out more

                                        <span aria-hidden="true"
                                              class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
        &rarr;
      </span>
                                    </a>
                                </div>
                            </article>
                        </li>

                        <li>
                            <!--
                              Heads up! 👋

                              This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
                            -->

                            <article class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm">
                                <img
                                    alt=""
                                    src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                    class="h-56 w-full object-cover"
                                />

                                <div class="p-4 sm:p-6">
                                    <a href="#">
                                        <h3 class="text-lg font-medium text-gray-900">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        </h3>
                                    </a>

                                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
                                        dolores, possimus
                                        pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum
                                        eveniet corporis quidem,
                                        mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa
                                        eius atque
                                        dignissimos. Molestias explicabo corporis voluptatem?
                                    </p>

                                    <a href="#"
                                       class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
                                        Find out more

                                        <span aria-hidden="true"
                                              class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
        &rarr;
      </span>
                                    </a>
                                </div>
                            </article>
                        </li>
                        <li>
                            <!--
Heads up! 👋

This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

                            <article class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm">
                                <img
                                    alt=""
                                    src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                    class="h-56 w-full object-cover"
                                />

                                <div class="p-4 sm:p-6">
                                    <a href="#">
                                        <h3 class="text-lg font-medium text-gray-900">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        </h3>
                                    </a>

                                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
                                        dolores, possimus
                                        pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum
                                        eveniet corporis quidem,
                                        mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa
                                        eius atque
                                        dignissimos. Molestias explicabo corporis voluptatem?
                                    </p>

                                    <a href="#"
                                       class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
                                        Find out more

                                        <span aria-hidden="true"
                                              class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
        &rarr;
      </span>
                                    </a>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div>
            <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-2">
                <div class="flex justify-between mb-4 items-start">
                    <div class="font-medium">User activities</div>
                    <div class="dropdown">
                        <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i
                                class="ri-more-fill"></i></button>
                        <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                            <li>
                                <a href="#"
                                   class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <table class="w-full min-w-[460px] border-collapse">
                    <thead class="bg-gray-100 rounded-sm divide-y divide-gray-200">
                    <tr>
                        <th class="text-left">Photo</th>
                        <th class="text-left">Full Name</th>
                        <th class="text-left">Email</th>
                        <th class="text-left">Phone</th>
                        <th class="text-left">Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>

                    <tbody class="">
                    <tr class="">
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                 src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"
                                 alt="">
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">Rabiul Islam</td>
                        <td class="py-2 px-4 border-b border-b-gray-50">rir.cse.71@gmail.com</td>
                        <td class="py-2 px-4 border-b border-b-gray-50">+8801750009149</td>
                        <td class="py-2 px-4 border-b border-b-gray-50"><span
                                class="bg-green-50 text-green-700 px-3 py-1 ring-1 ring-green-200 text-xs rounded-md">Active</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <div class="flex justify-between gap-1">
                                <i title="Edit"
                                   class="fa-solid fa-pencil p-1 text-green-500 rounded-full cursor-pointer"></i>
                                <i title="View"
                                   class="fa-solid fa-eye p-1 text-violet-500 rounded-full cursor-pointer"></i>
                                <i title="Delete"
                                   class="fa-solid fa-trash p-1 text-red-500 rounded-full cursor-pointer"></i>
                            </div>
                        </td>
                    </tr>

                    <tr class="mb-4">
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                 src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt="">
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">Rahim Mia</td>
                        <td class="py-2 px-4 border-b border-b-gray-50">rahim@gmail.com</td>
                        <td class="py-2 px-4 border-b border-b-gray-50">0000000000000</td>
                        <td class="py-2 px-4 border-b border-b-gray-50"><span
                                class="bg-red-50 text-red-700 px-3 py-1 ring-1 ring-red-200 text-xs rounded-md">Deleted</span>
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <div class="flex justify-between gap-2">
                                <i title="Edit"
                                   class="fa-solid fa-pencil p-1 text-green-500 rounded-full cursor-pointer"></i>
                                <i title="View"
                                   class="fa-solid fa-eye p-1 text-violet-500 rounded-full cursor-pointer"></i>
                                <i title="Delete"
                                   class="fa-solid fa-trash p-1 text-red-500 rounded-full cursor-pointer"></i>
                            </div>
                        </td>
                    </tr>

                    <tr class="mb-2">
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                 src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt="">
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">Kuddus Ali</td>
                        <td class="py-2 px-4 border-b border-b-gray-50">kuddus@gmail.com</td>
                        <td class="py-2 px-4 border-b border-b-gray-50">+1111111111111111</td>
                        <td class="py-2 px-4 border-b border-b-gray-50"><span
                                class="bg-yellow-50 text-yellow-700 px-3 py-1 ring-1 ring-yellow-200 text-xs rounded-md">In
                                        Active</span></td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <div class="flex justify-between gap-2">
                                <i title="Edit"
                                   class="fa-solid fa-pencil p-1 text-green-500 rounded-full cursor-pointer"></i>
                                <i title="View"
                                   class="fa-solid fa-eye p-1 text-violet-500 rounded-full cursor-pointer"></i>
                                <i title="Delete"
                                   class="fa-solid fa-trash p-1 text-red-500 rounded-full cursor-pointer"></i>
                            </div>
                        </td>
                    </tr>

                    <tr class="mb-2">
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                 src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt="">
                        </td>
                        <td class="py-2 px-4 border-b border-b-gray-50">Taheri</td>
                        <td class="py-2 px-4 border-b border-b-gray-50">taheri@gmail.com</td>
                        <td class="py-2 px-4 border-b border-b-gray-50">+67676767676767</td>
                        <td class="py-2 px-4 border-b border-b-gray-50"><span
                                class="bg-yellow-50 text-yellow-700 px-3 py-1 ring-2 ring-yellow-200 text-xs rounded-md">In
                                        Active</span></td>
                        <td class="py-2 px-4 border-b border-b-gray-50">
                            <div class="flex justify-between gap-1">
                                <i title="Edit"
                                   class="ri-edit-line p-1 text-green-500 rounded-full cursor-pointer"></i>
                                <i title="View"
                                   class="ri-eye-line p-1 text-violet-500 rounded-full cursor-pointer"></i>
                                <i title="Delete"
                                   class="ri-delete-bin-line p-1 text-red-500 rounded-full cursor-pointer"></i>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
</main>

</body>
<?php
