<!DOCTYPE html>
<html>
<head>
    <title>Media</title>
    @vite(['resources/css/mediaPage.css', 'resources/css/header.css', 'resources/css/footer.css'])
</head>
<body>
    @include('includes.header')

    @yield('content')

    @include('includes.footer')
</body>
</html>