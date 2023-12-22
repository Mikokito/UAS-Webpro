<!DOCTYPE html>
<html>
<head>
    <title>Ministries</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css'>
    @vite(['resources/css/ministriesPage.css', 'resources/js/ministriesPage.js', 'resources/css/header.css', 'resources/css/footer.css'])
    <style>
        body {
            overflow: hidden;
        }
    </style>
</head>
<body>
    @include('includes.header')

    @yield('content')

    @include('includes.footer')
</body>
</html>