<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Not found</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="dark:bg-gray-900">
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
            <a href="/contact" class="text-sm font-semibold text-gray-900 dark:text-gray-200">ارتباط با بخش خدمات<span
                    aria-hidden="true">&larr;</span></a>
        </div>
    </div>
</main>
</body>
</html>

