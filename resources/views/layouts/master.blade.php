@php
    $settings = App\Models\Setting::first(); // Fetch settings from the database
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $settings->seo_title ?? 'Edged Joinery & Kitchens' }} - Innovative Joinery Solutions</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ $settings->seo_description ?? 'Cutting edge services for kitchen joinery and design' }}"
        name="description">
    <meta content="{{ $settings->seo_keywords ?? 'Joinery, Kitchens, Design, Architecture, Interior' }}" name="keywords">

    <!-- Favicon -->
    <link href="{{ $settings->logo ? Storage::url($settings->logo) : asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Lightbox2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status">
        </div>
        <img class="position-absolute top-50 start-50 translate-middle"
            src="{{ $settings->logo ? Storage::url($settings->logo) : asset('img/icons/icon-1.png') }}"
            style="width: 60px; height: auto;" alt="Icon">
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                    <a class="text-body px-2" href="tel:{{ $settings->phone }}"><i
                            class="fa fa-phone-alt text-primary me-2"></i>{{ $settings->phone }}</a>
                    <a class="text-body px-2" href="mailto:{{ $settings->email }}"><i
                            class="fa fa-envelope-open text-primary me-2"></i>{{ $settings->email }}</a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square btn-outline-body me-1" href="{{ $settings->facebook_link }}"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-0" href="{{ $settings->instagram_link }}"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="{{ url('/') }}" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0"><img class="me-3"
                    src="{{ $settings->logo ? Storage::url($settings->logo) : asset('img/icons/icon-1.png') }}"
                    style="width: 60px; height: auto;"
                    alt="Icon">{{ $settings->site_name ?? 'Edged Joinery & Kitchens' }}</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="/#about" class="nav-item nav-link {{ Request::is('#about') ? 'active' : '' }}">About</a>
                <a href="/#services"
                    class="nav-item nav-link {{ Request::is('#services') ? 'active' : '' }}">Services</a>
                <a href="{{ route('gallery.index') }}"
                    class="nav-item nav-link {{ Route::is('gallery.index') ? 'active' : '' }}">Gallery</a>
                <a href="/#contact" class="nav-item nav-link {{ Request::is('#contact') ? 'active' : '' }}">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8 col-md-6">
                    <h3 class="text-light mb-4">Address</h3>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>New South Wales, Sydney,
                        Australia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>{{ $settings->phone }}</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>{{ $settings->email }}</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-body me-1" href="{{ $settings->facebook_link }}"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-body me-1" href="{{ $settings->instagram_link }}"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h3 class="text-light mb-4">Newsletter</h3>
                    <p>Subscribe to our newsletter for the latest updates and project showcases.</p>

                    <!-- Start of the Form -->
                    <form action="{{ route('newsletter.subscribe') }}" method="POST">
                        @csrf
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5"
                                   type="email"
                                   name="email"
                                   placeholder="Your email"
                                   required>
                            <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                                SignUp
                            </button>
                        </div>
                    </form>
                    <!-- End of the Form -->

                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="alert alert-success mt-2">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">{{ $settings->site_name ?? 'Edged Joinery & Kitchens' }}</a>, All
                        Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- WhatsApp Button -->
    <a href="https://wa.me/{{ $settings->whatsapp_number }}"
        class="btn btn-lg btn-success btn-lg-square whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Lightbox2 JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'fadeDuration': 300,
            'imageFadeDuration': 300
        });
    </script>


</body>

</html>
