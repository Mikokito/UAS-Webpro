@extends('layouts.media')

@section('content')
    <section class="w-full bg-dark" style="z-index: 5">
        <div class="align-middle items-center justify-end tablet:flex bg-[#313131] font-semibold">
            <div id="youtube" class="tablet:bg-brand ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('youtube')">YouTube</div>
            <div id="instagram" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('instagram')">Instagram</div>
            <div id="facebook" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('facebook')">Facebook</div>
            <div id="schedule" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('schedule')">Schedule</div>
        </div>
    </section>
    <div id="content-container">
        @include('media-content.youtube')
        @include('media-content.instagram')
        @include('media-content.facebook')
        @include('media-content.schedule')
        <div class="h-3 bg-brand"></div>
    </div>
    <script>
        document.getElementById('youtube-content').style.display = 'block';
        document.getElementById('instagram-content').style.display = 'none';
        document.getElementById('facebook-content').style.display = 'none';
        document.getElementById('schedule-content').style.display = 'none';

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
@endsection