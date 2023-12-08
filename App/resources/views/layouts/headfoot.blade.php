<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GBI NLC</title>
    @vite('resources/css/headfoot.css')
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
    </script>
    
@yield('content')

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