@extends('frontend.layout.master')
@section('content')


<!-- Body main wrapper start -->
<div class="body-wrapper">


    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">404 Page</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>404</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- 404 area start -->
    @include('frontend.components.404')
    <!-- 404 area end -->

    <!-- CALL TO ACTION START (call-to-action-6) -->
  @include('frontend.components.call-to-action')
    <!-- CALL TO ACTION END -->


</div>
<!-- Body main wrapper end -->


@endsection