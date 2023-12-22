@extends('layouts.home')

@section('content')
<div x-data="{}">
    <section class="relative py-64 bg-[url('../../../public/images/GerejaHome.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=3')] bg-top bg-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-slate-900/70"></div>
        <div class="container mx-auto relative">
        <div class="text-center text-white">
            <h4 class="font-bold text-white text-2xl lg:text-3xl sm:text-3xl">GBI NLC Gading Serpong</h4>
            <h1 class="font-bold text-white drop-shadow-lg lg:leading-normal leading-normal text-5xl lg:text-7xl mb-6">Welcome Home</h1>
            <p class="text-white/70 px-10 text-sm lg:text-xl sm:text-xl max-w-2xl mx-auto">"GBI NEW LIFE COMMUNITY adalah Gereja yang berpusat pada Injil. Kami menyebutnya sebagai bengkel kehidupan, hal ini menegaskan bahwa gereja 
ada untuk orang2 berdosa yg hidupnya mengalami kelahiran bam sehingga mereka dimampukan untuk terus berubah dan berbuah bagi kemuliaanNya."</p>
        </div>
        </div><!--end container-->
    </section>
</div>

<!-- Our Events -->
<section class="bg-gray-200 dark:bg-gray-800">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
        <div class="mx-auto max-w-screen-sm text-center mt-8">
            <h2 class="mb-8 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Events</h2>
        </div>
        <div class="mb-8 flex justify-center items-center lg:mb-16">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                @foreach ($posts as $post)
                    <div class="w-full bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
                        <img src="{{ asset('../storage/' . $post->image) }}" class="h-224 w-full object-cover">
                        <div class="p-4">
                            <h2 class="my-1 text-2xl font-bold leading-tight text-gray-800">{{ $post->name }}</h2>
                            <p class="text-sm mt-4 text-gray-700">{{ $post->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Visi misi -->
<section class="bg-white dark:bg-gray-900">
    <div class="py-10 px-4 mx-auto max-w-2xl sm:py-16 lg:px-6">
        <div class="md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12">
            <div>
                <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Visi</h1>
                <p class="mb-4 font-bold text-gray-500 sm:mb-5 dark:text-gray-400">Membawa Setiap Orang Mengalami Kelahiran Baru lewat kuasa Injil dan Bertumbuh Dewasa
Menjadi Seperti Kristus</p>
            </div>
            <div>
                <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Misi</h1>
                <p class="mb-4 font-bold text-gray-500 sm:mb-5 dark:text-gray-400">Menjangkau - Memuridkan - Memperlengkapi - Mengutus</p>
            </div>
            <div>
                <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Value</h1>
                <p class="mb-4 font-bold text-gray-500 sm:mb-5 dark:text-gray-400">Relationship, Sinergy, Diversity, Excellence, Servant, Leadership, Innovation, Generosity</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="bg-gray-700 dark:bg-gray-800">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="max-w-screen-md">
            <h2 class="mt-4 mb-4 text-4xl tracking-tight font-extrabold text-white dark:text-white">Services</h2>
            <p class="text-gray-400 sm:text-xl dark:text-gray-400">Ibadah kategorial :</p>
        </div>
        <div class="space-y-8  mb-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
            <div class="mt-8">
                <h3 class="mb-2 text-xl font-bold text-white dark:text-white">New Life Youth</h3>
                <p class="text-gray-300 dark:text-gray-400">Setiap hari Sabtu, Jam: 6 pm.</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold text-white dark:text-white">New Life Teens</h3>
                <p class="text-gray-300 dark:text-gray-400">Setiap hari Minggu, Jam: 12.30 pm.</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold text-white dark:text-white">New Life Kids</h3>
                <p class="text-gray-300 dark:text-gray-400">Setiap hari Minggu, Jam: 10 am & 5pm.</p>
            </div>
        </div>
    </div>
</section>

<!-- Profile Section -->
<section class="bg-gray-200 dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
        <div class="mx-auto max-w-screen-sm text-center mt-8">
            <h2 class="mb-6 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Profile Gembala</h2>
        </div> 
        <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-1">
            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="max-w-sm rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{asset('images/Gembala1.jpeg')}}" alt="Pdt. Joel Manalu, M.Th">
                </a>
                <div class="p-5">
                    <h3 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Pdt. Joel Manalu, M.Th</a>
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">GEMBALA</span>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"></p>
                    <ul class="flex space-x-4 sm:mt-0">
                        <li>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="max-w-sm rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{asset('images/Gembala3.jpeg')}}" alt="Pdm. Charles Sirait">
                </a>
                <div class="p-5">
                    <h3 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Pdm. Charles Sirait</a>
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">TIM GEMBALA</span>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"></p>
                    <ul class="flex space-x-4 sm:mt-0">
                        <li>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> 
            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="max-w-sm rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{asset('images/Gembala2.jpeg')}}" alt="Pdm.June Nendissa">
                </a>
                <div class="p-5">
                    <h3 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Pdm. June Nendissa</a>
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">TIM GEMBALA</span>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"></p>
                    <ul class="flex space-x-4 sm:mt-0">
                        <li>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>  
        </div>  
    </div>
</section>
@endsection