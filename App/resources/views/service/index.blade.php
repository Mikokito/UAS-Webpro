<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GBI NLC</title>
    @vite(['resources/css/app.css', 'resources/css/headfoot.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
    rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </head>
  <body>
  <body>
    <div id="header">
        <header class="fixed left-0 right-0 top-0 z-50" style="background-color:rgb(29 28 28)">
            <div class="container mx-auto px-4 tablet:px-6 desktop:px-8">
                <nav class="flex items-center justify-between" aria-label="Global">
                    <a href="/#" class="-m-1.5 p-1.5 text-white">
                        <span class="sr-only">logo</span>
                        <picture>
                            <img class="h-6 w-auto" src="/images/logo.png" alt="LOGO">
                        </picture>
                    </a>
                    <div class="flex flex-row items-center desktop:hidden">
                        <div class="px-4 py-6">
                        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white open-menu-button">
                            <span class="sr-only">Open main menu</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                            </svg>
                        </button>
                        </div>
                    </div>
                    <div class="hidden items-center desktop:flex">
                        <a href="/#" class="px-4 py-6 text-sm font-semibold uppercase leading-6 text-white hover:bg-brand">Home</a>
                        <a href="/#" class="px-4 py-6 text-sm font-semibold uppercase leading-6 text-white hover:bg-brand">Churches</a>
                        <a href="/#" class="px-4 py-6 text-sm font-semibold uppercase leading-6 text-white hover:bg-brand">Services</a>
                        <a href="/#" class="px-4 py-6 text-sm font-semibold uppercase leading-6 text-white hover:bg-brand">Connect</a>
                        <a href="/#" class="px-4 py-6 text-sm font-semibold uppercase leading-6 text-white hover:bg-brand">Media</a>
                        <a href="/#" class="px-4 py-6 text-sm font-semibold uppercase leading-6 text-white hover:bg-brand">Give</a>
                        <a href="/#" class="px-4 py-6 text-sm font-semibold uppercase leading-6 text-white hover:bg-brand">Mission</a>
                        <a href="/#" class="px-4 py-6 text-sm font-semibold uppercase leading-6 text-white hover:bg-brand">Shop</a>
                    </div>
                </nav>
            </div>
        </header>
        <div class="mobileMenu">
            <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-[#1D1C1C] px-4 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 tablet:px-6 desktop:px-8">
                <div class="flex items-center justify-between">
                    <a href="/en" class="-m-1.5 p-1.5 text-white">
                        <span class="sr-only">LOGO</span>INI LOGO
                        <picture>
                            <img class="h-6 w-auto" src="/images/logo.png" alt="LOGO">
                        </picture>
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-white close-menu-button">
                        <span class="sr-only">Close menu</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6">
                        <div class="space-y-2 py-6">
                            <a href="/#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold uppercase leading-7 text-white hover:bg-brand">Home</a>
                            <a href="/#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold uppercase leading-7 text-white hover:bg-brand">Churches</a>
                            <a href="/#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold uppercase leading-7 text-white hover:bg-brand">Services</a>
                            <a href="/#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold uppercase leading-7 text-white hover:bg-brand">Connect</a>
                            <a href="/#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold uppercase leading-7 text-white hover:bg-brand">Media</a>
                            <a href="/#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold uppercase leading-7 text-white hover:bg-brand">Give</a>
                            <a href="/#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold uppercase leading-7 text-white hover:bg-brand">Mission</a>
                            <a href="/#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold uppercase leading-7 text-white hover:bg-brand">Shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <script>
    // buat button menu
    document.addEventListener("DOMContentLoaded", function() {
        const openMenuButton = document.querySelector('.open-menu-button');
        const closeMenuButton = document.querySelector('.close-menu-button');
        const mobileMenu = document.querySelector('.mobileMenu');

        openMenuButton.addEventListener('click', function() {
            mobileMenu.style.display = 'block';
        });

        closeMenuButton.addEventListener('click', function() {
            mobileMenu.style.display = 'none';
        });
    });

    // buat bg header abis scroll bg berubah transparan jadi item
    
    </script>

<div class="align-middle items-center justify-end tablet:flex bg-[#313131] font-semibold">
    <div id="family" class="tablet:bg-brand ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('family')">Family</div>
    <div id="senior" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('senior')">Senior</div>
    <div id="army" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('army')">Army</div>
    <div id="kids" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('kids')">Kids</div>
</div>

<div id="default-carousel" class="relative w-full z-30" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset('images/kucing1.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset('images/kucing2.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset('images/kucing3.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
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


<div id="family-content">
    <section>
        <div class="bg-white">
            <div class="flex items-center h-16 overflow-hidden">
              <div class="scroll whitespace-nowrap">
                <div class="RightToLeft animate-scroll-right">
                  <p class="text-5xl text-black font-bold">
                    FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY FAMILY  
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
              <h1 class="text-center text-6xl font-bold w-full lg:mx-10 lg:my-8" data-aos="fade-right" data-aos-duration="2000">FAMILY</h1>
              <p class="text-justify my-8 mx-8 lg:mx-12" data-aos="fade-left" data-aos-duration="2000">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis ante pharetra, 
              pretium neque sed, gravida dui. Ut convallis est ac ligula blandit, sit amet vestibulum metus 
              laoreet. Quisque molestie elementum nulla, in lobortis lectus vestibulum at. Aliquam quis 
              augue id purus volutpat scelerisque. Donec non dui sed tellus rhoncus molestie. Donec sapien 
              metus, finibus a imperdiet ut, congue nec sem. Fusce eget maximus lorem. Mauris dapibus erat 
              purus, vitae rhoncus tortor sagittis a. Donec interdum metus sem, vitae lacinia ipsum sollicitudin 
              at. Integer fringilla interdum ipsum, quis consectetur est. Sed dolor orci, venenatis id 
              ultrices et, blandit ut sapien. Sed accumsan ultricies vestibulum. Phasellus in risus in est 
              dapibus ullamcorper quis nec velit. Cras aliquet sapien pharetra, sodales mi sed, rutrum dolor. 
              Praesent feugiat accumsan dapibus.</p>
          </div>
    </section>
</div>

<div id="senior-content" style="display: none">
    <section>
        <div class="bg-white">
            <div class="flex items-center h-16 overflow-hidden">
              <div class="scroll whitespace-nowrap">
                <div class="RightToLeft animate-scroll-right">
                  <p class="text-5xl text-black font-bold mb-0">
                    SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR SENIOR  
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
              <h1 class="text-center text-6xl font-bold w-full lg:mx-10 lg:my-8" data-aos="fade-right" data-aos-duration="2000">SENIOR</h1>
              <p class="text-justify my-8 mx-8 lg:mx-12" data-aos="fade-left" data-aos-duration="2000">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis ante pharetra, 
              pretium neque sed, gravida dui. Ut convallis est ac ligula blandit, sit amet vestibulum metus 
              laoreet. Quisque molestie elementum nulla, in lobortis lectus vestibulum at. Aliquam quis 
              augue id purus volutpat scelerisque. Donec non dui sed tellus rhoncus molestie. Donec sapien 
              metus, finibus a imperdiet ut, congue nec sem. Fusce eget maximus lorem. Mauris dapibus erat 
              purus, vitae rhoncus tortor sagittis a. Donec interdum metus sem, vitae lacinia ipsum sollicitudin 
              at. Integer fringilla interdum ipsum, quis consectetur est. Sed dolor orci, venenatis id 
              ultrices et, blandit ut sapien. Sed accumsan ultricies vestibulum. Phasellus in risus in est 
              dapibus ullamcorper quis nec velit. Cras aliquet sapien pharetra, sodales mi sed, rutrum dolor. 
              Praesent feugiat accumsan dapibus.</p>
          </div>
    </section>
</div>

<div id="army-content" style="display: none">
    <section>
        <div class="bg-white">
            <div class="flex items-center h-16 overflow-hidden">
              <div class="scroll whitespace-nowrap">
                <div class="RightToLeft animate-scroll-right">
                  <p class="text-5xl text-black font-bold mb-0">
                    ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY ARMY  
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
              <h1 class="text-center text-6xl font-bold w-full lg:mx-10 lg:my-8" data-aos="fade-right" data-aos-duration="2000">ARMY</h1>
              <p class="text-justify my-8 mx-8 lg:mx-12" data-aos="fade-left" data-aos-duration="2000">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis ante pharetra, 
              pretium neque sed, gravida dui. Ut convallis est ac ligula blandit, sit amet vestibulum metus 
              laoreet. Quisque molestie elementum nulla, in lobortis lectus vestibulum at. Aliquam quis 
              augue id purus volutpat scelerisque. Donec non dui sed tellus rhoncus molestie. Donec sapien 
              metus, finibus a imperdiet ut, congue nec sem. Fusce eget maximus lorem. Mauris dapibus erat 
              purus, vitae rhoncus tortor sagittis a. Donec interdum metus sem, vitae lacinia ipsum sollicitudin 
              at. Integer fringilla interdum ipsum, quis consectetur est. Sed dolor orci, venenatis id 
              ultrices et, blandit ut sapien. Sed accumsan ultricies vestibulum. Phasellus in risus in est 
              dapibus ullamcorper quis nec velit. Cras aliquet sapien pharetra, sodales mi sed, rutrum dolor. 
              Praesent feugiat accumsan dapibus.</p>
          </div>
    </section>
</div>

<div id="kids-content" style="display: none">
    <section>
        <div class="bg-white">
            <div class="flex items-center h-16 overflow-hidden">
              <div class="scroll whitespace-nowrap">
                <div class="RightToLeft animate-scroll-right">
                  <p class="text-5xl text-black font-bold mb-0">
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
              <h1 class="text-center text-6xl font-bold w-full lg:mx-10 lg:my-8" data-aos="fade-right" data-aos-duration="2000">KIDS</h1>
              <p class="text-justify my-8 mx-8 lg:mx-12" data-aos="fade-left" data-aos-duration="2000">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis ante pharetra, 
              pretium neque sed, gravida dui. Ut convallis est ac ligula blandit, sit amet vestibulum metus 
              laoreet. Quisque molestie elementum nulla, in lobortis lectus vestibulum at. Aliquam quis 
              augue id purus volutpat scelerisque. Donec non dui sed tellus rhoncus molestie. Donec sapien 
              metus, finibus a imperdiet ut, congue nec sem. Fusce eget maximus lorem. Mauris dapibus erat 
              purus, vitae rhoncus tortor sagittis a. Donec interdum metus sem, vitae lacinia ipsum sollicitudin 
              at. Integer fringilla interdum ipsum, quis consectetur est. Sed dolor orci, venenatis id 
              ultrices et, blandit ut sapien. Sed accumsan ultricies vestibulum. Phasellus in risus in est 
              dapibus ullamcorper quis nec velit. Cras aliquet sapien pharetra, sodales mi sed, rutrum dolor. 
              Praesent feugiat accumsan dapibus.</p>
          </div>
    </section>
</div>

<div class="flex flex-col bg-[#313131] text-white h-36">
  <br><br>
  <h1 class="text-center text-2xl font-semibold my-5"data-aos="zoom-out" data-aos-duration="1500">INGIN BERGABUNG?</h1>
  <div class="flex justify-center">
      <button onclick="redirectTombol()" class="transition ease-in-out delay-150 bg-biru hover:-translate-y-1 hover:scale-110 hover:bg-biru-hover duration-300 text-white font-bold py-2 px-4 rounded-full" data-aos="zoom-out" data-aos-duration="1500">
          Daftar Sekarang!
      </button>
  </div>
</div>

<script>
  function redirectTombol() {
      window.location.href = 'https://forms.gle/K8vcV1mRubVzJrCZ9';
  }
</script>

<script>
    // Hide Instagram and Schedule content initially
    document.getElementById('senior-content').style.display = 'none';
    document.getElementById('army-content').style.display = 'none';
    document.getElementById('kids-content').style.display = 'none';

    function showContent(contentType) {
        document.getElementById('family-content').style.display = 'none';
        document.getElementById('senior-content').style.display = 'none';
        document.getElementById('army-content').style.display = 'none';
        document.getElementById('kids-content').style.display = 'none';

        document.getElementById('family').classList.remove('tablet:bg-brand');
        document.getElementById('senior').classList.remove('tablet:bg-brand');
        document.getElementById('army').classList.remove('tablet:bg-brand');
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
<div id="footer">
        <footer class="bg-[#1A1A1A]" aria-labelledby="footer-heading">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="container mx-auto px-4 tablet:px-6 desktop:px-8 ">
                <div class="py-16">
                    <div class="desktop:grid desktop:grid-cols-7 desktop:gap-8">
                        <div class="space-y-8">
                            <a href="/id">
                                <span class="sr-only">logo</span>
                                <picture>
                                    <img class="h-6 w-auto desktop:h-10" src="/#" alt="logo">
                                </picture>
                            </a>
                        </div>
                        <div class="mt-16 grid grid-cols-2 gap-8 desktop:col-span-6 desktop:mt-0 desktop:grid-cols-6">
                            <!-- Churches Section -->
                            <div>
                                <h3 class="text-sm font-semibold uppercase leading-6 text-light">Churches</h3>
                                <ul role="list" class="mt-6 list-outside list-none space-y-4 pl-0">
                                    <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Indonesia</a></li>
                                    <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Asia</a></li>
                                    <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Australia</a></li>
                                    <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Eropa</a></li>
                                    <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">USA &amp; Canada</a></li>
                                </ul>
                            </div>
                            <!-- Services Section -->
                            <div>
                                <h3 class="text-sm font-semibold uppercase leading-6 text-light">Services</h3>
                                <ul role="list" class="mt-6 list-outside list-none space-y-4 pl-0">
                                    <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Haiya</a></li>
                                    <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Ulala</a></li>
                                    <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Bjir</a></li>
                                    <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Kura</a></li>
                                    <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Kura</a></li>
                                </ul>
                            </div>
                            <!-- Connect Section -->
                            <div>
                                <h3 class="text-sm font-semibold uppercase leading-6 text-light">Connect</h3>
                                <ul role="list" class="mt-6 list-outside list-none space-y-4 pl-0">
                                    <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Haiya</a></li>
                                    <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Ulala</a></li>
                                    <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Bjir</a></li>
                                    <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Kura</a></li>
                                    <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Kura</a></li>
                                    <!-- Add connect links here -->
                                </ul>
                            </div>
                            <!-- Mission -->
                            <div class="flex flex-col">
                                <div>
                                    <h3 class="text-sm font-semibold uppercase leading-6 text-light">Mission</h3>
                                    <ul role="list" class="mt-6 list-outside list-none space-y-4 pl-0">
                                        <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Haiya</a></li>
                                        <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Ulala</a></li>
                                        <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Bjir</a></li>
                                        <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Kura</a></li>
                                        <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Kura</a></li>
                                        <!-- Add mission links here -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Media and Shop Section -->
                            <div class="col-span-2 grid grid-cols-2 gap-8">
                                <div>
                                    <h3 class="text-sm font-semibold uppercase leading-6 text-light">Media</h3>
                                    <ul role="list" class="mt-6 list-outside list-none space-y-4 pl-0">
                                        <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Haiya</a></li>
                                        <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Ulala</a></li>
                                        <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Bjir</a></li>
                                        <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Kura</a></li>
                                        <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Kura</a></li>
                                        <!-- Add media links here -->
                                    </ul>
                                </div>
                                <div>
                                    <h3 class="text-sm font-semibold uppercase leading-6 text-light">Shop</h3>
                                    <ul role="list" class="mt-6 list-outside list-none space-y-4 pl-0">
                                        <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Haiya</a></li>
                                        <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Ulala</a></li>
                                        <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Bjir</a></li>
                                        <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Kura</a></li>
                                        <li><a href="/#" class="text-sm leading-6 text-link hover:text-light">Kura</a></li>
                                        <!-- Add shop links here -->
                                    </ul>
                                </div>
                                <!-- Download App Section -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center bg-[#313131] py-4">
                <div class="container mx-auto px-4 tablet:px-6 desktop:px-8 ">
                    <div class="flex flex-col items-center desktop:flex-row desktop:justify-between">
                        <div class="flex justify-center space-x-6 desktop:order-2">
                            <a href="https://www.facebook.com/#" target="_blank" rel="noreferrer" class="text-link hover:text-light">
                                <span class="sr-only">Facebook</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/#" target="_blank" rel="noreferrer" class="text-link hover:text-light">
                                <span class="sr-only">Instagram</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="https://www.youtube.com/#" target="_blank" rel="noreferrer" class="text-link hover:text-light">
                                <span class="sr-only">Youtube</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 176 124" fill="currentColor" class="h-6 w-6" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M172.32,19.36A22.12,22.12,0,0,0,156.76,3.7C143,0,88,0,88,0S33,0,19.24,3.7A22.12,22.12,0,0,0,3.68,19.36C0,33.18,0,62,0,62s0,28.82,3.68,42.64A22.12,22.12,0,0,0,19.24,120.3C33,124,88,124,88,124s55,0,68.76-3.7a22.12,22.12,0,0,0,15.56-15.66C176,90.82,176,62,176,62S176,33.18,172.32,19.36ZM70,88.17V35.83L116,62Z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="mailto:#" target="_blank" rel="noreferrer" class="text-link hover:text-light">
                                <span class="sr-only">Email</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6" aria-hidden="true">
                                    <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z"></path>
                                    <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="mt-4 desktop:order-1 desktop:mt-0">
                            <span class="text-center text-xs leading-5 text-light">© 2023 []. All rights reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


</body>
</html>
