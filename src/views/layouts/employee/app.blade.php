@php use App\Main\PageData; @endphp
        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{PageData::getPage()}}</title>
    <link rel="icon" href="{{ asset('images/company_icon.png') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-sans  antialiased dark:bg-gray-900">

@include('partials/employee/nav')
<div class="min-h-screen flex">
    @include('partials/employee/sidebar')
    <main
            class="flex-1 mt-16 ml-16 mr-3 mb-3 rtl:ml-3 rtl:mr-16 bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-700 shadow-md shadow-black/5 p-6  rounded-md lg:col-span-2">

        @yield('content')

    </main>

</div>

<script>

</script>
<style>
    .overflow-auto {
        max-height: /* Set your desired maximum height */;
        overflow-y: scroll; /* Ensure the overflow is functional */
    }

    /* Hide the scrollbar but make it functional */
    .overflow-auto::-webkit-scrollbar {
        width: 0; /* This hides the scrollbar */
    }

    .overflow-auto::-webkit-scrollbar-track {
        background: transparent;
    }

    .overflow-auto::-webkit-scrollbar-thumb {
        background: transparent;
    }

    /* For other browsers, ensure overflow is functional */
    .overflow-auto {
        -ms-overflow-style: none; /* IE and Edge */
        scrollbar-width: none; /* Firefox */
    }

</style>
<script>
  function autoResize (textarea) {
    textarea.style.height = 'auto';
    textarea.style.height = (textarea.scrollHeight) + 'px';
  }

  document.addEventListener('DOMContentLoaded', function () {
    const textareas = document.querySelectorAll('textarea');
    textareas.forEach(textarea => {
      autoResize(textarea);
      textarea.addEventListener('input', () => autoResize(textarea));
    });
  });
</script>
</body>
</html>
