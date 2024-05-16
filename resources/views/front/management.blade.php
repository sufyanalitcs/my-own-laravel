@extends('front.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('public/front/css/management/desktop.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/management/large.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/management/mobile.css') }}">

    <!-- Include Leaflet CSS and JavaScript -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
@endsection


@section('content')
    <section class="banner-container ">
        <div class="banner-img">
            <img class="img-1 active" src="{{ asset('public/front/images/management-bg.png') }}" alt=""
                srcset="">
        </div>

        <div class="banner-page-div">
            <div class="row d-flex align-items-end w-100">
                <div class="col-8">
                    <div class="page-heading">
                        <h1>Vacation Rental <br>Management</h1>
                    </div>
                    <div class="page-desc">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>

                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-5 banner-card">
                            <img src="{{ asset('public/front/images/management-card-1.png') }}" alt=""
                                srcset="">
                        </div>
                        <div class="col-5 banner-card">
                            <img src="{{ asset('public/front/images/management-card-2.png') }}" alt=""
                                srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="realty-container text-center container my-5 ">
        <div class="d-flex align-items-center flex-column">
            <div class="h-2  text-red b-l  w-75">
                <h2>
                    Perdido Realty Vacations
                    <br>
                    The Best Management for You & Your Rental
                </h2>
            </div>
            <div class="p mt-3  w-50">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries</p>
            </div>
            <div class="skip-btn w-75 my-3">
                <button class="btn btn-dark w-40 p-2">SKIP THE WAIT – CONTACT US NOW</button>
                <button class="btn btn-secondary w-40 p-2">LEARN WHO WE ARE</button>
            </div>
        </div>
    </section>

    <section class="why-us-container my-5 py-3">
        <div class="container">
            <div class="h-2  text-red  text-center my-5">
                <h2>Why Use Our Vacation Rental Management?</h2>
            </div>
            <div class="d-flex align-items-center justify-content-center ">

            <div class="row w-75 justify-content-center ">
                <div class="col-lg-4 col-sm-6  text-white">
                    <div class="why-card-img">
                        <img src="{{ asset('public/front/images/why-card-1.png') }}" alt="" srcset="">
                    </div>
                    <div class="h-3 text-center">
                        <h3>Increased Value</h3>
                    </div>
                    <div class="h-4 text-center b-b">
                        <h4>Get Higher Net Incomes & More Value</h4>
                    </div>

                    <div class="mx-3">
                        <div class="row p-0 why-card-decs">
                            <div class="col-6"> <i class="fa-solid fa-circle "></i> Revenue Management</div>
                            <div class="col-6"> <i class="fa-solid fa-circle "></i> Dynamic Pricing</div>
                            <div class="col-6"> <i class="fa-solid fa-circle "></i> High Booking Rates</div>
                            <div class="col-6"> <i class="fa-solid fa-circle "></i> NO Onboarding Fees</div>
                        </div>
                    </div>
                    <div class="btn-div text-center my-3">
                        <button class="btn btn-dark w-35">Search</button>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6  text-white">
                    <div class="why-card-img">
                        <img src="{{ asset('public/front/images/why-card-1.png') }}" alt="" srcset="">
                    </div>
                    <div class="h-3 text-center">
                        <h3>Increased Value</h3>
                    </div>
                    <div class="h-4 text-center b-b">
                        <h4>Get Higher Net Incomes & More Value</h4>
                    </div>
                    <div class="mx-3">
                        <div class="row p-0 why-card-decs">
                            <div class="col-6"> <i class="fa-solid fa-circle "></i> Revenue Management</div>
                            <div class="col-6"> <i class="fa-solid fa-circle "></i> Dynamic Pricing</div>
                            <div class="col-6"> <i class="fa-solid fa-circle "></i> High Booking Rates</div>
                            <div class="col-6"> <i class="fa-solid fa-circle "></i> NO Onboarding Fees</div>
                        </div>
                    </div>
                    <div class="btn-div text-center my-3">
                        <button class="btn btn-dark w-35">Search</button>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6  text-white">
                    <div class="why-card-img">
                        <img src="{{ asset('public/front/images/why-card-1.png') }}" alt="" srcset="">
                    </div>
                    <div class="h-3 text-center">
                        <h3>Increased Value</h3>
                    </div>
                    <div class="h-4 text-center b-b">
                        <h4>Get Higher Net Incomes & More Value</h4>
                    </div>
                    <div class="mx-3">
                        <div class="row p-0 why-card-decs">
                            <div class="col-6"> <i class="fa-solid fa-circle "></i> Revenue Management</div>
                            <div class="col-6"> <i class="fa-solid fa-circle "></i> Dynamic Pricing</div>
                            <div class="col-6"> <i class="fa-solid fa-circle "></i> High Booking Rates</div>
                            <div class="col-6"> <i class="fa-solid fa-circle "></i> NO Onboarding Fees</div>
                        </div>
                    </div>
                    <div class="btn-div text-center my-3">
                        <button class="btn btn-dark w-35">Search</button>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>

    <section class="details-container container my-5">
        <div class="d-flex align-items-center flex-column">
            <div class="h-2  text-red  ">
                <h2>Perdido Key Property Management Details</h2>
            </div>
            <div class="p text-center  w-50">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard du
            </div>

            <div class="w-100 details-accordion">
                <div class="accordion w-100" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button text-dark" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Revenue Management & Increased Income
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="p text-center">
                                    <p>Our focus is maximizing owner revenue for increased income & measurable value. We
                                        have a proven way of accomplishing this by regularly analyzing key performance
                                        indicators, closely monitoring market trends, and flexibly adjusting rates to the
                                        ever-changing rental landscape. The nuances of pricing within our pocket beach
                                        community have taken years of specifically local analysis coupled with powerful
                                        industry tools to ensure that Perdido Realty Vacations </p>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-dark px-4">
                                        CONTACT US ABOUT INCREASING YOUR RENTAL INCOME
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Revenue Management & Increased Income
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="p text-center">
                                    <p>Our focus is maximizing owner revenue for increased income & measurable value. We
                                        have a proven way of accomplishing this by regularly analyzing key performance
                                        indicators, closely monitoring market trends, and flexibly adjusting rates to the
                                        ever-changing rental landscape. The nuances of pricing within our pocket beach
                                        community have taken years of specifically local analysis coupled with powerful
                                        industry tools to ensure that Perdido Realty Vacations </p>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-dark px-4">
                                        CONTACT US ABOUT INCREASING YOUR RENTAL INCOME
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Revenue Management & Increased Income
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="p text-center">
                                    <p>Our focus is maximizing owner revenue for increased income & measurable value. We
                                        have a proven way of accomplishing this by regularly analyzing key performance
                                        indicators, closely monitoring market trends, and flexibly adjusting rates to the
                                        ever-changing rental landscape. The nuances of pricing within our pocket beach
                                        community have taken years of specifically local analysis coupled with powerful
                                        industry tools to ensure that Perdido Realty Vacations </p>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-dark px-4">
                                        CONTACT US ABOUT INCREASING YOUR RENTAL INCOME
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection

@section('js')
    <script src="{{ asset('public/front/js/management/script.js') }}"></script>
@endsection
