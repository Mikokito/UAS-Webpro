@extends('layout.headfoot')

@section('content')

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GBI NLC</title>
    @vite(['resources/css/app.css','resources/css/headfoot.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <main>
        <section>
            <div class="align-middle items-center justify-end tablet:flex bg-[#313131] font-semibold">
                <div id="family" class="tablet:bg-brand ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('family')">Family</div>
                <div id="senior" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('senior')">Senior</div>
                <div id="army" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('army')">Army</div>
                <div id="kids" class="ml-0 cursor-pointer px-5 py-2 text-center text-xs uppercase text-white tablet:ml-5 desktop:text-sm" onclick="showContent('kids')">Kids</div>
            </div>
        </section>
        <div id="default-carousel" class="relative w-full z-10" data-carousel="slide">
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
</body>
</html>

@stop