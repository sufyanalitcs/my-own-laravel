<meta charset="utf-8">
<meta name="description" content="">
<link rel="icon" type="image/x-icon" href="{{ asset('front/images/logo.png') }}">

<title>{{ $data["title"] }} | My Own Appointments</title>

<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- bootstrap css --}}
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

{{-- swipper css --}}
<link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}"> 

{{-- fontawesome --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
crossorigin="anonymous" referrerpolicy="no-referrer" />

{{-- common css --}}
<link rel="stylesheet" href="{{ asset('front/css/common.css') }}">

{{-- custom css --}}
<link rel="stylesheet" href="{{ asset('front/css/header.css') }}">
<link rel="stylesheet" href="{{ asset('front/css/footer.css') }}">
 
<link rel="stylesheet" href="{{ asset('front/css/auth.css') }}">
<link rel="stylesheet" href="{{ asset('front/css/category.css') }}">

