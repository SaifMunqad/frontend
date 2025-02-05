<?php

use App\Main\PageData;

PageData::setPage('Employees');
PageData::setDescription('Review each Employee before edit or delete!');
?>

@extends('layouts.employee.app')
@section('content')
    <div class=" mr-3 mb-3 rounded-md lg:col-span-2 dark:bg-gray-900 text-gray-700 dark:text-gray-300">
        <div class="relative mx-4 mt-4 overflow-hidden">
            <x-employee.title :title="PageData::getPage()" :description="PageData::getDescription()">
                <a
                    class="flex select-none items-center gap-2 rounded bg-indigo-600 dark:bg-gray-800 dark:bg-gray-700 py-2.5 px-4 text-xs font-semibold text-white shadow-md hover:bg-gray-700 dark:hover:bg-gray-600 transition-all"
                    href="/store/hr/employee/add"
                    type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z"/>
                    </svg>
                    Add Employee
                </a>
            </x-employee.title>
        </div>

        <x-employee.tables.tableHead :tableHeads="$tableHeads">
            @foreach($employees as $employee)
                <tr class="bg-gray-100 dark:bg-gray-800">
                    <td class="px-6 py-2 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="https://i.pravatar.cc/150?img=1" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900 dark:text-gray-300">
                                    {{ $employee['employee_name'] }}
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-2 whitespace-nowrap">
                    <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">
                        {{ $employee['employee_status'] }}
                    </span>
                    </td>
                    <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                        {{ $employee['employee_role'] }}
                    </td>
                    <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                        {{ $employee['employee_email'] }}
                    </td>
                    <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                        {{ '+937'. random_int(10000000,99999999) }}
                    </td>
                    <td class="px-6 py-2 whitespace-nowrap text-sm font-medium">
                        <a href="#"
                           class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-300">View</a>
                        <a href="#"
                           class="ml-2 text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300">Fire</a>
                    </td>
                </tr>

            @endforeach
        </x-employee.tables.tableHead>

    </div>
@endsection
