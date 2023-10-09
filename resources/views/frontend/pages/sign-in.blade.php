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
                        <h1 class="page-title">Account</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- LOGIN AREA START -->
   @include('frontend.components.sign-in')
    <!-- LOGIN AREA END -->

    <!-- CALL TO ACTION START (call-to-action-6) -->
   @include('frontend.components.call-to-action')
    <!-- CALL TO ACTION END -->


    <!-- MODAL AREA START (Reset Password Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area----">
        <div class="modal fade" id="ltn_forget_password_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="ltn__quick-view-modal-inner">
                            <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-info text-center">
                                            <h4>FORGET PASSWORD?</h4>
                                            <p class="added-cart"> Enter you register email.</p>
                                            <form action="#" class="ltn__form-box">
                                                <input type="text" name="email" placeholder="Type your register email*">
                                                <div class="btn-wrapper mt-0">
                                                    <button class="theme-btn-1 btn btn-full-width-2" type="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- additional-info -->
                                        <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="img/icons/payment.png" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

</div>
<!-- Body main wrapper end -->

@endsection