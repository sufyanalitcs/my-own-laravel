<div class="navbar-wrapper">

    <nav class="navbar navbar-expand-lg navbar-light" id="top-nav">
        <div class="container my-2">
            <div class="left">
                <a href="#" class=" animate__animated animate__fadeInDown">
                    <i class="fa-regular fa-envelope"></i>
                    hello@luxelivingrentals.com
                </a>
                <a href="#" class="animate__animated animate__fadeInDown">
                    <i class="fa-solid fa-phone-volume"></i>
                    hello@luxelivingrentals.com
                </a>
            </div>
            <div class="right">
                <a href="#" class="animate__animated animate__fadeInRight">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#" class="animate__animated animate__fadeInRight">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
                <a href="#" class="animate__animated animate__fadeInRight">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" class="animate__animated animate__fadeInRight">
                    <i class="fa-brands fa-pinterest"></i>
                </a>
            </div>
        </div>
    </nav>


    <nav class="navbar navbar-expand-lg navbar-light  " id="main-nav">
        <div class="container">
            <div class="navbar-brand-div">

                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('public/front/images/logo.png') }}" alt="Logo" srcset="">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white animate__animated animate__fadeInDown"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white animate__animated animate__fadeInDown"
                            href="{{ route('about.us') }}">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white animate__animated animate__fadeInDown"
                            href="{{ route('vacation.homes') }}">Vacation Homes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white animate__animated animate__fadeInDown"
                            href="javascript:void(0)">Availability & Booking
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white animate__animated animate__fadeInDown"
                            href="{{ route('vacation.management') }}">Property Management</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white animate__animated animate__fadeInDown"
                            href="{{ route('contact.us') }}">Contact us</a>
                    </li>
                </ul>
                <form class="d-flex">


                    @if (Route::has('login'))
                        @auth

                            <div class="dropdown">
                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-regular fa-user"></i>
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item " href="{{ route('logouts') }}"> logout </a>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <button class="btn btn-light mx-2 px-4" type="button" data-bs-toggle="modal"
                                data-bs-target="#siginModal">
                                Login</button>
                            <button class="btn btn-danger mx-2 px-4" type="button" data-bs-toggle="modal"
                                data-bs-target="#sigupsModal">
                                Signup</button>
                        @endauth
                    @endif




                </form>
            </div>
        </div>
    </nav>

</div>
