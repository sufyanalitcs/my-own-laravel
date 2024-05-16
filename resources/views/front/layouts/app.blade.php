<!doctype html>
<html>

<head>
    @include('front.includes.head')
    <style>
        /* PRELOADER CSS */
        .page-loader {
            width: 100%;
            height: 100%;
            position: absolute;
            background: #272727;
            z-index: 1000;

            .txt {
                color: #666;
                text-align: center;
                top: 40%;
                position: relative;
                text-transform: uppercase;
                letter-spacing: 0.3rem;
                font-weight: bold;
                line-height: 1.5;
            }
        }

        /* SPINNER ANIMATION */
        .spinner {
            position: relative;
            top: 35%;
            width: 80px;
            height: 80px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 100%;
            -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
            animation: sk-scaleout 1.0s infinite ease-in-out;
        }

        @-webkit-keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0)
            }

            100% {
                -webkit-transform: scale(1.0);
                opacity: 0;
            }
        }

        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            100% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
                opacity: 0;
            }
        }
    </style>
    @yield('style')

</head>

<body id="scroll-container">
    {{-- 
    <div class="page-loader">
        <div class="spinner"></div>
        <div class="txt">Luxe Living Vacation Rentals</div>
    </div> --}}

    <main>
        @include('front.includes.header')
        @yield('content')
        @include('front.includes.footer')
    </main>

    @include('front.includes.signin')
    @include('front.includes.signup')


    @yield('js')


    <script src="{{ asset('public/front/js/common.js') }}"></script>
    <script>
        $(window).on('load', function() {
            // $('main').hide();
            // setTimeout(function() { // allowing 3 secs to fade out loader
            //     $('.page-loader').fadeOut('slow');
            // $('main').show();
            // }, 2500);
        });
    </script>
</body>

</html>
