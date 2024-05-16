@extends('front.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('public/front/css/about-us/desktop.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/about-us/large.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/about-us/mobile.css') }}">
@endsection


@section('content')
    <section class="banner-container ">
        <div class="banner-img">
            <img class="img-1 active" src="{{ asset('public/front/images/about-bg.png') }}" alt="" srcset="">
        </div>

        <div class="banner-page-div">
            <div class="row d-flex align-items-end w-100">
                <div class="col-8"> 
                    <div class="page-heading">
                        <h1>About Us</h1>
                    </div>
                    <div class="page-desc">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>

                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-5 banner-card">
                            <img src="{{ asset('public/front/images/about-card-1.png') }}" alt="" srcset="">
                        </div>
                        <div class="col-5 banner-card">
                            <img src="{{ asset('public/front/images/about-card-2.png') }}" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="about-container container text-center">
        <div class="container mt-5">
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


    <section class="core-container container mt-5">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="h-2 text-red">
                    <h2>
                        Our Core <br>
                        Company Values
                    </h2>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="p">
                    <p>
                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat
                        duis enim velit mollit.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="company-container my-3">
        <div class="company-left">
            <div class="company-img">
                <img src="{{ asset('public/front/images/company.png') }}" alt="" srcset="">
            </div>
        </div>
        <div class="company-right m-0  pl-4 ">
            <div class="company-right-div">

                <div class="row">
                    <div class="col-6 row my-4">
                        <div class="col-2 company-icon"><i class="fa-solid fa-check"></i></div>
                        <div class="col-10 text-white">
                            <div class="h-3">
                                <h3>People First</h3>
                            </div>
                            <div class="p mt-3">
                                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                    officia consequat duis enim velit mollit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 row my-4">
                        <div class="col-2 company-icon"><i class="fa-solid fa-check"></i></div>
                        <div class="col-10 text-white">
                            <div class="h-3">
                                <h3>Cultivation</h3>
                            </div>
                            <div class="p mt-3">
                                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                    officia consequat duis enim velit mollit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 row my-4">
                        <div class="col-2 company-icon"><i class="fa-solid fa-check"></i></div>
                        <div class="col-10 text-white">
                            <div class="h-3">
                                <h3>Efficiency</h3>
                            </div>
                            <div class="p mt-3">
                                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                    officia consequat duis enim velit mollit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 row my-4">
                        <div class="col-2 company-icon"><i class="fa-solid fa-check"></i></div>
                        <div class="col-10 text-white">
                            <div class="h-3">
                                <h3>Commitment</h3>
                            </div>
                            <div class="p mt-3">
                                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                                    officia consequat duis enim velit mollit.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="team-container container my-5 py-5">
        <div class="row align-items-center">
            <div class="col-7">
                <div class="h-2 text-red w-75">
                    <h2>
                        We have a professional and experienced team
                    </h2>
                </div>
                <div class="p mt-4 w-75">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. </p>
                </div>
            </div>
            <div class="col-5">
                <div class="team-img">
                    <img src="{{ asset('public/front/images/team.png') }}" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>
    
    <section class="member-container container my-5 py-5">
        <div class="row">
            <div class="col-3">
                <div class="member-img">
                    <img src="{{ asset('public/front/images/member-1.png') }}" alt="" srcset="">
                </div>
                <div class="member-name">Malena Sharpe</div>
                <div class="member-position">Co-Founder & CEO</div>
            </div>
            <div class="col-3">
                <div class="member-img">
                    <img src="{{ asset('public/front/images/member-2.png') }}" alt="" srcset="">
                </div>
                <div class="member-name">Malena Sharpe</div>
                <div class="member-position">Co-Founder & CEO</div>
            </div>
            <div class="col-3">
                <div class="member-img">
                    <img src="{{ asset('public/front/images/member-3.png') }}" alt="" srcset="">
                </div>
                <div class="member-name">Malena Sharpe</div>
                <div class="member-position">Co-Founder & CEO</div>
            </div>
            <div class="col-3">
                <div class="member-img">
                    <img src="{{ asset('public/front/images/member-4.png') }}" alt="" srcset="">
                </div>
                <div class="member-name">Malena Sharpe</div>
                <div class="member-position">Co-Founder & CEO</div>
            </div>
        </div>

        <div class="text-center my-4">
            <div class="view-btn">
                <button class="btn px-3 btn-dark">VIEW ALL TEAM <i class="fa-solid fa-angle-right"></i></button>
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
@endsection

@section('js')
    <script src="{{ asset('public/front/js/about-us/script.js') }}"></script>
@endsection
