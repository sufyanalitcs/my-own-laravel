@extends('front.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('front/css/shop/desktop.css') }}">
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


    <section class="location-section my-5">
        <div class="container">
            <div class="location-heading">
                <h2>Hair Salons Near Me in San Francisco, CA. Number of salons: (226)</h2>
            </div>
            <span class="location-result">
                What affects the search results?
            </span>

            <div class="near-salon-div">
                <!-- Slider main container -->
                <div class="near-salon-container swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <a class="swiper-slide near-salon-slide" href="{{ route('shop-detail') }}">
                            <div class="near-salon-img">
                                <img src="{{ asset('front/images/near-1.png') }}" alt="" srcset="">
                            </div>
                            <div class="row">
                                <h6 class="col-10"> Red Union Salon - San Francis…</h6>
                                <div class="col-2">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </div>
                            <span>1757 Union Street, San Francisco, 94123</span>
                            <div class="amenites">
                                <div class="amenites-div">
                                    <i class="fa-solid fa-thumbs-up"></i>
                                </div>
                                <div class="amenites-div">
                                    <i class="fa-solid fa-car"></i>
                                </div>
                            </div>
                            <span class="promoted">promoted <i class="fa-solid fa-circle-info"></i></span>
                        </a>

                        <a class="swiper-slide near-salon-slide" href="{{ route('shop-detail') }}">
                            <div class="near-salon-img">
                                <img src="{{ asset('front/images/near-2.png') }}" alt="" srcset="">
                            </div>
                            <div class="row">
                                <h6 class="col-10"> Red Union Salon - San Francis…</h6>
                                <div class="col-2">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </div>
                            <span>1757 Union Street, San Francisco, 94123</span>
                            <div class="amenites">
                                <div class="amenites-div">
                                    <i class="fa-solid fa-thumbs-up"></i>
                                </div>
                                <div class="amenites-div">
                                    <i class="fa-solid fa-car"></i>
                                </div>
                            </div>

                            <span class="promoted">promoted <i class="fa-solid fa-circle-info"></i></span>

                        </a>

                        <a class="swiper-slide near-salon-slide" href="{{ route('shop-detail') }}">
                            <div class="near-salon-img">
                                <img src="{{ asset('front/images/near-3.png') }}" alt="" srcset="">
                            </div>
                            <div class="row">
                                <h6 class="col-10"> Red Union Salon - San Francis…</h6>
                                <div class="col-2">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </div>
                            <span>1757 Union Street, San Francisco, 94123</span>
                            <div class="amenites">
                                <div class="amenites-div">
                                    <i class="fa-solid fa-thumbs-up"></i>
                                </div>
                                <div class="amenites-div">
                                    <i class="fa-solid fa-car"></i>
                                </div>
                            </div>

                            <span class="promoted">promoted <i class="fa-solid fa-circle-info"></i></span>

                        </a>

                        <a class="swiper-slide near-salon-slide" href="{{ route('shop-detail') }}">
                            <div class="near-salon-img">
                                <img src="{{ asset('front/images/near-4.png') }}" alt="" srcset="">
                            </div>
                            <div class="row">
                                <h6 class="col-10"> Red Union Salon - San Francis…</h6>
                                <div class="col-2">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </div>
                            <span>1757 Union Street, San Francisco, 94123</span>
                            <div class="amenites">
                                <div class="amenites-div">
                                    <i class="fa-solid fa-thumbs-up"></i>
                                </div>
                                <div class="amenites-div">
                                    <i class="fa-solid fa-car"></i>
                                </div>
                            </div>

                            <span class="promoted">promoted <i class="fa-solid fa-circle-info"></i></span>

                        </a>

                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="near-salon-button-prev swiper-button-prev"></div>
                <div class="near-salon-button-next swiper-button-next"></div>
            </div>


        </div>
    </section>

    <hr>
    <section class="listing-section my-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <button class="btn btn-light"><i class="fa-solid fa-filter"></i> Filters</button>
                    <button class="btn btn-light">
                        Sort by: Recommended
                    </button>
                </div>
                <div class="col-6 text-end">
                    <button class="btn btn-warning">
                        <i class="fa-solid fa-location-dot"></i> MAP VIEW
                    </button>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-4">
                    <a class="listing-img" href="shop-detail">
                        <img src="{{ asset('front/images/listing-1.png') }}" alt="" srcset="">
                    </a>
                </div>

                <div class="col-8">
                    <a href="shop-detail" class="m-2 text-dark text-decoration-none">
                        <div class="mobile-service">
                            <i class="fa-solid fa-car"></i> Mobile service
                        </div>
                        <div class="listing-heading">
                            <h3>Red Union Salon - San Francisco</h3>
                        </div>
                        <span class="listing-location">
                            5.2 mi • 1757 Union Street, San Francisco, 94123
                        </span>
                    </a>

                    <div class="row listing-row">
                        <div class="col-9">
                            <h4 class="services-title">
                                Haircut/ Blow Dry (long hair)
                            </h4>
                            <p class="service-desc w-50">
                                Luxurious Shampoo, Haircut and
                                complimentary blow dry
                            </p>
                        </div>
                        <div class="col-1 text-end">
                            <span class="price">$100</span>
                            <span class="distance">30m</span>
                        </div>
                        <div class="col-2 text-center">
                            <a href="shop-detail" class="btn btn-danger">Book </a>
                        </div>
                    </div>

                    <div class="row listing-row">
                        <div class="col-9">
                            <h4 class="services-title">
                                Haircut/ Blow Dry (long hair)
                            </h4>
                            <p class="service-desc w-50">
                                Luxurious Shampoo, Haircut and
                                complimentary blow dry
                            </p>
                        </div>
                        <div class="col-1 text-end">
                            <span class="price">$100</span>
                            <span class="distance">30m</span>
                        </div>
                        <div class="col-2 text-center">
                            <a href="shop-detail" class="btn btn-danger">Book </a>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-4" href="shop-detail">
                    <a class="listing-img">
                        <img src="{{ asset('front/images/listing-2.png') }}" alt="" srcset="">
                    </a>
                </div>

                <div class="col-8">
                    <a href="shop-detail" class="m-2 text-dark text-decoration-none">
                        <div class="mobile-service">
                            <i class="fa-solid fa-car"></i> Mobile service
                        </div>
                        <div class="listing-heading">
                            <h3>Red Union Salon - San Francisco</h3>
                        </div>
                        <span class="listing-location">
                            5.2 mi • 1757 Union Street, San Francisco, 94123
                        </span>
                    </a>

                    <div class="row listing-row">
                        <div class="col-9">
                            <h4 class="services-title">
                                Haircut/ Blow Dry (long hair)
                            </h4>
                            <p class="service-desc w-50">
                                Luxurious Shampoo, Haircut and
                                complimentary blow dry
                            </p>
                        </div>
                        <div class="col-1 text-end">
                            <span class="price">$100</span>
                            <span class="distance">30m</span>
                        </div>
                        <div class="col-2 text-center">
                            <a href="shop-detail" class="btn btn-danger">Book </a>
                        </div>
                    </div>

                    <div class="row listing-row">
                        <div class="col-9">
                            <h4 class="services-title">
                                Haircut/ Blow Dry (long hair)
                            </h4>
                            <p class="service-desc w-50">
                                Luxurious Shampoo, Haircut and
                                complimentary blow dry
                            </p>
                        </div>
                        <div class="col-1 text-end">
                            <span class="price">$100</span>
                            <span class="distance">30m</span>
                        </div>
                        <div class="col-2 text-center">
                            <a href="shop-detail" class="btn btn-danger">Book </a>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-4">
                    <a class="listing-img" href="shop-detail">
                        <img src="{{ asset('front/images/listing-3.png') }}" alt="" srcset="">
                    </a>
                </div>

                <div class="col-8">
                    <a href="shop-detail" class="m-2 text-dark text-decoration-none">
                        <div class="mobile-service">
                            <i class="fa-solid fa-car"></i> Mobile service
                        </div>
                        <div class="listing-heading">
                            <h3>Red Union Salon - San Francisco</h3>
                        </div>
                        <span class="listing-location">
                            5.2 mi • 1757 Union Street, San Francisco, 94123
                        </span>
                    </a>

                    <div class="row listing-row">
                        <div class="col-9">
                            <h4 class="services-title">
                                Haircut/ Blow Dry (long hair)
                            </h4>
                            <p class="service-desc w-50">
                                Luxurious Shampoo, Haircut and
                                complimentary blow dry
                            </p>
                        </div>
                        <div class="col-1 text-end">
                            <span class="price">$100</span>
                            <span class="distance">30m</span>
                        </div>
                        <div class="col-2 text-center">
                            <a href="shop-detail" class="btn btn-danger">Book </a>
                        </div>
                    </div>

                    <div class="row listing-row">
                        <div class="col-9">
                            <h4 class="services-title">
                                Haircut/ Blow Dry (long hair)
                            </h4>
                            <p class="service-desc w-50">
                                Luxurious Shampoo, Haircut and
                                complimentary blow dry
                            </p>
                        </div>
                        <div class="col-1 text-end">
                            <span class="price">$100</span>
                            <span class="distance">30m</span>
                        </div>
                        <div class="col-2 text-center">
                            <a href="shop-detail" class="btn btn-danger">Book </a>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-4">
                    <a class="listing-img" href="shop-detail">
                        <img src="{{ asset('front/images/listing-4.png') }}" alt="" srcset="">
                    </a>
                </div>

                <div class="col-8">
                    <a href="shop-detail" class="m-2 text-dark text-decoration-none">
                        <div class="mobile-service">
                            <i class="fa-solid fa-car"></i> Mobile service
                        </div>
                        <div class="listing-heading">
                            <h3>Red Union Salon - San Francisco</h3>
                        </div>
                        <span class="listing-location">
                            5.2 mi • 1757 Union Street, San Francisco, 94123
                        </span>
                    </a>

                    <div class="row listing-row">
                        <div class="col-9">
                            <h4 class="services-title">
                                Haircut/ Blow Dry (long hair)
                            </h4>
                            <p class="service-desc w-50">
                                Luxurious Shampoo, Haircut and
                                complimentary blow dry
                            </p>
                        </div>
                        <div class="col-1 text-end">
                            <span class="price">$100</span>
                            <span class="distance">30m</span>
                        </div>
                        <div class="col-2 text-center">
                            <a href="shop-detail" class="btn btn-danger">Book </a>
                        </div>
                    </div>

                    <div class="row listing-row">
                        <div class="col-9">
                            <h4 class="services-title">
                                Haircut/ Blow Dry (long hair)
                            </h4>
                            <p class="service-desc w-50">
                                Luxurious Shampoo, Haircut and
                                complimentary blow dry
                            </p>
                        </div>
                        <div class="col-1 text-end">
                            <span class="price">$100</span>
                            <span class="distance">30m</span>
                        </div>
                        <div class="col-2 text-center">
                            <a href="shop-detail" class="btn btn-danger">Book </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="saloon-section my-5">
        <div class="container">
            <div class="h-2 text-center">
                <h2>
                    Most popular treatments
                </h2>
            </div>
            <br>
            <div class="row justify-content-center">
                <a href="#" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in San Diego</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="#" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Dallas</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="#" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in San Antonio</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="#" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Tampa</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="#" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Miami</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="#" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in San Jose</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="#" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Washington</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="#" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Chicago</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="#" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in San Francisco</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="#" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Columbus</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="#" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in New York City</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="#" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Portland</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
            </div>
            <br>
            <div class="text-center">
                <button class="btn btn-danger btn-gradient"> Use my location</button>
            </div>
        </div>
    </section>

    <section class="provide-section my-3">
        <div class="container">

            <div class="question">
                <h3>What Services do Hair Salons Provide?</h3>
            </div>
            <div class="answer">
                <p>
                    The leading service that hair salons offer is haircuts for women, men, and children. Their
                    haircuts and styles go beyond the basics that you'd find at a barbershop. The stylists at a
                    hair
                    salon can provide stylish cuts that you'd find in a fashion magazine. They can also shampoo,
                    condition, and dry your hair. Some salons offer manicures and will sell products such as
                    hairspray and styling gel. When you use My Own Appointments, you can instantly view each
                    salon's main services.
                </p>
            </div>
            <br>
            <div class="question">
                <h3>How do You Prepare for a Hair Salon
                    Appointment? </h3>
            </div>
            <div class="answer">
                <p>
                    When visiting a salon, it's a wise idea not to wash your hair beforehand. Most haircuts will
                    begin with a shampoo session, so you'll save yourself some shampoo at home. Also, it's a
                    good idea to carry cash with you to tip your stylist and their assistants. Finally, use
                    My Own Appointments to schedule your appointment in advance. That way, you guarantee
                    yourself a spot with the provider of your choosing. You also won't have to worry about
                    walking in at a busy time with a long wait.
                </p>
            </div>

            <br>
            <div class="question">
                <h3>How to Find the Best Hair Salon </h3>
            </div>
            <div class="answer">
                <p>
                    My Own Appointments is the best tool you can use to find local hair salons in your town.
                    With a simple
                    search, you can find all the local hair salons near you!
                    You'll also be able to view and compare their prices and services. Also, don't forget to
                    check
                    out the user score and reviews for each location. Once you find the salon that works for
                    you,
                    scheduling an appointment is quick and easy. Make sure that you pay attention to user
                    reviews that mention the best hair stylists by name.
                </p>
            </div>

            <br>
            <div class="question">
                <h3>How do I Know Which Hairstyle to Get? </h3>
            </div>
            <div class="answer">
                <p>
                    If you don't know what type of hairstyle you want, many salons have lots of options
                    available.
                    With My Own Appointments, you can view the hairstyles that each location offers. That way,
                    you can find a
                    hairstyle that resonates with your sense of style. Our platform is a great way to browse
                    different hairstyles available from the hair salons in your town. Also, you can check out
                    the
                    user reviews to make sure the salon can provide a great version of the hairstyle you want!
                </p>
            </div>

            <br>
            <div class="question">
                <h3>How do I Make an Appointment With a
                    Hair Salon? </h3>
            </div>
            <div class="answer">
                <p>
                    Scheduling an appointment is a streamlined process on My Own Appointments. Next to each
                    service is a
                    button that says 'book now.' By clicking on this button, you'll see the available time slots
                    for
                    the salon of your choosing. Once you select a time slot that fits your availability, hit
                    'confirm,'
                    and you're all done. All that's left is to show up for your appointment to enjoy a
                    professional
                    haircut. With My Own Appointments, you can even specify which hair stylist you'd like to see
                    during your
                    appointment!
                </p>
            </div>
            <br>
            <div class="question">
                <h3>How Much Will I Pay for a Visit to a Hair Salon? </h3>
            </div>
            <div class="answer">
                <p>
                    One of the best features of My Own Appointments is the ability to compare the prices of
                    local hair salons.
                    You'll be able to view each service and its cost. For haircuts and hairstyles, you can pay
                    anywhere from $25 - $75, depending on the type of cut. Simple cuts are cheaper, while
                    more complicated cuts require more labor and expertise. For coloring services, you can pay
                    anywhere from $50 - $100. It's a good idea to take a
                    look at more than a few hair salons on My Own Appointments so you can compare their prices

                </p>
            </div>

            <br>
            <div class="acritical-heading">
                <h3>Acritical</h3>
            </div>
            <div class="acritical-links w-75">
                <a href="" class="text-danger ">Check Your Face Shape</a>
                <a href="" class="text-danger mx-3">Wedding Hairstyles For Short Hair</a>
                <a href="" class="text-danger mx-3">Wedding Hairstyles For Medium Length Hair</a>
                <a href="" class="text-danger mx-3">How To Style Curly Hair</a>
                <a href="" class="text-danger mx-3">The Best Hairstyles For Graduation</a>
                <a href="" class="text-danger mx-3">How To Make Your Hair Less Greasy</a>
                <a href="" class="text-danger mx-3">Haircuts For a Receding Hairline</a>
                <a href="" class="text-danger mx-3">Most Popular Mens Haircuts</a>
            </div>

        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('front/js/shop.js') }}"></script>
@endsection
