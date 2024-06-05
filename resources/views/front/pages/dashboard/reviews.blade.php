@extends('front.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('front/css/dashboard/common.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/dashboard/reviews.css') }}">
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



    <section class="dashboard-section">
        <div class="container">
            <div class="row">
                <div class="col-4 dashboard-left">
                    <div class="profile-container d-flex flex-column align-items-center">
                        <div class="profile-img">
                            <img src="{{ asset('front/images/barber.png') }}" alt="" srcset="">
                        </div>
                        <h4 class="profile-name">
                            Jack Ronald
                        </h4>
                        <div class="profile-no">
                            +1 600-1234-5678
                        </div>
                    </div>

                    <div class="dashboard-list">
                        <a class="dashboard-list-item" href="{{ route('appointments') }}">Appointments</a>
                        <a class="dashboard-list-item" href="{{ route('online-vouchers') }}">Gift Cards</a>
                        <a class="dashboard-list-item" href="{{ route('family-and-friends') }}">Family & Friends</a>
                        <a class="dashboard-list-item" href="{{ route('favourites') }}">Favorites</a>
                        <a class="dashboard-list-item" href="{{ route('profile') }}">Account & Settings</a>
                        <a class="dashboard-list-item active" href="{{ route('reviews') }}">Reviews</a>
                        <a class="dashboard-list-item" href="{{ route('consents') }}">
                            Custom Forms
                        </a>
                    </div>
                </div>

               
                <div class="col-8 dashboard-right p-5">
                    <h4>Reviews</h4>

                    <div class="reviews-section">
                        <div class="review-heading">LEAVE A REVIEW</div>

                        <div class="review-card mt-5">
                            <div class="row">
                                <div class="col-9">
                                    <h6 class="review-shop"><b>Barbarians Traditional Barber Shop #3 </b> </h6>
                                    <div class="review-address">Avenida Rancho Aguacaliente Norte No. 7038, 32618 Juárez
                                    </div>
                                </div>
                                <div class="col-3 text-end">
                                    <button class="btn btn-light border rounded-pill"> Add <i
                                            class="fa-solid fa-star"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="review-card mt-5">
                            <div class="row">
                                <div class="col-9">
                                    <h6 class="review-shop"><b>Barbarians Traditional Barber Shop #3 </b> </h6>
                                    <div class="review-address">Avenida Rancho Aguacaliente Norte No. 7038, 32618 Juárez
                                    </div>
                                </div>
                                <div class="col-3 text-end">
                                    <button class="btn btn-light border rounded-pill"> Add <i
                                            class="fa-solid fa-star"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="review-card mt-5">
                            <div class="row">
                                <div class="col-9">
                                    <h6 class="review-shop"><b>Barbarians Traditional Barber Shop #3 </b> </h6>
                                    <div class="review-address">Avenida Rancho Aguacaliente Norte No. 7038, 32618 Juárez
                                    </div>
                                </div>
                                <div class="col-3 text-end">
                                    <button class="btn btn-light border rounded-pill"> Add <i
                                            class="fa-solid fa-star"></i></button>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>


            </div>
        </div>
    </section>
    <br> 


@endsection

@section('js')
    <script src="{{ asset('front/js/dashboard/reviews.js') }}"></script>
@endsection
