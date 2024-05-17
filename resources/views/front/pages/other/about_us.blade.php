@extends('front.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('public/front/css/other/common.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/other/about_us.css') }}">
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
                    <div class="dashboard-list">
                        <a class="dashboard-list-item active" href="#">About Us</a>
                        <a class="dashboard-list-item" href="{{ route('terms') }}"> Terms of Service </a>
                        <a class="dashboard-list-item" href="{{ route('privacy') }}"> Privacy Policy </a>
                        <a class="dashboard-list-item" href="{{ route('contact') }}">Contact</a>
                        <a class="dashboard-list-item" href="{{ route('faq') }}">FAQ</a>
                        <a class="dashboard-list-item" href="{{ route('security') }}">Security</a>
                    </div>
                </div>

                <div class="col-8 dashboard-right p-5">
                    <h2>About Us</h3>
                </div>


            </div>
        </div>
    </section>
    <br>
@endsection

@section('js')
    <script src="{{ asset('public/front/js/other/about_us.js') }}"></script>
@endsection
