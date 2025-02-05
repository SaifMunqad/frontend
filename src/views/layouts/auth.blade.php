<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{\App\Main\PageData::getPage()}}</title>
    <link rel="shortcut icon" href="{{ asset('images/company_icon.png') }}" type="image/x-icon">

    {{--    SEO     --}}
    <meta name="description"
          content="Sign in to access your personalized dashboard, manage your profile, and enjoy our premium services.">

    <meta property="og:title" content="{{\App\Main\PageData::getPage()}} | Layatanahi">
    <meta property="og:description"
          content="Join Your Site Name to start managing your profile, accessing exclusive content, and more.">
    <meta property="og:image" content="{{asset('images/company_logo.png')}}">
    <meta property="og:url" content="{{\App\Main\PageData::getPage()}}">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Register - Your Site Name">
    <meta name="twitter:description"
          content="Join Your Site Name to start managing your profile, accessing exclusive content, and more.">
    <meta name="twitter:image" content="https://www.yoursitename.com/images/register-image.jpg">
    <meta name="twitter:url" content="https://www.yoursitename.com/register">

    {{--    Fonts    --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-sans antialiased dark:bg-gray-950">

@yield('content')

</body>
</html>
