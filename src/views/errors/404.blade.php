<?php

use App\Main\PageData;

PageData::setPage('Page Not Found');
?>

@extends('layouts.customer.app')

@section('content')
    <main class="grid min-h-full place-items-center bg-white dark:bg-gray-900 px-6 py-24 sm:py-32 lg:px-8">
        <div class="text-center">
            <p class="text-base font-semibold text-indigo-600 dark:text-indigo-400">404</p>
            <h1 class="mt-4 text-balance text-5xl font-semibold tracking-tight text-gray-900 dark:text-white sm:text-7xl">
                صفحه موجود نیست.
            </h1>
            <p class="mt-6 text-pretty text-lg font-medium text-gray-500 dark:text-gray-400 sm:text-xl/8">
                با معذرت، صفحهٔ مورد نظر شما موجود نیست.
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="/"
                   class="rounded-md bg-indigo-600 dark:bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 dark:hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:focus-visible:outline-indigo-400">
                    صفحه اصلی
                </a>
                <a href="/contact" class="text-sm font-semibold text-gray-900 dark:text-gray-200">ارتباط با بخش
                    خدمات<span
                            aria-hidden="true">&larr;</span></a>
            </div>
        </div>
    </main>
@endsection
