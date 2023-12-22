@extends('layouts.service')

@section('content')

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GBI NLC</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/css/navbar.css'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   
</head>
<body>
    <main>
        <section>
            <div class="align-middle mt-[72px] items-center justify-end tablet:flex bg-[#313131] font-semibold">
                <div id="ibadahraya" class="tablet:bg-brand ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('ibadahraya')">Ibadah Raya</div>
                <div id="youths" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('youths')">Youths</div>
                <div id="teens" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('teens')">Teens</div>
                <div id="kids" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('kids')">Kids</div>
            </div>
        </section>
        <div id="ibadahraya-content">
          <div id="default-carousel" class="relative w-full z-10" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden md:h-96">
                 <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/ibadahraya1.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/ibadahraya2.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/ibadahraya3.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
            <section>
                <div class="bg-gradient-to-r from-blue-800 to-cyan-700">
                    <div class="flex items-center h-16 overflow-hidden pt-4 pb-6">
                      <div class="scroll whitespace-nowrap">
                        <div class="RightToLeft animate-scroll-right">
                          <p class="text-5xl text-white font-bold">
                            IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA IBADAH RAYA  
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                    <style>
                      @keyframes scroll-right {
                        from {
                          transform: translateX(0%);
                        }
                        to {
                          transform: translateX(-100%);
                        }
                      }
                      .animate-scroll-right {
                        animation: scroll-right 300s infinite linear;
                      }
                    </style>
                  
                  <div class="flex flex-col my-10 lg:flex-row lg:mx-24 lg:my-20 overflow-x-hidden">
                      <h1 class="text-center text-6xl font-bold w-full lg:mx-10 lg:my-8" data-aos="fade-right" data-aos-duration="1500">IBADAH RAYA</h1>
                      <p class="text-justify my-8 mx-8 lg:mx-12" data-aos="fade-left" data-aos-duration="1500">
                        Ibadah Raya di GBI NLC Gading Serpong adalah momen sakral di mana jemaat 
                        berkumpul untuk bersama-sama menyembah, merenungkan Firman Tuhan, dan memperkuat 
                        persekutuan sebagai keluarga rohani. Dalam suasana penuh sukacita, ibadah ini menciptakan 
                        pengalaman yang mengubahkan, memotivasi jemaat untuk hidup dengan visi, tujuan, dan dedikasi 
                        yang lebih dalam dalam pelayanan dan kasih Kristus.</p>
                  </div>
            </section>
        </div>

        <div id="youths-content" style="display: none">
          <div id="default-carousel" class="relative w-full z-10" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden md:h-96">
                 <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/youth1.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/youth2.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/youth3.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
            <section>
            <div class="bg-gradient-to-r from-blue-800 to-cyan-700">
                    <div class="flex items-center h-16 overflow-hidden pt-4 pb-6">
                      <div class="scroll whitespace-nowrap">
                        <div class="RightToLeft animate-scroll-right">
                          <p class="text-5xl text-white font-bold mb-0">
                            YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS YOUTHS  
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                    <style>
                      @keyframes scroll-right {
                        from {
                          transform: translateX(0%);
                        }
                        to {
                          transform: translateX(-100%);
                        }
                      }
                      .animate-scroll-right {
                        animation: scroll-right 300s infinite linear;
                      }
                    </style>
                  
                  <div class="flex flex-col my-10 lg:flex-row lg:mx-24 lg:my-20 ">
                      <h1 class="text-center text-6xl font-bold w-full lg:mx-10 lg:my-8" data-aos="fade-right" data-aos-duration="1500">NEW LIFE YOUTHS</h1>
                      <p class="text-justify my-8 mx-8 lg:mx-12" data-aos="fade-right" data-aos-duration="1500">
                        New Life Youths adalah wadah bagi para pemuda dan pemudi untuk tumbuh dalam iman, menjalin 
                        persahabatan seiman, dan mengeksplorasi panggilan Tuhan dalam kehidupan mereka. Dalam suasana 
                        yang penuh semangat dan kebersamaan, New Life Youths membentuk generasi muda yang penuh iman, 
                        mempersiapkan mereka untuk menjadi pemimpin yang berdampak dalam dunia mereka.
                      </p>
                  </div>
            </section>
        </div>

        <div id="teens-content" style="display: none">
          <div id="default-carousel" class="relative w-full z-10" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden md:h-96">
                 <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/teens1.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/teens2.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/teens3.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
            <section>
            <div class="bg-gradient-to-r from-blue-800 to-cyan-700">
                    <div class="flex items-center h-16 overflow-hidden pt-4 pb-6">
                      <div class="scroll whitespace-nowrap">
                        <div class="RightToLeft animate-scroll-right">
                          <p class="text-5xl text-white font-bold mb-0">
                            TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS TEENS  
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                    <style>
                      @keyframes scroll-right {
                        from {
                          transform: translateX(0%);
                        }
                        to {
                          transform: translateX(-100%);
                        }
                      }
                      .animate-scroll-right {
                        animation: scroll-right 300s infinite linear;
                      }
                    </style>
                  
                  <div class="flex flex-col my-10 lg:flex-row lg:mx-24 lg:my-20 ">
                      <h1 class="text-center text-6xl font-bold w-full lg:mx-10 lg:my-8" data-aos="fade-right" data-aos-duration="1500">NEW LIFE TEENS</h1>
                      <p class="text-justify my-8 mx-8 lg:mx-12" data-aos="fade-right" data-aos-duration="1500">
                        New Life Teens adalah komunitas remaja yang didedikasikan untuk mengeksplorasi iman 
                        Kristiani secara mendalam, membangun relasi yang kokoh, dan memberdayakan mereka 
                        untuk memimpin di tengah tantangan remaja modern. Dengan pendekatan yang relevan dan
                        dinamis, New Life Teens memberikan ruang bagi remaja untuk tumbuh dan mencapai 
                        potensi penuh mereka dalam Kristus.
                      </p>
                  </div>
            </section>
        </div>

        <div id="kids-content" style="display: none">
          <div id="default-carousel" class="relative w-full z-10" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden md:h-96">
                 <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/kids1.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/kids2.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/kids3.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
            <section>
            <div class="bg-gradient-to-r from-blue-800 to-cyan-700">
                    <div class="flex items-center h-16 overflow-hidden pt-4 pb-6">
                      <div class="scroll whitespace-nowrap">
                        <div class="RightToLeft animate-scroll-right">
                          <p class="text-5xl text-white font-bold mb-0">
                            KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS KIDS  
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                    <style>
                      @keyframes scroll-right {
                        from {
                          transform: translateX(0%);
                        }
                        to {
                          transform: translateX(-100%);
                        }
                      }
                      .animate-scroll-right {
                        animation: scroll-right 300s infinite linear;
                      }
                    </style>
                  
                  <div class="flex flex-col my-10 lg:flex-row lg:mx-24 lg:my-20 ">
                      <h1 class="text-center text-6xl font-bold w-full lg:mx-10 lg:my-8" data-aos="fade-right" data-aos-duration="1500">NEW LIFE KIDS</h1>
                      <p class="text-justify my-8 mx-8 lg:mx-12" data-aos="fade-right" data-aos-duration="1500">
                        New Life Kids adalah tempat di mana anak-anak ditempa untuk mengasihi Tuhan dan sesama 
                        melalui pengajaran Alkitab yang kreatif dan bermain bersama. Dengan nilai-nilai kekeluargaan,
                        New Life Kids memberikan fondasi yang kuat bagi anak-anak untuk tumbuh dalam iman, 
                        mengekspresikan kekreatifan mereka, dan membentuk karakter yang sesuai dengan ajaran Kristus.
                      </p>
                  </div>
            </section>
        </div>
      
      <div class="flex flex-col bg-[#313131]">
        <div class="flex flex-col bg-[#313131] text-white h-36  mb-10">
          <br><br>
          <h1 class="text-center text-2xl font-semibold mb-5" data-aos="zoom-in" data-aos-duration="1500">INGIN BERGABUNG?</h1>
          <div class="flex justify-center">
              <button onclick="redirectTombol()" class="transition ease-in-out delay-150 bg-[#219EBC] hover:-translate-y-1 hover:scale-110 hover:bg-[#8ECAE6] duration-300 text-white font-bold py-2 px-4 rounded-full" data-aos="zoom-in" data-aos-duration="1500">
                  Klik Disini!
              </button>
          </div>
        </div>
      </div>
  
      <script>
          function redirectTombol() {
            window.open('https://wa.me/6281382824809', '_blank');
          }
      </script>

        <script>
            // Hide Instagram and Schedule content initially
            document.getElementById('youths-content').style.display = 'none';
            document.getElementById('teens-content').style.display = 'none';
            document.getElementById('kids-content').style.display = 'none';

            function showContent(contentType) {
                document.getElementById('ibadahraya-content').style.display = 'none';
                document.getElementById('youths-content').style.display = 'none';
                document.getElementById('teens-content').style.display = 'none';
                document.getElementById('kids-content').style.display = 'none';

                document.getElementById('ibadahraya').classList.remove('tablet:bg-brand');
                document.getElementById('youths').classList.remove('tablet:bg-brand');
                document.getElementById('teens').classList.remove('tablet:bg-brand');
                document.getElementById('kids').classList.remove('tablet:bg-brand');

                document.getElementById(`${contentType}-content`).style.display = 'block';

                document.getElementById(contentType).classList.add('tablet:bg-brand');
            }
        </script>
    </main>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>

@endsection