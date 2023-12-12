@extends('layouts.appmedia')

@section('title', 'Media GBI NLC')

@section('content')
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

    <div id="content-container">
        @include('media.youtube')
        @include('media.instagram')
        @include('media.facebook')
        @include('media.schedule')

        <div class="h-3 bg-brand"></div>
    </div>
@endsection