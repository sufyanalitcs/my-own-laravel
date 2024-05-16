
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('admin.includes.head')


</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0 h-75">
                @yield('content')
            </div>
        </div>
    </div>

    @include('admin.includes.footer')

</body>

</html>