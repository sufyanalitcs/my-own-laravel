@extends('front.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('public/front/css/vacation-homes-details/desktop.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/vacation-homes-details/large.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/vacation-homes-details/mobile.css') }}">
   


@endsection


@section('content')
    <section class="images-container">
        <div class="images-div" id="gallery-container">
            <div class="image-div">
                <img src="{{ asset('public/front/images/test.png') }}" alt="" srcset="">
            </div>
            <div class="image-div">
                <img src="{{ asset('public/front/images/product/service (2).png') }}" alt="" srcset="">
            </div>
            <div class="image-div">
                <img src="{{ asset('public/front/images/product/service (3).png') }}" alt="" srcset="">
            </div>
            <div class="image-div">
                <img src="{{ asset('public/front/images/banner-1.png') }}" alt="" srcset="">
            </div>
        </div>
    </section>



    <div class="row mx-0" id="">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 px-2  ">
            <a class="lg-item" data-lg-size="1600-1067"
                data-src="https://images.unsplash.com/photo-1609342122563-a43ac8917a3a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1600&q=80">
                <img src="https://images.unsplash.com/photo-1609342122563-a43ac8917a3a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1600&q=80"
                    class="w-100 shadow-1-strong mb-3" alt="Boat on Calm Water" />
            </a>
            <a class="lg-item" data-lg-size="1600-2400"
                data-src="https://images.unsplash.com/photo-1608481337062-4093bf3ed404?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1600&q=80">
                <img src="https://images.unsplash.com/photo-1608481337062-4093bf3ed404?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=240&q=80"
                    class="w-100 shadow-1-strong " alt="Wintry Mountain Landscape" />
            </a>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0 px-2">
            <a class="lg-item" data-lg-size="1600-2398"
                data-src="https://images.unsplash.com/photo-1526281216101-e55f00f0db7a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1600&q=80">
                <img src="https://images.unsplash.com/photo-1526281216101-e55f00f0db7a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=240&q=80"
                    class="w-100 shadow-1-strong mb-3" alt="Mountains in the Clouds" />
            </a>
            <a class="lg-item" data-lg-size="1600-1065"
                data-src="https://images.unsplash.com/photo-1596370743446-6a7ef43a36f9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1600&q=80">
                <img src="https://images.unsplash.com/photo-1596370743446-6a7ef43a36f9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=240&q=80"
                    class=" w-100 shadow-1-strong" alt="Boat on Calm Water" />
            </a>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0 px-2">
            <a class="lg-item" data-lg-size="1600-1067"
                data-src="https://images.unsplash.com/photo-1418065460487-3e41a6c84dc5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1600&q=80">
                <img src="https://images.unsplash.com/photo-1418065460487-3e41a6c84dc5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=240&q=80"
                    class="w-100 shadow-1-strong mb-3" alt="Waves at Sea" />
            </a>
            <a class="lg-item" data-lg-size="1600-2400"
                data-src="https://images.unsplash.com/photo-1610448721566-47369c768e70?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1600&q=80">
                <img src="https://images.unsplash.com/photo-1610448721566-47369c768e70?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=240&q=80"
                    class="w-100 shadow-1-strong " alt="Yosemite National Park" />
            </a>
        </div>
    </div>


    <br>
    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection

@section('js')  
    <script src="{{ asset('public/front/js/vacation-homes-details/script.js') }}"></script>

@endsection
