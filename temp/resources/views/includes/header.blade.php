<div id="header" style="position: fixed;z-index: 99999;">
    <header style="background-color:rgb(29 28 28)">
        <div class="contain">
            <nav class="centered" aria-label="Global">
                <a href="/#" class="text-white">
                    <img src="/images/logo.png" alt="LOGO">
                </a>
                <div class="flexed hidden-desktop">
                    <div class="padding-center">
                    <button type="button" class="open-menu-button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                        </svg>
                    </button>   
                    </div>
                </div>
                <div class="hidden flex-desktop">
                    <a href="{{ route('home')}}" class="text-a">Home</a>
                    <a href="{{ route('service')}}" class="text-a">Services</a>
                    <a href="{{ route('media')}}" class="text-a">Media</a>
                    <a href="{{ route('ministries')}}" class="text-a">Ministries</a>
                </div>
            </nav>
        </div>
    </header>
    <div class="mobileMenu" style="display: none;position: fixed;z-index: 99999;">
        <div class="full-menu">
            <div class="upper">
                <a href="/#">
                    <img class="h-6 w-auto" src="/images/logo.png" alt="LOGO">
                </a>
                <button type="button" class="close-menu-button">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="contain">
                <div class="contain-inside">
                    <div class="contain-content">
                        <a href="{{ route('home')}}" class="pages">Home</a>
                        <a href="{{ route('service')}}" class="pages">Services</a>
                        <a href="{{ route('media')}}" class="pages">Media</a>
                        <a href="{{--{{ route('ministries')}}--}}" class="pages">Ministries</a>
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
</div>   