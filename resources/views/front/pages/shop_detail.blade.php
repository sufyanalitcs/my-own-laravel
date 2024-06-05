@extends('front.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('front/css/shop-detail/desktop.css') }}">
@endsection


@section('content')
    <section class="banner-section">
        @include('front.includes.header')

        <div class="container">
            <div class="banner-div h-100">
                <div class="category-container h-100 d-flex flex-column justify-content-end">
                    @include('front.includes.category')
                </div>
            </div>
        </div>
    </section>




    <section class="detail-section my-5">
        <div class="container">
            <div class="shop-detail">
                <main id="main">
                    <div class="detail-slider-div">
                        <!-- Slider main container -->
                        <div class="gallery">
                            <div class="swiper-container gallery-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="{{ asset('front/images/detail-1.png') }}" alt=""></div>
                                    <div class="swiper-slide"><img src="{{ asset('front/images/detail-2.png') }}" alt=""></div>
                                    <div class="swiper-slide"><img src="{{ asset('front/images/detail-3.png') }}" alt=""></div>
                                    <div class="swiper-slide"><img src="{{ asset('front/images/detail-4.png') }}" alt=""></div>
                                    <div class="swiper-slide"><img src="{{ asset('front/images/detail-1.png') }}" alt=""></div>
                                    <div class="swiper-slide"><img src="{{ asset('front/images/detail-2.png') }}" alt=""></div>
                                </div>
                                <div class="swiper-button-prev gallery-button-prev"></div>
                                <div class="swiper-button-next gallery-button-next"></div>
                            </div>

                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="{{ asset('front/images/detail-1.png') }}" alt=""></div>
                                    <div class="swiper-slide"><img src="{{ asset('front/images/detail-2.png') }}" alt=""></div>
                                    <div class="swiper-slide"><img src="{{ asset('front/images/detail-3.png') }}" alt=""></div>
                                    <div class="swiper-slide"><img src="{{ asset('front/images/detail-4.png') }}" alt=""></div>
                                    <div class="swiper-slide"><img src="{{ asset('front/images/detail-1.png') }}" alt=""></div>
                                    <div class="swiper-slide"><img src="{{ asset('front/images/detail-2.png') }}" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="detail-heading row">
                        <h2 class="col-9">Anthony @ Westside Barbershop</h2>
                        <h2 class="col-3 text-end">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#sharedModal">
                                <i class="fa-solid fa-share-nodes"></i>
                            </button>
                            <button type="button" class="btn">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </h2>
                    </div>

                    <div class="detail-desc">
                        1101 W John F Kennedy Blvd, Tampa, 33606
                    </div>

                    <div class="d-flex my-2">
                        <button class="btn btn-light border mx-2 rounded-pill">
                            <i class="fa-solid fa-thumbs-up"></i> MY OWN APPOINTMENTS Recommended
                            <i class="fa-solid fa-circle-info"></i>
                        </button>
                        <button class="btn btn-light border mx-2 rounded-pill">
                            Promoted
                            <i class="fa-solid fa-circle-info"></i>
                        </button>
                    </div>

                    <br>
                    <br>

                    <!-- ============================================================================= -->
                    <div class="services-section my-3">
                        <div class="row">
                            <div class="col-6">
                                <h3>Services</h3>
                            </div>
                            <div class="col-6">
                                <div class=" form-group has-search">
                                    <span class="fa fa-search form-control-feedback"></span>
                                    <input type="text" class="form-control" id="service-search"
                                        placeholder="Search Services">
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item service-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button service-button " type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        <div class="w-100">Haircuts
                                            <span class="total-services"> 6 services</span>
                                        </div>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <h3 class="service-name">
                                                    Women’s Haircut Long Hair
                                                </h3>
                                                <p>Shampoo, cut and blow dry are included</p>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-light border"
                                                    data-bs-toggle="modal" data-bs-target="#serviceDetail">
                                                    <i class="fa-solid fa-ellipsis"></i>
                                                </button>

                                            </div>
                                            <div class="col-4">
                                                <div class="row">
                                                    <div class="col-8 text-end">
                                                        <div class="service-price">$60.00</div>
                                                        <div class="service-duration">1h</div>
                                                    </div>
                                                    <div class="col-4">
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-toggle="modal" data-bs-target="#bookModal">
                                                            Book
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item service-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button service-button  collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        <div class="w-100"> HAIRCOLOR & SPECIALTY COLOR
                                            <span class="total-services"> 6 services</span>
                                        </div>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <h3 class="service-name">
                                                    Soothing Jelly mask

                                                </h3>
                                                <p>Shampoo, cut and blow dry are included</p>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-light border"
                                                    data-bs-toggle="modal" data-bs-target="#serviceDetail">
                                                    <i class="fa-solid fa-ellipsis"></i>
                                                </button>

                                            </div>
                                            <div class="col-4">
                                                <div class="row">
                                                    <div class="col-8 text-end">
                                                        <div class="service-price">$60.00</div>
                                                        <div class="service-duration">1h</div>
                                                    </div>
                                                    <div class="col-4">
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-toggle="modal" data-bs-target="#bookModal">
                                                            Book
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item service-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button service-button  collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        <div class="w-100">HAIR SMOOTHING
                                            <span class="total-services"> 6 services</span>
                                        </div>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <h3 class="service-name">
                                                    High Frequency

                                                </h3>
                                                <p>Shampoo, cut and blow dry are included</p>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-light border"
                                                    data-bs-toggle="modal" data-bs-target="#serviceDetail">
                                                    <i class="fa-solid fa-ellipsis"></i>
                                                </button>

                                            </div>
                                            <div class="col-4">
                                                <div class="row">
                                                    <div class="col-8 text-end">
                                                        <div class="service-price">$60.00</div>
                                                        <div class="service-duration">1h</div>
                                                    </div>
                                                    <div class="col-4">
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-toggle="modal" data-bs-target="#bookModal">
                                                            Book
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="service-no-results" style="display: none;">No results found</div>

                        <hr>


                    </div>

                    <!-- ============================================================================= -->

                    <div class="rules-section my-3">
                        <div class="rules-heading">
                            <h3>
                                Venue Health and Safety Rules
                            </h3>
                        </div>

                        <div class="row">
                            <div class="col-6 my-2">
                                <span><img src="{{ asset('front/images/rule-icon.png') }}" alt="" srcset=""></span>
                                Disposable supplies in use
                            </div>

                            <div class="col-6 my-2">
                                <span><img src="{{ asset('front/images/rule-icon.png') }}" alt="" srcset=""></span>
                                No walk-ins
                            </div>

                            <div class="col-6 my-2">
                                <span><img src="{{ asset('front/images/rule-icon.png') }}" alt="" srcset=""></span>
                                Disinfection between clients
                            </div>
                            <div class="col-6 my-2">
                                <span><img src="{{ asset('front/images/rule-icon.png') }}" alt="" srcset=""></span>
                                Contactless payment available
                            </div>
                            <div class="col-6 my-2">
                                <span><img src="{{ asset('front/images/rule-icon.png') }}" alt="" srcset=""></span>
                                Maintain social distancing
                            </div>
                            <div class="col-6 my-2">
                                <span><img src="{{ asset('front/images/rule-icon.png') }}" alt="" srcset=""></span>
                                Employees wear disposable gloves
                            </div>

                        </div>
                        <hr>
                        <p>When is time of Client Appointment, Client Must Call Stylist, Nail Tech or Make-up Artist
                            that your have arrived. Appointment ONLY for Client, no kids, or second, third Person. For
                            our Safety. Please fill out form before arriving to your appointment.</p>
                    </div>

                    <!-- ============================================================================= -->

                    <div class="our-work-section my-3">
                        <h3 class="our-work-heading">See Our Work</h3>
                        <div class="our-grids my-3">
                            <div class="grid-col grid-col-1">
                                <img src="{{ asset('front/images/grid-1.jpeg') }}" alt="Portfolio">
                            </div>
                            <div class="grid-col grid-col-2">
                                <img src="{{ asset('front/images/grid-2.jpeg') }}" alt="Portfolio">
                            </div>
                            <div class="grid-col grid-col-3">
                                <img src="{{ asset('front/images/grid-3.jpeg') }}" alt="Portfolio">
                            </div>
                            <div class="grid-col grid-col-4">
                                <img src="{{ asset('front/images/grid-4.jpeg') }}" alt="Portfolio">
                            </div>
                            <div class="grid-col grid-col-5">
                                <img src="{{ asset('front/images/grid-5.jpeg') }}" alt="Portfolio">
                            </div>
                        </div>
                        <br>
                        <a href="{{ route('all-works') }}" class="btn btn-dark w-100 p-2">
                            See all works
                        </a>

                    </div>
                    <!-- ============================================================================= -->

                    <div class="amenities-section my-5">
                        <h3 class="amenities-heading fw-bolder">Amenities</h3>
                        <div class="row">
                            <div class="col-6"><i class="amenites-icon fa-solid fa-car"></i> Parking space</div>
                            <div class="col-6"><i class="amenites-icon fa-solid fa-wifi"></i> Wi-Fi</div>
                            <div class="col-6"><i class="amenites-icon fa-solid fa-credit-card"></i> Credit cards
                                accepted</div>
                            <div class="col-6"><i class="amenites-icon fa-solid fa-wheelchair"></i> Accessible for
                                people with disabilities</div>
                        </div>
                    </div>



                    <!-- ============================================================================= -->

                    <div class="rates-section my-3">
                        <h3 class="rates-heading fw-bolder">
                            Ratings & Reviews
                        </h3>
                        <div class="rates-text">
                            My Own Appointments guarantees that reviews with the "Verified My Own Appointments user" tag
                            have been added by registered My Own Appointments users who have had an appointment with the
                            provider. A registered My Own Appointments user has the opportunity to add a review only
                            after the service has been provided to them.
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-4 rates-left">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="">
                                        <span class="rates-obtain">5.0</span>
                                        <span class="rates-total">/ 5</span>
                                    </div>
                                    <div class="rates-star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="rates-based">Based on 382 reviews</span>
                                </div>
                            </div>
                            <div class="col-8 rates-right">

                                <div class="range-slider">
                                    <div class="d-flex align-items-center">
                                        <span class="mx-1"><i class="fa-solid fa-star"></i> </span>
                                        <span class="mx-1"> 5 </span>
                                        <input type="range" class="range-input" min="0" max="100"
                                            value="80">
                                        <span class="mx-3"> 345</span>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <span class="mx-1"><i class="fa-solid fa-star"></i> </span>
                                        <span class="mx-1"> 4 </span>
                                        <input type="range" class="range-input" min="0" max="100"
                                            value="10">
                                        <span class="mx-3"> 10</span>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <span class="mx-1"><i class="fa-solid fa-star"></i> </span>
                                        <span class="mx-1"> 3 </span>
                                        <input type="range" class="range-input" min="0" max="100"
                                            value="0">
                                        <span class="mx-3"> 0</span>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <span class="mx-1"><i class="fa-solid fa-star"></i> </span>
                                        <span class="mx-1"> 2 </span>
                                        <input type="range" class="range-input" min="0" max="100"
                                            value="5">
                                        <span class="mx-3"> 5</span>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <span class="mx-1"><i class="fa-solid fa-star"></i> </span>
                                        <span class="mx-1"> 1 </span>
                                        <input type="range" class="range-input" min="0" max="100"
                                            value="0">
                                        <span class="mx-3"> 0</span>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <hr>

                        <div class="reviews-btn-div">
                            <button class="btn btn-light reviews-btn border">All</button>
                            <button class="btn btn-light reviews-btn">5 stars (3849)</button>
                            <button class="btn btn-light reviews-btn">4 stars (48)</button>
                            <button class="btn btn-light reviews-btn">3 stars (19)</button>
                            <button class="btn btn-light reviews-btn">2 stars (6)</button>
                            <button class="btn btn-light reviews-btn">1 stars (28)</button>
                        </div>

                        <div class="client-reviews-section my-3">
                            <div class="client-review">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="rates-star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <span class="review-name">Erik L • </span>
                                        <span class="review-time">Apr 18, 2024</span>

                                        <span class="review-verify">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </span>

                                    </div>
                                </div>

                                <div class="">
                                    <span class="review-service">
                                        Women Haircut
                                    </span>
                                    <br>
                                    by
                                    <span class="review-staffer">
                                        Nora Cepeda
                                    </span>
                                </div>

                                <div class="review-para">
                                    <div class="review-para-content" id="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut ligula eu arcu
                                        sodales fringilla. In vehicula euismod arcu, nec posuere mi maximus vel. Nam non
                                        magna non velit iaculis condimentum. Nullam gravida, nunc et rutrum aliquet,
                                        urna tortor fermentum libero, at aliquet ipsum velit id purus. Donec posuere
                                    </div>
                                    <div class="showMoreBtn read-more-btn">Show More</div>
                                </div>

                                <div class="review-reply">
                                    <div class="">
                                        <i class="fa-solid fa-reply"></i>
                                        Replied: <span class="reply-time"> Nov 14, 2020
                                        </span>
                                    </div>
                                    <div class="reply-name">
                                        Jackie’s Divine Stylism
                                    </div>
                                    <div class="reply-msg">
                                        Thank you 😊
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <span class="review-like active">
                                            1 <i class="fa-regular fa-thumbs-up"></i>
                                        </span>
                                        <span class="review-dislike">
                                            1 <i class="fa-regular fa-thumbs-down"></i>
                                        </span>
                                    </div>
                                    <div class="col-6 text-end">
                                        <button class="btn btn-light rounded-pill" type="button" data-bs-toggle="modal"
                                            data-bs-target="#reportModal">Report
                                            <i class="fa-solid fa-flag"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="client-review">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="rates-star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <span class="review-name">Erik L • </span>
                                        <span class="review-time">Apr 18, 2024</span>

                                        <span class="review-verify">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </span>

                                    </div>
                                </div>

                                <div class="">
                                    <span class="review-service">
                                        Women Haircut
                                    </span>
                                    <br>
                                    by
                                    <span class="review-staffer">
                                        Nora Cepeda
                                    </span>
                                </div>

                                <div class="review-para">


                                    <div class="review-para-content" id="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut ligula eu arcu
                                        sodales fringilla. In vehicula euismod arcu, nec posuere mi maximus vel. Nam non
                                        magna non velit iaculis condimentum. Nullam gravida, nunc et rutrum aliquet,
                                        urna tortor fermentum libero, at aliquet ipsum velit id purus. Donec posuere
                                    </div>
                                    <div class="showMoreBtn read-more-btn">Show More</div>

                                    <div class="container__img-holder">
                                        <img src="{{ asset('front/images/review.jpeg') }}" alt="Image">
                                    </div>

                                </div>

                                <div class="review-reply">
                                    <div class="">
                                        <i class="fa-solid fa-reply"></i>
                                        Replied: <span class="reply-time"> Nov 14, 2020
                                        </span>
                                    </div>
                                    <div class="reply-name">
                                        Jackie’s Divine Stylism
                                    </div>
                                    <div class="reply-msg">
                                        Thank you 😊
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <span class="review-like">
                                            1 <i class="fa-regular fa-thumbs-up"></i>
                                        </span>
                                        <span class="review-dislike">
                                            1 <i class="fa-regular fa-thumbs-down"></i>
                                        </span>
                                    </div>
                                    <div class="col-6 text-end">
                                        <button class="btn btn-light rounded-pill" type="button" data-bs-toggle="modal"
                                            data-bs-target="#reportModal">Report
                                            <i class="fa-solid fa-flag"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </main>

                <aside id="aside" class="p-3">
                    <div class="row">
                        <div class="col-5 mx-1 p-3 card">
                            <div class="gift-icon"><i class="fa-solid fa-gift"></i></div>
                            <h4>Gift Cards</h4>
                            <p>Looking for the perfect present? Explore available Gift Cards.</p>
                            <button class="btn btn-light border w-100"> Show Gift Cards </button>
                        </div>
                        <div class="col-5 mx-1 p-3 card">
                            <div class="gift-icon"><i class="fa-solid fa-bag-shopping"></i></div>
                            <h4>Online Shop
                            </h4>
                            <p>Running low on products? Order them online!</p>
                            <button class="btn btn-light border w-100"> Go to online shop </button>
                        </div>
                    </div>

                    <div class="right-side">
                        <div class="map-section">

                        </div>

                        <div class="about-section">
                            <h2> About us </h2>
                            <p> Jackie's Divine Stylism is been in business since June 2010. We offer Hair, Make-up,
                                Nail services and portrait photography. Our loyal customers come to us for new looks and
                                hairstyle updates to highlight their inner and outer beauty. We don't put down our
                                styling tools, until magic happens and make your headshot look fabulous.
                            </p>
                        </div>

                        <div class="staffers-section">
                            <h2> Staffers </h2>
                            <div class="row">
                                <div class="col-4">
                                    <div class="staffers-img">
                                        <img src="{{ asset('front/images/staffer-1.jpeg') }}" alt="" srcset="">
                                    </div>
                                    <div class="staffers-name">
                                        Jacquelin Florian
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="staffers-img">
                                        <img src="{{ asset('front/images/staffer-2.jpeg') }}" alt="" srcset="">
                                    </div>
                                    <div class="staffers-name">
                                        Olivia Ortiz
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="contact-section my-3">
                            <h3>Contact & Business hours</h3>
                            <hr>

                            <div class="row align-items-center">
                                <div class="col-9">
                                    <i class="fa-solid fa-mobile-screen"></i>
                                    (440) 396-4920
                                </div>
                                <div class="col-3 text-end">
                                    <a href="tel:+(440) 396-4920" class="btn btn-danger">Call </a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    Sunday
                                </div>
                                <div class="col-6 text-end">
                                    <b>
                                        10:00 AM <small>-</small> 02:00 PM
                                    </b>
                                </div>

                                <div class="col-6">
                                    Monday
                                </div>
                                <div class="col-6 text-end">
                                    <b>
                                        10:00 AM <small>-</small> 02:00 PM
                                    </b>
                                </div>

                                <div class="col-6">
                                    Tuesday
                                </div>
                                <div class="col-6 text-end">
                                    <b>
                                        10:00 AM <small>-</small> 02:00 PM
                                    </b>
                                </div>

                                <div class="col-6">
                                    Wednesday
                                </div>
                                <div class="col-6 text-end">
                                    <b>
                                        10:00 AM <small>-</small> 02:00 PM
                                    </b>
                                </div>

                                <div class="col-6">
                                    thursday
                                </div>
                                <div class="col-6 text-end">
                                    <b>
                                        10:00 AM <small>-</small> 02:00 PM
                                    </b>
                                </div>

                                <div class="col-6">
                                    Friday
                                </div>
                                <div class="col-6 text-end">
                                    <b>
                                        10:00 AM <small>-</small> 02:00 PM
                                    </b>
                                </div>

                                <div class="col-6">
                                    Saturday
                                </div>
                                <div class="col-6 text-end">
                                    <b>
                                        10:00 AM <small>-</small> 02:00 PM
                                    </b>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <b>
                                        May 13, 2024
                                    </b>
                                </div>
                                <div class="col-6 text-end">
                                    Closed
                                </div>
                                <div class="col-6">
                                    May 20, 2024
                                </div>
                                <div class="col-6 text-end">
                                    <b>
                                        10:00 AM <small>-</small> 02:00 PM
                                    </b>
                                </div>
                                <div class="col-6">
                                    May 20, 2024
                                </div>
                                <div class="col-6 text-end">
                                    <b>
                                        10:00 AM <small>-</small> 02:00 PM
                                    </b>
                                </div>
                            </div>

                            <hr>
                            <div class="notes">
                                <p>
                                    We are able to work with your schedule if available :) Text 210-788-2069. We also
                                    offer Afterpay at checkout. All Color and Treatments Services price varies if used
                                    extra product, which is per bowl. All Prepayments/ Deposits are Non-Refundable, All
                                    Services &amp; Products are Final Sale. Thank you for supporting Jackie’s Divine
                                    Stylism.
                                </p>
                            </div>

                            <div class="social-section">
                                <h3>
                                    Social Media
                                </h3>
                                <div class="row justify-content-center">
                                    <a class="col-3 media-link ">
                                        <div class="socail-icon"> <i class="fa-brands fa-instagram"></i></div>
                                        <div class="socail-name">Instagram</div>
                                    </a>

                                    <a class="col-3 media-link">
                                        <div class="socail-icon"> <i class="fa-brands fa-facebook"></i></div>
                                        <div class="socail-name">facebook</div>
                                    </a>

                                    <a class="col-3 media-link">
                                        <div class="socail-icon"><i class="fa-solid fa-globe"></i></div>
                                        <div class="socail-name">Website</div>
                                    </a>
                                </div>
                            </div>

                            <br>


                        </div>

                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Payment & Cancellation Policy
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we use
                                        to style each element. These classes control the overall appearance, as well
                                        as the showing and hiding via CSS transitions. You can modify any of this
                                        with custom CSS or overriding our default variables. It's also worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>,
                                        though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Report
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use
                                        to style each element. These classes control the overall appearance, as well
                                        as the showing and hiding via CSS transitions. You can modify any of this
                                        with custom CSS or overriding our default variables. It's also worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>,
                                        though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Travel Fee &amp; Policy
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use
                                        to style each element. These classes control the overall appearance, as well
                                        as the showing and hiding via CSS transitions. You can modify any of this
                                        with custom CSS or overriding our default variables. It's also worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>,
                                        though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>

            </div>
        </div>
    </section>






    <!-- image Modal -->
    <div class="img-popup">
        <img src="" alt="Popup Image">
        <div class="close-btn">
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </div>


    <!-- ===================================================================================== -->

    <!-- book Modal -->
    <div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="demo">
                            <div id="datepicker"></div>
                        </div>
                        <div class="w-50 day-duration">
                            <button class="btn btn light">Morning</button>
                            <button class="btn btn light">Afternon</button>
                            <button class="btn btn light">Evening</button>
                        </div>

                        <br>
                        <br>
                        <br>
                        <div class="">
                            <div class="time-slot swiper-container">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper time-wrapper">
                                    <button type="button"
                                        class="btn btn-light time-slot-item swiper-slide position-relative">
                                        9:00 AM
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            - 10%
                                        </span>
                                    </button>
                                    <button type="button"
                                        class="btn btn-light active time-slot-item swiper-slide position-relative">
                                        9:15 AM
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            - 10%
                                        </span>
                                    </button>
                                    <button type="button"
                                        class="btn btn-light time-slot-item swiper-slide position-relative">
                                        9:30 AM
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            - 10%
                                        </span>
                                    </button>
                                    <button type="button"
                                        class="btn btn-light time-slot-item swiper-slide position-relative">
                                        9:45 AM
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            - 10%
                                        </span>
                                    </button>
                                    <button type="button"
                                        class="btn btn-light time-slot-item swiper-slide position-relative">
                                        10:00 AM
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            - 10%
                                        </span>
                                    </button>
                                    <button type="button"
                                        class="btn btn-light time-slot-item swiper-slide position-relative">
                                        10:15 AM
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            - 10%
                                        </span>
                                    </button>
                                    <button type="button"
                                        class="btn btn-light time-slot-item swiper-slide position-relative">
                                        10:30 AM
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            - 10%
                                        </span>
                                    </button>
                                    <button type="button"
                                        class="btn btn-light time-slot-item swiper-slide position-relative">
                                        10:45 AM
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            - 10%
                                        </span>
                                    </button>
                                    <button type="button"
                                        class="btn btn-light time-slot-item swiper-slide position-relative">
                                        11:00 AM
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            - 10%
                                        </span>
                                    </button>
                                    <button type="button"
                                        class="btn btn-light time-slot-item swiper-slide position-relative">
                                        11:15 AM
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            - 10%
                                        </span>
                                    </button>
                                    <button type="button"
                                        class="btn btn-light time-slot-item swiper-slide position-relative">
                                        11:30 AM
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            - 10%
                                        </span>
                                    </button>
                                    <button type="button"
                                        class="btn btn-light time-slot-item swiper-slide position-relative">
                                        11:45 AM
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            - 10%
                                        </span>
                                    </button>
                                </div>

                                <!-- If we need navigation buttons -->
                                <div class="time-button-prev swiper-button-prev"></div>
                                <div class="time-button-next swiper-button-next"></div>

                            </div>
                        </div>
                        <br>
                        <br>
                        <div id="cardContainer">
                            <div class="book-service-card" draggable="true">
                                <div class="row">
                                    <div class="col-8 text-start">
                                        <h4 class="book-service-title">Women’s Haircut Long Hair</h4>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div class="book-service-price">$60.00</div>
                                        <div class="book-service-time">11:00 AM - 12:00 PM</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-8 text-start">
                                        <h6 class="book-service-staff">Staff: No preference</h6>
                                    </div>
                                    <div class="col-4 text-end">
                                        <!-- Button staffer Modal   -->
                                        <button type="button" class="btn btn-light border rounded-pill"
                                            data-bs-toggle="modal" data-bs-target="#stafferModal">
                                            Change
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="book-service-card" draggable="true">
                                <div class="row">
                                    <div class="col-8 text-start">
                                        <h4 class="book-service-title">Women’s Haircut Long Hair</h4>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div class="book-service-price">$60.00</div>
                                        <div class="book-service-time">11:00 AM - 12:00 PM</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-8 text-start">
                                        <h6 class="book-service-staff d-flex align-items-center">
                                            <span>Staff:</span>
                                            <span class="book-service-staff-img"><img src="{{ asset('front/images/staffer-1.jpeg') }}"
                                                    alt="" srcset=""></span>
                                            <span class="book-service-staff-name">Caprice Preciado
                                            </span>
                                        </h6>
                                    </div>
                                    <div class="col-4 text-end">
                                        <!-- Button staffer Modal   -->
                                        <button type="button" class="btn btn-light border rounded-pill"
                                            data-bs-toggle="modal" data-bs-target="#stafferModal">
                                            Change
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>
                        <!-- Button trigger modal -->
                        <a type="button" class="btn" data-bs-toggle="modal" data-bs-target="#anotherServiceModal">
                            <i class="fa-solid fa-plus"></i> Add another services
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal">
                        Continue
                    </button>

                </div>
            </div>
        </div>
    </div>

    <!-- another service Modal -->
    <div class="modal fade" id="anotherServiceModal" tabindex="-1" aria-labelledby="anotherServiceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 type="button" class="modal-title" data-bs-toggle="modal" data-bs-target="#bookModal">
                        <i class="fa-solid fa-arrow-left-long"></i>
                    </h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="saloon-service">
                        <div class="row">
                            <div class="col-2">
                                <div class="saloon-service-img">
                                    <img src="{{ asset('front/images/banner.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-7">
                                <h4 class="saloon-service-name">Colour Connie Nails & Spa</h4>
                                <h6>6 Bowman Ave,, Colour Connie Nails & Spa, Port Chester, 10573</h6>
                            </div>
                            <div class="col-3 text-center">
                                <h3 class="saloon-service-rating-title">4.8</h3>
                                <div class="saloon-service-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class=" form-group has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control" placeholder="Search Services">
                        </div>
                        <br>
                        <div class="saloon-service-list">

                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item service-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                        <button class="accordion-button service-button " type="button"
                                            data-bs-toggle="collapse" data-bs-target="#haircut-collapseOne"
                                            aria-expanded="true" aria-controls="haircut-collapseOne">
                                            <div class="w-100">Haircuts
                                                <span class="total-services"> 6 services</span>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="haircut-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h3>
                                                        Women’s Haircut Long Hair
                                                    </h3>
                                                    <p>Shampoo, cut and blow dry are included</p>

                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-light border"
                                                        data-bs-toggle="modal" data-bs-target="#serviceDetail">
                                                        <i class="fa-solid fa-ellipsis"></i>
                                                    </button>

                                                </div>
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-8 text-end">
                                                            <div class="service-price">$60.00</div>
                                                            <div class="service-duration">1h</div>
                                                        </div>
                                                        <div class="col-4">
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-toggle="modal" data-bs-target="#bookModal">
                                                                Book
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item service-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                        <button class="accordion-button service-button  collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#haircolor-collapseTwo"
                                            aria-expanded="false" aria-controls="haircolor-collapseTwo">
                                            <div class="w-100"> HAIRCOLOR & SPECIALTY COLOR
                                                <span class="total-services"> 6 services</span>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="haircolor-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-headingTwo">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h3>
                                                        Women’s Haircut Long Hair
                                                    </h3>
                                                    <p>Shampoo, cut and blow dry are included</p>

                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-light border"
                                                        data-bs-toggle="modal" data-bs-target="#serviceDetail">
                                                        <i class="fa-solid fa-ellipsis"></i>
                                                    </button>

                                                </div>
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-8 text-end">
                                                            <div class="service-price">$60.00</div>
                                                            <div class="service-duration">1h</div>
                                                        </div>
                                                        <div class="col-4">
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-toggle="modal" data-bs-target="#bookModal">
                                                                Book
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item service-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                        <button class="accordion-button service-button  collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#smoothing-collapseThree"
                                            aria-expanded="false" aria-controls="smoothing-collapseThree">
                                            <div class="w-100">HAIR SMOOTHING
                                                <span class="total-services"> 6 services</span>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="smoothing-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="panelsStayOpen-headingThree">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h3>
                                                        Women’s Haircut Long Hair
                                                    </h3>
                                                    <p>Shampoo, cut and blow dry are included</p>

                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-light border"
                                                        data-bs-toggle="modal" data-bs-target="#serviceDetail">
                                                        <i class="fa-solid fa-ellipsis"></i>
                                                    </button>

                                                </div>
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-8 text-end">
                                                            <div class="service-price">$60.00</div>
                                                            <div class="service-duration">1h</div>
                                                        </div>
                                                        <div class="col-4">
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-toggle="modal" data-bs-target="#bookModal">
                                                                Book
                                                            </button>
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

            </div>
        </div>
    </div>

    <!-- staffer Modal -->
    <div class="modal fade" id="stafferModal" tabindex="-1" aria-labelledby="stafferModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="stafferModalLabel">Choose Staffer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="">
                        <div class="row border-bottom p-3 items-center">
                            <div class="col-auto">
                                <div class="icon-avatar">
                                    <img src="{{ asset('front/images/avatar.png') }}" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-10">
                                <span class="text-h4 mb-xs">No preference</span>
                                <div class="subtext text-success"><!---->
                                    <span><!----> Highest availability</span>
                                </div>
                            </div>
                        </div>

                        <div class="row  border-bottom p-3 items-center">
                            <div class="col-auto">
                                <div class="icon-avatar">
                                    <img src="{{ asset('front/images/staffer-2.jpeg') }}" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-10">
                                <span class="text-h4 mb-xs">Olivia Ortiz
                                </span>
                                <div class="subtext text-success"><!---->
                                    <span><!----> Highest availability</span>
                                </div>
                            </div>
                        </div>



                        <div class="row  border-bottom p-3 items-center">
                            <div class="col-auto">
                                <div class="icon-avatar">
                                    <img src="{{ asset('front/images/staffer-1.jpeg') }}" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-10">
                                <span class="text-h4 mb-xs">Olivia Ortiz
                                </span>
                                <div class="subtext text-danger"><!---->
                                    <span><!----> Staffer has other appointments </span>
                                </div>
                            </div>
                        </div>

                        <div class="row  border-bottom p-3 items-center">
                            <div class="col-auto">
                                <div class="icon-avatar">
                                    <img src="{{ asset('front/images/staffer-2.jpeg') }}" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-10">
                                <span class="text-h4 mb-xs">Olivia Ortiz
                                </span>
                                <div class="subtext text-dark"><!---->
                                    <span><!----> Staffer has other appointments on selected time Ruby</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>

            </div>
        </div>
    </div>

    <!-- ===================================================================================== -->

    <!-- service Modal -->
    <div class="modal fade" id="serviceDetail" tabindex="-1" aria-labelledby="serviceDetailLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="serviceDetailLabel">Women’s Haircut Long Hair </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Shampoo, cut and blow dry are included</p>
                </div>
                <div class="modal-footer">
                    <span class="w-20">
                        <b>$60.00</b>
                        <br>
                        1h
                    </span>
                    <button type="button" class="btn btn-primary w-75">Book</button>
                </div>
            </div>
        </div>
    </div>

    <!-- confirm Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="confirmModalLabel">Review and confirm </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-lg text-center">
                        <div class="font-h2 font-normal">
                            <strong class="bookingDate font-h1">May, Saturday 11 2024</strong>
                            <div class="text-h2">9:00 AM - 11:05 AM (2h 5min)</div>
                        </div>
                        <div class="text-muted text-h5">Jackie’s Divine Stylism</div>
                    </div>

                    <div class="confirm-box mt-3"><!---->
                        <div class="divided">
                            <div class="pb-2 border-bottom">
                                <div class="row">
                                    <div class="col">
                                        <div class="text-muted text-h5 line-break-anywhere">Extra Product</div>
                                        <!---->
                                        <div class="subtext">Meet Jacquelin Florian, a highly skilled cosmetologist,
                                            HMUA (Hair and Makeup Artist), colorist, extensions specialist with over
                                            14 years of valuable experience. Holding her cosmetologist certification
                                            from Beauty Schools Of America in Miami, FL, Jacquelin is a true expert
                                            in the field of beauty, styling and photography.

                                            Jacquelin Florian isn't just a cosmetologist; she's an artist dedicated
                                            to bringing out the beauty and confidence in each person she works with.
                                        </div>
                                        <div data-testid="subbooking-item-summary-staffer-label" class="subtext">
                                            <span class="text-lightgray">Staff:</span> Jacquelin Florian
                                        </div>
                                    </div>
                                    <div class="col-auto text-end">
                                        <div class="text-muted text-h5">$38.00+</div>
                                        <div class="subtext">9:00 AM - 9:05 AM</div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-2 border-bottom">
                                <div class="row">
                                    <div class="col">
                                        <div class="text-muted text-h5 line-break-anywhere">Boys/Men Perm</div>
                                        <!----><!---->
                                        <div data-testid="subbooking-item-summary-staffer-label" class="subtext">
                                            <span class="text-lightgray">Staff:</span> Olivia Ortiz
                                        </div>
                                    </div>
                                    <div class="col-auto text-end">
                                        <div class="text-muted text-h5">$99.00+</div>
                                        <div class="subtext">9:05 AM - 11:05 AM</div>
                                    </div>
                                </div>
                            </div><!---->
                            <div>
                                <div class="row">
                                    <div class="col text-end">
                                        <div><span class="text-muted b-mr-2">Tax:
                                            </span><span class="font-h4">6.17</span></div>
                                        <div><span class="text-muted b-mr-2">Total: </span><span
                                                class="font-h4">$143.17+</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-message"></i></span>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="note" placeholder="Username">
                            <label for="note">Leave a note (optional)</label>
                        </div>
                    </div>

                    <div class="">
                        <div class="summary">
                            <div class="summary-text text-muted">Tip: <div class="chips-list chips-list-inline sm:ml-lg">
                                    <div class="chip chip-pillow">No Tip</div>
                                    <div class="chip chip-pillow active">20%</div>
                                    <div class="chip chip-pillow">30%</div>
                                    <div class="chip chip-pillow">40%</div>
                                    <div class="chip chip-pillow">Other</div>
                                </div>
                            </div>
                            <div class="summary-price ml-md">
                                <div class="font-h4">$27.40</div>
                            </div><!----><!---->
                            <div class="summary-text text-muted">
                                <div class="d-inline-flex items-center">Prepayment
                                    <i class="mx-3 fa-regular fa-circle-question"></i>
                                </div>
                            </div>
                            <div class="summary-price">
                                <div class="font-h4">$73.12</div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body pt-sm pb-md">
                        <div class="text-right">
                            <div class="d-flex justify-content-end text-center">
                                <div class="text-muted font-h5 pr-sm">To pay now:</div>
                                <div data-testid="payment-summary-prepayment-total" class="h0">$73.12
                                </div>
                            </div>
                            <div class="text-muted text-end font-h5">
                                $97.45 later</div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger rounded-pill" data-bs-toggle="modal"
                        data-bs-target="#cardModal">
                        Add Payment Card
                    </button>

                    <br>
                    <p class="text-center">Your personal data will be
                        processed by the partner with whom you are booking an appointment. You can find more information
                        <a class="cursor-pointer">here</a>.
                        <br>By booking an appointment, you
                        agree to the <a class="widget-link cursor-pointer">Cancellation
                            Policy</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- card Modal -->
    <div class="modal fade" id="cardModal" tabindex="-1" aria-labelledby="cardModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="cardModalLabel">Book an appointment
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h2 class="mb-xs">Add your Payment Card</h2>
                        <p class="font-h5 m-0">Add card to your My Own Appointments Account and get to know Mobile
                            Payments – fast,
                            convenient and secure.</p>
                    </div>

                </div>
                <div class="modal-footer">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger rounded-pill" data-bs-toggle="modal"
                        data-bs-target="#appointmentConfirmedModal">
                        Pay Now
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Appointment Confirmed   Modal -->
    <div class="modal fade" id="appointmentConfirmedModal" tabindex="-1"
        aria-labelledby="appointmentConfirmedModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="appointmentConfirmedModalLabel">Book an appointment
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="appointment-confirmed-img">
                        <img src="{{ asset('front/images/appointment-confirmed-img.png') }}" alt="" srcset="">

                    </div>
                    <div class="text-center">
                        <h2 class="mb-xs">Appointment Confirmed
                            <br>
                            May 6, 2024, 14:30
                        </h2>
                        <p class="font-h5 m-0">ou're done! We'll send you a text reminder before your appointment.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Show Appointment</button>
                </div>
            </div>
        </div>
    </div>

    <!-- report Modal -->
    <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="reportModalLabel">Report image or content </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="sexual">
                        <label class="form-check-label" for="sexual">
                            Sexual content
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="violent" checked>
                        <label class="form-check-label" for="violent">
                            Violent or repulsive content
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="hateful">
                        <label class="form-check-label" for="hateful">
                            Hateful or abusive content
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="harmful"
                            checked>
                        <label class="form-check-label" for="harmful">
                            Harmful dangerous acts
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="child">
                        <label class="form-check-label" for="child">
                            Child abuse
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="infringes"
                            checked>
                        <label class="form-check-label" for="infringes">
                            Infringes my rights
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="promotes"
                            checked>
                        <label class="form-check-label" for="promotes">
                            Promotes terrorism
                        </label>
                    </div>


                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="span"
                            checked>
                        <label class="form-check-label" for="span">
                            Spam or misleading
                        </label>
                    </div>






                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Report</button>
                </div>
            </div>
        </div>
    </div>

    <!-- shared Modal -->
    <div class="modal fade" id="sharedModal" tabindex="-1" aria-labelledby="sharedexampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="sharedexampleModalLabel">Share Business</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="shared-img-div">
                        <div class="shared-img" style="padding-top: 66.6667%;">
                            <img src="{{ asset('front/images/rank.jpeg') }}" alt="Nick Blendz - San Antonio" title="Nick Blendz">
                        </div>
                        <div class="shared-img-review">
                            <div data-testid="rank-average" class="rank-average">
                                5.0
                            </div>
                            <div data-testid="rank-label" class="rank-label">
                                10 reviews
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <h2>
                            Nick Blendz
                        </h2>
                        <span>
                            3609 West Ave, San Antonio, 78213
                        </span>
                    </div>

                    <div class="my-3">
                        <div class="network-item">
                            <i class="fa-brands fa-facebook" style="color: #005eff;"></i>
                            <span class="network-title">Facebook</span>
                            <i class="fa-solid fa-angle-right" style="color: #a1a1a1;"></i>
                        </div>
                        <div class="network-item">
                            <i class="fa-brands fa-twitter" style="color: #74C0FC;"></i>
                            <span class="network-title">Twitter</span>
                            <i class="fa-solid fa-angle-right" style="color: #a1a1a1;"></i>
                        </div>

                        <div class="network-item">
                            <i class="fa-solid fa-link" style="color: #9c9c9c;"></i>
                            <span class="network-title">Copy link</span>
                            <i class="fa-solid fa-angle-right" style="color: #a1a1a1;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('front/js/shop-detail.js') }}"></script>
@endsection
