@extends('front.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('public/front/css/home/desktop.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/home/large.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/home/mobile.css') }}">
@endsection


@section('content')


    <section class="banner-container">
        <div class="banner-img" >
            <img class="img-1 active" src="{{ asset('public/front/images/banner-1.png') }}" alt="" srcset="">
            <img class="img-2 " src="{{ asset('public/front/images/banner-2.png') }}" alt="" srcset="">
            <img class="img-3 " src="{{ asset('public/front/images/banner-3.png') }}" alt="" srcset="">
        </div>

        <div class="banner-slide text-center ">
            <div id="banner-div">
                <div class="h-5 mt-5">
                    <h5 class="animate__animated animate__backInLeft">WELCOME TO LUXE LIVING VACATIONS RENTALS</h5>
                </div>
                <div class="h-1 mt-2 animate__animated animate__backInRight">
                    <h1>A Reasonable Place <br>
                        <span>To Visit</span>
                    </h1>
                </div>
                <div class="banner-search mt-5 p-4 container">
                    <div class="row align-items-center m-2 ">
                        <div class="col-2 px-2">
                            <select name="" id="">
                                <option value="" selected disabled>Arrival</option>
                                <option value="">1</option>
                            </select>
                        </div>
                        <div class="col-2 px-2">
                            <select name="" id="">
                                <option value="" selected disabled>Departure</option>
                                <option value="">Departure</option>
                            </select>
                        </div>
                        <div class="col-2 px-2">
                            <select name="" id="">
                                <option value="" selected disabled>Any Guests</option>
                                <option value="">Any Guests</option>
                            </select>
                        </div>
                        <div class="col-2 px-2">
                            <select name="" id="">
                                <option value="" selected disabled>Any Bedrooms</option>
                                <option value="">Any Bedrooms</option>
                            </select>
                        </div>
                        <div class="col-3 d-flex  justify-content-end">
                            <button class="btn btn-primary p-2  w-75 search-btn"> Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Next and previous buttons -->
        <div class="banner-slider-nav">
            <a class="banner-slider-nav-btn" data-n="-1">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <a class="banner-slider-nav-btn" data-n="1">
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </section>
    
    <section class="core-container container text-center">
        <div class="core-div mt-5">
            <div class="h-2 text-red animated" data-anni="fadeInDown">
                <h2>Our Core Focus</h2>
            </div>
            <div class="d-flex justify-content-center">
                <p class="w-50 b-l animated " data-anni="fadeInDown">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.</p>
            </div>
        </div>
        <div class="core-row row justify-content-center">
            <div class="col-4 mx-2 core-col">
                <div class="core-round">
                    <img src="{{ asset('public/front/images/home-r.png') }}" alt="...">
                </div>
                <div class="w-80 mt-3">
                    <div class="h-3 animated" data-anni="fadeInDown">
                        <h3> Property & Rental Management</h3>
                    </div>
                    <p class="core-text animated" data-anni="fadeInDown">Nurture valuable leads into customers, and turn one
                        time.</p>
                </div>
            </div>
            <div class="col-4 mx-2 core-col active">
                <div class="core-round">
                    <img src="{{ asset('public/front/images/home-w.png') }}" alt="...">
                </div>
                <div class="w-80 mt-3">
                    <div class="h-3 animated" data-anni="fadeInDown">
                        <h3> Property & Rental Management</h3>
                    </div>
                    <p class="core-text animated" data-anni="fadeInDown">Nurture valuable leads into customers, and turn one
                        time.</p>
                </div>
            </div>
            <div class="col-4 mx-2 core-col">
                <div class="core-round">
                    <img src="{{ asset('public/front/images/home-r.png') }}" alt="...">
                </div>
                <div class="w-80 mt-3">
                    <div class="h-3 animated" data-anni="fadeInDown">
                        <h3> Property & Rental Management</h3>
                    </div>
                    <p class="core-text animated" data-anni="fadeInDown">Nurture valuable leads into customers, and turn one
                        time.</p>
                </div>
            </div>

        </div>
    </section>

    <section class="about-container container text-center">
        <div class="about-div mt-5">
            <div class="h-2 text-red animated" data-anni="fadeInDown">
                <h2>About Us</h2>
            </div>
            <div class="d-flex justify-content-center">
                <p class="w-50 b-l animated" data-anni="fadeInDown">Lorem Ipsum is simply dummy text of the printing and
                    typesetting
                    industry.</p>
            </div>
        </div>
        <div class="container">
            <div class="row about-row">
                <div class="col-6 pt-5">
                    <div class="about-img-conatiner ">
                        <div class="about-img">
                            <img src="{{ asset('public/front/images/about.png') }}" alt="...">
                        </div>
                        <div class="top-about"></div>
                        <div class="bottom-about-img">
                            <img src="{{ asset('public/front/images/play-bg.png') }}" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-6 text-start about-right">
                    <div class="w-75">

                        <div class="h-3 mt-3">
                            <h3 class="text-blue animated" data-anni="fadeInDown">About us</h3>
                        </div>
                        <div class="h-2 animated" data-anni="fadeInDown">
                            <h2>Welcome toLuxe Living
                                Vacations Rentals</h2>
                        </div>
                        <div class="p animated" data-anni="fadeInDown">
                            <p>Portfolio Vacations is a boutique property management company on Anna Maria Island, Florida.
                                We’re
                                locally owned and operated and small by design. Giving our guests a 5 star experience is
                                what we
                                strive for every day. When you ask us a detail about a property, we’ll more than likely know
                                the
                                answer. Yes, we’ve been in every property multiple times and know it well. The island is
                                full of
                                vacation rentals and we know you have options. We think you’ll see the difference when
                                booking
                                your
                                next vacation with us.</p>
                        </div>
                        <div class="about-search">
                            <button class="btn btn-danger px-3">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-container mt-5 container text-center">
        <div class="service-div mt-5">
            <div class="h-2 text-red animated" data-anni="fadeInDown">
                <h2>Our Services</h2>
            </div>
            <div class="d-flex justify-content-center animated" data-anni="fadeInDown">
                <p class="w-50 b-l">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>

        <div class="service-div">
            <div class="services  animated" data-anni="fadeInDown">
                <button class="service-btn btn btn-light m-2 active" data-category="all">All</button>
                <button class="service-btn btn btn-light m-2" data-category="ALPINE MOUNTAIN HAUS">ALPINE MOUNTAIN
                    HAUS</button>
                <button class="service-btn btn btn-light m-2" data-category="ALPINE VISTA">ALPINE VISTA</button>
                <button class="service-btn btn btn-light m-2" data-category="ATRIUM AT ALTITUDE">ATRIUM AT
                    ALTITUDE</button>
                <button class="service-btn btn btn-light m-2" data-category="BHAVA CABIN">BHAVA CABIN</button>
                <button class="service-btn btn btn-light m-2" data-category="BLUE JAY CHALET">BLUE JAY CHALET</button>
                <button class="service-btn btn btn-light m-2" data-category="HIGHLAND GREENS TOWNHOUSE">HIGHLAND GREENS
                    TOWNHOUSE</button>
                <button class="service-btn btn btn-light m-2" data-category="MT WILSON">MT WILSON</button>
                <button class="service-btn btn btn-light m-2" data-category="ALPINE VISTA">ALPINE VISTA</button>
                <button class="service-btn btn btn-light m-2" data-category="SERENE VISTA COTTAGE">SERENE VISTA
                    COTTAGE</button>
                <button class="service-btn btn btn-light m-2" data-category="SUMMIT VALLEY CONDO">SUMMIT VALLEY
                    CONDO</button>
                <button class="service-btn btn btn-light m-2" data-category="TIMBERS AT PEAK 10">TIMBERS AT PEAK
                    10</button>
                <button class="service-btn btn btn-light m-2" data-category="VALLEY VIEW AT LOOKOUT">VALLEY VIEW AT
                    LOOKOUT</button>
            </div>
            <hr>
            <div class="service-preload"><img src="{{ asset('public/front/images/loader.gif') }}">
            </div>

            <div class="row service-items">
                <div class="col-lg-3 col-md-4 col-sm-6 service-item" data-category="ALPINE MOUNTAIN HAUS">
                    <div class="service-image">
                        <img src="{{ asset('public/front/images/product/service (1).png') }}" alt="" srcset="">
                    </div>
                    <div class="service-detail-container">
                        <div class="service-rate px-3 py-2">
                            Rate – $242-1,031/night
                        </div>
                        <div class="service-detail py-4 px-4 text-start">
                            <div class="service-title">
                                <h5>Alpine Mountain Haus</h5>
                            </div>
                            <p class="service-desc">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <div class="service-spec row m-0">
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/bed.png') }}" alt=""
                                            srcset=""></span>
                                    3 Bed
                                </div>
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/bath.png') }}" alt=""
                                            srcset=""></span>
                                    3 Bath
                                </div>
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/scale.png') }}" alt=""
                                            srcset=""></span>
                                    3450 Sqft
                                </div>
                            </div>
                            <div class="service-facility ">
                                <h5>Amenities</h5>
                                <div class="row m-0 rounded p-2">
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-maximize"></i></span>
                                        3450 Sqft
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-wifi"></i></span>
                                        Internet
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-hot-tub-person"></i></span>
                                        Hot Tub
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-users"></i></span>
                                        8 Sleeps
                                    </div>
                                </div>

                                <div class="mt-3  d-flex  justify-content-center">
                                    <button class="btn btn-primary px-3 search-btn">
                                        Book Now</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service-item" data-category="ALPINE VISTA">
                    <div class="service-image">
                        <img src="{{ asset('public/front/images/product/service (2).png') }}" alt="" srcset="">
                    </div>
                    <div class="service-detail-container">
                        <div class="service-rate px-3 py-2">
                            Rate – $242-1,031/night
                        </div>
                        <div class="service-detail py-4 px-4 text-start">
                            <div class="service-title">
                                <h5>Alpine Mountain Haus</h5>
                            </div>
                            <p class="service-desc">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <div class="service-spec row m-0">
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/bed.png') }}" alt=""
                                            srcset=""></span>
                                    3 Bed
                                </div>
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/bath.png') }}" alt=""
                                            srcset=""></span>
                                    3 Bath
                                </div>
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/scale.png') }}" alt=""
                                            srcset=""></span>
                                    3450 Sqft
                                </div>
                            </div>
                            <div class="service-facility">
                                <h5>Amenities</h5>
                                <div class="row m-0 rounded p-2">
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-maximize"></i></span>
                                        3450 Sqft
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-wifi"></i></span>
                                        Internet
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-hot-tub-person"></i></span>
                                        Hot Tub
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-users"></i></span>
                                        8 Sleeps
                                    </div>
                                </div>
                                <div class="mt-3  d-flex  justify-content-center">
                                    <button class="btn btn-primary px-3 search-btn">
                                        Book Now</button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service-item" data-category="ATRIUM AT ALTITUDE">
                    <div class="service-image">
                        <img src="{{ asset('public/front/images/product/service (3).png') }}" alt="" srcset="">
                    </div>
                    <div class="service-detail-container">
                        <div class="service-rate px-3 py-2">
                            Rate – $242-1,031/night
                        </div>
                        <div class="service-detail py-4 px-4 text-start">
                            <div class="service-title">
                                <h5>Alpine Mountain Haus</h5>
                            </div>
                            <p class="service-desc">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <div class="service-spec row m-0">
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/bed.png') }}" alt=""
                                            srcset=""></span>
                                    3 Bed
                                </div>
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/bath.png') }}" alt=""
                                            srcset=""></span>
                                    3 Bath
                                </div>
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/scale.png') }}" alt=""
                                            srcset=""></span>
                                    3450 Sqft
                                </div>
                            </div>
                            <div class="service-facility">
                                <h5>Amenities</h5>
                                <div class="row m-0 rounded p-2">
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-maximize"></i></span>
                                        3450 Sqft
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-wifi"></i></span>
                                        Internet
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-hot-tub-person"></i></span>
                                        Hot Tub
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-users"></i></span>
                                        8 Sleeps
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3  d-flex  justify-content-center">
                                <button class="btn btn-primary px-3 search-btn">
                                    Book Now</button>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service-item" data-category="BHAVA CABIN">
                    <div class="service-image">
                        <img src="{{ asset('public/front/images/product/service (4).png') }}" alt="" srcset="">
                    </div>
                    <div class="service-detail-container">
                        <div class="service-rate px-3 py-2">
                            Rate – $242-1,031/night
                        </div>
                        <div class="service-detail py-4 px-4 text-start">
                            <div class="service-title">
                                <h5>Alpine Mountain Haus</h5>
                            </div>
                            <p class="service-desc">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <div class="service-spec row m-0">
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/bed.png') }}" alt=""
                                            srcset=""></span>
                                    3 Bed
                                </div>
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/bath.png') }}" alt=""
                                            srcset=""></span>
                                    3 Bath
                                </div>
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/scale.png') }}" alt=""
                                            srcset=""></span>
                                    3450 Sqft
                                </div>
                            </div>
                            <div class="service-facility">
                                <h5>Amenities</h5>
                                <div class="row m-0 rounded p-2">
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-maximize"></i></span>
                                        3450 Sqft
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-wifi"></i></span>
                                        Internet
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-hot-tub-person"></i></span>
                                        Hot Tub
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-users"></i></span>
                                        8 Sleeps
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3  d-flex  justify-content-center">
                                <button class="btn btn-primary px-3 search-btn">
                                    Book Now</button>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service-item" data-category="BLUE JAY CHALET">
                    <div class="service-image">
                        <img src="{{ asset('public/front/images/product/service (5).png') }}" alt="" srcset="">
                    </div>
                    <div class="service-detail-container">
                        <div class="service-rate px-3 py-2">
                            Rate – $242-1,031/night
                        </div>
                        <div class="service-detail py-4 px-4 text-start">
                            <div class="service-title">
                                <h5>Alpine Mountain Haus</h5>
                            </div>
                            <p class="service-desc">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <div class="service-spec row m-0">
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/bed.png') }}" alt=""
                                            srcset=""></span>
                                    3 Bed
                                </div>
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/bath.png') }}" alt=""
                                            srcset=""></span>
                                    3 Bath
                                </div>
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/scale.png') }}" alt=""
                                            srcset=""></span>
                                    3450 Sqft
                                </div>
                            </div>
                            <div class="service-facility">
                                <h5>Amenities</h5>
                                <div class="row m-0 rounded p-2">
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-maximize"></i></span>
                                        3450 Sqft
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-wifi"></i></span>
                                        Internet
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-hot-tub-person"></i></span>
                                        Hot Tub
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-users"></i></span>
                                        8 Sleeps
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3  d-flex  justify-content-center">
                                <button class="btn btn-primary px-3 search-btn">
                                    Book Now</button>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service-item" data-category="HIGHLAND GREENS TOWNHOUSE">
                    <div class="service-image">
                        <img src="{{ asset('public/front/images/product/service (6).png') }}" alt="" srcset="">
                    </div>
                    <div class="service-detail-container">
                        <div class="service-rate px-3 py-2">
                            Rate – $242-1,031/night
                        </div>
                        <div class="service-detail py-4 px-4 text-start">
                            <div class="service-title">
                                <h5>Alpine Mountain Haus</h5>
                            </div>
                            <p class="service-desc">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <div class="service-spec row m-0">
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/bed.png') }}" alt=""
                                            srcset=""></span>
                                    3 Bed
                                </div>
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/bath.png') }}" alt=""
                                            srcset=""></span>
                                    3 Bath
                                </div>
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/scale.png') }}" alt=""
                                            srcset=""></span>
                                    3450 Sqft
                                </div>
                            </div>
                            <div class="service-facility">
                                <h5>Amenities</h5>
                                <div class="row m-0 rounded p-2">
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-maximize"></i></span>
                                        3450 Sqft
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-wifi"></i></span>
                                        Internet
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-hot-tub-person"></i></span>
                                        Hot Tub
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-users"></i></span>
                                        8 Sleeps
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3  d-flex  justify-content-center">
                                <button class="btn btn-primary px-3 search-btn">
                                    Book Now</button>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service-item" data-category="MT WILSON">
                    <div class="service-image">
                        <img src="{{ asset('public/front/images/product/service (7).png') }}" alt="" srcset="">
                    </div>
                    <div class="service-detail-container">
                        <div class="service-rate px-3 py-2">
                            Rate – $242-1,031/night
                        </div>
                        <div class="service-detail py-4 px-4 text-start">
                            <div class="service-title">
                                <h5>Alpine Mountain Haus</h5>
                            </div>
                            <p class="service-desc">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <div class="service-spec row m-0">
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/bed.png') }}" alt=""
                                            srcset=""></span>
                                    3 Bed
                                </div>
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/bath.png') }}" alt=""
                                            srcset=""></span>
                                    3 Bath
                                </div>
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/scale.png') }}" alt=""
                                            srcset=""></span>
                                    3450 Sqft
                                </div>
                            </div>
                            <div class="service-facility">
                                <h5>Amenities</h5>
                                <div class="row m-0 rounded p-2">
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-maximize"></i></span>
                                        3450 Sqft
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-wifi"></i></span>
                                        Internet
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-hot-tub-person"></i></span>
                                        Hot Tub
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-users"></i></span>
                                        8 Sleeps
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3  d-flex  justify-content-center">
                                <button class="btn btn-primary px-3 search-btn">
                                    Book Now</button>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 service-item" data-category="ALPINE VISTA">
                    <div class="service-image">
                        <img src="{{ asset('public/front/images/product/service (8).png') }}" alt="" srcset="">
                    </div>
                    <div class="service-detail-container">
                        <div class="service-rate px-3 py-2">
                            Rate – $242-1,031/night
                        </div>
                        <div class="service-detail py-4 px-4 text-start">
                            <div class="service-title">
                                <h5>Alpine Mountain Haus</h5>
                            </div>
                            <p class="service-desc">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                            <div class="service-spec row m-0">
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/bed.png') }}" alt=""
                                            srcset=""></span>
                                    3 Bed
                                </div>
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/bath.png') }}" alt=""
                                            srcset=""></span>
                                    3 Bath
                                </div>
                                <div class="col-3">
                                    <span><img src="{{ asset('public/front/images/scale.png') }}" alt=""
                                            srcset=""></span>
                                    3450 Sqft
                                </div>
                            </div>
                            <div class="service-facility">
                                <h5>Amenities</h5>
                                <div class="row m-0 rounded p-2">
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-maximize"></i></span>
                                        3450 Sqft
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-wifi"></i></span>
                                        Internet
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-hot-tub-person"></i></span>
                                        Hot Tub
                                    </div>
                                    <div class="col-3">
                                        <span><i class="fa-solid fa-users"></i></span>
                                        8 Sleeps
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3  d-flex  justify-content-center">
                                <button class="btn btn-primary px-3 search-btn">
                                    Book Now</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="skiin-container  ">
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex justify-content-center flex-column text-white">
                    <div class="h-2 animated" data-anni="fadeInDown">
                        <h2>SKI IN / <br> SKI OUTLODGING</h2>
                    </div>
                    <div class="p animated" data-anni="fadeInDown">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard. Dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                    </div>

                    <div class="skiin-view animated" data-anni="fadeInDown">
                        <button class="btn btn-danger">View Listing</button>
                    </div>

                </div>
                <div class="col-6  d-flex justify-content-center flex-column">
                    <div class="ski-img ">
                        <img src="{{ asset('public/front/images/beach.png') }}" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vacation-container pb-5 text-center">
        <div class="container">
            <div class="vacation-div mt-5">
                <div class="h-2 text-red animated" data-anni="fadeInDown">
                    <h2>Vacation Rentals</h2>
                </div>
                <div class="d-flex justify-content-center">
                    <p class="w-50 b-l animated" data-anni="fadeInDown">Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem
                        Ipsum
                        has been the
                        industry's standard.</p>
                </div>
            </div>
            <div id="vacation-slider" class="owl-carousel ">
                <div class="vacation-col m-2">
                    <div class="vacation-img">
                        <img src="{{ asset('public/front/images/vac-1.png') }}" alt="" srcset="">
                    </div>
                    <span class="vacation-slot">13</span>
                    <div class="vacation-text animated" data-anni="fadeInDown">
                        <h4 class="m-0">California</h4>
                        <span>13 properties
                            <i class="fa-solid fa-arrow-right "></i>
                        </span>
                    </div>
                </div>
                <div class="vacation-col m-2">
                    <div class="vacation-img">
                        <img src="{{ asset('public/front/images/vac-2.png') }}" alt="" srcset="">
                    </div>
                    <span class="vacation-slot">13</span>
                    <div class="vacation-text animated" data-anni="fadeInDown">
                        <h4 class="m-0">California</h4>
                        <span>13 properties
                            <i class="fa-solid fa-arrow-right "></i>
                        </span>
                    </div>
                </div>
                <div class="vacation-col m-2">
                    <div class="vacation-img">
                        <img src="{{ asset('public/front/images/vac-3.png') }}" alt="" srcset="">
                    </div>
                    <div class="vacation-text animated" data-anni="fadeInDown">
                        <h4 class="m-0">California</h4>
                        <span>13 properties
                            <i class="fa-solid fa-arrow-right "></i>
                        </span>
                    </div>
                </div>
                <div class="vacation-col m-2">
                    <div class="vacation-img">
                        <img src="{{ asset('public/front/images/vac-4.png') }}" alt="" srcset="">
                    </div>
                    <span class="vacation-slot">13</span>
                    <div class="vacation-text animated" data-anni="fadeInDown">
                        <h4 class="m-0">California</h4>
                        <span>13 properties
                            <i class="fa-solid fa-arrow-right "></i>
                        </span>
                    </div>
                </div>
                <div class="vacation-col m-2">
                    <div class="vacation-img">
                        <img src="{{ asset('public/front/images/vac-1.png') }}" alt="" srcset="">
                    </div>
                    <span class="vacation-slot">13</span>
                    <div class="vacation-text animated" data-anni="fadeInDown">
                        <h4 class="m-0">California</h4>
                        <span>13 properties
                            <i class="fa-solid fa-arrow-right "></i>
                        </span>
                    </div>
                </div>
                <div class="vacation-col m-2">
                    <div class="vacation-img">
                        <img src="{{ asset('public/front/images/vac-2.png') }}" alt="" srcset="">
                    </div>
                    <div class="vacation-text animated" data-anni="fadeInDown">
                        <h4 class="m-0">California</h4>
                        <span>13 properties
                            <i class="fa-solid fa-arrow-right "></i>
                        </span>
                    </div>
                </div>
                <div class="vacation-col m-2">
                    <div class="vacation-img">
                        <img src="{{ asset('public/front/images/vac-3.png') }}" alt="" srcset="">
                    </div>
                    <span class="vacation-slot">13</span>
                    <div class="vacation-text animated" data-anni="fadeInDown">
                        <h4 class="m-0">California</h4>
                        <span>13 properties
                            <i class="fa-solid fa-arrow-right "></i>
                        </span>
                    </div>
                </div>
                <div class="vacation-col m-2">
                    <div class="vacation-img">
                        <img src="{{ asset('public/front/images/vac-4.png') }}" alt="" srcset="">
                    </div>
                    <div class="vacation-text animated" data-anni="fadeInDown">
                        <h4 class="m-0">California</h4>
                        <span>13 properties
                            <i class="fa-solid fa-arrow-right "></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-container">
        <div class="container pb-5 ">
            <div class="row">
                <div class="col-6">
                    <div class="testimonial-div mt-5">
                        <div class="h-3 text-red animated" data-anni="fadeInDown">
                            <h3>Testimonial</h3>
                        </div>
                        <div class="h-2 animated" data-anni="fadeInDown">
                            <h2>What our customer <br> say about us</h2>
                        </div>
                        <div class="p animated" data-anni="fadeInDown">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum
                                deleniti atque corrupti quos dolores et quas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 testimonial-arrow">
                </div>
            </div>
            <div class="testimonial-slider">
                <div class="testimonial-card m-2">
                    <div class="testimonial-head">
                        <div class="row px-2">
                            <div class="col-2 p-0">
                                <div class="testimonial-img">
                                    <img src="{{ asset('public/front/images/test.png') }}" class="rounded-circle"
                                        alt="...">
                                </div>
                            </div>
                            <div class="col-5">
                                <b>Adam Levine</b> <br>
                                <span>CEO of Housee</span>
                            </div>
                            <div class="col-5 text-end">
                                <i class="fa-solid fa-star text-warning "></i>
                                <i class="fa-solid fa-star text-warning "></i>
                                <i class="fa-solid fa-star text-warning "></i>
                                <i class="fa-solid fa-star text-warning "></i>
                                <i class="fa-solid fa-star text-warning "></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-body animated" data-anni="fadeInDown">
                        <div>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                            consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</div>
                    </div>
                </div>

                <div class="testimonial-card m-2">
                    <div class="testimonial-head">
                        <div class="row px-2">
                            <div class="col-2 p-0">
                                <div class="testimonial-img">
                                    <img src="{{ asset('public/front/images/test.png') }}" class="rounded-circle"
                                        alt="...">
                                </div>
                            </div>
                            <div class="col-5">
                                <b>Adam Levine</b> <br>
                                <span>CEO of Housee</span>
                            </div>
                            <div class="col-5 text-end">
                                <i class="fa-solid fa-star text-warning "></i>
                                <i class="fa-solid fa-star text-warning "></i>
                                <i class="fa-solid fa-star text-warning "></i>
                                <i class="fa-solid fa-star text-warning "></i>
                                <i class="fa-solid fa-star text-warning "></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-body animated" data-anni="fadeInDown">
                        <div>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                            consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</div>
                    </div>
                </div>

                <div class="testimonial-card m-2">
                    <div class="testimonial-head">
                        <div class="row px-2">
                            <div class="col-2 p-0">
                                <div class="testimonial-img">
                                    <img src="{{ asset('public/front/images/test.png') }}" class="rounded-circle"
                                        alt="...">
                                </div>
                            </div>
                            <div class="col-5">
                                <b>Adam Levine</b> <br>
                                <span>CEO of Housee</span>
                            </div>
                            <div class="col-5 text-end">
                                <i class="fa-solid fa-star text-warning "></i>
                                <i class="fa-solid fa-star text-warning "></i>
                                <i class="fa-solid fa-star text-warning "></i>
                                <i class="fa-solid fa-star text-warning "></i>
                                <i class="fa-solid fa-star text-warning "></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-body animated" data-anni="fadeInDown">
                        <div>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                            consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</div>
                    </div>
                </div>

                <div class="testimonial-card m-2">
                    <div class="testimonial-head">
                        <div class="row px-2">
                            <div class="col-2 p-0">
                                <div class="testimonial-img">
                                    <img src="{{ asset('public/front/images/test.png') }}" class="rounded-circle"
                                        alt="...">
                                </div>
                            </div>
                            <div class="col-5">
                                <b>Adam Levine</b> <br>
                                <span>CEO of Housee</span>
                            </div>
                            <div class="col-5 text-end">
                                <i class="fa-solid fa-star text-warning "></i>
                                <i class="fa-solid fa-star text-warning "></i>
                                <i class="fa-solid fa-star text-warning "></i>
                                <i class="fa-solid fa-star text-warning "></i>
                                <i class="fa-solid fa-star text-warning "></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-body animated" data-anni="fadeInDown">
                        <div>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                            consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-container">
        <div class="container py-5">
            <div class="row">
                <div class="col-6">
                    <div class="featured-div mt-5">
                        <div class="h-3 text-blue animated" data-anni="fadeInDown">
                            <h3>OUR PROPERTIES</h3>
                        </div>
                        <div class="h-2 text-white animated" data-anni="fadeInDown">
                            <h2>Featured Listings </h2>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                </div>
            </div>
            <div class="row mt-3 featured-row">
                <div class="col-4 p-2">
                    <div class="featured-img-container">
                        <div class="featured-img">
                            <img src="{{ asset('public/front/images/room.png') }}" alt="" srcset="">
                        </div>
                        <div class="featured-charge px-3 py-2">$231/Night</div>
                        <div class="featured-detail  ">
                            <div class="bg-red-div px-2 py-1">
                                Island Break
                            </div>
                            <div class="row mx-2 mt-1 ">
                                <div class="col-6">View All</div>
                                <div class="col-6 text-end">
                                    <span class="rounded-circle bg-light px-3 py-2">
                                        <i class="fa-solid fa-arrow-right "></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-2">
                    <div class="featured-img-container">
                        <div class="featured-img">
                            <img src="{{ asset('public/front/images/room.png') }}" alt="" srcset="">
                        </div>
                        <div class="featured-charge px-3 py-2">$231/Night</div>
                        <div class="featured-detail  ">
                            <div class="bg-red-div px-2 py-1">
                                Island Break
                            </div>
                            <div class="row mx-2 mt-1 ">
                                <div class="col-6">View All</div>
                                <div class="col-6 text-end">
                                    <span class="rounded-circle bg-light px-3 py-2">
                                        <i class="fa-solid fa-arrow-right "></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4 p-2">
                    <div class="featured-img-container">
                        <div class="featured-img">
                            <img src="{{ asset('public/front/images/room.png') }}" alt="" srcset="">
                        </div>
                        <div class="featured-charge px-3 py-2">$231/Night</div>
                        <div class="featured-detail  ">
                            <div class="bg-red-div px-2 py-1">
                                Island Break
                            </div>
                            <div class="row mx-2 mt-1 ">
                                <div class="col-6">View All</div>
                                <div class="col-6 text-end">
                                    <span class="rounded-circle bg-light px-3 py-2">
                                        <i class="fa-solid fa-arrow-right "></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="looking-container">
        <div class="container py-5 d-flex justify-content-center">
            <div class="looking-div p-5 rounded w-75 text-center text-white">
                <div class="h-2 animated" data-anni="fadeInDown">
                    <h2>Looking For A Dream Home</h2>
                </div>
                <div class="h-3 animated" data-anni="fadeInDown">
                    <h3>We Can Help You Realize Your Dream Of A New Home</h3>
                </div>
                <button class="btn btn-light animated" data-anni="fadeInDown">Expoler Properties</button>
            </div>
        </div>
    </section>

    <section class="post-container py-5">
        <div class="post-slider  w-100 my-2">
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (1).png') }}" alt="" srcset="">
            </div>
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (2).png') }}" alt="" srcset="">
            </div>
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (3).png') }}" alt="" srcset="">
            </div>
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (4).png') }}" alt="" srcset="">
            </div>
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (5).png') }}" alt="" srcset="">
            </div>
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (6).png') }}" alt="" srcset="">
            </div>
        </div>
        <div class="post-slider  w-100 my-2">
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (7).png') }}" alt="" srcset="">
            </div>
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (8).png') }}" alt="" srcset="">
            </div>
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (9).png') }}" alt="" srcset="">
            </div>
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (1).png') }}" alt="" srcset="">
            </div>
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (2).png') }}" alt="" srcset="">
            </div>
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (3).png') }}" alt="" srcset="">
            </div>
        </div>
    </section>

    <!-- OwnerRez Availability/Property Search widget -->
    <div class="ownerrez-widget" data-widget-type="Availability/Property Search" data-widgetId="c7a68cf08f3448fdaceee4ee060cd408"></div>

    <!-- OwnerRez Booking/Inquiry widget for Alpine Mountain Haus -->
    <div class="ownerrez-widget" data-propertyId="89bcf2c7e34e4fddad1af45b6a0618b1" data-widget-type="Booking/Inquiry" data-widgetId="ed12a4d60fa4412992ded38b3901a579"></div>

    <script src="https://secure.ownerrez.com/widget.js"></script>
@endsection

@section('js')
    <script src="{{ asset('public/front/js/home/script.js') }}"></script>
@endsection
