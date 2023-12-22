<div id="facebook-content">
                <section style="background-color: #023047;" class="flex items-center justify-center bg-brand px-12 py-16 tablet:px-24 tablet:py-24 desktop:py-32">
                    <img src="{{ asset('images/FB-GBI.png') }}" class="w-1/2 tablet:w-5/12" alt="fb-banner">
                    <div class="ml-5">
                        <h1 class="text-xl font-extrabold uppercase text-white tablet:mb-2 tablet:text-4xl desktop:text-6xl">FOLLOW TO</h1>
                        <h1 class="text-xl font-extrabold uppercase text-white tablet:mb-2 tablet:text-4xl desktop:text-6xl">OUR FACEBOOK</h1>
                        <h1 class="text-xl font-extrabold uppercase text-white tablet:text-4xl desktop:text-6xl">PAGE</h1>
                        <a href="https://www.facebook.com/profile.php?id=100076716421749" target="_blank">
                            <button type="button" class="mt-3 rounded-full bg-white px-3 py-1 text-sm font-semibold text-brand hover:border-none hover:bg-gray-200 hover:text-brand tablet:mt-5 tablet:px-4 tablet:py-2 desktop:mt-8">
                                <p class="flex items-center text-xs desktop:text-base">
                                    <svg fill="#000000" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="mr-2 h-4 w-4" data-name="Layer 1"><path d="M20.9,2H3.1A1.1,1.1,0,0,0,2,3.1V20.9A1.1,1.1,0,0,0,3.1,22h9.58V14.25h-2.6v-3h2.6V9a3.64,3.64,0,0,1,3.88-4,20.26,20.26,0,0,1,2.33.12v2.7H17.3c-1.26,0-1.5.6-1.5,1.47v1.93h3l-.39,3H15.8V22h5.1A1.1,1.1,0,0,0,22,20.9V3.1A1.1,1.1,0,0,0,20.9,2Z"/></svg> GBI New Life Community Gading Serpong
                                </p>
                            </button>
                        </a>
                    </div>
                </section>
                <section class="bg-cover bg-center px-12 py-16 tablet:px-24 tablet:py-24 desktop:py-32" style="background-image: url('{{ asset('images/servo.webp') }}');">
                    <div class="container mx-auto px-4 tablet:px-6 desktop:px-8 ">
                        <div class="flex w-full flex-wrap justify-between">
                        @foreach ($facebooks as $facebook)
                            <div class="my-5 w-full tablet:w-[48%] desktop:w-[30%]" style="background-color: #ffffff;">
                                <iframe class="w-full rounded-lg" style="aspect-ratio:4/5" src="{{ $facebook->link }}" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </section>
            </div>