<?php

use App\Main\PageData;

if (isset($product)) {
    PageData::setPage('Product: '.$product['name']);
} else {
    PageData::setPage('Product Not Found');
}

?>

@extends('layouts.customer.app')
@section('content')

    <!--    end of background   -->
    <div class=" rounded-md lg:col-span-2 pt-6 px-4">
        <div
                class="max-w-6xl mx-auto p-6 border border-gray-100 dark:border-gray-700 shadow-md shadow-black/5 bg-white dark:bg-gray-800 rounded-md ">
            {{--            <h3 class="text-2xl font-bold text-black dark:text-white mb-2 pb-4">Product</h3>--}}
            @empty($product)
                <div
                        class="no-file-found flex flex-col items-center justify-center py-8 px-4 text-center bg-gray-100 dark:bg-gray-800 rounded-lg">
                    <svg class="w-12 h-12 dark:text-gray-400 text-gray-700" stroke="currentColor" fill="currentColor"
                         stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px"
                         xmlns="http://www.w3.org/2000/svg">
                        <g id="File_Off">
                            <g>
                                <path
                                        d="M4,3.308a.5.5,0,0,0-.7.71l.76.76v14.67a2.5,2.5,0,0,0,2.5,2.5H17.44a2.476,2.476,0,0,0,2.28-1.51l.28.28c.45.45,1.16-.26.7-.71Zm14.92,16.33a1.492,1.492,0,0,1-1.48,1.31H6.56a1.5,1.5,0,0,1-1.5-1.5V5.778Z"></path>
                                <path
                                        d="M13.38,3.088v2.92a2.5,2.5,0,0,0,2.5,2.5h3.07l-.01,6.7a.5.5,0,0,0,1,0V8.538a2.057,2.057,0,0,0-.75-1.47c-1.3-1.26-2.59-2.53-3.89-3.8a3.924,3.924,0,0,0-1.41-1.13,6.523,6.523,0,0,0-1.71-.06H6.81a.5.5,0,0,0,0,1Zm4.83,4.42H15.88a1.5,1.5,0,0,1-1.5-1.5V3.768Z"></path>
                            </g>
                        </g>
                    </svg>
                    <h3 class="text-xl font-medium mt-4 text-gray-700 dark:text-gray-200">Product not found</h3>
                    <p class="text-gray-500 dark:text-gray-400 mt-2">
                        The product you are looking for could not be located.
                    </p>
                </div>
            @endempty
            @isset($product)
                <div class="flex flex-col md:flex-row -mx-4">
                    <div class="md:flex-1 px-4">
                        <div class="relative rounded-lg h-[460px] bg-gray-300 dark:bg-gray-700 mb-4">
                            <img id="productImage" class="w-full rounded-lg h-full object-cover" alt="Product Image">

                            <!-- Dot indicators -->
                            <div id="dotContainer"
                                 class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2"></div>
                        </div>
                    </div>

                    <div class="md:flex-1 px-4">
                        <h2 class="text-2xl font-bold text-black dark:text-white mb-2">{{$product['name']}}</h2>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ante justo. Integer euismod
                            libero id mauris malesuada tincidunt.
                        </p>
                        <div class="flex mb-4">
                            <div class="mr-4">
                                <span class="font-bold text-gray-900 dark:text-white">Price:</span>
                                <span class="text-gray-900 dark:text-gray-300">{{$product['price']}}</span>
                            </div>
                            <div>
                                <span class="font-bold text-gray-700 dark:text-gray-300">Availability:</span>
                                <span
                                        class="border border-green-700 text-gray-600 dark:text-gray-300 dark:border-green-900 py-1 px-3 rounded-full">In Stock</span>
                            </div>
                        </div>
                        <div>
                            <span class="font-bold text-gray-900 dark:text-white">Product Description:</span>
                            <p class="text-gray-900 dark:text-gray-300 text-sm mt-2">
                                {{$product['description']}}
                            </p>
                        </div>
                    </div>

                </div>
                <div>
                    <div class="flex -mx-2 mb-4">
                        <div class="w-1/2 px-2">
                            <button
                                    class="w-full bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-white py-2 px-4 rounded-full font-bold hover:bg-gray-200 dark:hover:bg-gray-700">
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


                <!--                Product details section             -->
                <div class="p-6 mx-auto ">
                    <!--            menu-bar            -->
                    <div class="p-2 flex justify-center">
                        <h2 class="text-xl text-slate-900 dark:text-slate-100">Other Specifications</h2>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 mb-6 ">
                        <div class="bg-white dark:bg-gray-800 p-6">
                            <div class="container flow-root">
                                <dl class="-my-3 divide-y divide-gray-100 dark:divide-gray-700 text-sm">
                                    <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                        <dt class="font-medium text-gray-900 dark:text-white">Title</dt>
                                        <dd class="text-gray-700 dark:text-gray-300 sm:col-span-2">Product Title</dd>
                                    </div>

                                    <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                        <dt class="font-medium text-gray-900 dark:text-white">Name</dt>
                                        <dd class="text-gray-700 dark:text-gray-300 sm:col-span-2">John Frusciante</dd>
                                    </div>

                                    <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                        <dt class="font-medium text-gray-900 dark:text-white">Occupation</dt>
                                        <dd class="text-gray-700 dark:text-gray-300 sm:col-span-2">Guitarist</dd>
                                    </div>

                                    <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                        <dt class="font-medium text-gray-900 dark:text-white">Price</dt>
                                        <dd class="text-gray-700 dark:text-gray-300 sm:col-span-2">$1,000,000+</dd>
                                    </div>

                                    <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                        <dt class="font-medium text-gray-900 dark:text-white">Bio</dt>
                                        <dd class="text-gray-700 dark:text-gray-300 sm:col-span-2">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et facilis debitis
                                            explicabo doloremque impedit nesciunt dolorem facere, dolor quasi veritatis
                                            quia fugit aperiam aspernatur neque molestiae labore aliquam soluta
                                            architecto?
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-6">
                            <div class="container flow-root">
                                <dl class="-my-3 divide-y divide-gray-100 dark:divide-gray-700 text-sm">
                                    <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                        <dt class="font-medium text-gray-900 dark:text-white">Title</dt>
                                        <dd class="text-gray-700 dark:text-gray-300 sm:col-span-2">Product Title</dd>
                                    </div>

                                    <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                        <dt class="font-medium text-gray-900 dark:text-white">Name</dt>
                                        <dd class="text-gray-700 dark:text-gray-300 sm:col-span-2">John Frusciante</dd>
                                    </div>

                                    <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                        <dt class="font-medium text-gray-900 dark:text-white">Occupation</dt>
                                        <dd class="text-gray-700 dark:text-gray-300 sm:col-span-2">Guitarist</dd>
                                    </div>

                                    <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                        <dt class="font-medium text-gray-900 dark:text-white">Price</dt>
                                        <dd class="text-gray-700 dark:text-gray-300 sm:col-span-2">$1,000,000+</dd>
                                    </div>

                                    <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 md:grid-cols-4 sm:gap-4">
                                        <dt class="font-medium text-gray-900 dark:text-white">Bio</dt>
                                        <dd class="text-gray-700 dark:text-gray-300 sm:col-span-2">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et facilis debitis
                                            explicabo doloremque impedit nesciunt dolorem facere, dolor quasi veritatis
                                            quia fugit aperiam aspernatur neque molestiae labore aliquam soluta
                                            architecto?
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            @endisset
        </div>
    </div>

    {{--        more products        --}}

    <div class="px-4">
        <div
                class="max-w-6xl mx-auto bg-white dark:bg-slate-800 border border-gray-100 dark:border-gray-700 shadow-md shadow-black/5 rounded-md lg:col-span-2 p-6 sm:mt-0 md:mt-6 mb-6">
            <h3 class="text-2xl pb-2 dark:text-slate-100">More Products</h3>
            <div class="p-2">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    @for($i = 0; $i < 3; $i++)
                        <a href="#"
                           class="block rounded-lg p-4 shadow-sm dark:shadow-gray-600 dark:bg-gray-900 hover:opacity-85 hover:filter hover:brightness-105 hover:shadow-md transition">
                            <img
                                    alt=""
                                    src="https://images.unsplash.com/photo-1613545325278-f24b0cae1224?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                    class="h-56 w-full rounded-md object-cover"
                            />

                            <div class="mt-2">
                                <dl>
                                    <div>
                                        <dt class="sr-only">Price</dt>
                                        <dd class="text-sm text-gray-500 dark:text-gray-400">$240,000</dd>
                                    </div>
                                    <div>
                                        <dt class="sr-only">Address</dt>
                                        <dd class="font-medium dark:text-white">123 Wallaby Avenue, Park Road</dd>
                                    </div>
                                </dl>

                                <div class="mt-6 flex items-center gap-8 text-xs">
                                    <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                                        <svg
                                                class="size-4 text-indigo-700 dark:text-indigo-400"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                        >
                                            <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"
                                            />
                                        </svg>

                                        <div class="mt-1.5 sm:mt-0">
                                            <p class="text-gray-500 dark:text-gray-300">Parking</p>
                                            <p class="font-medium dark:text-white">2 spaces</p>
                                        </div>
                                    </div>

                                    <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                                        <svg
                                                class="size-4 text-indigo-700 dark:text-indigo-400"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                        >
                                            <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"
                                            />
                                        </svg>

                                        <div class="mt-1.5 sm:mt-0">
                                            <p class="text-gray-500 dark:text-gray-300">Bathroom</p>
                                            <p class="font-medium dark:text-white">2 rooms</p>
                                        </div>
                                    </div>

                                    <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                                        <svg
                                                class="size-4 text-indigo-700 dark:text-indigo-400"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                        >
                                            <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                                            />
                                        </svg>

                                        <div class="mt-1.5 sm:mt-0">
                                            <p class="text-gray-500 dark:text-gray-300">Bedroom</p>
                                            <p class="font-medium dark:text-white">4 rooms</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>
            </div>

        </div>
    </div>

    @isset($product)
        {{--        comments        --}}
        <div class="px-4">
            <div
                    class="max-w-6xl mx-auto bg-white dark:bg-slate-800 border border-gray-100 dark:border-gray-700 shadow-md shadow-black/5 rounded-md lg:col-span-2 p-6 sm:mt-0 md:mt-6 mb-6">
                <h3 class="text-2xl dark:text-slate-100">Comments</h3>
                @for($i=0;$i<10;$i++)

                    <figure class="md:flex w-full ">
                        <div class="p-6 text-center md:text-left space-y-4">
                            <blockquote>
                                <p class="text-lg font-medium dark:text-slate-100">
                                    “Tailwind CSS is the only framework that I've seen scale
                                    on large teams. It’s easy to customize, adapts to any design,
                                    and the build size is tiny.”
                                </p>
                            </blockquote>
                            <figcaption class="font-medium">
                                <div class="text-sky-500 dark:text-sky-400">
                                    Sarah Dayan
                                </div>
                                <div class="text-slate-700 dark:text-slate-400">
                                    Staff Engineer, Algolia
                                </div>
                            </figcaption>
                        </div>
                    </figure>

                @endfor
            </div>
        </div>
    @endisset
    <script>
        @isset($product)
        const images = @json($product['image']);// Assuming $product['image'] contains an array of image URLs

        const imageElement = document.getElementById('productImage');
        const dotContainer = document.getElementById('dotContainer');
        // Preload images and create dot indicators
        images.forEach((src, index) => {// Preload image
          const img = new Image();
          img.src = src; // Create dot indicator
          const dot = document.createElement('span');
          dot.classList.add('dot', 'block', 'w-3', 'h-3', 'bg-gray-400', 'dark:bg-gray-500', 'rounded-full', 'hover:scale-110');
          dot.setAttribute('data-index', index);
          dotContainer.appendChild(dot); // Add event listener for dot click
          dot.addEventListener('click', () => {
            changeImage(index);
          });
        });
        let currentIndex = 0;

        function changeImage (index) {
          currentIndex = index;
          imageElement.src = images[currentIndex];
          updateDots();
        }

        function updateDots () {
          const dots = document.querySelectorAll('.dot');
          dots.forEach(dot => {
            dot.style.backgroundColor = dot.getAttribute('data-index') == currentIndex ? '#000' : 'rgba(255, 255, 255, 0.5)';
          });
        }

        setInterval(() => {
          currentIndex = (currentIndex + 1) % images.length;
          changeImage(currentIndex);
        }, 3000); // Initial setup
        @endisset
    </script>
@endsection
