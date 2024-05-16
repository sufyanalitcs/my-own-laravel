<!doctype html>
<html>

<head>
    @include('front.includes.head')
    @yield('style')

</head>

<body>

    @yield('content')
    @include('front.includes.footer') 

    @include('front.includes.signin')
    @include('front.includes.signup')

    @include('front.includes.foot')
    @yield('js')
  
</body>

</html>
