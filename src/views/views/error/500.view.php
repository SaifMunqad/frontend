<?php
//page of 404 ERROR
use controllers\GlobalMethods;

$page = '404';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== TAILWINDCSS ===============-->
    <link href="<?= GlobalMethods::ROOT() ?>/assets/src/output.css" rel="stylesheet">
    <title>NOT FOUND</title>
</head>
<body dir="rtl">

<main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center">
        <p class="text-base font-semibold text-indigo-600">500</p>
        <h1 class="mt-4 text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
            سرور مشکل دارد
        </h1>
        <p class="mt-6 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">
            با معذرت، سرور مشکل دارد!.
        </p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="/"
               class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                صفحه اصلی
            </a>
            <a href="/contact" class="text-sm font-semibold text-gray-900">ارتباط با بخش خدمات<span
                    aria-hidden="true">&larr;</span></a>
        </div>
    </div>
</main>
</body>
</html>