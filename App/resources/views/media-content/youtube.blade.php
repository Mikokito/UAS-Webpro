<div id="youtube-content">
    <section style="background-color: #023047;" class="flex items-center justify-center bg-brand px-12 py-16 tablet:px-24 tablet:py-24 desktop:py-32">
        <img src="{{ asset('images/YT-GBI.png') }}" class="w-1/2 tablet:w-5/12" alt="yt-banner">
        <div class="ml-5">
            <h1 class="text-xl font-extrabold uppercase text-white tablet:mb-2 tablet:text-4xl desktop:text-6xl">SUBSCRIBE TO</h1>
            <h1 class="text-xl font-extrabold uppercase text-white tablet:mb-2 tablet:text-4xl desktop:text-6xl">OUR YOUTUBE</h1>
            <h1 class="text-xl font-extrabold uppercase text-white tablet:text-4xl desktop:text-6xl">CHANNEL</h1>
            <a href="https://www.youtube.com/@gbinlcgadingserpong849" target="_blank">
                <button type="button" class="mt-3 rounded-full bg-white px-3 py-1 text-sm font-semibold text-brand hover:border-none hover:bg-gray-200 hover:text-brand tablet:mt-5 tablet:px-4 tablet:py-2 desktop:mt-8">
                    <p class="flex items-center text-xs desktop:text-base">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 176 124" fill="currentColor" class="mr-2 h-4 w-4">
                            <path fill-rule="evenodd" d="M172.32,19.36A22.12,22.12,0,0,0,156.76,3.7C143,0,88,0,88,0S33,0,19.24,3.7A22.12,22.12,0,0,0,3.68,19.36C0,33.18,0,62,0,62s0,28.82,3.68,42.64A22.12,22.12,0,0,0,19.24,120.3C33,124,88,124,88,124s55,0,68.76-3.7a22.12,22.12,0,0,0,15.56-15.66C176,90.82,176,62,176,62S176,33.18,172.32,19.36ZM70,88.17V35.83L116,62Z" clip-rule="evenodd"></path>
                        </svg>GBI NLC Gading Serpong
                    </p>
                </button>
            </a>
        </div>
    </section>
    <section class="bg-cover bg-center px-12 py-16 tablet:px-24 tablet:py-24 desktop:py-32" style="background-image: url('{{ asset('images/servo.webp') }}');">
        <div class="container mx-auto px-4 tablet:px-6 desktop:px-8 ">
            <div class="flex w-full flex-wrap justify-between">
                @foreach ($youtubes as $youtube)
                <div class="my-5 w-full tablet:w-[48%] desktop:w-[30%]">
                    <iframe class="w-full rounded-lg" style="aspect-ratio:3/2" src="{{ $youtube->link }}"></iframe>
                    <a href="https://www.youtube.com/@gbinlcgadingserpong849" target="_blank">
                        <h6 class="mt-2 font-bold">{{ $youtube->name }}</h6>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>