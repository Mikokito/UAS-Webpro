<div id="instagram-content" style="display: none;">
                <section style="background-color: #023047;" class="flex items-center justify-center bg-brand px-12 py-16 tablet:px-24 tablet:py-24 desktop:py-32">
                    <img src="{{ asset('images/IG-GBI.png') }}" class="w-1/2 tablet:w-5/12" alt="ig-banner">
                    <div class="ml-5">
                        <h1 class="text-xl font-extrabold uppercase text-white tablet:mb-2 tablet:text-4xl desktop:text-6xl">FOLLOW TO OUR</h1>
                        <h1 class="text-xl font-extrabold uppercase text-white tablet:mb-2 tablet:text-4xl desktop:text-6xl">INSTAGRAM</h1>
                        <h1 class="text-xl font-extrabold uppercase text-white tablet:text-4xl desktop:text-6xl">ACCOUNT</h1>
                        <a href="https://www.instagram.com/gbinlc.gadingserpong" target="_blank">
                            <button type="button" class="mt-3 rounded-full bg-white px-3 py-1 text-sm font-semibold text-brand hover:border-none hover:bg-gray-200 hover:text-brand tablet:mt-5 tablet:px-4 tablet:py-2 desktop:mt-8">
                                <p class="flex items-center text-xs desktop:text-base">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 7C9.23858 7 7 9.23858 7 12C7 14.7614 9.23858 17 12 17C14.7614 17 17 14.7614 17 12C17 9.23858 14.7614 7 12 7ZM9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12Z" fill="black"/>
                                        <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="black"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5 1C2.79086 1 1 2.79086 1 5V19C1 21.2091 2.79086 23 5 23H19C21.2091 23 23 21.2091 23 19V5C23 2.79086 21.2091 1 19 1H5ZM19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z" fill="black"/>
                                        </svg>GBI NLC Gading Serpong
                                </p>
                            </button>
                        </a>
                    </div>
                </section>
                <section class="bg-cover bg-center px-12 py-16 tablet:px-24 tablet:py-24 desktop:py-32" style="background-image: url('{{ asset('images/servo.webp') }}');">
                    <div class="container mx-auto px-4 tablet:px-6 desktop:px-8 ">
                        <div class="flex w-full flex-wrap justify-between">
                        @foreach ($instagrams as $instagram)
                            <div class="my-5 w-full tablet:w-[48%] desktop:w-[30%]">
                                <iframe class="w-full rounded-lg" style="aspect-ratio: 3/4;" src="{{ $instagram->name }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <a href="{{ $instagram->link }}" target="_blank"></a>
                        @endforeach
                        </div>
                    </div>
                </section>
            </div>