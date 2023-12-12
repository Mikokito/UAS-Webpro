@extends('layouts.appmedia')

@section('title', 'Media GBI NLC')

@section('content')
    <section class="fixed w-full bg-dark" style="z-index: 5">
                <div class="align-middle items-center justify-end tablet:flex bg-[#313131] font-semibold">
                    <div id="youtube" class="tablet:bg-brand ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('youtube')">YouTube</div>
                    <div id="instagram" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('instagram')">Instagram</div>
                    <div id="facebook" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('facebook')">Facebook</div>
                    <div id="schedule" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('schedule')">Schedule</div>
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