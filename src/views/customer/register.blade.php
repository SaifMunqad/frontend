<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="font-sans dark:bg-gray-900">
<div class="h-screen md:flex">
    <div class="relative overflow-hidden md:flex w-1/2 justify-around items-center hidden">
        <div class="">
            <img src="{{ asset('images/login3.jpg') }}" alt="Background Image" class="w-full h-full object-cover">
        </div>
        <!-- Logo Image -->
        <img src="{{ asset('images/company_logo.png') }}" alt="Logo Image" class="absolute top-10 left-10 h-6">
    </div>
    <div class="flex md:w-1/2 justify-center py-10 items-center bg-white dark:bg-gray-900">
        <form class="bg-white dark:bg-gray-900" method="post" id="login">
            <h1 class="text-gray-800 dark:text-gray-100 font-bold text-2xl mb-1">Hello!</h1>
            <p class="text-sm font-normal text-gray-600 dark:text-gray-400 mb-7">Welcome back</p>
            <div class="flex items-center border-2 border-gray-300 dark:border-gray-700 py-2 px-3 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                     fill="currentColor">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                          clip-rule="evenodd"/>
                </svg>
                <input class="pl-2 outline-none border-none bg-transparent text-gray-900 dark:text-gray-100" type="text" name="fullname" id="" pattern="[a-zA-Z ]+"
                       title="Password must contain only letters and space."
                       required
                       placeholder="Full name"/>
            </div>
            <div class="flex items-center border-2 border-gray-300 dark:border-gray-700 py-2 px-3 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"/>
                </svg>
                <input class="pl-2 outline-none border-none bg-transparent text-gray-900 dark:text-gray-100" type="text" name="username" id="" pattern="[a-zA-Z0-9]+"
                       title="Password must contain only letters and numbers."
                       required
                       placeholder="Username"/>
            </div>
            <div class="flex items-center border-2 border-gray-300 dark:border-gray-700 py-2 px-3 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                </svg>
                <input class="pl-2 outline-none border-none bg-transparent text-gray-900 dark:text-gray-100" type="email" name="email" id="email"
                       title="Please enter a valid email address."
                       required
                       placeholder="Email Address"/>
            </div>
            <div class="flex items-center border-2 border-gray-300 dark:border-gray-700 py-2 px-3 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                     fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                          clip-rule="evenodd"/>
                </svg>
                <input class="pl-2 outline-none border-none bg-transparent text-gray-900 dark:text-gray-100" type="password" name="password" id="password" required
                       title="Password must be at least 8 characters long, contain at least one uppercase letter, one lowercase letter, one number, and one special character."
                       pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}"
                       placeholder="Password"/>
                <span
                    class="absolute bottom-0 left-0 w-64 p-2 text-sm text-white bg-gray-800 rounded opacity-0 transition-opacity duration-300"> Password must be at least 8 characters long, contain at least one uppercase letter, one lowercase letter, one number, and one special character. </span>
            </div>
            <button type="submit"
                    class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Signup
            </button>

            <!-- Login Section -->
            <div class="flex items-center justify-center mt-6"><p class="text-gray-700 dark:text-gray-400">Already a member?</p> <a
                    href="/login" class="ml-1 text-gray-800 dark:text-gray-100 font-bold underline">Login</a></div>

        </form>
    </div>
</div>
<script>
    document.getElementById('register').onsubmit = function () {
        this.action = '/controllers/register'; // Set the action URL dynamically
    }

</script>
</body>
