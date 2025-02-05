@extends('layouts.customer.app')
@section('content')
    <section class="max-w-screen-xl py-16 mx-auto sm:px-6 lg:px-8">
        <div
            class="bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-900 shadow-md shadow-black/5 py-6 sm:px-6 md:px-16 rounded-md lg:col-span-2">
            <div class="py-20 md:py-8 mx-auto text-[#111] dark:text-[#f7fafc]">
                <h2 class="capitalize tracking-[0.025em] text-[clamp(2rem,1.8125rem+0.75vw,2.6rem)]">About</h2>

                <div class=" mt-10 grid gap-8 grid-cols-[repeat(auto-fit,minmax(16rem,1fr))]">
                    <div class="card">
                        <div class="card-inner relative w-full h-[18.75rem] rounded-2xl overflow-hidden">
                            <div class="box w-full h-full rounded-2xl overflow-hidden">
                            <div class="imgBox absolute inset-0">
                                <img class="w-full h-full object-cover"
                                     src="https://img.freepik.com/free-photo/lake-with-lots-green-trees-reflected-water-chisinau-moldova_1268-16592.jpg?t=st=1730201653~exp=1730205253~hmac=235d8c2d9698a5f50dda6a870703d3c4d3a9c360f97c4a688f1abe2bfb509152&w=1380"
                                     alt="Trust & Co."/>
                            </div>
                            <div
                                class="icon absolute bottom-[-0.375rem] right-[-0.375rem] w-24 h-24 bg-[#d3b19a] rounded-tl-full flex justify-center items-center transition-transform hover:scale-110">
                                <a href="#"
                                   class="iconBox w-full h-full flex justify-center items-center text-white text-2xl rounded-full">
                                    <span class="material-symbols-outlined">arrow_outward</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="content py-4 px-2.5">
                        <h3 class="capitalize text-[clamp(1.5rem,1.3909rem+0.4364vw,1.8rem)]">layatanahi.store</h3>
                        <p class="my-4 text-[#565656]">Fill out the form and the algorithm will offer the right team of
                            experts</p>
                        <ul class="flex flex-wrap gap-2">
                            <li class="uppercase font-bold text-xs text-[#282828] bg-[#d3b19a] px-2 py-1 rounded">
                                delivery
                            </li>
                            <li class="uppercase font-bold text-xs text-[#282828] bg-[#70b3b1] px-2 py-1 rounded">
                                packaging
                            </li>
                            <li class="uppercase font-bold text-xs text-[#282828] bg-[#70b311] px-2 py-1 rounded">
                                online
                            </li>
                            <li class="uppercase font-bold text-xs text-[#282828] bg-[#7073b1] px-2 py-1 rounded">
                                discounts
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full mx-auto mb-20 text-[#111] dark:text-[#f7fafc]">
            <p class="capitalize tracking-[0.025em] text-[clamp(2rem,1.8125rem+0.75vw,2.6rem)]">What We do</p>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5 p-2">
                <div class="p-4 bg-white dark:bg-gray-800 shadow border rounded">

                    <button class="p-2 bg-[#F5F8FF] dark:bg-[#2D3748] rounded cursor-default">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 4V5M12 19V20M5.07178 8L5.9378 8.5M18.0622 15.5L18.9282 16M18.9282 7.99999L18.0622 8.49999M5.93781 15.5L5.07178 16M16 12C16 9.79086 14.2091 8 12 8C9.79084 8 7.99998 9.79086 7.99998 12C7.99998 14.2091 9.79084 16 12 16C14.2091 16 16 14.2091 16 12Z"
                                stroke="#252432" class="dark:stroke-[#E2E8F0]" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <p class="text-lg text-[#252432] dark:text-[#E2E8F0] my-5">Web Design</p>

                    <p class="text-sm text-[#8987A1] dark:text-[#A0AEC0] font-[400]">From concept to launch, we create
                        stunning, user-centric websites that elevate your brand and engage your audience.</p>

                </div>

                <div class="p-4 bg-white dark:bg-gray-800 shadow border rounded">

                    <button class="p-2 bg-[#F5F8FF] dark:bg-[#2D3748] rounded cursor-default">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.2442 4.86956C11.0022 3.47968 12.9979 3.47968 13.7559 4.86956L14.9723 7.09993C15.2599 7.62738 15.7694 7.99758 16.36 8.10817L18.8571 8.57579C20.4132 8.86719 21.0299 10.7653 19.9422 11.9157L18.1969 13.7617C17.7842 14.1983 17.5895 14.7973 17.6668 15.3931L17.9938 17.9125C18.1975 19.4824 16.5829 20.6555 15.1527 19.9766L12.8577 18.8871C12.3149 18.6295 11.6851 18.6295 11.1424 18.8871L8.84732 19.9766C7.41713 20.6555 5.80257 19.4824 6.00629 17.9125L6.3332 15.3931C6.41051 14.7973 6.21588 14.1983 5.80313 13.7617L4.05781 11.9157C2.97019 10.7653 3.58689 8.86719 5.14299 8.57579L7.64007 8.10817C8.2306 7.99758 8.74014 7.62738 9.02779 7.09993L10.2442 4.86956Z"
                                stroke="#252432" class="dark:stroke-[#E2E8F0]" stroke-width="1.5" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <p class="text-lg text-[#252432] dark:text-[#E2E8F0] my-5">UI/UX Design</p>

                    <p class="text-sm text-[#8987A1] font-[400]">From concept to launch, we create
                        stunning, user-centric websites that elevate your brand and engage your audience.</p>

                </div>

                <div class="p-4 bg-white dark:bg-gray-800 shadow border rounded">

                    <button class="p-2 bg-[#F5F8FF] dark:bg-[#2D3748] rounded cursor-default">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 18H6C4.34315 18 3 16.6569 3 15V6C3 4.34315 4.34315 3 6 3H18C19.6569 3 21 4.34315 21 6V15C21 16.6569 19.6569 18 18 18H14M10 18V21M10 18H14M14 18V21M10 21H14M10 21H9M14 21H15"
                                stroke="#252432" class="dark:stroke-[#E2E8F0]" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>


                    <p class="text-lg text-[#252432] dark:text-[#E2E8F0] my-5">Responsive Design</p>

                    <p class="text-sm text-[#8987A1] font-[400]">From concept to launch, we create
                        stunning, user-centric websites that elevate your brand and engage your audience.</p>

                </div>


                <div class="p-4 bg-white shadow border rounded lg:row-span-2 bg-white dark:bg-gray-800">

                    <button class="p-2 bg-[#F5F8FF] dark:bg-[#2D3748] rounded cursor-default">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.01005 11.75C9.42426 11.75 9.76005 11.4142 9.76005 11C9.76005 10.5858 9.42426 10.25 9.01005 10.25V11.75ZM9.00005 10.25C8.58583 10.25 8.25005 10.5858 8.25005 11C8.25005 11.4142 8.58583 11.75 9.00005 11.75V10.25ZM15.01 11.75C15.4243 11.75 15.76 11.4142 15.76 11C15.76 10.5858 15.4243 10.25 15.01 10.25V11.75ZM15 10.25C14.5858 10.25 14.25 10.5858 14.25 11C14.25 11.4142 14.5858 11.75 15 11.75V10.25ZM6.77814 8.75H17.222V7.25H6.77814V8.75ZM19.4653 10.8274L20.0038 17.8274L21.4994 17.7124L20.9609 10.7124L19.4653 10.8274ZM17.7604 20.25H6.23968V21.75H17.7604V20.25ZM3.99631 17.8274L4.53477 10.8274L3.03919 10.7124L2.50073 17.7124L3.99631 17.8274ZM6.23968 20.25C4.92903 20.25 3.89579 19.1342 3.99631 17.8274L2.50073 17.7124C2.33319 19.8904 4.05527 21.75 6.23968 21.75V20.25ZM20.0038 17.8274C20.1043 19.1342 19.0711 20.25 17.7604 20.25V21.75C19.9448 21.75 21.6669 19.8904 21.4994 17.7124L20.0038 17.8274ZM17.222 8.75C18.3977 8.75 19.3752 9.65519 19.4653 10.8274L20.9609 10.7124C20.8106 8.75865 19.1815 7.25 17.222 7.25V8.75ZM6.77814 7.25C4.81863 7.25 3.18947 8.75865 3.03919 10.7124L4.53477 10.8274C4.62494 9.65519 5.60244 8.75 6.77814 8.75V7.25ZM14.25 6V8H15.75V6H14.25ZM9.75005 8V6H8.25005V8H9.75005ZM12 3.75C13.2427 3.75 14.25 4.75736 14.25 6H15.75C15.75 3.92893 14.0711 2.25 12 2.25V3.75ZM12 2.25C9.92898 2.25 8.25005 3.92893 8.25005 6H9.75005C9.75005 4.75736 10.7574 3.75 12 3.75V2.25ZM9.01005 10.25H9.00005V11.75H9.01005V10.25ZM15.01 10.25H15V11.75H15.01V10.25Z"
                                fill="#252432" class="dark:fill-[#E2E8F0]"/>
                        </svg>
                    </button>


                    <p class="text-lg text-[#252432] dark:text-[#E2E8F0] my-5">E-commerce Solutions:</p>

                    <p class="text-sm text-[#8987A1] font-[400]">From concept to launch, we create
                        stunning, user-centric websites that elevate your brand and engage your audience.</p>

                    <img class="hidden lg:block shadow-md my-5 rounded"
                         src="https://images.pexels.com/photos/1181467/pexels-photo-1181467.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500"
                         alt="Pictures"/>

                </div>

                <div class="p-4 bg-white shadow border rounded lg:col-span-2 flex justify-between gap-5 dark:bg-gray-800">

                    <div>
                        <button class="p-3 py-4 bg-[#F5F8FF] dark:bg-[#2D3748] rounded cursor-default">
                            <svg width="21" height="13" viewBox="0 0 21 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M21 0L14.3528 12.8765H8.05945L10.8101 7.61233H10.6832C8.37078 10.5927 4.91823 12.5553 0 13V7.6855C0 7.6855 3.1455 7.50067 4.99585 5.57067H0.0023098V0H5.71431L5.61596 4.58333H5.74275L8.03687 0H12.5781L12.2834 4.555H12.4103L14.7885 0H21Z"
                                      fill="#5B54FF" class="dark:fill-[#A0AEC0]"/>
                            </svg>
                        </button>


                        <p class="text-lg text-[#252432] dark:text-[#E2E8F0] my-5">Webflow</p>

                        <p class="text-sm text-[#8987A1] font-[400]">From concept to launch, we create
                            stunning, user-centric websites that elevate your brand and engage your audience.</p>

                    </div>
                    <div>
                        <img class="hidden lg:block mt-5 shadow-md rounded"
                             src="https://images.pexels.com/photos/1181467/pexels-photo-1181467.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=400"
                             alt="Pictures"/>
                    </div>

                </div>


                <div class="p-4 bg-white dark:bg-gray-800 shadow border rounded">

                    <button class="p-2 bg-[#F5F8FF] dark:bg-[#2D3748] rounded cursor-default">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 9L9.53354 10.5201C10.7287 11.2372 10.8423 12.9262 9.75394 13.7968L7 16M12 16H17M6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21Z"
                                stroke="#252432" class="dark:stroke-[#E2E8F0]" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>


                    <p class="text-lg text-[#252432] dark:text-[#E2E8F0] my-5">Custom Development</p>

                    <p class="text-sm text-[#8987A1] font-[400]">From concept to launch, we create
                        stunning, user-centric websites that elevate your brand and engage your audience.</p>

                </div>

            </div>
        </div>
        <div class="flex flex-col md:flex-row justify-between mb-4 items-start text-gray-900 dark:text-gray-100 p-4">
            <section class="mb-4 md:mb-0 md:w-1/2">
                <h2 class="text-xl font-semibold">Welcome to Our 5 Star Store</h2>
                <p>
                    Our store is dedicated to providing everything you need, all in one place. We pride ourselves on our extensive range of products and our commitment to customer satisfaction.
                </p>
                <p>
                    Whether you're looking for the latest electronics, fashionable clothing, or everyday essentials, we've got you covered. Our store is rated 5 stars by our customers for our quality products, excellent service, and seamless online shopping experience.
                </p>
                <p>
                    With our easy-to-use online platform, you can shop from the comfort of your own home and have your purchases delivered straight to your door. We are here to make your shopping experience enjoyable and convenient.
                </p>
            </section>
            <section class="md:w-1/2">
                <h2 class="text-xl font-semibold">Our Promise</h2>
                <p>
                    At our store, customer satisfaction is our top priority. We are committed to providing high-quality products, competitive prices, and exceptional customer service.
                </p>
                <p>
                    We strive to meet your needs and exceed your expectations with every purchase. Thank you for choosing us as your trusted shopping destination.
                </p>
            </section>
        </div>

    </div>
</section>
@endsection
