@extends('front.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('public/front/css/contact-us/desktop.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/contact-us/large.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/contact-us/mobile.css') }}">

    <!-- Include Leaflet CSS and JavaScript -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
@endsection


@section('content')
    <section class="banner-container ">
        <div class="banner-img">
            <img class="img-1 active" src="{{ asset('public/front/images/contact-bg.png') }}" alt="" srcset="">
        </div>

        <div class="banner-page-div">
            <div class="row d-flex align-items-end w-100">
                <div class="col-8">
                    <div class="page-heading">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="page-desc">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>

                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-5 banner-card">
                            <img src="{{ asset('public/front/images/contact-card-1.png') }}" alt="" srcset="">
                        </div>
                        <div class="col-5 banner-card">
                            <img src="{{ asset('public/front/images/contact-card-2.png') }}" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-container my-5">
        <div class="contact-left">
            <div class="contact-left-div">
                <div class="h-3 text-red">
                    <h3>Contact Us</h3>
                </div>
                <div class="h-2 mt-3">
                    <h2>Have a question? We’re here to help.</h2>
                </div>
                <div class="p mt-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
        <div class="contact-right">
            <div class="contact-right-div">
                <div class="h-3">
                    <h3>Send us a Message</h3>
                </div>

                <div class="alert-message">
                </div>
                <form class="form" id="contact-form" method="POST" action="{{ route('contact.submit') }}">
                    @csrf
                    <div class="form-field" id="name-field">
                        <input type="text" name="name" id="name" required>
                        <label for="name" placeholder="Your Name">Enter Your Name</label>
                    </div>
                    <div class="form-field" id="email-field">
                        <input type="email" name="email" id="email" required>
                        <label for="email" placeholder="Your Email">Enter Your Email</label>
                    </div>
                    <div class="form-field" id="message-field">
                        <textarea type="text" name="message" id="message" required></textarea>
                        <label for="message" placeholder="Enter Your Message">Enter Your Message</label>
                    </div>
                    <div class="">
                        <button class="btn btn-danger" type="submit"> Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="map-container my-5">
        <div class="container h-100 d-flex align-items-center">

            <div id="map"></div>
        </div>
    </section>
    <section class="post-container py-5">
        <div class="post-slider  w-100 my-2" id="post-slider-1">
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
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (7).png') }}" alt="" srcset="">
            </div>
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (8).png') }}" alt="" srcset="">
            </div>
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (9).png') }}" alt="" srcset="">
            </div>
        </div>
        <div class="post-slider  w-100 my-2" id="post-slider-2">
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (9).png') }}" alt="" srcset="">
            </div>
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (8).png') }}" alt="" srcset="">
            </div>
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (7).png') }}" alt="" srcset="">
            </div>
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (6).png') }}" alt="" srcset="">
            </div>
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (5).png') }}" alt="" srcset="">
            </div>
            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (4).png') }}" alt="" srcset="">
            </div>

            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (3).png') }}" alt="" srcset="">
            </div>

            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (2).png') }}" alt="" srcset="">
            </div>

            <div class="post-col mx-2">
                <img src="{{ asset('public/front/images/post (1).png') }}" alt="" srcset="">
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('public/front/js/contact-us/script.js') }}"></script>
@endsection
