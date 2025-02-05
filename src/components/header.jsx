<nav class="bg-gray-200 dark:bg-gray-950 fixed w-full z-50">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-12 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 hover:bg-gray-300 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-inset dark:focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                    <span id="close_Employee_nav" class="absolute -inset-0.5"></span>
                    <span id="open_Employee_nav" class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                    <!--
                      Icon when menu is open.

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-center sm:justify-start">
                <div class="flex items-center">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex text-gray-800 dark:text-gray-200 space-x-4">
                        <a href="/store/home"
                           class="rounded-md px-3 py-2 text-sm font-medium text-gray-800 dark:text-gray-200 hover:dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:hover:text-gray-300"
                           aria-current="page">
                            Home
                        </a>
                        <a href="/store/orders"
                           class="rounded-md px-3 py-2 text-sm font-medium text-gray-800 dark:text-gray-200 dark:hover:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:hover:text-gray-300">
                            Orders
                        </a>
                        <a href="/store/user-activity"
                           class="rounded-md px-3 py-2 text-sm font-medium text-gray-800 dark:text-gray-200 dark:hover:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:hover:text-gray-300">
                            Your Activity
                        </a>
                        <a href="#"
                           class="rounded-md px-3 py-2 text-sm font-medium text-gray-800 dark:text-gray-200 dark:hover:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:hover:text-gray-300">
                            Calendar
                        </a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <div class="relative inline-block text-left">
                    <button type="button" id="notification_button"
                            class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                             aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"/>
                        </svg>
                    </button>
                    <div
                        class="opacity-0 scale-0 transition origin-top-right h-96 duration-200 absolute right-0 p-4 z-10 mt-3 w-screen max-w-sm overflow-auto rounded-md bg-white dark:bg-slate-900 shadow-lg dark:shadow-gray-900 ring-1 ring-gray-900/5 dark:ring-gray-700 transform"
                        id="notification_menu">

                        <div class="flex items-center  pt-4 justify-center gap-x-4">
                            <h1 class="text-md font-semibold tracking-tight text-gray-900 dark:text-white">
                                Notifications
                            </h1>
                            <div
                                class="group text-gray-900 dark:text-gray-100 relative flex  gap-x-8 text-xs">
                                <a class="flex  gap-x-2.5 p-3 rounded-md">
                                    {{'؋ '}}100000
                                </a>
                                <a class="flex  gap-x-2.5 p-3 rounded-md">
                                    {{'€ '}}0
                                </a>
                                <a class="flex  gap-x-2.5 p-3 rounded-md">
                                    {{'$ '}}200
                                </a>
                            </div>
                        </div>


                            <div class="w-full p-3 mt-2  rounded flex hover:bg-slate-700">
                                <div tabindex="0" aria-label="heart icon" role="img"
                                     class="focus:outline-none w-8 h-8 border rounded-full border-gray-200 dark:border-gray-600 flex items-center justify-center">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"
                                         class="fill-current text-red-600 dark:text-red-400">
                                        <path
                                            d="M8.00059 3.01934C9.56659 1.61334 11.9866 1.66 13.4953 3.17134C15.0033 4.68334 15.0553 7.09133 13.6526 8.662L7.99926 14.3233L2.34726 8.662C0.944589 7.09133 0.997256 4.67934 2.50459 3.17134C4.01459 1.662 6.42992 1.61134 8.00059 3.01934Z"
                                            fill="currentColor"/>
                                    </svg>
                                </div>
                                <div class="pl-3">
                                    <p tabindex="0"
                                       class="focus:outline-none text-sm leading-none text-gray-900 dark:text-gray-100">
                                        <a href="#" class="text-indigo-700 dark:text-indigo-400">James Doe</a>
                                        favourited
                                        an <a href="#"
                                              class="text-indigo-700 dark:text-indigo-400">item</a>
                                    </p>
                                    <p tabindex="0"
                                       class="focus:outline-none text-xs leading-3 pt-1 text-gray-500 dark:text-gray-400">
                                        2 hours ago
                                    </p>
                                </div>
                            </div>




                    </div>
                </div>
                <!-- Profile dropdown -->
                <div class="relative ml-3">
                    <div>
                        <button type="button"
                                class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open user menu</span>
                            <img class="size-8 rounded-full"
                                 src="https://images.unsplash.com/profile-1575410975338-a4ccb4b8ba31image?w=150&dpr=1&crop=faces&bg=%23fff&h=150&auto=format&fit=crop&q=60&ixlib=rb-4.0.3"
                                 alt="">
                        </button>
                    </div>
                    <div
                        class="opacity-0 scale-0 absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white dark:bg-slate-900 py-1 shadow-lg ring-1 ring-black/5 dark:ring-white/10 focus:outline-none transform"
                        role="menu" id="profile_dropdown_menu" aria-orientation="vertical"
                        aria-labelledby="user-menu-button" tabindex="-1">
                        <!-- Active: "bg-gray-100 outline-none", Not Active: "" -->
                        <a href="/store/settings/profile"
                           class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300" role="menuitem"
                           tabindex="-1"
                           id="user-menu-item-0">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300" role="menuitem"
                           tabindex="-1"
                           id="user-menu-item-1">Settings</a>
                        <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300"
                           role="menuitem" tabindex="-1"
                           id="user-menu-item-2">Sign out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="mobile-menu hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#"
               class="block rounded-md dark:bg-slate-900 bg-gray-300 px-3 py-2 text-base font-medium dark:text-white"
               aria-current="page">Dashboard</a>
            <a href="#"
               class="block rounded-md px-3 py-2 text-base font-medium dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">Team</a>
            <a href="#"
               class="block rounded-md px-3 py-2 text-base font-medium dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">Projects</a>
            <a href="#"
               class="block rounded-md px-3 py-2 text-base font-medium dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">Calendar</a>
        </div>
    </div>
</nav>

<script>
    const toggleButton = document.querySelector('#close_Employee_nav');
    const mobileMenu = document.getElementById('mobile-menu');
    toggleButton.addEventListener('click', () => document.getElementById('mobile-menu').classList.toggle('hidden'));

    //profile
    const menuButton = document.getElementById('user-menu-button');
    const dropdownMenu = document.getElementById('profile_dropdown_menu');

    //notification
    const notifyButton = document.getElementById('notification_button');
    const notifyMenu = document.getElementById('notification_menu');
    menuButton.addEventListener('click', () => {
        if (dropdownMenu.classList.contains('opacity-0')) {
            dropdownMenu.classList.remove('opacity-0', 'scale-0');
            dropdownMenu.classList.add('opacity-100', 'scale-100');
        } else {
            dropdownMenu.classList.remove('opacity-100', 'scale-100');
            dropdownMenu.classList.add('opacity-0', 'scale-0');
        }
    });
    // Match the duration of the transition
    document.addEventListener('click', (event) => {
        if (!dropdownMenu.contains(event.target) && !menuButton.contains(event.target)) {
            dropdownMenu.classList.remove('opacity-100', 'scale-100');
            dropdownMenu.classList.add('opacity-0', 'scale-0');
        }
        if (!notifyMenu.contains(event.target) && !notifyButton.contains(event.target)) {
            notifyMenu.classList.remove('opacity-100', 'scale-100');
            notifyMenu.classList.add('opacity-0', 'scale-0');
        }
    });

    notifyButton.addEventListener('click', () => {
        if (notifyMenu.classList.contains('opacity-0')) {
            notifyMenu.classList.remove('opacity-0', 'scale-0');
            notifyMenu.classList.add('opacity-100', 'scale-100');
        } else {
            notifyMenu.classList.remove('opacity-100', 'scale-100');
            notifyMenu.classList.add('opacity-0', 'scale-0');
        }
    });
    let notification = document.getElementById('notification');
    let checdiv = document.getElementById('chec-div');
    let flag3 = false;
    const notificationHandler = () => {
        if (!flag3) {
            notification.classList.add('translate-x-full');
            notification.classList.remove('translate-x-0');
            setTimeout(function() {
                checdiv.classList.add('hidden');
            }, 1000);
            flag3 = true;
        } else {
            setTimeout(function() {
                notification.classList.remove('translate-x-full');
                notification.classList.add('translate-x-0');
            }, 1000);
            checdiv.classList.remove('hidden');
            flag3 = false;
        }
    };

</script>
<style>
    @layer components {
        #profile_dropdown_menu {
            transition: all .15s ease-in-out;
        }
    }
</style>
