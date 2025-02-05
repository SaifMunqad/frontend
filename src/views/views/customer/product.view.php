<?php
namespace views;

use controllers\GlobalMethods;

$page = 'product';


?>

<!DOCTYPE html>
<html lang="en">
<head dir="ltr">
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link href="<?= GlobalMethods::ROOT() ?>/assets/src/output.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.5.0/remixicon.css">
    <title>Shop</title>
</head>
<body>
<?php
require "./includes/header/nav.php";
?>
<main class="mx-auto max-w-screen-xl sm:pt-0 md:pt-8 ">
    <!--    background gradient     -->
    <div class="fixed inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
         aria-hidden="true">
        <div
            class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <!--    end of background   -->


    <!--    end of background   -->
    <div class="bg-white border border-gray-100 shadow-xl rounded-md lg:col-span-2 py-6">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="md:flex-1 px-4">
                    <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                        <img class="w-full h-full object-cover"
                             src="https://cdn.pixabay.com/photo/2020/05/22/17/53/mockup-5206355_960_720.jpg"
                             alt="Product Image">
                    </div>
                    <div class="flex -mx-2 mb-4">
                        <div class="w-1/2 px-2">
                            <button
                                class="w-full bg-gray-100 dark:bg-gray-600 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800 dark:hover:bg-gray-700">
                                Add to Cart
                            </button>
                        </div>
                        <div class="w-1/2 px-2">
                            <button
                                class="w-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white py-2 px-4 rounded-full font-bold hover:bg-gray-300 dark:hover:bg-gray-600">
                                Add to Wishlist
                            </button>
                        </div>
                    </div>
                </div>
                <div class="md:flex-1 px-4">
                    <h2 class="text-2xl font-bold text-black dark:text-white mb-2">Product Name</h2>
                    <p class="text-gray-600 text-gray-900 text-sm mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed
                        ante justo. Integer euismod libero id mauris malesuada tincidunt.
                    </p>
                    <div class="flex mb-4">
                        <div class="mr-4">
                            <span class="font-bold text-gray-900">Price:</span>
                            <span class="text-gray-900">$29.99</span>
                        </div>
                        <div>
                            <span class="font-bold text-gray-700 dark:text-gray-300">Availability:</span>
                            <span class="text-gray-600 dark:text-gray-300">In Stock</span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <span class="font-bold text-gray-900">Select Color:</span>
                        <div class="flex items-center mt-2">
                            <button class="w-6 h-6 rounded-full bg-gray-800 dark:bg-gray-200 mr-2"></button>
                            <button class="w-6 h-6 rounded-full bg-red-500 dark:bg-red-700 mr-2"></button>
                            <button class="w-6 h-6 rounded-full bg-blue-500 dark:bg-blue-700 mr-2"></button>
                            <button class="w-6 h-6 rounded-full bg-yellow-500 dark:bg-yellow-700 mr-2"></button>
                        </div>
                    </div>
                    <div class="mb-4">
                        <span class="font-bold text-gray-900">Select Size:</span>
                        <div class="flex items-center mt-2">
                            <button
                                class="bg-gray-300 text-gray-900  py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">
                                S
                            </button>
                            <button
                                class="bg-gray-300 text-gray-900 py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">
                                M
                            </button>
                            <button
                                class="bg-gray-300 text-gray-900 py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">
                                L
                            </button>
                            <button
                                class="bg-gray-300 text-gray-900 py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">
                                XL
                            </button>
                            <button
                                class="bg-gray-300 text-gray-900 py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">
                                XXL
                            </button>
                        </div>
                    </div>
                    <div>
                        <span class="font-bold text-gray-900">Product Description:</span>
                        <p class="text-gray-900 text-sm mt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla
                            ut
                            lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit.
                            Quisque
                            ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia,
                            non
                            sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi
                            consectetur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    end of background   -->


    <!--    product section     -->
    <div class="bg-white border border-gray-100 shadow-xl rounded-md lg:col-span-2 py-6">
        <div class="container mx-auto pt-10">
            <div class="md:flex md:items-center">
                <div class="w-full h-64 md:w-1/2 lg:h-96">
                    <img class=" h-full w-full rounded-md object-cover max-w-lg mx-auto"
                         src="https://images.unsplash.com/photo-1578262825743-a4e402caab76?ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80"
                         alt="Nike Air">
                </div>
                <div class="w-full max-w-lg mx-auto mt-5 md:ml-8 md:mt-0 md:w-1/2">
                    <h3 class="text-gray-700 uppercase text-lg">Nike Air</h3>
                    <span class="text-gray-500 mt-3">$125</span>
                    <hr class="my-3">
                    <div class="mt-2">
                        <label class="text-gray-700 text-sm" for="count">Count:</label>
                        <div class="flex items-center mt-1">
                            <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </button>
                            <span class="text-gray-700 text-lg mx-2">20</span>
                            <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="text-gray-700 text-sm" for="count">Color:</label>
                        <div class="flex items-center mt-1">
                            <button
                                class="h-5 w-5 rounded-full bg-blue-600 border-2 border-blue-200 mr-2 focus:outline-none"></button>
                            <button class="h-5 w-5 rounded-full bg-teal-600 mr-2 focus:outline-none"></button>
                            <button class="h-5 w-5 rounded-full bg-pink-600 mr-2 focus:outline-none"></button>
                        </div>
                    </div>
                    <div class="flex items-center mt-6">
                        <button
                            class="px-8 py-2 bg-indigo-600 text-white text-sm font-medium rounded hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500">
                            Order Now
                        </button>
                        <button
                            class="mx-2 text-gray-600 border rounded-md p-2 hover:bg-gray-200 focus:outline-none">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!--            menu-bar            -->
            <div class="pt-8 flex justify-center">
                <!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

                <div class="sm:hidden">
                    <label for="Tab" class="sr-only">Tab</label>

                    <select id="Tab" class="w-full rounded-md border-gray-200">
                        <option>Settings</option>
                        <option>Messages</option>
                        <option>Archive</option>
                        <option select>Notifications</option>
                    </select>
                </div>

                <div class="hidden sm:block">
                    <div class="border-b border-gray-200">
                        <nav class="-mb-px flex gap-6" aria-label="Tabs">
                            <a
                                href="#"
                                class="inline-flex shrink-0 items-center gap-2 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="size-5"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z"
                                    />
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                    />
                                </svg>

                                Settings
                            </a>

                            <a
                                href="#"
                                class="inline-flex shrink-0 items-center gap-2 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="size-5"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z"
                                    />
                                </svg>

                                Messages
                            </a>

                            <a
                                href="#"
                                class="inline-flex shrink-0 items-center gap-2 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="size-5"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"
                                    />
                                </svg>

                                Archive
                            </a>

                            <a
                                href="#"
                                class="inline-flex shrink-0 items-center gap-2 border-b-2 border-sky-500 px-1 pb-4 text-sm font-medium text-sky-600"
                                aria-current="page"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="size-5"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5"
                                    />
                                </svg>

                                Notifications
                            </a>
                        </nav>
                    </div>
                </div>
            </div>


            <!--                Product details section             -->
            <div class="p-6 mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
                        <div class="container flow-root">
                            <dl class="-my-3 divide-y divide-gray-100 text-sm">
                                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                    <dt class="font-medium text-gray-900">Title</dt>
                                    <dd class="text-gray-700 sm:col-span-2">Product Title</dd>
                                </div>

                                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                    <dt class="font-medium text-gray-900">Name</dt>
                                    <dd class="text-gray-700 sm:col-span-2">John Frusciante</dd>
                                </div>

                                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                    <dt class="font-medium text-gray-900">Occupation</dt>
                                    <dd class="text-gray-700 sm:col-span-2">Guitarist</dd>
                                </div>

                                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                    <dt class="font-medium text-gray-900">Price</dt>
                                    <dd class="text-gray-700 sm:col-span-2">$1,000,000+</dd>
                                </div>

                                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                    <dt class="font-medium text-gray-900">Bio</dt>
                                    <dd class="text-gray-700 sm:col-span-2">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et facilis debitis
                                        explicabo
                                        doloremque impedit nesciunt dolorem facere, dolor quasi veritatis quia fugit
                                        aperiam
                                        aspernatur neque molestiae labore aliquam soluta architecto?
                                    </dd>
                                </div>

                            </dl>
                        </div>

                    </div>
                    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
                        <div class="container flow-root">
                            <dl class="-my-3 divide-y divide-gray-100 text-sm">
                                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                    <dt class="font-medium text-gray-900">Title</dt>
                                    <dd class="text-gray-700 sm:col-span-2">Product Title</dd>
                                </div>

                                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                    <dt class="font-medium text-gray-900">Name</dt>
                                    <dd class="text-gray-700 sm:col-span-2">John Frusciante</dd>
                                </div>

                                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                    <dt class="font-medium text-gray-900">Occupation</dt>
                                    <dd class="text-gray-700 sm:col-span-2">Guitarist</dd>
                                </div>

                                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                    <dt class="font-medium text-gray-900">Price</dt>
                                    <dd class="text-gray-700 sm:col-span-2">$1,000,000+</dd>
                                </div>

                                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                    <dt class="font-medium text-gray-900">Bio</dt>
                                    <dd class="text-gray-700 sm:col-span-2">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et facilis debitis
                                        explicabo
                                        doloremque impedit nesciunt dolorem facere, dolor quasi veritatis quia fugit
                                        aperiam
                                        aspernatur neque molestiae labore aliquam soluta architecto?
                                    </dd>
                                </div>

                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--            End of Product          -->


    <!--    Review section     -->
    <section class="bg-white sm:mt-0 md:mt-8">

        <div class="container mx-auto px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
            <h2 class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                Read trusted reviews from our customers
            </h2>

            <div class="mt-8 grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-8">
                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                    <div class="flex items-center gap-4">
                        <img
                            alt=""
                            src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                            class="size-14 rounded-full object-cover"
                        />

                        <div>
                            <div class="flex justify-center gap-0.5 text-green-500">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                            </div>

                            <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                        </div>
                    </div>

                    <p class="mt-4 text-gray-700">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum
                        incidunt,
                        a
                        consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius
                        accusamus
                        error officiis atque voluptates magnam!
                    </p>
                </blockquote>

                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                    <div class="flex items-center gap-4">
                        <img
                            alt=""
                            src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                            class="size-14 rounded-full object-cover"
                        />

                        <div>
                            <div class="flex justify-center gap-0.5 text-green-500">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                            </div>

                            <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                        </div>
                    </div>

                    <p class="mt-4 text-gray-700">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum
                        incidunt,
                        a
                        consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius
                        accusamus
                        error officiis atque voluptates magnam!
                    </p>
                </blockquote>

                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                    <div class="flex items-center gap-4">
                        <img
                            alt=""
                            src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                            class="size-14 rounded-full object-cover"
                        />

                        <div>
                            <div class="flex justify-center gap-0.5 text-green-500">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                            </div>

                            <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                        </div>
                    </div>

                    <p class="mt-4 text-gray-700">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum
                        incidunt,
                        a
                        consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius
                        accusamus
                        error officiis atque voluptates magnam!
                    </p>
                </blockquote>
            </div>
        </div>
    </section>
    <!--    End of review section     -->


    <!--    More products   -->
    <section
        class="bg-white border border-gray-100 shadow-xl shadow-black-/5 rounded-md lg:col-span-2 p-6 sm:mt-0 md:mt-6">
        <h3 class="text-gray-600 container text-2xl font-medium pt-4">More Products</h3>
        <div class="overflow-x-auto container py-4">
            <div class="flex gap-4 w-full max-w-screen-lg ">

                <?php for ($i = 0;
                           $i < 5;
                           $i++): ?>


                    <div class="card flex-shrink-0 w-1/2 lg:w-1/4 md:w-1/3">
                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                            <div class="flex items-end justify-end h-56 w-full bg-cover"
                                 style="background-image: url('https://images.unsplash.com/photo-1563170351-be82bc888aa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=376&q=80')">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-2">
                                    <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                                        Apple AirPods
                                    </p>
                                    <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                                        $95.00
                                    </p>
                                </div>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-gray-700 opacity-75">
                                    With plenty of talk and listen time
                                </p>
                            </div>
                            <div class="p-6 pt-0">
                                <button
                                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                                    type="button">
                                    Buy now
                                </button>
                            </div>
                        </div>
                    </div>

                <?php endfor; ?>


            </div>
        </div>
        </div>


    </section>
    <!--    End more products-->

</main>
<!--    footer section      -->
<section class="footer sm:pt-0 md:pt-6">
    <?php require 'includes/footer/customer.footer.php'; ?>
</section>
<!--        End of footer section       -->
</body>
