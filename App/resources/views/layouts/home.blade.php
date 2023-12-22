<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/css/header.css', 'resources/css/footer.css'])
</head>
<body id="page-top" class="index" data-pinterest-extension-installed="cr1.3.4">
    @include('includes.header')

    @yield('content')

    @include('includes.footer')
</body>
</html>