<?php

use App\Main\PageData;

PageData::setPage('Employee');
?>

@extends('layouts.employee.app')
@section('content')
    <form method="POST" class="mx-auto mt-4 max-w-7xl sm:mt-6">
        <div class="relative mt-4 overflow-hidden">
            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Add Employee</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Please fill this form to add a new employee!</p>
                </div>
                <div class="flex flex-col space-y-4 sm:space-y-0 sm:flex-row sm:space-x-6 items-center">
                    <div class="flex flex-col items-center sm:flex-row sm:space-x-6">
                        <div class="shrink-0">
                            <img id="preview_img" class="h-16 w-16 shadow-sm object-cover rounded-full"
                                 src="https://www.uparcel.sg/static/uparceldelivery/img/block/men-placeholder.png"
                                 alt="profile photo"/>
                        </div>
                        <label class="block mt-2 sm:mt-0">
                            <span class="sr-only">Choose profile photo</span>
                            <input type="file"
                                   accept="image/*"
                                   required
                                   onchange="loadProfile(event)"
                                   class="block w-full text-sm text-slate-800 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 dark:file:bg-gray-700 file:text-gray-300 hover:file:bg-gray-800 dark:text-gray-100"/>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-2 dark:bg-gray-900 dark:text-white">
            <h1 class="text-md font-semibold tracking-tight text-gray-900 dark:text-white pt-4 pb-2">Employee
                Information</h1>
        </div>
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 md:grid-cols-3">
            <div>
                <label for="first-name" class="block text-xs font-semibold text-gray-900 dark:text-gray-100">First
                    Name</label>
                <div class="mt-2.5">
                    <input type="text" name="product-name" id="first-name"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                </div>
            </div>
            <div>
                <label for="last-name" class="block text-xs font-semibold text-gray-900 dark:text-gray-100">Last
                    Name</label>
                <div class="mt-2.5">
                    <input type="text" name="product-name" id="last-name"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                </div>
            </div>
            <div>
                <label for="last-name" class="block text-xs font-semibold text-gray-900 dark:text-gray-100">Father's
                    Name</label>
                <div class="mt-2.5">
                    <input type="text" name="product-name" id="last-name"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                </div>
            </div>
            <div>
                <label for="last-name" class="block text-xs font-semibold text-gray-900 dark:text-gray-100">Grandfather's
                    Name</label>
                <div class="mt-2.5">
                    <input type="text" name="product-name" id="last-name"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                </div>
            </div>
            <div>
                <label for="user-name"
                       class="block text-xs font-semibold text-gray-900 dark:text-gray-100 flex items-center space-x-2">
                    Username
                    <span class="relative group flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-4 w-4 text-gray-500 dark:text-gray-300"
                             viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M12 2a10 10 0 100 20 10 10 0 000-20zM11 7a1 1 0 012 0v4a1 1 0 01-2 0V7zm1 8a1.25 1.25 0 110-2.5 1.25 1.25 0 010 2.5z"
                                  clip-rule="evenodd"/>
                        </svg>
                    <span
                            class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-2 w-56 px-3 py-2 text-xs text-white bg-black rounded-lg opacity-0 scale-0 group-hover:scale-100 group-hover:opacity-100 transition-transform duration-200 origin-bottom">Each username must be unique and can only be associated with a single account.</span>
                    </span>
                </label>
                <div class="mt-2.5">
                    <input type="text" name="user-name" id="user-name"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                </div>
            </div>

            <div>
                <label for="password"
                       class="block text-xs font-semibold text-gray-900 dark:text-gray-100">Password</label>
                <div class="mt-2.5">
                    <input type="password" name="product-name" id="password"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                </div>
            </div>
            <div>
                <label for="verify-password" class="block flex text-xs font-semibold text-gray-900 dark:text-gray-100">ID
                    Card Number
                    <span class="mx-1 relative group flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-4 w-4 text-gray-500 dark:text-gray-300"
                             viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M12 2a10 10 0 100 20 10 10 0 000-20zM11 7a1 1 0 012 0v4a1 1 0 01-2 0V7zm1 8a1.25 1.25 0 110-2.5 1.25 1.25 0 010 2.5z"
                                  clip-rule="evenodd"/>
                        </svg>
                    <span
                            class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-2 w-56 px-3 py-2 text-xs text-white bg-black rounded-lg opacity-0 scale-0 group-hover:scale-100 group-hover:opacity-100 transition-transform duration-200 origin-bottom">E-Tazkera Number (only, no passport or other IDs)</span>
                    </span>
                </label>
                <div class="mt-2.5">
                    <input type="text" name="product-name" id="verify-password"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                </div>
            </div>
            <div>
                <label for="email" class="block text-xs font-semibold text-gray-900 dark:text-gray-100">Email</label>
                <div class="mt-2.5">
                    <input type="email" name="product-name" id="email" required
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                </div>
            </div>
            <div>
                <label for="phone" class="block text-xs font-semibold text-gray-900 dark:text-gray-100">Phone</label>
                <div class="mt-2.5 relative flex items-center">
                    <button type="button"
                            class="absolute left-0 top-0 h-full w-16 bg-indigo-600 text-white text-xs rounded-l-md shadow-sm cursor-default">
                        +93
                    </button>
                    <input type="text" name="phone" id="phone" pattern="[0-9]*" inputmode="numeric"
                           class="block w-full rounded-md border-0 pl-20 pr-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs"
                           required>
                </div>
            </div>

            <div>
                <label for="date-birth" class="block text-xs font-semibold text-gray-900 dark:text-gray-100">Date of
                    birth</label>
                <div class="mt-2.5">
                    <input type="date" name="date-birth" id="product-name"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                </div>
            </div>
            <div>
                <label for="language"
                       class="block text-xs font-semibold text-gray-900 dark:text-gray-100">Language</label>
                <div class="mt-2.5">
                    <select name="category-name" id="language"
                            class="block w-full max-h-40 overflow-y-auto rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                        <option value="Category1">English</option>
                        <option value="Category2">Pashto</option>
                        <option value="Category2">Dari</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 md:grid-cols-3">
            <div class="sm:col-span-2 md:col-span-3 mt-4 dark:bg-gray-900 dark:text-white">
                <div class="flex flex-col md:flex-row md:space-x-4">
                    <div class="flex-1 mt-4 md:mt-0">
                        <label for="descriptions" class="block text-xs font-semibold text-gray-900 dark:text-white">Descriptions</label>
                        <div class="mt-2.5">
                            <textarea name="descriptions" id="descriptions" rows="1" oninput="autoResize()"
                                      class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs"></textarea>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="mt-4 dark:bg-gray-900 dark:text-white">
            <h1 class="text-balance text-md font-semibold tracking-tight text-gray-900 dark:text-white pt-4 pb-2">
                Contract</h1>
        </div>
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 md:grid-cols-3 dark:bg-gray-900 dark:text-white">
            <div class="dark:bg-gray-900 dark:text-white">
                <label for="brand-name" class="block text-xs font-semibold text-gray-900 dark:text-white">User
                    Role</label>
                <div class="mt-2.5">
                    <select name="brand-name" id="brand-name" onchange="handleSelectChange(this)"
                            class="block w-full max-h-40 overflow-y-auto rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                        <option value="brand1">Role 1</option>
                        <option value="brand2">Role 2</option>
                        <option value="brand3">Role 3</option>
                        <option value="AddBrand"
                                class="text-center text-white bg-blue-800 hover:bg-gray-300 dark:bg-blue-600 dark:hover:bg-gray-500">
                            Add New
                        </option>
                    </select>
                </div>
            </div>
            <div>
                <label for="start-date" class="block text-xs font-semibold text-gray-900 dark:text-gray-100">Contract
                    Start</label>
                <div class="mt-2.5">
                    <input type="date" name="product-name" id="start-date"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                </div>
            </div>
            <div>
                <label for="end-date" class="block text-xs font-semibold text-gray-900 dark:text-gray-100">Contract
                    End</label>
                <div class="mt-2.5">
                    <input type="date" name="product-name" id="end-date"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                </div>
            </div>
            <div>
                <label for="tin" class="block text-xs font-semibold flex text-gray-900 dark:text-gray-100">TIN
                    (Taxpayer Identification Number)
                    <span class="ml-1 relative group flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-4 w-4 text-gray-500 dark:text-gray-300"
                             viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M12 2a10 10 0 100 20 10 10 0 000-20zM11 7a1 1 0 012 0v4a1 1 0 01-2 0V7zm1 8a1.25 1.25 0 110-2.5 1.25 1.25 0 010 2.5z"
                                  clip-rule="evenodd"/>
                        </svg>
                    <span
                            class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-2 w-56 px-3 py-2 text-xs text-white bg-black rounded-lg opacity-0 scale-0 group-hover:scale-100 group-hover:opacity-100 transition-transform duration-200 origin-bottom">The TIN is used by government agencies to track financial transactions and ensure proper crediting of payments. It helps in efficient tax administration and compliance.</span>
                    </span>
                </label>
                <div class="mt-2.5">
                    <input type="text" name="tin" id="tin"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                </div>
            </div>
            <div>
                <label for="salary"
                       class="block text-xs font-semibold text-gray-900 dark:text-gray-100 flex items-center space-x-2">
                    Salary per Month
                    <span class="ml-1 relative group flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-4 w-4 text-gray-500 dark:text-gray-300"
                             viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M12 2a10 10 0 100 20 10 10 0 000-20zM11 7a1 1 0 012 0v4a1 1 0 01-2 0V7zm1 8a1.25 1.25 0 110-2.5 1.25 1.25 0 010 2.5z"
                                  clip-rule="evenodd"/>
                        </svg>
                    <span
                            class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-2 w-56 px-3 py-2 text-xs text-white bg-black rounded-lg opacity-0 scale-0 group-hover:scale-100 group-hover:opacity-100 transition-transform duration-200 origin-bottom">For positions without a specified salary, please leave the field blank.</span>
                    </span>
                </label>
                <div class="mt-2.5">
                    <input type="number" name="user-name" id="salary"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                </div>
            </div>

            <div>
                <label for="deduction"
                       class="block text-xs font-semibold text-gray-900 dark:text-gray-100">Deduction per Day</label>
                <div class="mt-2.5">
                    <input type="number" name="deduction" id="deduction"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                </div>
            </div>
            <div>
                <label for="guarantee"
                       class="block text-xs font-semibold text-gray-900 dark:text-gray-100">Guarantee Amount</label>
                <div class="mt-2.5">
                    <input type="number" name="deduction" id="guarantee"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                </div>
            </div>
            <div>
                <label for="guarantee-month"
                       class="block text-xs font-semibold text-gray-900 dark:text-gray-100">Guarantee per Month</label>
                <div class="mt-2.5">
                    <input type="number" name="deduction" id="guarantee-month"
                           class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                </div>
            </div>

        </div>


        <div class="mt-4 dark:bg-gray-900 dark:text-white">
            <h1 class="text-balance text-md font-semibold tracking-tight text-gray-900 dark:text-white pt-4 pb-2">
                Document Photos</h1>
        </div>
        <div
                class="w-full relative z-0 border-2 border-gray-300 dark:border-gray-600 border-dashed rounded-lg p-6 dark:bg-gray-800"
                id="dropzone">
            <input type="file" id="file-upload" name="file-upload" multiple
                   accept=".png, .jpg, .jpeg, .gif, .bmp, .webp"
                   class="absolute inset-0 w-full h-full opacity-0 z-0"/>
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 fill-black dark:fill-gray-200"
                     viewBox="0 0 24 24">
                    <path
                            d="M19,13a1,1,0,0,0-1,1v.38L16.52,12.9a2.79,2.79,0,0,0-3.93,0l-.7.7L9.41,11.12a2.85,2.85,0,0,0-3.93,0L4,12.6V7A1,1,0,0,1,5,6h7a1,1,0,0,0,0-2H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V14A1,1,0,0,0,19,13ZM5,20a1,1,0,0,1-1-1V15.43l2.9-2.9a.79.79,0,0,1,1.09,0l3.17,3.17,0,0L15.46,20Zm13-1a.89.89,0,0,1-.18.53L13.31,15l.7-.7a.77.77,0,0,1,1.1,0L18,17.21ZM22.71,4.29l-3-3a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-3,3a1,1,0,0,0,1.42,1.42L18,4.41V10a1,1,0,0,0,2,0V4.41l1.29,1.3a1,1,0,0,0,1.42,0A1,1,0,0,0,22.71,4.29Z"/>
                </svg>
                <h3 class="mt-2 text-xs font-medium text-gray-900 dark:text-white">
                    <label for="file-upload" class="relative cursor-pointer">
                        <span>Drag and drop</span>
                        <span class="text-indigo-600 dark:text-indigo-400"> or browse</span>
                        <span>to upload</span>
                    </label>
                </h3>
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                    PNG, JPG, GIF up to 200KB / Photo
                </p>
            </div>
            <div id="preview-thumbnails" class="mt-4 flex justify-center space-x-2"></div>
        </div>


        <div class="mt-4 dark:bg-gray-900 dark:text-white">
            <div class="flex ">
                <label for="default-checkbox"
                       class="text-balance text-md font-semibold tracking-tight text-gray-900 dark:text-white pt-4 pb-2">References</label>
                <div class="flex items-center p-1">
                    <input id="default-checkbox" type="checkbox"
                           class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                </div>
            </div>
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 md:grid-cols-3">
                <div>
                    <label for="first-name" class="block text-xs font-semibold text-gray-900 dark:text-gray-100">First
                        Name</label>
                    <div class="mt-2.5">
                        <input type="text" name="product-name" id="first-name"
                               class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                    </div>
                </div>
                <div>
                    <label for="last-name" class="block text-xs font-semibold text-gray-900 dark:text-gray-100">Last
                        Name</label>
                    <div class="mt-2.5">
                        <input type="text" name="product-name" id="last-name"
                               class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                    </div>
                </div>
                <div>
                    <label for="last-name" class="block text-xs font-semibold text-gray-900 dark:text-gray-100">Father's
                        Name</label>
                    <div class="mt-2.5">
                        <input type="text" name="product-name" id="last-name"
                               class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                    </div>
                </div>
                <div>
                    <label for="user-name"
                           class="block text-xs font-semibold text-gray-900 dark:text-gray-100 flex items-center space-x-2">
                        Username
                        <span class="relative group flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-4 w-4 text-gray-500 dark:text-gray-300"
                             viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M12 2a10 10 0 100 20 10 10 0 000-20zM11 7a1 1 0 012 0v4a1 1 0 01-2 0V7zm1 8a1.25 1.25 0 110-2.5 1.25 1.25 0 010 2.5z"
                                  clip-rule="evenodd"/>
                        </svg>
                    <span
                            class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-2 w-56 px-3 py-2 text-xs text-white bg-black rounded-lg opacity-0 scale-0 group-hover:scale-100 group-hover:opacity-100 transition-transform duration-200 origin-bottom">Each username must be unique and can only be associated with a single account.</span>
                    </span>
                    </label>
                    <div class="mt-2.5">
                        <input type="text" name="user-name" id="user-name"
                               class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                    </div>
                </div>

                <div>
                    <label for="id-card"
                           class="block flex text-xs font-semibold text-gray-900 dark:text-gray-100">ID
                        Card Number
                        <span class="mx-1 relative group flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-4 w-4 text-gray-500 dark:text-gray-300"
                             viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M12 2a10 10 0 100 20 10 10 0 000-20zM11 7a1 1 0 012 0v4a1 1 0 01-2 0V7zm1 8a1.25 1.25 0 110-2.5 1.25 1.25 0 010 2.5z"
                                  clip-rule="evenodd"/>
                        </svg>
                    <span
                            class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-2 w-56 px-3 py-2 text-xs text-white bg-black rounded-lg opacity-0 scale-0 group-hover:scale-100 group-hover:opacity-100 transition-transform duration-200 origin-bottom">E-Tazkera Number (only, no passport or other IDs)</span>
                    </span>
                    </label>
                    <div class="mt-2.5">
                        <input type="text" name="product-name" id="id-card"
                               class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                    </div>
                </div>
                <div>
                    <label for="email"
                           class="block text-xs font-semibold text-gray-900 dark:text-gray-100">Email</label>
                    <div class="mt-2.5">
                        <input type="email" name="product-name" id="email" required
                               class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                    </div>
                </div>
                <div>
                    <label for="phone"
                           class="block text-xs font-semibold text-gray-900 dark:text-gray-100">Phone</label>
                    <div class="mt-2.5 relative flex items-center">
                        <button type="button"
                                class="absolute left-0 top-0 h-full w-16 bg-indigo-600 text-white text-xs rounded-l-md shadow-sm cursor-default">
                            +93
                        </button>
                        <input type="text" name="phone" id="phone" pattern="[0-9]*" inputmode="numeric"
                               class="block w-full rounded-md border-0 pl-20 pr-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs"
                               required>
                    </div>
                </div>

                <div>
                    <label for="date-birth" class="block text-xs font-semibold text-gray-900 dark:text-gray-100">Date of
                        birth</label>
                    <div class="mt-2.5">
                        <input type="date" name="date-birth" id="product-name"
                               class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:text-gray-100 bg-white dark:bg-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs">
                    </div>
                </div>

            </div>
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 md:grid-cols-3">
                <div class="sm:col-span-2 md:col-span-3 mt-4 dark:bg-gray-900 dark:text-white">
                    <div class="flex flex-col md:flex-row md:space-x-4">
                        <div class="flex-1 mt-4 md:mt-0">
                            <label for="descriptions" class="block text-xs font-semibold text-gray-900 dark:text-white">Descriptions</label>
                            <div class="mt-2.5">
                                <textarea name="descriptions" id="descriptions" rows="1" oninput="autoResize()"
                                          class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 dark:bg-gray-700 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xs"></textarea>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="mt-10 dark:bg-gray-900 dark:text-white">
            <button type="submit"
                    class="block w-full rounded-md bg-indigo-600 hover:bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-700 dark:hover:bg-indigo-600">
                Save
            </button>
        </div>

    </form>


    <script>
      var dropzone = document.getElementById('dropzone');
      var input = document.getElementById('file-upload');

      dropzone.addEventListener('dragover', e => {
        e.preventDefault();
        dropzone.classList.add('border-indigo-600');
      });

      dropzone.addEventListener('dragleave', e => {
        e.preventDefault();
        dropzone.classList.remove('border-indigo-600');
      });

      dropzone.addEventListener('drop', e => {
        e.preventDefault();
        dropzone.classList.remove('border-indigo-600');
        var files = e.dataTransfer.files;
        displayPreviews(files);
      });

      input.addEventListener('change', e => {
        var files = e.target.files;
        displayPreviews(files);
      });

      function displayPreviews (files) {
        var previewContainer = document.getElementById('preview-thumbnails');
        previewContainer.innerHTML = ''; // Clear existing previews

        for (let i = 0; i < files.length; i++) {
          var file = files[i];
          if (file.type.startsWith('image/')) {
            var reader = new FileReader();
            reader.onload = function (e) {
              var imgElement = document.createElement('img');
              imgElement.src = e.target.result;
              imgElement.classList.add('w-6', 'h-6', 'rounded', 'border', 'shadow-sm');
              previewContainer.appendChild(imgElement);
            };
            reader.readAsDataURL(file);
          }
        }
      }

      //add brand modal controller
      function handleSelectChange (select) {
        if (select.value === 'AddBrand') {
          openBrandModal();
        } else if (select.value === 'AddCategory') {
          openCategoryModal();
        } else if (select.value === 'AddSKU') {
          openSkuModal();
        }
      }

      function openBrandModal () {
        // Get the dropdown element var
        const dropdown = document.getElementById('brand-name'); // Set the selectedIndex to 0 (first option)
        dropdown.selectedIndex = 0;
        document.getElementById('addBrandModal').classList.remove('hidden');
        document.getElementById('addBrandModal').classList.add('flex');
      }

      function openCategoryModal () {
        // Get the dropdown element var
        const dropdown = document.getElementById('category-name'); // Set the selectedIndex to 0 (first option)
        dropdown.selectedIndex = 0;
        document.getElementById('addCategoryModal').classList.remove('hidden');
        document.getElementById('addCategoryModal').classList.add('flex');
      }

      function closeBrandModal () {
        document.getElementById('addBrandModal').classList.add('hidden');
        document.getElementById('addBrandModal').classList.remove('flex');
      }

      function closeCategoryModal () {
        document.getElementById('addCategoryModal').classList.add('hidden');
        document.getElementById('addCategoryModal').classList.remove('flex');
      }

      // Handle form submission
      document.getElementById('addBrandForm').addEventListener('submit', function (event) {
        const brand_name = document.getElementsByName('new-brand-name');
        const brand_country = document.getElementsByName('new-brand-country');
        const brand_level = document.getElementsByName('new-brand-level');

        event.preventDefault();
        // Add your form submission logic here

      });
      const loadProfile = function (event) {

        const input = event.target;
        const file = input.files[0];
        const type = file.type;

        const output = document.getElementById('preview_img');

        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function () {
          URL.revokeObjectURL(output.src); // free memory
        };
      };

    </script>

@endsection
