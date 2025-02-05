<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.5.0/remixicon.css">
    <title>Shop</title>
</head>
<body>

<header>
    <?php require 'includes/header/nav.php' ?>
</header>
<?php include 'views/includes/background/bg.include.php' ?>

<section class="max-w-screen-xl py-16 mx-auto sm:px-6 lg:px-8">
    <div
        class="bg-white border border-gray-100 shadow-md shadow-black/5 py-6 sm:px-6 md:px-16 rounded-md lg:col-span-2">
        <div class="py-20 md:py-8 mx-auto text-[#111]">
            <h2 class="capitalize tracking-[0.025em] text-[clamp(2rem,1.8125rem+0.75vw,2.6rem)]">About</h2>

            <div class=" mt-10 grid gap-8 grid-cols-[repeat(auto-fit,minmax(16rem,1fr))]">
                <div class="card">
                    <div class="card-inner relative w-full h-[18.75rem] bg-white rounded-2xl overflow-hidden">
                        <div class="box w-full h-full bg-white rounded-2xl overflow-hidden">
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
        <div class="w-full mx-auto mb-20">
            <p class="capitalize tracking-[0.025em] text-[clamp(2rem,1.8125rem+0.75vw,2.6rem)]">What We do</p>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5 p-2">

                <div class="p-4 bg-white shadow border rounded">

                    <button class="p-2 bg-[#F5F8FF] rounded cursor-default">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 4V5M12 19V20M5.07178 8L5.9378 8.5M18.0622 15.5L18.9282 16M18.9282 7.99999L18.0622 8.49999M5.93781 15.5L5.07178 16M16 12C16 9.79086 14.2091 8 12 8C9.79084 8 7.99998 9.79086 7.99998 12C7.99998 14.2091 9.79084 16 12 16C14.2091 16 16 14.2091 16 12Z"
                                stroke="#252432" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <p class="text-lg text-[#252432] my-5">Web Design</p>

                    <p class="text-sm text-[#8987A1] font-[400]">From concept to launch, we create
                        stunning, user-centric websites that elevate your brand and engage your audience.</p>

                </div>

                <div class="p-4 bg-white shadow border rounded">

                    <button class="p-2 bg-[#F5F8FF] rounded cursor-default">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.2442 4.86956C11.0022 3.47968 12.9979 3.47968 13.7559 4.86956L14.9723 7.09993C15.2599 7.62738 15.7694 7.99758 16.36 8.10817L18.8571 8.57579C20.4132 8.86719 21.0299 10.7653 19.9422 11.9157L18.1969 13.7617C17.7842 14.1983 17.5895 14.7973 17.6668 15.3931L17.9938 17.9125C18.1975 19.4824 16.5829 20.6555 15.1527 19.9766L12.8577 18.8871C12.3149 18.6295 11.6851 18.6295 11.1424 18.8871L8.84732 19.9766C7.41713 20.6555 5.80257 19.4824 6.00629 17.9125L6.3332 15.3931C6.41051 14.7973 6.21588 14.1983 5.80313 13.7617L4.05781 11.9157C2.97019 10.7653 3.58689 8.86719 5.14299 8.57579L7.64007 8.10817C8.2306 7.99758 8.74014 7.62738 9.02779 7.09993L10.2442 4.86956Z"
                                stroke="#252432" stroke-width="1.5" stroke-linejoin="round"/>
                        </svg>

                    </button>

                    <p class="text-lg text-[#252432] my-5">UI/UX Design</p>

                    <p class="text-sm text-[#8987A1] font-[400]">From concept to launch, we create
                        stunning, user-centric websites that elevate your brand and engage your audience.</p>

                </div>

                <div class="p-4 bg-white shadow border rounded">

                    <button class="p-2 bg-[#F5F8FF] rounded cursor-default">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 18H6C4.34315 18 3 16.6569 3 15V6C3 4.34315 4.34315 3 6 3H18C19.6569 3 21 4.34315 21 6V15C21 16.6569 19.6569 18 18 18H14M10 18V21M10 18H14M14 18V21M10 21H14M10 21H9M14 21H15"
                                stroke="#252432" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </button>

                    <p class="text-lg text-[#252432] my-5">Responsive Design</p>

                    <p class="text-sm text-[#8987A1] font-[400]">From concept to launch, we create
                        stunning, user-centric websites that elevate your brand and engage your audience.</p>

                </div>


                <div class="p-4 bg-white shadow border rounded lg:row-span-2">

                    <button class="p-2 bg-[#F5F8FF] rounded cursor-default">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.01005 11.75C9.42426 11.75 9.76005 11.4142 9.76005 11C9.76005 10.5858 9.42426 10.25 9.01005 10.25V11.75ZM9.00005 10.25C8.58583 10.25 8.25005 10.5858 8.25005 11C8.25005 11.4142 8.58583 11.75 9.00005 11.75V10.25ZM15.01 11.75C15.4243 11.75 15.76 11.4142 15.76 11C15.76 10.5858 15.4243 10.25 15.01 10.25V11.75ZM15 10.25C14.5858 10.25 14.25 10.5858 14.25 11C14.25 11.4142 14.5858 11.75 15 11.75V10.25ZM6.77814 8.75H17.222V7.25H6.77814V8.75ZM19.4653 10.8274L20.0038 17.8274L21.4994 17.7124L20.9609 10.7124L19.4653 10.8274ZM17.7604 20.25H6.23968V21.75H17.7604V20.25ZM3.99631 17.8274L4.53477 10.8274L3.03919 10.7124L2.50073 17.7124L3.99631 17.8274ZM6.23968 20.25C4.92903 20.25 3.89579 19.1342 3.99631 17.8274L2.50073 17.7124C2.33319 19.8904 4.05527 21.75 6.23968 21.75V20.25ZM20.0038 17.8274C20.1043 19.1342 19.0711 20.25 17.7604 20.25V21.75C19.9448 21.75 21.6669 19.8904 21.4994 17.7124L20.0038 17.8274ZM17.222 8.75C18.3977 8.75 19.3752 9.65519 19.4653 10.8274L20.9609 10.7124C20.8106 8.75865 19.1815 7.25 17.222 7.25V8.75ZM6.77814 7.25C4.81863 7.25 3.18947 8.75865 3.03919 10.7124L4.53477 10.8274C4.62494 9.65519 5.60244 8.75 6.77814 8.75V7.25ZM14.25 6V8H15.75V6H14.25ZM9.75005 8V6H8.25005V8H9.75005ZM12 3.75C13.2427 3.75 14.25 4.75736 14.25 6H15.75C15.75 3.92893 14.0711 2.25 12 2.25V3.75ZM12 2.25C9.92898 2.25 8.25005 3.92893 8.25005 6H9.75005C9.75005 4.75736 10.7574 3.75 12 3.75V2.25ZM9.01005 10.25H9.00005V11.75H9.01005V10.25ZM15.01 10.25H15V11.75H15.01V10.25Z"
                                fill="#252432"/>
                        </svg>

                    </button>

                    <p class="text-lg text-[#252432] my-5">E-commerce Solutions:</p>

                    <p class="text-sm text-[#8987A1] font-[400]">From concept to launch, we create
                        stunning, user-centric websites that elevate your brand and engage your audience.</p>

                    <img class="hidden lg:block shadow-md my-5 rounded"
                         src="https://images.pexels.com/photos/1181467/pexels-photo-1181467.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500"
                         alt="Pictures"/>

                </div>

                <div class="p-4 bg-white shadow border rounded lg:col-span-2 flex justify-between gap-5">

                    <div>
                        <button class="p-3 py-4 bg-[#F5F8FF] rounded cursor-default">
                            <svg width="21" height="13" viewBox="0 0 21 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M21 0L14.3528 12.8765H8.05945L10.8101 7.61233H10.6832C8.37078 10.5927 4.91823 12.5553 0 13V7.6855C0 7.6855 3.1455 7.50067 4.99585 5.57067H0.0023098V0H5.71431L5.61596 4.58333H5.74275L8.03687 0H12.5781L12.2834 4.555H12.4103L14.7885 0H21Z"
                                      fill="#5B54FF"/>
                            </svg>

                        </button>

                        <p class="text-lg text-[#252432] my-5">Webflow</p>

                        <p class="text-sm text-[#8987A1] font-[400]">From concept to launch, we create
                            stunning, user-centric websites that elevate your brand and engage your audience.</p>

                    </div>
                    <div>
                        <img class="hidden lg:block mt-5 shadow-md rounded"
                             src="https://images.pexels.com/photos/1181467/pexels-photo-1181467.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=400"
                             alt="Pictures"/>
                    </div>

                </div>


                <div class="p-4 bg-white shadow border rounded">

                    <button class="p-2 bg-[#F5F8FF] rounded cursor-default">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 9L9.53354 10.5201C10.7287 11.2372 10.8423 12.9262 9.75394 13.7968L7 16M12 16H17M6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21Z"
                                stroke="#252432" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </button>

                    <p class="text-lg text-[#252432] my-5">Custom Development</p>

                    <p class="text-sm text-[#8987A1] font-[400]">From concept to launch, we create
                        stunning, user-centric websites that elevate your brand and engage your audience.</p>

                </div>

            </div>
        </div>
        <div class="flex justify-between mb-4 items-start">

            <div class="container mx-auto px-4 py-8">
                <h1 class="text-3xl font-bold mb-4">Privacy Policy</h1>

                <p class="mb-4">
                    This privacy policy sets out how our website uses and protects any information that you give us
                    when you use
                    this
                    website.
                </p>

                <h2 class="text-2xl font-bold mb-2">Information We Collect</h2>

                <p class="mb-4">
                    We may collect the following information:
                </p>

                <ul class="list-disc list-inside mb-4">
                    <li>Your name and contact information</li>
                    <li>Demographic information</li>
                    <li>Other information relevant to customer surveys and/or offers</li>
                </ul>

                <h2 class="text-2xl font-bold mb-2">How We Use the Information</h2>

                <p class="mb-4">
                    We require this information to understand your needs and provide you with a better service, and
                    in
                    particular
                    for
                    the following reasons:
                </p>

                <ul class="list-disc list-inside mb-4">
                    <li>Internal record keeping</li>
                    <li>Improving our products and services</li>
                    <li>Sending promotional emails about new products, special offers, or other information which we
                        think you
                        may
                        find
                        interesting
                    </li>
                    <li>From time to time, we may also use your information to contact you for market research
                        purposes. We may
                        contact
                        you by email, phone, or mail. We may use the information to customize the website according
                        to your
                        interests.
                    </li>
                </ul>

                <h2 class="text-2xl font-bold mb-2">Security</h2>

                <p class="mb-4">
                    We are committed to ensuring that your information is secure. In order to prevent unauthorized
                    access or
                    disclosure,
                    we have put in place suitable physical, electronic, and managerial procedures to safeguard and
                    secure the
                    information we collect online.
                </p>

                <h2 class="text-2xl font-bold mb-2">Cookies</h2>

                <p class="mb-4">
                    A cookie is a small file that asks permission to be placed on your computer's hard drive. Once
                    you agree,
                    the
                    file
                    is added, and the cookie helps analyze web traffic or lets you know when you visit a particular
                    site.
                    Cookies
                    allow
                    web applications to respond to you as an individual. The web application can tailor its
                    operations to your
                    needs,
                    likes, and dislikes by gathering and remembering information about your preferences.
                </p>

                <p class="mb-4">
                    Overall, cookies help us provide you with a better website by enabling us to monitor which pages
                    you find
                    useful
                    and which you do not. A cookie in no way gives us access to your computer or any information
                    about you,
                    other
                    than
                    the data you choose to share with us.
                </p>

                <h2 class="text-2xl font-bold mb-2">Links to Other Websites</h2>

                <p class="mb-4">
                    Our website may contain links to other websites of interest. However, once you have used these
                    links to
                    leave
                    our
                    site, you should note that we do not have any control over that other website. Therefore, we
                    cannot be
                    responsible
                    for the protection and privacy of any information which you provide whilst visiting such sites
                    and such
                    sites
                    are
                    not governed by this privacy statement. You should exercise caution and look at the privacy
                    statement
                    applicable
                    to
                    the website in question.
                </p>

                <h2 class="text-2xl font-bold mb-2">Controlling Your Personal Information</h2>

                <p class="mb-4">
                    You may choose to restrict the collection or use of your personal information in the following
                    ways:
                </p>

                <ul class="list-disc list-inside mb-4">
                    <li>If you have previously agreed to us using your personal information for direct marketing
                        purposes, you
                        may
                        change your mind at any time by writing to or emailing us at [email protected]
                    </li>
                    <li>We will not sell, distribute, or lease your personal information to third parties unless we
                        have your
                        permission
                        or are required by law to do so. We may use your personal information to send you
                        promotional
                        information
                        about
                        third parties which we think you may find interesting if you tell us that you wish this to
                        happen.
                    </li>
                    <li>You may request details of personal information which we hold about you. If you would like a
                        copy of the
                        information held on you, please write to [Your Company Name, Address, City, State, Zip Code]
                        or email
                        [email protected]
                    </li>
                    <li>If you believe that any information we are holding on you is incorrect or incomplete, please
                        write to or
                        email
                        us as soon as possible at the above address. We will promptly correct any information found
                        to be
                        incorrect.
                    </li>
                </ul>

                <p class="mb-4">
                    This privacy policy is subject to change without notice.
                </p>
            </div>
        </div>
    </div>
    <div>
        <div class="min-h-screen flex justify-center">

            <div class="grid grid-cols-2 gap-4 items-center z-10">
                <div class="max-w-lg text-center sm:text-left">
                    <h2 class="text-4xl font-bold text-gray-100 tracking-tight">
                        A smile <br class="hidden sm:block lg:hidden"> is an inexpensive way to change your looks

                    </h2>

                    <p class="mt-4 text-gray-300">
                        Goals are just dreams with deadline
                    </p>
                    <div class="flex flex-row  items-center space-x-3 mt-5">
                        <a href="https://www.behance.net/ajeeshmon" target="_blank"
                           class="w-10 h-10 items-center justify-center inline-flex rounded-2xl font-bold text-lg   bg-blue-600 hover:drop-shadow-lg cursor-pointer transition ease-in duration-300">
                            <svg class="w-4 fill-gray-100" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.072 9.301s1.892-.147 1.892-2.459c0-2.315-1.548-3.441-3.51-3.441H0v12.926h6.454s3.941.129 3.941-3.816c-.001-.001.171-3.21-2.323-3.21zM2.844 5.697h3.61s.878 0 .878 1.344c0 1.346-.516 1.541-1.102 1.541H2.844V5.697zm3.427 8.332H2.844v-3.455h3.61s1.308-.018 1.308 1.775c0 1.512-.977 1.669-1.491 1.68zm9.378-7.341c-4.771 0-4.767 4.967-4.767 4.967s-.326 4.941 4.767 4.941c0 0 4.243.254 4.243-3.437H17.71s.072 1.391-1.988 1.391c0 0-2.184.152-2.184-2.25h6.423c.001-.001.709-5.612-4.312-5.612zm1.941 3.886h-4.074s.266-1.992 2.182-1.992 1.892 1.992 1.892 1.992zm.507-6.414H12.98v1.594h5.117V4.16z"/>
                            </svg>
                        </a>
                        <a href="https://codepen.io/uidesignhub" target="_blank"
                           class="w-10 h-10 items-center justify-center inline-flex rounded-2xl font-bold text-lg   bg-gray-900 hover:drop-shadow-lg cursor-pointer transition ease-in duration-300">
                            <svg class="h-5 fill-gray-100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22 15.047a.846.846 0 0 1-.008.112l-.006.037-.016.072c-.003.015-.008.028-.013.042l-.022.063-.02.042c-.008.02-.018.038-.028.057l-.025.04a.769.769 0 0 1-.108.135l-.035.034a.812.812 0 0 1-.049.04l-.038.03c-.005.003-.01.008-.015.01l-9.14 6.095a.858.858 0 0 1-.954 0l-9.14-6.094-.014-.01a.807.807 0 0 1-.088-.071c-.012-.01-.023-.022-.034-.034-.015-.015-.03-.03-.043-.046a.707.707 0 0 1-.066-.09 1.038 1.038 0 0 1-.054-.096l-.019-.042a.868.868 0 0 1-.022-.063c-.005-.014-.01-.027-.013-.042-.007-.023-.01-.048-.015-.072l-.007-.037A.847.847 0 0 1 2 15.047V8.953c0-.038.003-.075.008-.112l.007-.037c.004-.024.008-.049.015-.072a.774.774 0 0 1 .145-.295.978.978 0 0 1 .029-.038l.043-.046.034-.034a.834.834 0 0 1 .088-.07c.005-.003.009-.008.014-.01l9.14-6.095a.86.86 0 0 1 .954 0l9.14 6.094c.005.003.01.008.015.01l.038.03a.839.839 0 0 1 .05.041l.034.034a.735.735 0 0 1 .108.136l.025.04.029.056.019.042.022.063c.005.014.01.027.013.042.007.023.011.048.016.072l.006.037a.834.834 0 0 1 .008.112v6.094ZM3.719 10.562v2.876L5.869 12l-2.15-1.438Zm7.422-2.088V4.465l-6.734 4.49 3.008 2.011 3.726-2.492Zm8.452.48L12.86 4.465v4.009l3.726 2.492 3.007-2.012ZM4.407 15.046l6.734 4.489v-4.009l-3.726-2.492-3.008 2.012Zm8.453.48v4.009l6.733-4.49-3.007-2.01-3.726 2.491ZM12 9.966 8.96 12 12 14.033 15.04 12 12 9.967Zm8.281 3.472v-2.876L18.131 12l2.15 1.438Z"
                                    fill="" fill-rule="evenodd"/>
                            </svg>
                        </a>
                        <a href="https://twitter.com/ajeemon?lang=en" target="_blank"
                           class="w-10 h-10 items-center justify-center inline-flex rounded-2xl font-bold text-lg  text-white bg-blue-400 hover:drop-shadow-lg cursor-pointer transition ease-in duration-300"><img
                                class="w-3"
                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDY4MS4zMzQ2NCA2ODEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTIwMC45NjQ4NDQgNTE1LjI5Mjk2OWMyNDEuMDUwNzgxIDAgMzcyLjg3MTA5NC0xOTkuNzAzMTI1IDM3Mi44NzEwOTQtMzcyLjg3MTA5NCAwLTUuNjcxODc1LS4xMTcxODgtMTEuMzIwMzEzLS4zNzEwOTQtMTYuOTM3NSAyNS41ODU5MzctMTguNSA0Ny44MjQyMTgtNDEuNTg1OTM3IDY1LjM3MTA5NC02Ny44NjMyODEtMjMuNDgwNDY5IDEwLjQ0MTQwNi00OC43NTM5MDcgMTcuNDYwOTM3LTc1LjI1NzgxMyAyMC42MzY3MTggMjcuMDU0Njg3LTE2LjIzMDQ2OCA0Ny44MjgxMjUtNDEuODk0NTMxIDU3LjYyNS03Mi40ODgyODEtMjUuMzIwMzEzIDE1LjAxMTcxOS01My4zNjMyODEgMjUuOTE3OTY5LTgzLjIxNDg0NCAzMS44MDg1OTQtMjMuOTE0MDYyLTI1LjQ3MjY1Ni01Ny45NjQ4NDMtNDEuNDAyMzQ0LTk1LjY2NDA2Mi00MS40MDIzNDQtNzIuMzY3MTg4IDAtMTMxLjA1ODU5NCA1OC42ODc1LTEzMS4wNTg1OTQgMTMxLjAzMTI1IDAgMTAuMjg5MDYzIDEuMTUyMzQ0IDIwLjI4OTA2MyAzLjM5ODQzNyAyOS44ODI4MTMtMTA4LjkxNzk2OC01LjQ4MDQ2OS0yMDUuNTAzOTA2LTU3LjYyNS0yNzAuMTMyODEyLTEzNi45MjE4NzUtMTEuMjUgMTkuMzYzMjgxLTE3Ljc0MjE4OCA0MS44NjMyODEtMTcuNzQyMTg4IDY1Ljg3MTA5MyAwIDQ1LjQ2MDkzOCAyMy4xMzY3MTkgODUuNjA1NDY5IDU4LjMxNjQwNyAxMDkuMDgyMDMyLTIxLjUtLjY2MDE1Ni00MS42OTUzMTMtNi41NjI1LTU5LjM1MTU2My0xNi4zODY3MTktLjAxOTUzMS41NTA3ODEtLjAxOTUzMSAxLjA4NTkzNy0uMDE5NTMxIDEuNjcxODc1IDAgNjMuNDY4NzUgNDUuMTcxODc1IDExNi40NjA5MzggMTA1LjE0NDUzMSAxMjguNDY4NzUtMTEuMDE1NjI1IDIuOTk2MDk0LTIyLjYwNTQ2OCA0LjYwOTM3NS0zNC41NTg1OTQgNC42MDkzNzUtOC40Mjk2ODcgMC0xNi42NDg0MzctLjgyODEyNS0yNC42MzI4MTItMi4zNjMyODEgMTYuNjgzNTk0IDUyLjA3MDMxMiA2NS4wNjY0MDYgODkuOTYwOTM3IDEyMi40MjU3ODEgOTEuMDIzNDM3LTQ0Ljg1NTQ2OSAzNS4xNTYyNS0xMDEuMzU5Mzc1IDU2LjA5NzY1Ny0xNjIuNzY5NTMxIDU2LjA5NzY1Ny0xMC41NjI1IDAtMjEuMDAzOTA2LS42MDU0NjktMzEuMjYxNzE4OC0xLjgxNjQwNyA1Ny45OTk5OTk4IDM3LjE3NTc4MSAxMjYuODcxMDkzOCA1OC44NzEwOTQgMjAwLjg4NjcxODggNTguODcxMDk0IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PC9nPjwvc3ZnPg=="></a>
                        <a href="https://in.linkedin.com/in/ajeeshmon" target="_blank"
                           class="w-10 h-10 items-center justify-center inline-flex rounded-2xl font-bold text-lg  text-white bg-blue-500 hover:drop-shadow-lg cursor-pointer transition ease-in duration-300"><img
                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDI0IDI0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIj48Zz48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0yMy45OTQgMjR2LS4wMDFoLjAwNnYtOC44MDJjMC00LjMwNi0uOTI3LTcuNjIzLTUuOTYxLTcuNjIzLTIuNDIgMC00LjA0NCAxLjMyOC00LjcwNyAyLjU4N2gtLjA3di0yLjE4NWgtNC43NzN2MTYuMDIzaDQuOTd2LTcuOTM0YzAtMi4wODkuMzk2LTQuMTA5IDIuOTgzLTQuMTA5IDIuNTQ5IDAgMi41ODcgMi4zODQgMi41ODcgNC4yNDN2Ny44MDF6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtLjM5NiA3Ljk3N2g0Ljk3NnYxNi4wMjNoLTQuOTc2eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTIuODgyIDBjLTEuNTkxIDAtMi44ODIgMS4yOTEtMi44ODIgMi44ODJzMS4yOTEgMi45MDkgMi44ODIgMi45MDkgMi44ODItMS4zMTggMi44ODItMi45MDljLS4wMDEtMS41OTEtMS4yOTItMi44ODItMi44ODItMi44ODJ6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PC9nPjwvc3ZnPg=="
                                class="w-3"></a>
                    </div>
                </div>

                <div class="mx-0 max-w-xl flex rounded-2xl bg-indigo-700">
                    <div class="swiper-container flex-col flex  self-center">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <blockquote class="text-left ">
                                    <div class="relative">
                                        <div class="relative">
                                            <img
                                                src="/storage/avatars/njkIbPhyZCftc4g9XbMWwVsa7aGVPajYLRXhEeoo.jpg"
                                                alt="aji"
                                                class="object-cover w-full h-60 mx-auto rounded-t-2xl"
                                            />
                                            <div
                                                class="rounded-t-2xl absolute bg-gradient-to-t from-gray-800 opacity-75 inset-0 z-0"></div>
                                        </div>
                                    </div>

                                    <div class="relative m-5 p-5">
                                        <svg class="absolute left-0 w-6  fill-indigo-500" viewBox="0 0 512 512"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"/>
                                        </svg>
                                        <p class="text-gray-100 text-xl px-5">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                                            assumenda officiis sit amet itaque eveniet accusantium corporis
                                            tempora.
                                        </p>
                                        <svg class="absolute right-0  w-6 fill-indigo-500" viewBox="0 0 512 512"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z"/>
                                        </svg>
                                        <div class="text-sm mt-5 mx-5">
                                            <p class="font-medium text-white">Ajimon</p>
                                            <p class="mt-1 text-gray-300">CEO Of Marketing </p>
                                        </div>
                                    </div>

                                </blockquote>
                            </div>

                            <div class="swiper-slide">
                                <blockquote class="text-left">
                                    <div class="">
                                        <div class="relative">
                                            <img
                                                src="https://scontent.fccj2-2.fna.fbcdn.net/v/t39.30808-6/293672501_5357602044279252_6369958249008578770_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=bdzc8jxe0kYAX83O5hJ&_nc_ht=scontent.fccj2-2.fna&oh=00_AT8kbjMW_DqEcrXGcCTesn5pdVLgQReb2NlaF3OduMzl1Q&oe=632F3EE9"
                                                alt="aji"
                                                class="object-cover w-full mx-auto rounded-t-2xl h-60"
                                            />
                                            <div
                                                class="rounded-t-2xl absolute bg-gradient-to-t from-gray-800 opacity-75 inset-0 z-0"></div>
                                        </div>
                                    </div>

                                    <div class="relative relative m-5 p-5">
                                        <svg class="absolute left-0  w-6  fill-indigo-500" viewBox="0 0 512 512"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"/>
                                        </svg>
                                        <p class="text-gray-100 text-xl px-5">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                                            assumenda officiis sit amet itaque eveniet accusantium corporis
                                            tempora.
                                        </p>
                                        <svg class="absolute right-0 w-6 fill-indigo-500" viewBox="0 0 512 512"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z"/>
                                        </svg>
                                        <div class="text-sm mt-5 mx-5">
                                            <p class="font-medium text-white">John Doe</p>
                                            <p class="mt-1 text-gray-300">Marketing Manager </p>
                                        </div>
                                    </div>

                                </blockquote>
                            </div>

                            <div class="swiper-slide">
                                <blockquote class="text-left">
                                    <div class="">
                                        <div class="relative">
                                            <img
                                                src="https://scontent.fccj2-2.fna.fbcdn.net/v/t31.18172-8/11262421_868445743194927_5746052500134236265_o.jpg?_nc_cat=111&ccb=1-7&_nc_sid=e3f864&_nc_ohc=84hLHR-HqyMAX9c9k1y&_nc_ht=scontent.fccj2-2.fna&oh=00_AT_lIRJ3LcWYTagkUdWdrG_eb-iwHbQS_pPNAv7JDcg2Eg&oe=634DB7A3"
                                                alt="aji"
                                                class="object-cover w-full mx-auto rounded-t-2xl h-60"
                                            />
                                            <div
                                                class="rounded-t-2xl absolute bg-gradient-to-t from-gray-800 opacity-75 inset-0 z-0"></div>
                                        </div>
                                    </div>

                                    <div class="relative m-5 p-5">
                                        <svg class="absolute left-0 w-6  fill-indigo-500" viewBox="0 0 512 512"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"/>
                                        </svg>
                                        <p class="text-gray-100 text-xl px-5">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                                            assumenda officiis sit amet itaque eveniet accusantium corporis
                                            tempora.
                                        </p>
                                        <svg class="absolute right-0 w-6 fill-indigo-500" viewBox="0 0 512 512"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z"/>
                                        </svg>
                                        <div class="text-sm mt-5 mx-5">
                                            <p class="font-medium text-white">Ajimon</p>
                                            <p class="mt-1 text-gray-300">CEO Of Marketing </p>
                                        </div>
                                    </div>


                                </blockquote>
                            </div>
                        </div>

                        <div class="mt-12 swiper-pagination hidden"></div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</section>

<footer>
    <?php require 'includes/footer/customer.footer.php' ?>
</footer>
</body>