@extends('frontend.master')
@section('content')
    

 

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="{{ asset('frontend/img/bg/14.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">About Us</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- ABOUT US AREA START -->
    @include('frontend.components.about-us')
    <!-- ABOUT US AREA END -->

    <!-- FEATURE AREA START ( Feature - 6) -->
    @include('frontend.components.our-service')
    <!-- FEATURE AREA END -->

    <!-- TEAM AREA START (Team - 3) -->
   @include('frontend.components.our-team')
    <!-- TEAM AREA END -->

    <!-- TESTIMONIAL AREA START (testimonial-7) -->
    @include('frontend.components.testimonial')
    <!-- TESTIMONIAL AREA END -->

    <!-- BLOG AREA START (blog-3) -->
    @include('frontend.components.news-blog')
    <!-- BLOG AREA END -->

    <!-- CALL TO ACTION START (call-to-action-6) -->
    @include('frontend.components.call-to-action')
    <!-- CALL TO ACTION END -->


@endsection

