@extends('layouts.headfoot')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>GMS Church</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="next-head-count" content="4">
    <link rel="icon" href="/favicon.ico">
    <meta name="theme-color" content="#000000">
    <link rel="apple-touch-icon" href="/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="manifest" href="/manifest.json">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="use-credentials">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&amp;display=swa">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="use-credentials">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&amp;display=swa">
</head>

<body>
    <div id="__next">
        <main>
            <section class="fixed w-full bg-dark" style="z-index: 5">
                <div class="block flex items-center justify-center px-5 py-2 text-center text-xs uppercase text-white tablet:hidden">
                    YouTube
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                    </svg>
                </div>
                <div class="container mx-auto px-4 tablet:px-6 desktop:px-8">
                <div class="hidden items-center justify-end tablet:flex">
                    <div id="youtube" class="tablet:bg-brand ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('youtube')">YouTube</div>
                    <div id="instagram" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('instagram')">Instagram</div>
                    <div id="facebook" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('facebook')">Facebook</div>
                    <div id="schedule" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('schedule')">Schedule</div>
                </div>
                </div>
            </section>
            <div id="content-container">

            @include('/media/youtube')
            @include('/media/instagram')
            @include('/media/facebook')
            
            <div id="schedule-content" style="display: none;"
            <section>
                <div class="bg-brand">
                    <h1 class="py-4 text-center text-xl font-extrabold text-white tablet:py-8 tablet:text-3xl desktop:text-6xl">
                        GBI NLC Channel Schedule
                    </h1>
                </div>
                <img src="https://gms.church/images/media/tv/tv-schedule.webp" class="w-full" alt="tv-schedule" loading="lazy">
            </section>

            <div class="h-3 bg-brand"></div>
        </div>
        </div>
        </div>
        </main>
    </div>

    @include('/media/script')
  </body>
</html>

@stop