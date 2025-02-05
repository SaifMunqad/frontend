@extends('layouts.employee.app')
@section('content')

    {{--    @dd($views)--}}
    <div class="mx-auto max-w-6xl mt-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6 max-w-screen-lg mx-auto">
            <div
                class="bg-white dark:bg-gray-950 shadow-lg p-6 rounded-md lg:col-span-2">
                <div class="flex justify-between mb-4 items-start">
                    <div class="font-medium text-gray-900 dark:text-gray-100">Daily View Chart</div>
                </div>
                <div class="max-w-6xl mx-auto py-8">
                    <h1 class="text-xl text-center font-medium text-gray-900 dark:text-gray-100">Views of this week</h1>
                    <div class="flex justify-center">
                        <?php
                        $chartId = 'Weekly Views';
                        $chartName = 'Views';
                        $chartType = 'bar'
                        ?>
                        <x-chart :chartId="$chartId" :chartData="$weekly_views" :labelName="$chartName"
                                 :chartType="$chartType"/>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-800 shadow-lg p-6 rounded-md overflow-auto">
                <div class="flex justify-between mb-4 items-start">
                    <div class="font-medium text-gray-900 dark:text-gray-100">Daily Views Table</div>
                </div>
                <div class="overflow-auto max-h-80">
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
                        <tbody>
                        @foreach($weekly_views as $day)
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6 max-w-screen-lg  mx-auto">
            <div
                class="bg-white dark:bg-gray-950 shadow-lg p-6 rounded-md lg:col-span-2">
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
                        <x-chart :chartId="$chartId" :chartData="$monthly_views" :labelName="$chartName"
                                 :chartType="$chartType"/>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-800 shadow-lg p-6 rounded-md">
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
                        <tbody class="overflow-y-auto ">
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

@endsection
