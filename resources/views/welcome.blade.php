@extends('layouts.master')

@section('content')
    <!-- Carousel Start -->
    <div id="home" class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            @foreach ($carousels as $carousel)
                <div class="owl-carousel-item position-relative"
                    data-dot="<img src='{{ asset('storage/' . $carousel->image) }}'>">
                    <img class="img-fluid" src="{{ asset('storage/' . $carousel->image) }}" alt="">
                    <div class="owl-carousel-inner">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-1 text-white animated slideInDown">{{ $carousel->title }}</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-3">{{ $carousel->description }}</p>
                                    @if ($carousel->button_text)
                                        <a href="{{ $carousel->button_link }}"
                                            class="btn btn-primary py-3 px-5 animated slideInLeft">
                                            {{ $carousel->button_text }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Carousel End -->



    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container pt-5">
            <div class="row g-4">
                @foreach ($facts as $fact)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $loop->index + 1 }}s">
                        <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                            <div class="fact-icon">
                                <img src="{{ Storage::url($fact->icon) }}" alt="Icon">
                            </div>
                            <h3 class="mb-3">{{ $fact->title }}</h3>
                            <p class="mb-0">{{ $fact->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Facts End -->



    <!-- About Start -->

    <div id="about" class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="{{ Storage::url($about->image1) }}" alt="">
                        <img class="img-fluid" src="{{ Storage::url($about->image2) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">About Us</h4>
                    <h1 class="display-5 mb-4">{{ $about->title }}</h1>
                    <p>{{ $about->description }}</p>
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary"
                            style="width: 120px; height: 120px;">
                            <h1 class="display-1 mb-n2" data-toggle="counter-up">{{ $about->years_experience }}</h1>
                        </div>
                        <div class="ps-4">
                            <h3>Years</h3>
                            <h3>Of</h3>
                            <h3 class="mb-0">Experience</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->


    <!-- Service Start -->
    <div id="services" class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Services</h4>
                <h1 class="display-5 mb-4">Premium Joinery, Kitchen Design, and Renovation Services</h1>
            </div>
            <div class="row g-4">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{ ($loop->index + 1) * 2 }}s">
                        <div class="service-item d-flex position-relative text-center h-100">
                            <img class="bg-img" src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}">
                            <div class="service-text p-5">
                                <img class="mb-4" src="{{ Storage::url($service->icon) }}" alt="{{ $service->title }}">
                                <h3 class="mb-3">{{ $service->title }}</h3>
                                <p class="mb-4">{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Why Choose Us?</h4>
                    <h1 class="display-5 mb-4">{{ $feature->title }}</h1>
                    <p class="mb-4">{{ $feature->description }}</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="{{ Storage::url($feature->icon1) }}" alt="Icon 1">
                                <div class="ms-4">
                                    <h3>Design Innovation</h3>
                                    <p class="mb-0">Our design approach focuses on innovation, ensuring that each project
                                        is unique, functional, and visually stunning.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="{{ Storage::url($feature->icon2) }}" alt="Icon 2">
                                <div class="ms-4">
                                    <h3>Customized Solutions</h3>
                                    <p class="mb-0">We provide tailor-made solutions to meet your specific needs, blending
                                        your vision with our expertise.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="{{ Storage::url($feature->icon3) }}" alt="Icon 3">
                                <div class="ms-4">
                                    <h3>Project Management Excellence</h3>
                                    <p class="mb-0">From concept to completion, we manage every aspect of the project,
                                        ensuring timely delivery and impeccable results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{ Storage::url($feature->image1) }}" alt="Image 1">
                        <img class="img-fluid" src="{{ Storage::url($feature->image2) }}" alt="Image 2">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature End -->


    <!-- Project Start -->
    <div class="container-xxl project py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Latest Projects</h4>
                <h1 class="display-5 mb-4">Explore Our Masterfully Crafted Joinery and Kitchen Solutions</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        @foreach ($projects as $key => $project)
                            <button
                                class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 {{ $loop->first ? 'active' : '' }}"
                                data-bs-toggle="pill" data-bs-target="#tab-pane-{{ $key + 1 }}" type="button">
                                <h3 class="m-0">{{ $key + 1 }}. {{ $project->title }}</h3>
                            </button>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        @foreach ($projects as $key => $project)
                            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                id="tab-pane-{{ $key + 1 }}">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute img-fluid w-100 h-100"
                                                src="{{ Storage::url($project->image) }}" style="object-fit: cover;"
                                                alt="{{ $project->title }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h1 class="mb-3">{{ $project->title }}</h1>
                                        <p class="mb-4">{{ $project->description }}</p>
                                        <p>{{ $project->details }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Gallery Section with Lightbox (6 images) -->
    <div id="gallery" class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h4 class="section-title">Our Gallery</h4>
                <h1 class="display-5 mb-4">Explore Our Latest Work</h1>
            </div>
            <div class="row g-4">
                @foreach ($galleries as $gallery)
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item position-relative">
                            <a href="{{ Storage::url($gallery->image) }}" data-lightbox="gallery">
                                <img class="img-fluid w-100" src="{{ Storage::url($gallery->image) }}"
                                    alt="{{ $gallery->title }}">
                                <div class="gallery-overlay">
                                    <h3 class="text-white">{{ $gallery->title }}</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- "See More" Button -->
            <div class="text-center mt-4">
                <a href="{{ route('gallery.index') }}" class="btn btn-primary py-3 px-5">See More</a>
            </div>
        </div>
    </div>
    <!-- End Gallery Section with Lightbox (6 images) -->


    <!-- Testimonial Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">What Our Clients Say</h4>
                <h1 class="display-5 mb-4">Join Thousands of Satisfied Customers Who Trust Us</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($testimonials as $testimonial)
                    <div class="testimonial-item text-center"
                        data-dot="<img class='img-fluid' src='{{ Storage::url($testimonial->client_image) }}' alt='Client Image'>">
                        <p class="fs-5">{{ $testimonial->testimonial_text }}</p>
                        <h3>{{ $testimonial->client_name }}</h3>
                        <span class="text-primary">{{ $testimonial->client_role }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Testimonial End -->



    <!-- Appointment Start -->
    <div id="contact" class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Schedule a Consultation</h4>
                    <h1 class="display-5 mb-4">Book an Appointment to Start Designing Your Dream Kitchen</h1>
                    <p class="mb-4">At Edged Joinery & Kitchens, we're ready to bring your vision to life. Let's get started!</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light"
                                    style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Call Us Now</p>
                                    <h3 class="mb-0">+61 484 515 491</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light"
                                    style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Email Us</p>
                                    <h3 class="mb-0">Edgedjoineryandkitchens@gmail.com</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form action="{{ route('appointments.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" style="height: 55px;" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" style="height: 55px;" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control" name="phone" placeholder="Your Phone Number" style="height: 55px;" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select" name="service" style="height: 55px;" required>
                                    <option value="" disabled selected>Choose Service</option>
                                    <option value="Custom Kitchen Joinery">Custom Kitchen Joinery</option>
                                    <option value="Complete Kitchen Renovation">Complete Kitchen Renovation</option>
                                    <option value="Interior Design Consultation">Interior Design Consultation</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="date" class="form-control datetimepicker-input" name="preferred_date" placeholder="Preferred Date" style="height: 55px;" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="time" class="form-control datetimepicker-input" name="preferred_time" placeholder="Preferred Time" style="height: 55px;" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" rows="5" name="additional_details" placeholder="Additional Details or Questions"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Book Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Appointment End -->
@endsection
