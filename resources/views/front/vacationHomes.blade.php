@extends('front.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('public/front/css/vacation-homes/desktop.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/vacation-homes/large.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/vacation-homes/mobile.css') }}">



    <link rel="stylesheet" href="{{ asset('public/front/css/ion.rangeSlider.min.css') }}">

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
                        <h1>Vacation Homes</h1>
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

    <div class="vacation-container container my-3">
        <div class="row">

            <div class="col-lg-4 col-sm-12 card my-3 p-3">
                <form id="frmFilter" action="{{ route('fetch-property') }}">
                    <input type="hidden" id="order" name="order" />
                    <div class="my-3">
                        <input type="text" name="search" class="form-control" placeholder="Enter your Keywords"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="my-3">
                        <select class="form-select p-2" name="location">
                            <option selected value="" disabled>Locations</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="my-3">
                        <select class="form-select p-2" name="guest">
                            <option selected value="-1" disabled>Guest</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="my-3">
                        <select class="form-select p-2">
                            <option selected value="-1" disabled>All Types</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="my-3 row">
                        <div class="col-6">
                            <select class="form-select p-2" name="bedroom">
                                <option selected value="-1" disabled>Bedrooms</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <select class="form-select p-2" name="bathroom">
                                <option selected value="-1" selected>Bathrooms</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="my-3 price-slider">
                        <div class="h-3">
                            <h3>Price Range</h3>
                        </div>
                        <input type="text" class="js-range-slider" id="prange" name="prange" value=""
                            data-skin="round" data-type="double" data-min="0" data-max="1000" data-grid="false" />

                        <div class="row my-3 p-0">
                            <div class="col-6">
                                $ <span class="from w-100">0</span> <!-- Changed input to span -->
                            </div>
                            <div class="col-6 text-end">
                                $ <span class="to w-100">1000</span> <!-- Changed input to span -->
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary search-btn w-75" id="filter-search"> Search</button>
                    </div>
                </form>
            </div>

            <div class="col-lg-8 col-sm-12 my-3">
                <div class="row my-2">
                    <div class="col-6 " id="property_count">

                    </div>
                    <div class="col-6">
                        <select class="form-select p-2" name="orderby" id="orderby">
                            <option value="-1">Default</option>
                            <option value="1">Date, New To Old</option>
                            <option value="2">Date, Old To New</option>
                            <option value="3">Price, Low To High</option>
                            <option value="4">Price, High To Low</option>
                        </select>
                    </div>
                </div>

                <div class="service-preload"><img src="{{ asset('public/front/images/loader.gif') }}">
                </div>

                <div class="service-div">
                </div>
            </div>

        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('public/front/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('public/front/js/vacation-homes/script.js') }}"></script>
@endsection
