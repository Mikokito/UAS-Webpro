@extends('layouts.home')

@section('content')
<div x-data="{}">
    <section class="relative py-64 bg-[url('../../../App/public/images/GerejaHome.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=3')] bg-top bg-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-slate-900/70"></div>
        <div class="container mx-auto relative">
        <div class="text-center">
            <h4 class="font-bold text-white text-3xl">GBI NLC Gading Serpong</h4>
            <h1 class="font-bold text-white lg:leading-normal leading-normal text-6xl lg:text-7xl mb-6">Welcome Home</h1>
            <p class="text-white/70 text-xl max-w-2xl mx-auto">"GBI NEW LIFE COMMUNITY adalah Gereja yang berpusat pada Injil. Kami menyebutnya sebagai bengkel kehidupan, hal ini menegaskan bahwa gereja 
ada untuk orang2 berdosa yg hidupnya mengalami kelahiran bam sehingga mereka dimampukan untuk terus berubah dan berbuah bagi kemuliaanNya."</p>
        </div>
        </div><!--end container-->
    </section>
</div>

<section class="bg-white dark:bg-gray-900">
    <div class="py-10 mx-auto max-w-2xl lg:py-16">
        <dl class="flex items-center space-x-6">
            <div>
                <dt class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Visi</dt>
                <dd class="mb-4 font-bold text-gray-500 sm:mb-5 dark:text-gray-400">Membawa Setiap Orang Mengalami Kelahiran Baru lewat kuasa Injil dan Bertumbuh Dewasa
Menjadi Seperti Kristus</dd>
            </div>
            <div>
                <dt class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Misi</dt>
                <dd class="mb-4 font-bold text-gray-500 sm:mb-5 dark:text-gray-400">Menjangkau - Memuridkan - Memperlengkapi - Mengutus</dd>
            </div>
            <div>
                <dt class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Value</dt>
                <dd class="mb-4 font-bold text-gray-500 sm:mb-5 dark:text-gray-400">Relationship, Sinergy, Diversity, Excellence, Servant, Leadership, Innovation, Generosity</dd>
            </div>
        </dl>
    </div>
</section>

<!-- Services Section -->
<section class="bg-gray-700 dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="max-w-screen-md mb-8 lg:mb-16">
            <h2 class="mt-4 mb-4 text-4xl tracking-tight font-extrabold text-white dark:text-white">Services</h2>
            <p class="text-gray-400 sm:text-xl dark:text-gray-400">Ibadah kategorial :</p>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
            <div>
                <h3 class="mb-2 text-xl font-bold text-white dark:text-white">New Life Youth</h3>
                <p class="text-gray-400 dark:text-gray-400">Setiap hari Sabtu, Jam: 6 pm.</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold text-white dark:text-white">New Life Teens</h3>
                <p class="text-gray-400 dark:text-gray-400">Setiap hari Minggu, Jam: 12.30 pm.</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold text-white dark:text-white">New Life Kids</h3>
                <p class="text-gray-400 dark:text-gray-400">Setiap hari Minggu, Jam: 10 am & 5pm.</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our Events</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="https://unsplash.imgix.net/uploads%2F1411419068566071cef10%2F7562527b?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=240c45655f09c546232a6f106688e502" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Round Icons</h4>
                    <p class="text-muted">Graphic Design</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="https://unsplash.imgix.net/44/9s1lvXLlSbCX5l3ZaYWP_hdr-1.jpg?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=f0a1db79752dbb04ec6d2aab7d17c7b0" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Startup Framework</h4>
                    <p class="text-muted">Website Design</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="https://unsplash.imgix.net/46/Ov6ZY1zLTWmhPC0wFysP_IMG_2896_edt.jpg?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=6518e4df89659818f6c0392175a9c5e6" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Treehouse</h4>
                    <p class="text-muted">Website Design</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="https://unsplash.imgix.net/44/9s1lvXLlSbCX5l3ZaYWP_hdr-1.jpg?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=f0a1db79752dbb04ec6d2aab7d17c7b0" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Golden</h4>
                    <p class="text-muted">Website Design</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="https://unsplash.imgix.net/46/Ov6ZY1zLTWmhPC0wFysP_IMG_2896_edt.jpg?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=6518e4df89659818f6c0392175a9c5e6" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Escape</h4>
                    <p class="text-muted">Website Design</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="https://unsplash.imgix.net/uploads%2F1411419068566071cef10%2F7562527b?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=240c45655f09c546232a6f106688e502" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Dreams</h4>
                    <p class="text-muted">Website Design</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- jQuery Version 1.11.0 -->
<script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/classie.js"></script>
<script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/jqBootstrapValidation.js"></script>
<script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/contact_me.js"></script>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Your custom JavaScript -->
<script>
    $(function () {
        $('a.page-scroll').bind('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });

        // Highlight the top nav as scrolling occurs
        $('body').scrollspy({
            target: '.navbar-fixed-top'
        });

        // Closes the Responsive Menu on Menu Item Click
        $('.navbar-collapse ul li a').click(function() {
            $('.navbar-toggle:visible').click();
        });
    });
</script>

<span style="height: 20px; width: 40px; min-height: 20px; min-width: 40px; position: absolute; opacity: 0.85; z-index: 8675309; display: none; cursor: pointer; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAUCAYAAAD/Rn+7AAADU0lEQVR42s2WXUhTYRjHz0VEVPRFUGmtVEaFUZFhHxBhsotCU5JwBWEf1EWEEVHQx4UfFWYkFa2biPJiXbUta33OXFtuUXMzJ4bK3Nqay7m5NeZq6h/tPQ+xU20zugjOxR/+7/O8539+5znnwMtNTExwJtMb3L/fiLv3botCSmUjeCaejTOb39AiFothfHxcFIrHY8RksZjBsckJcOIRMfFsHD/SsbExUYpnI8DR0dGUGjSb0byhEJp5Uqg5CTSzc2CQleJbMEj9/ywBcGRkJEk9DQqouEVQT1sK444yWI9UonmTjGqauVLEIlHa9x8lAMbj8SSpp0rwKGMVvg8P46vbg0C7na8z8JsMcgHe7jlEa+edRhiLy8n/TUMfu6EvLElk+U0WtGwrTrdfAGQf5J8iiK4LVzDU28t8JtMSocf8E+l68myaNFXm/6rXslLK7ay5TOunuRvZWpJuvwAYjUaTpOIWoquuAZ219RTaxKYp9BbjycoN5FvL9qH9TBX5rvoGdJythvXYSTxdtRnWylO/ZdqrLsGwszzhWQ593z2KlAwCYCQSSZJ6ehZ0W7bD9VBLgN0NCqr3qR7R2rBrL3pu3Sb/7nDlz2uy6cG0OXk0GTbZXzNp8trsPAQdTj6frlWzN2DcXZGKQQAMh8NJ6rpyHe+PnkCr/CAFdZyvpfpjuvkifLF9wIt1Wwlo0OHie1RvWrKa93RjzfzliTzPKz3ltB0/Tevmwp14wGUgHAzSOoUEwFAolFaaBSuhnslPRkJexUJtZ6v5HtUeLswl33n1BgEY5fvhs9sJ3FAiT+QYyyvoAQJuD0KBAFRTJNAuz5/s3gJgMBhMJwrVFRThM5tY5zUF/A4X1f2fvQTRLCuBreoim0YmAbqNJryvPEXeeq46kaNdkQ/1HCncbJKPs9ZSv2VHGfWsZ2hfkhKAfr8/pdxWKx4wwD69PmVfNSOL+lr2w+gYqHpWDtXt1xQ8AMlWU0e1lqLd/APRHoP8AJqWrQG9gYxcPMsvSJUvAA4MDKTUJ7MZLaVy8v+qT21tcDx/OemePr0RTkNrur4A6PP5xCgBsL+/X4wiQDpuuVxOeL1eMYmYeDY6sOp0z+B0OuHxeEQhxkJMFosJiSO/UinOI/8Pc+l7KKArAT8AAAAASUVORK5CYII=);"></span>
@endsection