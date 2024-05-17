@extends('front.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('public/front/css/dashboard/common.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/dashboard/family_and_friends.css') }}">
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
                            <img src="{{ asset('public/front/images/barber.png') }}" alt="" srcset="">
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
                        <a class="dashboard-list-item active" href="{{ route('family-and-friends') }}">Family & Friends</a>
                        <a class="dashboard-list-item" href="{{ route('favourites') }}">Favorites</a>
                        <a class="dashboard-list-item" href="{{ route('profile') }}">Account & Settings</a>
                        <a class="dashboard-list-item" href="{{ route('reviews') }}">Reviews</a>
                        <a class="dashboard-list-item" href="{{ route('consents') }}">
                            Custom Forms
                        </a>
                    </div>
                </div>

                <div class="col-8 dashboard-right d-flex flex-column align-items-center p-5">
                    <h3 class="text-center">Add Your Family & Friends</h3>
                    <p class="no-card-text w-75 text-center">Link an account to schedule appointments on behalf of
                        others a child, family member, partner, or even a pet. You will be able to manage their
                        appointments, receive notifications, and make payments.</p>

                    <span class="text-danger">Learn more</span>
                    <br>
                    <button class="btn btn-danger">Add Members</button>

                    <div class="family-img">
                        <img src="{{ asset('public/front/images/family.png') }}" alt="" srcset="">
                    </div>

                </div>

            </div>
        </div>
    </section>
    <br> 


@endsection

@section('js')
    <script src="{{ asset('public/front/js/dashboard/family_and_friends.js') }}"></script>
@endsection
