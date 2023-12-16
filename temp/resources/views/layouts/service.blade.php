<!DOCTYPE html>
<html>
<head>
    <title>Service</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/header.css', 'resources/css/footer.css'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> {{-- ini buat apa ? --}}
</head>
<body>
    @include('includes.header')

    @yield('content')

    @include('includes.footer')
</body>
</html>