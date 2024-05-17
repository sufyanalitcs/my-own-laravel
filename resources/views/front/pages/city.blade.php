@extends('front.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('public/front/css/city/desktop.css') }}">
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

    <section class="saloon-section my-3">
        <div class="container">
            <div class="d-flex align-items-center flex-column">
                <div class="h-2 w-50 text-center">
                    <h2>
                        Hair salons near me - the
                        best hairdressers and hair stylists
                    </h2>
                </div>
                <div class="p w-75 text-center">
                    <p>Did you find an exciting new hairstyle in a fashion magazine? Then you need to take a trip to a
                        hair salon near you to achieve that fancy cut. Hair salons feature hairstylists with extensive
                        training and education. They can provide complicated hairstyles, coloring, and more. You can use
                        My Own Appointments to discover all hair salons near you (top rated, walk-in, open on Sunday).
                        You'll see
                        their primary services, prices, user review score, and available appointment times. At My Own
                        Appointments, we recommend the top-rated hair salons in your area for your convenience.
                        Scheduling an appointment is quick and easy with My Own Appointments. You're also free to find a
                        salon that
                        matches your budget level!</p>
                </div>
                <div class="saloon-img">
                    <img src="{{ asset('public/front/images/saloon-old.png') }}" alt="" srcset="">
                </div>

            </div>
        </div>
    </section>

    <section class="saloon-section my-3">
        <div class="container">
            <div class="h-2 text-center">
                <h2>
                    Hair Salons - around you
                </h2>
            </div>
            <br>
            <div class="row justify-content-center">
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in San Diego</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Dallas</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in San Antonio</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Tampa</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Miami</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in San Jose</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Washington</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Chicago</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in San Francisco</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Columbus</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Houston</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Philadelphia</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Oakland</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Austin</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Jacksonville</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Charlotte</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Denver</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Orlando</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in Atlanta</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
                    <div class="col-10">Hair Salon in New York City</div>
                    <div class="col-2"><i class="fa-solid fa-arrow-right-long"></i></div>
                </a>
                <a href="{{ route('shop') }}" class="col-3 saloon-div row">
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

    <section class="slides-section">
        <!-- Slider main container -->
        <div class="swiper-container salon-slide-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper salon-slide-wrapper">
                <!-- Slides -->
                <div class="swiper-slide salon-slide">
                    <img src="{{ asset('public/front/images/slides-1.png') }}" alt="" srcset="">
                </div>
                <div class="swiper-slide salon-slide">
                    <img src="{{ asset('public/front/images/slides-2.png') }}" alt="" srcset="">
                </div>
                <div class="swiper-slide salon-slide">
                    <img src="{{ asset('public/front/images/slides-3.png') }}" alt="" srcset="">
                </div>
                <div class="swiper-slide salon-slide">
                    <img src="{{ asset('public/front/images/slides-4.png') }}" alt="" srcset="">
                </div>
                <div class="swiper-slide salon-slide">
                    <img src="{{ asset('public/front/images/slides-5.png') }}" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>

    <br>
    <br> 

    <section class="saloon-customer-section my-3">
        <div class="container">
            <div class="saloon-customer-div">
                <div class="row">
                    <div class="col-6">
                        <h2 class="saloon-customer-heading">
                            Hair Salons <br> customer reviews
                        </h2>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <!-- If we need navigation buttons -->
                        <div class="saloon-customer-button-prev swiper-button-prev"></div>
                        <div class="saloon-customer-button-next swiper-button-next"></div>
                    </div>
                </div>
                <!-- Slider main container -->
                <div class="saloon-customer-container swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide saloon-customer-slide">
                            <p>Tito was excellent with my boys ( ages 6 and 9). He
                                listened and did exactly what they wanted. He’s very
                                personable and we had a nice conversation. Glad to have
                                him as a part of the Ocala community!</p>

                            <div class="review-icons">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('public/front/images/customer-1.png') }}" alt=""
                                        srcset="">
                                </div>
                                <div class="col-10">
                                    <div class="h-6">
                                        <h6>BARBER-TITO @ KING-CUTZ</h6>
                                    </div>
                                    <p>3131 Sw College Rd, 34474 Ocala </p>
                                </div>
                            </div>

                        </div>

                        <div class="swiper-slide saloon-customer-slide">
                            <p>Tito was excellent with my boys ( ages 6 and 9). He
                                listened and did exactly what they wanted. He’s very
                                personable and we had a nice conversation. Glad to have
                                him as a part of the Ocala community!</p>

                            <div class="review-icons">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('public/front/images/customer-1.png') }}" alt=""
                                        srcset="">
                                </div>
                                <div class="col-10">
                                    <div class="h-6">
                                        <h6>BARBER-TITO @ KING-CUTZ</h6>
                                    </div>
                                    <p>3131 Sw College Rd, 34474 Ocala </p>
                                </div>
                            </div>

                        </div>

                        <div class="swiper-slide saloon-customer-slide">
                            <p>Tito was excellent with my boys ( ages 6 and 9). He
                                listened and did exactly what they wanted. He’s very
                                personable and we had a nice conversation. Glad to have
                                him as a part of the Ocala community!</p>

                            <div class="review-icons">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('public/front/images/customer-1.png') }}" alt=""
                                        srcset="">
                                </div>
                                <div class="col-10">
                                    <div class="h-6">
                                        <h6>BARBER-TITO @ KING-CUTZ</h6>
                                    </div>
                                    <p>3131 Sw College Rd, 34474 Ocala </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hair-section my-3">
        <div class="container">
            <img src="{{ asset('public/front/images/hair.png') }}" class="w-100" alt="" srcset="">
        </div>
    </section>

    <section class="provide-section my-3">
        <div class="container">
            <div class="row">
                <div class="col-9">
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


                    <br>
                    <div class="treatments-heading">
                        <h3>Popular treatments</h3>
                    </div>
                    <div class="treatments-links">
                        <a href="" class="treatments-link">Female Haircut</a>
                        <a href="" class="treatments-link">Highlights</a>
                        <a href="" class="treatments-link">Hair Color</a>
                        <a href="" class="treatments-link">Silk Press</a>
                        <a href="" class="treatments-link">Hair Styling</a>
                        <a href="" class="treatments-link">Hair Extensions</a>
                        <a href="" class="treatments-link">Wigs</a>
                        <a href="" class="treatments-link">Natural Hair Stylists</a>
                        <a href="" class="treatments-link">Updos</a>
                        <a href="" class="treatments-link">Perm</a>
                        <a href="" class="treatments-link">Balayage</a>
                        <a href="" class="treatments-link">Blow Dry</a>
                        <a href="" class="treatments-link">Hair Care</a>
                        <a href="" class="treatments-link">Trim</a>
                        <a href="" class="treatments-link">Hair Wash</a>
                        <a href="" class="treatments-link">Root Touch-up</a>
                        <a href="" class="treatments-link">Deep Conditioning Treatment</a>
                        <a href="" class="treatments-link">Keratin Hair Treatment</a>
                        <a href="" class="treatments-link">Relaxers</a>
                        <a href="" class="treatments-link">Kid's Haircut</a>
                        <a href="" class="treatments-link">Brazilian Blowout</a>
                        <a href="" class="treatments-link">Olaplex</a>
                        <a href="" class="treatments-link">Hair Toner</a>
                        <a href="" class="treatments-link">Scalp Treatment</a>
                        <a href="" class="treatments-link">Color Correction</a>
                        <a href="" class="treatments-link">Bleach & Tone</a>
                        <a href="" class="treatments-link">Hair Straightening</a>
                        <a href="" class="treatments-link">Gender Neutral Haircut</a>
                        <a href="" class="treatments-link">Wedding Hair Stylist</a>
                        <a href="" class="treatments-link">Permanent Hair Straightening</a>
                    </div>

                </div>
                <div class="col-3">
                    <div class="provide-img">
                        <img src="{{ asset('public/front/images/provide.png') }}" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script src="{{ asset('public/front/js/city.js') }}"></script>
@endsection
