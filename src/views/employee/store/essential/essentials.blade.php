<?php

use App\Main\PageData;

PageData::setPage('Store Essentials');
?>

@extends('layouts.employee.app')
@section('content')
    <div class=" mr-3 mb-3 rounded-md lg:col-span-2 dark:bg-gray-900 text-gray-700 dark:text-gray-300">
        <div class="relative mx-4 mt-4 overflow-hidden">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Office Essential List</h3>
                    <p class="text-gray-500 dark:text-gray-400">Review each Essential before edit or delete!</p>
                </div>
                <div class="flex flex-col gap-2 shrink-0 sm:flex-row">
                    <a
                        class="flex select-none items-center gap-2 rounded bg-indigo-600 dark:bg-gray-800 dark:bg-gray-700 py-2.5 px-4 text-xs font-semibold text-white shadow-md hover:bg-gray-700 dark:hover:bg-gray-600 transition-all"
                        href="/store/hr/employee/add"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z"/>
                        </svg>
                        Add Essential
                    </a>
                </div>
            </div>
        </div>

        <table class="mt-4 min-w-full divide-y divide-gray-200 overflow-x-auto">
            <thead class="bg-gray-50 dark:bg-gray-950">
            <tr>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                    Name
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                    Descriptions
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                    Product Price
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                    Damage Fee
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                    Is With
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                    Status
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                    Actions
                </th>
            </tr>
            </thead>

            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200">
            @foreach($employees as $employee)
                <tr class="bg-gray-100 dark:bg-gray-800">

                    <td class="px-6 py-4 whitespace-normal">
                        <div class="text-sm text-gray-900 dark:text-gray-300"> {{ $employee['product_name'] }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-normal">
                        <div
                            class="text-sm text-gray-900 dark:text-gray-300"> {{ ' Nothing to show with employee_name' }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-normal">
                        <div class="text-sm text-gray-900 dark:text-gray-300">$ {{ $employee['product_price'] }}</div>
                    </td>

                    <td class="px-6 py-4 whitespace-normal">
                        <div class="text-sm text-gray-900 dark:text-gray-300">
                            $ {{ $employee['damage_fee'] }}</div>
                    </td>

                    <td class="px-6 py-4 whitespace-normal">
                        <div class="text-sm text-gray-900 dark:text-gray-300">
                            {{ $employee['employee_name'] }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-normal">
                    <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 capitalize">
                        {{ $employee['employee_status'] }}
                    </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="#"
                           class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-300">Edit</a>
                        <a href="#"
                           class="ml-2 text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300">Delete</a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
@endsection
