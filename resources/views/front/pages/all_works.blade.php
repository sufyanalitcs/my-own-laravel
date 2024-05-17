@extends('front.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('public/front/css/all-works/desktop.css') }}">
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
                    <!-- =======================  BANNER SECTION  ======================= -->
                    <a href="{{ asset('shop-detail') }}" class="text-decoration-none text-dark">
                        <i class="fa-solid fa-arrow-left-long"></i> Back to business details
                    </a>
                    <div class="text-center">
                        <h2>The Skin Power</h2>
                        <p>2923 Theme St, Kissimmee, 34746</p>
                    </div>


                    <div class="text-center">

                        <div class="all-works-section">
                            <div class="all-works-div">
                                <div class="all-work-img">
                                    <img src="{{ asset('public/front/images/all-works-1.jpeg') }}" alt=""
                                        srcset="">
                                </div>
                                <div class="all-work-social">
                                    <h6 class="all-work-share"><i class="fa-solid fa-share-nodes"></i></h6>
                                    <h6 class="all-work-comment"><i class="fa-regular fa-comment-dots"> <span>0</span> </i>
                                    </h6>
                                    <h6 class="all-work-like"><i class="fa-regular fa-heart"></i> <span>1</span></h6>
                                </div>
                            </div>
                            <div class="all-works-div">
                                <div class="all-work-img">
                                    <img src="{{ asset('public/front/images/all-works-2.jpeg') }}" alt=""
                                        srcset="">
                                </div>
                                <div class="all-work-social">
                                    <h6 class="all-work-share"><i class="fa-solid fa-share-nodes"></i></h6>
                                    <h6 class="all-work-comment"><i class="fa-regular fa-comment-dots"> <span>0</span> </i>
                                    </h6>
                                    <h6 class="all-work-like"><i class="fa-regular fa-heart"></i> <span>1</span></h6>
                                </div>
                            </div>
                            <div class="all-works-div">
                                <div class="all-work-img">
                                    <img src="{{ asset('public/front/images/all-works-3.jpeg') }}" alt=""
                                        srcset="">
                                </div>
                                <div class="all-work-social">
                                    <h6 class="all-work-share"><i class="fa-solid fa-share-nodes"></i></h6>
                                    <h6 class="all-work-comment"><i class="fa-regular fa-comment-dots"> <span>0</span> </i>
                                    </h6>
                                    <h6 class="all-work-like"><i class="fa-regular fa-heart"></i> <span>1</span></h6>
                                </div>
                            </div>
                            <div class="all-works-div">
                                <div class="all-work-img">
                                    <img src="{{ asset('public/front/images/all-works-4.jpeg') }}" alt=""
                                        srcset="">
                                </div>
                                <div class="all-work-social">
                                    <h6 class="all-work-share"><i class="fa-solid fa-share-nodes"></i></h6>
                                    <h6 class="all-work-comment"><i class="fa-regular fa-comment-dots"> <span>0</span> </i>
                                    </h6>
                                    <h6 class="all-work-like"><i class="fa-regular fa-heart"></i> <span>1</span></h6>
                                </div>
                            </div>
                            <div class="all-works-div">
                                <div class="all-work-img">
                                    <img src="{{ asset('public/front/images/all-works-1.jpeg') }}" alt=""
                                        srcset="">
                                </div>
                                <div class="all-work-social">
                                    <h6 class="all-work-share"><i class="fa-solid fa-share-nodes"></i></h6>
                                    <h6 class="all-work-comment"><i class="fa-regular fa-comment-dots"> <span>0</span> </i>
                                    </h6>
                                    <h6 class="all-work-like"><i class="fa-regular fa-heart"></i> <span>1</span></h6>
                                </div>
                            </div>
                            <div class="all-works-div">
                                <div class="all-work-img">
                                    <img src="{{ asset('public/front/images/all-works-2.jpeg') }}" alt=""
                                        srcset="">
                                </div>
                                <div class="all-work-social">
                                    <h6 class="all-work-share"><i class="fa-solid fa-share-nodes"></i></h6>
                                    <h6 class="all-work-comment"><i class="fa-regular fa-comment-dots"> <span>0</span> </i>
                                    </h6>
                                    <h6 class="all-work-like"><i class="fa-regular fa-heart"></i> <span>1</span></h6>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-light w-50 border my-3">
                            Show more
                        </button>

                    </div>

                    <!-- ============================================================================= -->

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
@endsection

@section('js')
    <script src="{{ asset('public/front/js/all-works.js') }}"></script>
@endsection
