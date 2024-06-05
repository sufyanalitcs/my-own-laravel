@extends('front.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('front/css/dashboard/common.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/dashboard/appointment.css') }}">
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
                        <a class="dashboard-list-item active" href="{{ route('appointments') }}">Appointments</a>
                        <a class="dashboard-list-item" href="{{ route('online-vouchers') }}">Gift Cards</a>
                        <a class="dashboard-list-item" href="{{ route('family-and-friends') }}">Family & Friends</a>
                        <a class="dashboard-list-item" href="{{ route('favourites') }}">Favorites</a>
                        <a class="dashboard-list-item" href="{{ route('profile') }}">Account & Settings</a>
                        <a class="dashboard-list-item" href="{{ route('reviews') }}">Reviews</a>
                        <a class="dashboard-list-item" href="{{ route('consents') }}">
                            Custom Forms
                        </a>
                    </div>
                </div>

                <div class="col-8 dashboard-right p-5">
                    <h3>Appointments</h3>
                    <br>
                    <span>UPCOMING</span>
                    <div class="appointments-section">
                        <div class="appointments-div">
                            <div class="row p-0 m-0 w-100">
                                <div class="col-9 appointment-right">
                                    <button class="btn btn-success rounded">Confirmed</button>
                                    <div class="appointment-title bold">Traditional cut + Beard </div>
                                    <div class="">
                                        <span class="appointment-img">
                                            <img src="{{ asset('front/images/appointment.png') }}" alt=""
                                                srcset="">
                                        </span>
                                        <span class="appointment-location">Barberia vintage</span>
                                    </div>
                                </div>
                                <div class="col-3 appointment-left d-flex flex-column align-items-center">
                                    <div class="appointment-day">Today</div>
                                    <div class="appointment-date">07</div>
                                    <div class="appointment-time">01:15 PM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <span>FINISHED APPOINTMENTS</span>
                    <div class="appointments-section">
                        <div class="appointments-div">
                            <div class="row p-0 m-0 w-100">
                                <div class="col-9 appointment-right">
                                    <button class="btn btn-success rounded">Confirmed</button>
                                    <div class="appointment-title bold">Traditional cut + Beard </div>
                                    <div class="">
                                        <span class="appointment-img">
                                            <img src="{{ asset('front/images/appointment.png') }}" alt=""
                                                srcset="">
                                        </span>
                                        <span class="appointment-location">Barberia vintage</span>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-danger px-5">
                                            Book again
                                        </button>
                                    </div>
                                </div>
                                <div class="col-3 appointment-left d-flex flex-column align-items-center">
                                    <div class="appointment-day">Today</div>
                                    <div class="appointment-date">07</div>
                                    <div class="appointment-time">01:15 PM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                </div>


            </div>
        </div>
    </section>
    <br>
@endsection

@section('js')
    <script src="{{ asset('front/js/dashboard/appointment.js') }}"></script>
@endsection
