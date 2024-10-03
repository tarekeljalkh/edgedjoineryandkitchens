@extends('layouts.master')

@section('content')
<!-- Gallery Section with Lightbox -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h4 class="section-title">Our Gallery</h4>
            <h1 class="display-5 mb-4">Explore Our Selected Work</h1>
        </div>
        <div class="row g-4">

            @foreach ($galleryImages as $image) <!-- Loop through the images dynamically -->
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item position-relative">
                    <a href="{{ Storage::url($image->image) }}" data-lightbox="gallery">
                        <img class="img-fluid w-100" src="{{ Storage::url($image->image) }}" alt="Gallery Image {{ $loop->index + 1 }}">
                        <div class="gallery-overlay">
                            <h3 class="text-white">Gallery</h3>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
