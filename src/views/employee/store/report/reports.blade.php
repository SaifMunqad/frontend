<?php

use App\Main\PageData;

PageData::setPage('Reports');
?>

@extends('layouts.employee.app')
@section('content')

    <div class="max-w-7xl mx-auto">
        <x-employee.title :title="PageData::getPage()" description="Responsible for overseeing operations"/>
    </div>
    <div class="grid gap-14 max-w-7xl mx-auto md:grid-cols-3 md:gap-5 p-6">
        @for($i=0;$i<3;$i++)
            <a href="#"
               class="group min-w-full relative cursor-pointer overflow-hidden bg-white dark:bg-gray-800 px-4 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 dark:ring-gray-600 transition-all duration-200 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm rounded-lg sm:px-10">
                <span
                    class="absolute top-10 h-20 w-20 rounded-full bg-sky-500 dark:bg-sky-700 transition-all duration-300 group-hover:scale-[10]"></span>
                <div class="relative mx-auto max-w-md">
                        <span
                            class="grid h-20 w-20 place-items-center rounded-full bg-sky-500 dark:bg-sky-700 transition-all duration-300 group-hover:bg-sky-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="h-10 w-10 text-white transition-all">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/>
                            </svg>
                        </span>
                    <span class="absolute dark:text-white dark:hover:bg-gray-500 p-1 rounded top-3 right-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="size-6">
                                <path fill-rule="evenodd"
                                      d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                                      clip-rule="evenodd"/>
                            </svg>

                        </span>
                    <div
                        class="space-y-6 pt-5 text-base leading-7 text-gray-600 dark:text-gray-300 transition-all duration-300 group-hover:text-white/90">
                        <p class="text-xl text-gray-700 dark:text-gray-300">Pinned Report {{$i+1}}</p>

                    </div>
                </div>
            </a>

        @endfor
    </div>

    <div
        class="flex justify-between mx-auto min-w-screen max-w-7xl md:pt-8 text-left px-6 sm:px-4 md:px-2 lg:px-0 dark:bg-gray-900 dark:text-white">
        <p class="relative text-xl text-gray-700 dark:text-gray-300">Other Reports</p>
        <div class="relative w-full lg:max-w-xl">
            <label for="Search" class="sr-only">Search</label>
            <input
                type="text"
                id="Search"
                placeholder="Search for..."
                class="w-full px-4 rounded-md ring-1 ring-gray-200 dark:ring-gray-500 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 py-2.5 pe-10 shadow-sm sm:text-sm"
            />
            <span class="absolute inset-y-0 end-0 grid w-10 place-content-center">
            <button type="submit" class="text-gray-600 dark:text-gray-300 hover:text-gray-700 dark:hover:text-white">
                <span class="sr-only">Search</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
                    />
                </svg>
            </button>
        </span>
        </div>
    </div>



    <div class="w-full pt-12 p-4 max-w-7xl mx-auto">
        <div class="grid gap-14 md:grid-cols-3 md:gap-5">
            @for($i=0;$i<12;$i++)
                <a href="/store/report/{{$i}}"
                   class="rounded-xl bg-white  hover:-translate-y-1 dark:bg-gray-800 shadow-xl transition hover:opacity-85 p-6 my-2 text-center ring-1 dark:ring-gray-600">
                    <div
                        class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-teal-400 dark:bg-teal-600 shadow-lg shadow-teal-500/40">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="size-6">
                            <path fill-rule="evenodd"
                                  d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
                                  clip-rule="evenodd"/>
                            <path
                                d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z"/>
                        </svg>
                    </div>

                    <h1 class="text-darken mb-3 text-xl font-medium lg:px-14 dark:text-gray-300">TREE AND SHRUB
                        PRUNING</h1>
                    <p class="px-4 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Quo iure
                        inventore amet modi accusantium vero perspiciatis, incidunt dicta sed aspernatur!</p>
                </a>

            @endfor
        </div>
    </div>

@endsection
