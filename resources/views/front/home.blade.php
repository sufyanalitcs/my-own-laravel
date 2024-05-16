@extends('front.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('public/front/css/home/desktop.css') }}">
@endsection


@section('content')
    <section class="banner-section">
        <video autoplay muted loop class="banner-video">
            <source src="{{ asset('public/front/videos/bg2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        @include('front.includes.header')


        <div class="container">
            <div class="banner-div h-100">
                @include('front.includes.category')
            </div>
        </div>
    </section>

    <section class="offers-section py-5">
        <div class="container">
            <div class="h-2">
                <h2>Special Offers</h2>
            </div>
            <div class="offers-div">
                <!-- Slider main container -->
                <div class="offers-container swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide offers-slide">
                            <div class="offers-img">
                                <img src="{{ asset('public/front/images/offers-1.png') }}" alt=""
                                    srcset="">
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    <p>
                                        Elegant Beauty Saloon
                                    </p>
                                </div>
                                <div class="col-3">
                                    <p>
                                        25% OFF
                                    </p>
                                </div>
                            </div>
                            <p> 1336 Elm ave, Green House, Parking structure in the donut shop, Long Beach,
                                90813</p>
                            <p><i class="fa-solid fa-location-dot"></i> New York, USA</p>
                        </div>
                        <div class="swiper-slide offers-slide">
                            <div class="offers-img">
                                <img src="{{ asset('public/front/images/offers-2.png') }}" alt=""
                                    srcset="">
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    <p>
                                        Elegant Beauty Saloon
                                    </p>
                                </div>
                                <div class="col-3">
                                    <p>
                                        25% OFF
                                    </p>
                                </div>
                            </div>
                            <p> 1336 Elm ave, Green House, Parking structure in the donut shop, Long Beach,
                                90813</p>
                            <p><i class="fa-solid fa-location-dot"></i> New York, USA</p>
                        </div>
                        <div class="swiper-slide offers-slide">
                            <div class="offers-img">
                                <img src="{{ asset('public/front/images/offers-3.png') }}" alt=""
                                    srcset="">
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    <p>
                                        Elegant Beauty Saloon
                                    </p>
                                </div>
                                <div class="col-3">
                                    <p>
                                        25% OFF
                                    </p>
                                </div>
                            </div>
                            <p> 1336 Elm ave, Green House, Parking structure in the donut shop, Long Beach,
                                90813</p>
                            <p><i class="fa-solid fa-location-dot"></i> New York, USA</p>
                        </div>

                        <div class="swiper-slide offers-slide">
                            <div class="offers-img">
                                <img src="{{ asset('public/front/images/offers-4.png') }}" alt=""
                                    srcset="">
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    <p>
                                        Elegant Beauty Saloon
                                    </p>
                                </div>
                                <div class="col-3">
                                    <p>
                                        25% OFF
                                    </p>
                                </div>
                            </div>
                            <p> 1336 Elm ave, Green House, Parking structure in the donut shop, Long Beach,
                                90813</p>
                            <p><i class="fa-solid fa-location-dot"></i> New York, USA</p>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="offers-button-prev swiper-button-prev"></div>
                <div class="offers-button-next swiper-button-next"></div>
            </div>
        </div>
    </section>

    <section class="map-section my-5">
        <div class="container">
            <div class="map-div row align-items-center">
                <div class="col-md-6 col-12">
                    <div class="h-2">
                        <h2>Turn on location services</h2>
                    </div>
                    <p>Discover and book beauty & wellness professionals near you</p>
                    <button class="btn btn-danger btn-gradient">Seach Near Me</button>
                    <button class="btn btn-light border border-2">Seach Near Me</button>
                </div>
                <div class="col-md-6 col-12">
                    <div class="map-img">
                        <img src="{{ asset('public/front/videos/map.gif') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="inspired-section py-5">
        <div class="container">
            <div class="h-2 text-center">
                <h2>Get Inspired <br>
                    With My Own Appointment</h2>
            </div>
            <p class="text-center">Read thousands of professional articles</p>

            <div class="inspired-div">

                <div class="inspired-container swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide inspired-slide">
                            <div class="inspired-img">
                                <img src="{{ asset('public/front/images/inspired-1.png') }}" alt=""
                                    srcset="">
                            </div>
                            <h6 class="text-center my-2"> Hair</h6>
                        </div>
                        <div class="swiper-slide inspired-slide">
                            <div class="inspired-img">
                                <img src="{{ asset('public/front/images/inspired-2.png') }}" alt=""
                                    srcset="">
                            </div>
                            <h6 class="text-center my-2"> Hair</h6>
                        </div>
                        <div class="swiper-slide inspired-slide">
                            <div class="inspired-img">
                                <img src="{{ asset('public/front/images/inspired-3.png') }}" alt=""
                                    srcset="">
                            </div>
                            <h6 class="text-center my-2"> Hair</h6>
                        </div>
                        <div class="swiper-slide inspired-slide">
                            <div class="inspired-img">
                                <img src="{{ asset('public/front/images/inspired-4.png') }}" alt=""
                                    srcset="">
                            </div>
                            <h6 class="text-center my-2"> Hair</h6>
                        </div>
                        <div class="swiper-slide inspired-slide">
                            <div class="inspired-img">
                                <img src="{{ asset('public/front/images/inspired-5.png') }}" alt=""
                                    srcset="">
                            </div>
                            <h6 class="text-center my-2"> Hair</h6>
                        </div>
                    </div>

                </div>
                <!-- If we need navigation buttons -->
                <div class="inspired-button-prev swiper-button-prev"></div>
                <div class="inspired-button-next swiper-button-next"></div>
            </div>

        </div>
    </section>

    <section class="appointment-section my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="appointment-div d-flex flex-column align-items-center justify-content-end">
                        <div class="appointment-img">
                            <img src="{{ asset('public/front/images/logo-no.png') }}" alt="" srcset="">
                        </div>
                        <div class="h-6 my-2 text-center">
                            <h6>MY OWN APPOINTMENTS • iOS, Android</h6>
                        </div>
                        <div class="h-2">
                            <h2 class="text-orange">Find & book an appointment</h2>
                        </div>
                        <div class="p w-75 text-center">
                            <p>
                                Cut the phone tag. Find your next appointment and book instantly anytime, anywhere.
                            </p>
                        </div>
                        <button class="btn btn-danger btn-gradient mb-3">Download</button>
                        <div class="appointment-mobile-img">
                            <img src="{{ asset('public/front/images/mobile.png') }}" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="appointment-div right d-flex flex-column align-items-center">
                        <div class="appointment-img">
                            <img src="{{ asset('public/front/images/logo-no.png') }}" alt="" srcset="">
                        </div>
                        <div class="h-6 my-2 text-center">
                            <h6>MY OWN APPOINTMENTS • iOS, Android</h6>
                        </div>
                        <div class="h-2">
                            <h2>My Own Appointments for your business</h2>
                        </div>
                        <div class="p w-75 text-center">
                            <p>
                                Get started with My Own Appointments to run your business, better. Calendar, Booking,
                                Marketing, and Payments all in one.
                            </p>
                        </div>

                        <button class="btn btn-dark mb-3">Grow My Business</button>

                        <div class="appointment-mobile-img">
                            <img src="{{ asset('public/front/images/mobile.png') }}" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="better-section my-5" id="banner-1">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 col-12">
                    <div class="h-2">
                        <h2 class="fw-bolder">Appointments done better</h2>
                    </div>
                    <div class="p w-75">
                        <p>Looking for your next appointment with a local barber, hair stylist, massage therapist or
                            nail artist? Need appointment booking for a beard trim, an eyebrow wax, or a deep tissue
                            massage?My Own Appointments is a free beauty scheduling app and makes appointments easy to
                            find and book within seconds. No more phone tag. Book anytime, from anywhere, 24/7.</p>
                    </div>
                    <div class="p w-75">
                        <b>Discover top businesses in your area and book instantly with My Own Appointments.</b>
                    </div>
                </div>
                <div class="col-md-6 col-12 text-end">
                    <div class="better-right d-flex align-items-end justify-content-end">
                        <div class="better-img">
                            <video autoplay muted loop class="better-video">
                                <source src="{{ asset('public/front/videos/better-1.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="better-section my-5" id="banner-2">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 col-12 text-end">
                    <div class="better-left d-flex align-items-center justify-content-start">
                        <div class="better-img" id="better-2">
                            <video autoplay muted loop class="better-video">
                                <source src="{{ asset('public/front/videos/better-2.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="h-2">
                        <h2 class="fw-bolder">Something come up? We've got you.</h2>
                    </div>
                    <div class="p w-75">
                        <p>Download My Own Appointments, a free online appointment booking app, andmanage your
                            appointments from anywhere. Reschedule or cancel without picking up the phone. And because
                            we know life gets busy, we'll send you reminders.You'll never forget or miss out on another
                            appointment</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="better-section my-5" id="banner-3">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 col-12">
                    <div class="h-2">
                        <h2 class="fw-bolder">Book with the best, near you</h2>
                    </div>
                    <div class="p w-75">
                        <p> Take a scroll around the block to see top health and beauty businesses on My Own
                            Appointments marketplace. <br><br>
                            Check out their vibe from their business profile and hear what other people are saying with
                            verified reviews. You can even look through their portfolio of work.<br><br>
                            Save time and leave the stress to someone else. With My Own Appointments, setting up your
                            next beauty appointment is free and easy.</p>
                    </div>
                </div>
                <div class="col-md-6 col-12 text-end">
                    <div class="better-right d-flex align-items-end justify-content-end">
                        <div class="better-img">
                            <video autoplay muted loop class="better-video">
                                <source src="{{ asset('public/front/videos/better-1.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recommended-section py-5">
        <section class="specialist-section my-5">
            <div class="container">
                <div class="h-2 text-center">
                    <h2>Find your My Own Appointments
                        specialist by city</h2>
                </div>

                <div class="row">
                    <div class="col-md-3 col-6">
                        <ul class="specialist-links">
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    Charlotte</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    1 Columbus</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    Philadelphia</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    Tampa</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    Chicago</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-6">
                        <ul class="specialist-links">
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    Charlotte</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    1 Columbus</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    Philadelphia</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    Tampa</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    Chicago</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-6">
                        <ul class="specialist-links">
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    Charlotte</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    1 Columbus</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    Philadelphia</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    Tampa</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    Chicago</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-6">
                        <ul class="specialist-links">
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    Charlotte</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    1 Columbus</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    Philadelphia</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    Tampa</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="specialist-link" href="city"><i class="fa-solid fa-chevron-right"></i>
                                    Chicago</a>
                                <ul class="submenu">
                                    <li><a href="#">Barbershop</a> </li>
                                    <li><a href="#">Hair Salon</a> </li>
                                    <li><a href="#">Massage</a> </li>
                                    <li><a href="#">Tattoo Shop</a> </li>
                                    <li><a href="#">Hair Removal</a> </li>
                                    <li><a href="#">Nail Salon</a> </li>
                                    <li><a href="#">Brows & Lashes</a> </li>
                                    <li><a href="#">Makeup</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <div class="container">
            <div class="h-2 recommended-title">
                <h2>Recommended for you</h2>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="recommended-card">
                        <div class="recommended-img">
                            <img src="{{ asset('public/front/images/recomend.png') }}" alt="" srcset="">
                        </div>
                        <div class="h-4 recommended-text">
                            <h4>Aftercare advices for cutting hair</h4>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="recommended-card">
                        <div class="recommended-img">
                            <img src="{{ asset('public/front/images/recomend.png') }}" alt="" srcset="">
                        </div>
                        <div class="h-4 recommended-text">
                            <h4>7 Haircuts For A Receding Hairline</h4>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="recommended-card">
                        <div class="recommended-img">
                            <img src="{{ asset('public/front/images/recomend.png') }}" alt="" srcset="">
                        </div>
                        <div class="h-4 recommended-text">
                            <h4>Best Mustache Styles</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('public/front/js/home.js') }}"></script>
@endsection
