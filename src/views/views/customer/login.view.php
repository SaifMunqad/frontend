<?php

use controllers\GlobalMethods;

GlobalMethods::setPage('Login');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require "includes/header/head.include.php" ?>
</head>
<body>
<!-- component -->
<div class="h-screen md:flex">
    <div class="relative overflow-hidden md:flex w-1/2 justify-around items-center hidden">
        <div class=""><img
                src="/resources/images/login3.jpg" alt="Background Image"
                class="w-full h-full object-cover">
        </div>
        <!-- Logo Image --> <img src="/resources/images/company_logo.png"
                                 alt="Logo Image"
                                 class="absolute top-10 left-10 h-6">
    </div>
    <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
        <form class="bg-white" method="post" id="login">
            <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello!</h1>
            <p class="text-sm font-normal text-gray-600 mb-7">Welcome back</p>

            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"/>
                </svg>
                <input class="pl-2 outline-none border-none" type="text" name="username" id=""
                       placeholder="Username" required/>
            </div>

            <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                     fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                          clip-rule="evenodd"/>
                </svg>
                <input class="pl-2 outline-none border-none" type="text" name="password" id="password"
                       placeholder="Password" required/>
            </div>
            <button type="submit"
                    class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login
            </button>
            <a href="/login/forgot" class="text-sm ml-2 hover:text-blue-500 cursor-pointer">Forgot Password?</a>

            <!-- Register Section -->
            <div class="flex items-center justify-center mt-6"><p class="text-gray-700">Not a member?</p> <a
                    href="/register" class="ml-1 text-gray-800 font-bold underline">Register</a></div>


            <a href="#"
               class="block w-full bg-white py-2 mt-2 rounded-2xl text-gray-700 font-semibold mb-2 flex items-center justify-center border border-gray-300">
                <img src="https://image.similarpng.com/very-thumbnail/2020/06/Logo-google-icon-PNG.png"
                     alt="Google Icon"
                     class="w-5 h-5 mr-2 ml-4 text-left"/>
                Google login
            </a>
        </form>
    </div>
</div>
<script>
    document.getElementById('login').onsubmit = function () {
        this.action = '/controllers/register'; // Set the action URL dynamically
    }
</script>
</body>
