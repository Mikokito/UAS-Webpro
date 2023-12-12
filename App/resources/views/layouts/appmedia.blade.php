@extends('layouts.headfoot')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Media GBI NLC')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="next-head-count" content="4">
    <link rel="icon" href="/favicon.ico">
    <meta name="theme-color" content="#000000">
    <link rel="apple-touch-icon" href="/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="manifest" href="/manifest.json">
</head>
<body>
    <div id="__next">
        <main>
            @yield('content')
        </main>
    </div>
    <script>
        function showContent(contentType) {
            document.getElementById('youtube-content').style.display = 'none';
            document.getElementById('instagram-content').style.display = 'none';
            document.getElementById('facebook-content').style.display = 'none';
            document.getElementById('schedule-content').style.display = 'none';

            document.getElementById('youtube').classList.remove('tablet:bg-brand');
            document.getElementById('instagram').classList.remove('tablet:bg-brand');
            document.getElementById('facebook').classList.remove('tablet:bg-brand');
            document.getElementById('schedule').classList.remove('tablet:bg-brand');

            document.getElementById(`${contentType}-content`).style.display = 'block';

            document.getElementById(contentType).classList.add('tablet:bg-brand');
        }
    </script>
</body>
</html>
