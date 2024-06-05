@extends('front.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('front/css/dashboard/common.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/dashboard/favourites.css') }}">
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
                        <a class="dashboard-list-item active" href="{{ route('favourites') }}">Favorites</a>
                        <a class="dashboard-list-item" href="{{ route('profile') }}">Account & Settings</a>
                        <a class="dashboard-list-item" href="{{ route('reviews') }}">Reviews</a>
                        <a class="dashboard-list-item" href="{{ route('consents') }}">
                            Custom Forms
                        </a>
                    </div>
                </div>

                <div class="col-8 dashboard-right p-5">
                    <div class="no-card d-flex flex-column align-items-center p-5">
                        <div class="no-card-img">
                            <img src="{{ asset('front/images/favourit.png') }}" alt="">
                        </div>
                        <h3 class="no-card-heading">
                            Here you'll see all of your favorite businesses
                        </h3>
                        
                    </div>
                </div>

            </div>
        </div>
    </section>
    <br> 


@endsection

@section('js')
    <script src="{{ asset('front/js/dashboard/favourites.js') }}"></script>
@endsection
