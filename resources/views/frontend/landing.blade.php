<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body >

    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-envelope"></i> <a
                    href="mailto:{{ $company_detail->email }}">{{ $company_detail->email }}</a>
                <i class="icofont-phone"></i> {{ $company_detail->mobile }}
            </div>
            <div class="social-links">
                <a href="http://{{ $company_detail->twitter }}" target="_blank" class="twitter"><i
                        class="icofont-twitter"></i></a>
                <a href="http://{{ $company_detail->facebook }}" target="_blank" class="facebook"><i
                        class="icofont-facebook"></i></a>
                <a href="http://{{ $company_detail->instagram }}" target="_blank" class="instagram"><i
                        class="icofont-instagram"></i></a>
            </div>
        </div>
    </div>

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            @if(!is_null($company_detail->logo))
                <a href="{!!  route('landing') !!}" class="logo mr-auto"><img src="/storage/logo/{{ $company_detail->logo }}" alt="Logo"></a>
            @else
                <h1 class="logo mr-auto"><a href="{{ route('landing') }}">{{ $company_detail->company_name }}<span></span></a></h1>
            @endif

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Products</a></li>
                    <li><a href="#contact">Contact</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Welcome to <span>{{ $company_detail->company_name }}</span>
            </h1>
            <h2>{{ $company_detail->slogan }}</h2>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">About Us</a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Our Products</h2>
                    <p>Rictech supplies will delivers quality IT products at a price you will love!!</p>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    @foreach ($portfolios as $portfolio)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="/storage/portfolios/{{ $portfolio->image }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $portfolio->header }}</h4>
                                <p>{{ $portfolio->subheader }}</p>
                                <a href="/storage/portfolios/{{ $portfolio->image }}" data-gall="portfolioGallery"
                                    class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Services</h2>
                    <p>We offer a full spectrum of IT services to help your business succeed. Speak to us to get a
                        proposal for the services listed below</p>
                </div>

                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                            data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-slideshow"></i></div>
                                <h4><a href="">{{ $service->header }}</a></h4>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                    <p>Find out more about {{ $company_detail->company_name }}</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                        {{-- <img src="assets/img/about.jpg" class="img-fluid" alt=""> --}}

                        <img src="/storage/about/{{ $company_detail->about_us_image }}" class="img-fluid" alt="About Us">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                        data-aos="fade-up" data-aos-delay="100">
                        <h3>{{ $company_detail->about_us_heading }}</h3>
                          
                        {!! $company_detail->about_us_description !!}
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->




        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contact us using any of the below means</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>{{ $company_detail->address }}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>{{ $company_detail->email }}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>{{ $company_detail->mobile }}</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <contact-component></contact-component>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3>{{ $company_detail->company_name }}<span>.</span></h3>
                        <p>
                            <strong>Phone:</strong> {{ $company_detail->mobile }}<br>
                            <strong>Email:</strong> {{ $company_detail->email }}<br>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Products</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{!! route('login') !!}" target="_blank">Staff</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Follow us</p>
                        <div class="social-links mt-3">
                            <a href="http://{{ $company_detail->twitter }}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="http://{{ $company_detail->facebook }}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="http://{{ $company_detail->instagram }}" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>{{ $company_detail->company_name }}</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Website built by <a href="https://sifa.co.ke" class="mr-3" target="_blank">Sifa</a>
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
