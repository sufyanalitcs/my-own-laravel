@extends('front.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('front/css/dashboard/common.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/dashboard/profile.css') }}">
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
                        <a class="dashboard-list-item active" href="{{ route('profile') }}">Account & Settings</a>
                        <a class="dashboard-list-item" href="{{ route('reviews') }}">Reviews</a>
                        <a class="dashboard-list-item" href="{{ route('consents') }}">
                            Custom Forms
                        </a>
                    </div>
                </div>

                <div class="col-8 dashboard-right p-5">
                    <h3>Account & Settings</h3>
                    <br>
                    <h5>Account Details</h5>

                    <div class="form my-3">
                        <form>

                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="first-last"
                                        placeholder="First & Last Name" required>
                                    <label for="first-last">First & Last Name</label>
                                </div>
                                <span class="input-group-text">X</span>
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input type="text" readonly class="form-control" id="email" placeholder="Email"
                                        required>
                                    <label for="email">Email</label>
                                </div>
                                <button type="button" class="input-group-text btn border " data-bs-toggle="modal"
                                    data-bs-target="#email-modal">
                                    Change
                                </button>
                            </div>


                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input type="text" readonly class="form-control" id="phone"
                                        placeholder="phone Number" required>
                                    <label for="phone">phone Number</label>
                                </div>
                                <button type="button" class="input-group-text btn border " data-bs-toggle="modal"
                                    data-bs-target="#phone-modal">
                                    Change
                                </button>
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="birthday"
                                        placeholder="Birthday (YYYY-MM-DD)" required>
                                    <label for="birthday">Birthday (YYYY-MM-DD)</label>
                                </div>
                            </div>


                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input type="password" readonly class="form-control" id="password"
                                        placeholder="password" required>
                                    <label for="password">Password</label>
                                </div>
                                <button type="button" class="input-group-text btn border " data-bs-toggle="modal"
                                    data-bs-target="#password-modal">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div>

                            <div class="mb-3">
                                <h5>Show me services for:</h5>
                                <div class="btn-group-container d-inline-flex p-3">
                                    <div class="form-check mx-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Men
                                        </label>
                                    </div>
                                    <div class="form-check mx-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Women
                                        </label>
                                    </div>
                                    <div class="form-check mx-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            Everyone
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="address-section mb-3">
                                <h4>Address</h4>
                                <div class="no-address">
                                    <div class="row">
                                        <div class="col-6 d-flex flex-column  justify-content-center">
                                            <h6>Your Address</h6>
                                            <p>We supply your address to any services that travel to you. It is never
                                                made public.</p>

                                            <button type="button" class="btn-danger btn border " data-bs-toggle="modal"
                                                data-bs-target="#address-modal">
                                                Enter Your Address
                                            </button>

                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <div class="address-img">
                                                <img src="{{ asset('front/images/address.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="setting-section mb-3">
                                <h4>Settings</h4>
                                <div class="setting-text">Email</div>

                                <div class="row">
                                    <label class="form-check-label col-6" for="flexSwitchCheckChecked">Checked switch checkbox input</label>

                                    <div class="form-check form-switch col-6">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                      </div>
                                </div>
                            </div>




                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <br> 



    
    <!-- email Modal -->
    <div class="modal fade" id="email-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Change Email Address
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-column align-items-center">
                        <div class="">You will use email address above to sign in to your profile</div>
                        <h4>New E-mail Address is:</h4>

                        <div class="input-group mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                                <label for="floatingInputGroup1">Username</label>
                            </div>
                            <span class="input-group-text">X</span>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary w-100">Submit </button>
                </div>
            </div>
        </div>
    </div>



    <!-- Phone Modal -->
    <div class="modal fade" id="phone-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">
                        Change phone number
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-column align-items-center">
                        <div class="">We'll text this number to confirm your account.</div>
                        <h4>New Mobile Phone is:</h4>
                        <div class="input-group mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="phone-number" placeholder="Phone Number">
                                <label for="phone-number">
                                    Phone Number
                                </label>
                            </div>
                            <span class="input-group-text">X</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary w-100">Submit </button>
                </div>
            </div>
        </div>
    </div>


    <!-- password Modal -->
    <div class="modal fade" id="password-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center">
                        Are you sure?
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-column align-items-center">
                        <div class="">We will email instructions for changing your password to you.</div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light border">ok </button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                        Ooops, no
                    </button>
                </div>
            </div>
        </div>
    </div>



    <!-- address Modal -->
    <div class="modal fade" id="address-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center">
                        Address
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form">

                        <div class="input-group mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="street-number">
                                <label for="street-number">
                                    Street & Number
                                </label>
                            </div>
                            <span class="input-group-text">X</span>
                        </div>

                        <div class="input-group mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="apartment-suite">
                                <label for="apartment-suite">
                                    Apartment or Suite Number (optional)
                                </label>
                            </div>
                            <span class="input-group-text">X</span>
                        </div>


                        <div class="input-group mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="city">
                                <label for="city">
                                    City
                                </label>
                            </div>
                            <span class="input-group-text">X</span>
                        </div>

                        <div class="input-group mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="zip-code">
                                <label for="zip-code">
                                    Zip Code
                                </label>
                            </div>
                            <span class="input-group-text">X</span>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary w-100">
                        Save your address
                    </button>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')
    <script src="{{ asset('front/js/dashboard/profile.js') }}"></script>
@endsection
