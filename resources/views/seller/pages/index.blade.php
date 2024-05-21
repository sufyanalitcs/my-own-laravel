@extends('seller.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('public/seller/css/index/desktop.css') }}">
@endsection

@section('content')
    @include('seller.includes.header')

    <section class="seller-banner-section my-3">
        <div class="container">
            <div class="seller-banner-container swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper seller-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="seller-banner-img">
                            <img class="w-100" src="{{ asset('public/seller/images/seller-banner-2.png') }}" alt=""
                                srcset="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="seller-banner-img">
                            <img class="w-100" src="{{ asset('public/seller/images/seller-banner-1.png') }}" alt=""
                                srcset="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="seller-banner-img">
                            <img class="w-100" src="{{ asset('public/seller/images/seller-banner-3.png') }}" alt=""
                                srcset="">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination seller-banner-pagination"></div>
            </div>
        </div>
    </section>


    <section class="online-section my-3">
        <img class="online-left" src="{{ asset('public/seller/images/online-left.png') }}" alt="" srcset="">
        <img class="online-right" src="{{ asset('public/seller/images/online-right.png') }}" alt="" srcset="">

        <div class="container h-100">
            <div class="row h-100">
                <div class="col-6 d-flex align-items-center">
                    <div class="">
                        <div class="">

                            <h3>Online <br>
                                scheduling software</h3>
                            <p>All the tools you need to manage and grow your business, in one app. Get booked, get paid,
                                attract
                                clients, and keep them coming back.</p>
                            <a class="btn btn-danger">SIGN ME UP</a>
                        </div>
                    </div>

                </div>
                <div class="col-6">
                    <div class="online-img-container w-100">
                        <div class="online-img" id="online-img-1">
                            <img src="{{ asset('public/seller/images/online-mobile.png') }}" alt="" srcset="">
                        </div>

                        <div class="online-img" id="online-img-2">
                            <img src="{{ asset('public/seller/images/online-mobile.png') }}" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <section class="scheduling-section my-3">
        <div class="container">
            <div class="d-flex flex-column align-items-center">
                <h2>The scheduling tool you deserve.</h2>
                <p class="w-75 text-center">My Own Appointments is the leading software powering beauty businesses around
                    the
                    globe. Streamline scheduling, prevent no-shows, and grow your business with built-in marketing and
                    payments.
                </p>
            </div>
        </div>
        <div class="schedule-container swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper schedule-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="schedule-card">
                        <div class="schedule-title">64%</div>
                        <div class="schedule-para">of appointments are
                            booked while you’re with
                            a client</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="schedule-card">
                        <div class="schedule-title">64%</div>
                        <div class="schedule-para">of appointments are
                            booked while you’re with
                            a client</div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="schedule-card">
                        <div class="schedule-title">64%</div>
                        <div class="schedule-para">of appointments are
                            booked while you’re with
                            a client</div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="schedule-card">
                        <div class="schedule-title">64%</div>
                        <div class="schedule-para">of appointments are
                            booked while you’re with
                            a client</div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="tour-section my-5">
        <img class="tour-bg" src="{{ asset('public/seller/images/tour-bg-img.png') }}" alt="">

        <div class="container h-100">
            <div class="tour-container swiper-container h-100">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper tour-wrapper">
                    <div class="swiper-slide tour-card">
                        <div class="tour-img">
                            <img src="{{ asset('public/seller/images/tour-1.png') }}" alt="">
                        </div>
                        <div class="tour-info d-flex flex-column align-items-center justify-content-center">
                            <h5>Product video</h5>
                            <h2>Take a quick product tour</h2>
                            <br>
                            <div class=" play-btn-div text-center">
                                <button class="btn btn-light rounded-circle play-icon">
                                    <i class="fa-solid fa-play"></i>
                                </button>
                                <p>Play Video </p>
                            </div>

                        </div>
                    </div>

                    <div class="swiper-slide tour-card">
                        <div class="tour-img">
                            <img src="{{ asset('public/seller/images/tour-2.png') }}" alt="">
                        </div>
                        <div class="tour-info d-flex flex-column align-items-center justify-content-center">
                            <h5>Product video</h5>
                            <h2>Take a quick product tour</h2>
                            <br>
                            <div class=" play-btn-div text-center">
                                <button class="btn btn-light rounded-circle play-icon">
                                    <i class="fa-solid fa-play"></i>
                                </button>
                                <p>Play Video </p>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="tour-button-prev swiper-button-prev"></div>
                <div class="tour-button-next swiper-button-next"></div>
            </div>
        </div>
    </section>

    <section class="tool-section my-5">
        <div class="container">
            <div class="text-center">
                <h6>My Own Appointments Biz Lite</h6>
                <h2> <b>The scheduling tool you deserve.</b> </h2>
            </div>
            <div class="tool-div">
                <div class="row h-100">
                    <div class="col-4">

                        <button id="first" type="button" class="btn btn-lg btn-success" data-bs-placement="left"
                            data-bs-toggle="popover"
                            data-bs-content="Focus on the person in front of you, instead of the phone. We'll play the middle man between your clients and your calendar. Our scheduling software and online booking system is here to support you and your clients.">
                            <span class="tool-icon">
                                <i class="fa-solid fa-calendar-days"></i>
                            </span>
                            <span>
                                Calendar & Appointments
                            </span>
                        </button>

                    </div>


                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="tool-mobile-img">
                            <img src="{{ asset('public/seller/images/online-mobile.png') }}" alt=""
                                srcset="">
                        </div>
                    </div>
                    <div class="col-4">

                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('seller.includes.footer')
@endsection

@section('js')
    <script src="{{ asset('public/seller/js/index.js') }}"></script>
@endsection
