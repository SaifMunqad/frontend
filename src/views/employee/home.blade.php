<?php

use App\Main\PageData;

PageData::setPage('Home');

?>

@extends('layouts.employee.app')

@section('content')
    {{--    @dd(StaticData::getPage())--}}
    <div class="mx-auto max-w-6xl mt-6">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6 max-w-screen-lg mx-auto">
            <div
                class="bg-white dark:bg-gray-950 rounded-md p-6 shadow-lg shadow-black/10">
                <div class="flex justify-between mb-6">
                    <div>
                        <div class="flex items-center mb-1">
                            <div class="text-2xl font-semibold dark:text-gray-200">2254635423</div>
                        </div>
                        <div class="text-sm font-medium text-gray-400 dark:text-gray-500">Customers</div>
                    </div>
                </div>
                <a href="/gebruikers"
                   class="text-[#f84525] font-medium text-sm hover:text-red-800 dark:hover:text-red-600">View</a>
            </div>
            <div
                class="bg-white dark:bg-gray-950 rounded-md  p-6 shadow-lg shadow-black/10">
                <div class="flex justify-between mb-4">
                    <div>
                        <div class="flex items-center mb-1">
                            <div class="text-2xl font-semibold dark:text-gray-200">23</div>
                            <div
                                class="p-1 rounded bg-emerald-500/10 text-emerald-500 text-[12px] font-semibold leading-none ml-2 dark:bg-emerald-700/10 dark:text-emerald-400">
                                +30%
                            </div>
                        </div>
                        <div class="text-sm font-medium text-gray-400 dark:text-gray-500">Stores</div>
                    </div>
                </div>
                <a href="/dierenartsen"
                   class="text-[#f84525] font-medium text-sm hover:text-red-800 dark:hover:text-red-600">View</a>
            </div>
            <div
                class="bg-white dark:bg-gray-950 rounded-md  p-6 shadow-lg shadow-black/10">
                <div class="flex justify-between mb-6">
                    <div>
                        <div class="text-2xl font-semibold mb-1 dark:text-gray-200">2535</div>
                        <div class="text-sm font-medium text-gray-400 dark:text-gray-500">Products</div>
                    </div>
                </div>
                <a href=""
                   class="text-[#f84525] font-medium text-sm hover:text-red-800 dark:hover:text-red-600">View</a>
            </div>

        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6 max-w-screen-lg mx-auto">
            <div
                class="p-6 relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg shadow-black/30 rounded">
                <div class="rounded-t mb-0 px-0 border-0">
                    <div class="flex flex-wrap items-center px-4 py-2">
                        <div class="relative w-full max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Users</h3>
                        </div>
                    </div>
                    <div class="block w-full overflow-auto max-h-96">
                        <table class="items-center w-full bg-transparent border-collapse">
                            <thead>
                            <tr>
                                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Role
                                </th>
                                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Amount
                                </th>
                                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr class="text-gray-700 dark:text-gray-100">
                                    <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                        {{ $role['role'] }}
                                    </th>
                                    <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{ $role['role_amount'] }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-900 shadow-lg shadow-black/30 p-6 rounded-md">
                <div class="flex justify-between mb-4 items-start">
                    <div class="font-medium text-gray-600 dark:text-gray-200">Activities</div>
                </div>
                <div class="overflow-y-auto max-h-96">
                    <table class="w-full">
                        <tbody class="overflow-y-auto">
                        @foreach($user_activity as $activity)
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-50 dark:border-gray-700">
                                    <div class="flex items-center">
                                        <a href="#"
                                           class="text-gray-600 dark:text-gray-400 text-sm font-medium hover:text-blue-500 dark:hover:text-blue-400 ml-2 truncate">{{ $activity["name"] }}</a>
                                    </div>
                                </td>
                                <td class="py-2 px-4 border-b border-gray-50 dark:border-gray-700">
                                    <span
                                        class="text-[13px] font-medium text-gray-400 dark:text-gray-500">{{ $activity["activity_time"] }}</span>
                                </td>
                                <td class="py-2 px-4 border-b border-gray-50 dark:border-gray-700">
                                    <span
                                        class="text-[13px] font-medium text-gray-400 dark:text-gray-500">{{ $activity["activity_type"] }}</span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6 max-w-screen-lg mx-auto">
            <div
                class="bg-white dark:bg-gray-950 shadow-lg shadow-black/30 p-6 rounded-md lg:col-span-2">
                <div class="flex justify-between mb-4 items-start">
                    <div class="font-medium text-gray-900 dark:text-gray-100">Daily View Chart</div>
                </div>
                <div class="max-w-6xl mx-auto py-8">
                    <h1 class="text-xl text-center font-medium text-gray-900 dark:text-gray-100">Views of 30 days</h1>
                    <div class="flex justify-center">
                        <?php
                        $chartId = 'Monthly Views';
                        $chartName = 'Views';
                        $chartType = 'bar';
                        ?>
                        <x-employee.chart :chartId="$chartId" :chartData="$monthly_views" :labelName="$chartName"
                                          :chartType="$chartType"/>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-800 shadow-lg shadow-black/30 p-6 rounded-md">
                <div class="flex justify-between mb-4 items-start">
                    <div class="font-medium text-gray-900 dark:text-gray-100">Daily Views Table</div>
                    <div class="font-medium text-gray-900 dark:text-gray-100"></div>

                </div>
                <div class="overflow-auto max-h-96">
                    <table class="w-full">
                        <thead class="">
                        <tr class="bg-gray-100 dark:bg-gray-950 text-gray-400 text-xs font-medium uppercase">
                            <th class="tracking-wide py-2 px-4 text-left rounded-tl-md rounded-bl-md">
                                Day
                            </th>
                            <th class="tracking-wide py-2 px-4 text-left rounded-tr-md rounded-br-md">
                                Views
                            </th>
                        </tr>
                        </thead>
                        <tbody class="overflow-y-auto">
                        @foreach($monthly_views as $day)
                            @foreach($day as $label => $value)
                                <tr class="text-xs">
                                    <td class="py-2 px-4 border-b border-b-gray-50">
                                        <div class="flex items-center">
                                            <a
                                                class="text-gray-600 dark:text-gray-300 ml-2 truncate">{{$label}}</a>
                                        </div>
                                    </td>
                                    <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span
                                        class="font-medium text-emerald-700 dark:text-emerald-500">{{$value}}</span>
                                    </td>
                                </tr>

                            @endforeach
                        @endforeach
                        <tr class="text-md">
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                <div class="flex items-center">
                                    <a
                                        class="text-gray-600 dark:text-gray-300 ml-2 truncate text-md font-medium">Total</a>
                                </div>
                            </td>
                            <td class="py-2 px-4 border-b border-b-gray-50">
                                    <span
                                        class="font-medium text-emerald-700 dark:text-emerald-500">@php $total = 0 ; foreach ($monthly_views as $view){
    $total += Illuminate\Support\Arr::first($view);
 } @endphp {{$total}}</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <script>
    </script>
@endsection
