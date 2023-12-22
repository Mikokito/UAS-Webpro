<!DOCTYPE html>
<html>
<head>
    <title>Give</title>
    @vite(['resources/css/givePage.css', 'resources/css/header.css', 'resources/css/footer.css'])
</head>
<body>
    @include('includes.header')

    @yield('content')

    @include('includes.footer')
</body>
</html>