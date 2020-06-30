<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seblak Ubed</title>
    <link rel="icon" href="{{ url ('frontend/images/fav.png') }}" sizes="16x16" type="image/png">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- CSS  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url ('frontend/libraries/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ url ('frontend/styles/main.css') }}">
    <link rel="stylesheet" href="{{ url ('frontend/styles/style.css') }}">
    <!-- CSS  -->


    <link rel="stylesheet" href="{{ url ('frontend/libraries/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url ('frontend/libraries/owl-carousel/css/owl.theme.default.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>

    @stack('addstyle')

</head>
<body>

    <!-- Navbar Menu  -->
    <div class="container">
    <nav class="navbar row navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand ml-2" href="{{ url('/') }}">
                <img src="{{ url ('frontend/images/logo.png') }}" alt="" srcset="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto mr-3 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product">PRODUCT</a>
                    </li>
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="track.html">TRACK</a>
                    </li>
                    <li class="nav-item mr-0">
                        @guest

                            @csrf
                            <a href="{{url('login')}} " class="nav-link mr-3" style="font-weight: bold; color: gray !important">SIGN IN</a>

                        @endguest
                    </li>

                    <li class="nav-item dropdown">
                        @auth
                            <form action="{{url('logout')}}" method="post">
                            @csrf
                            {{-- <button type="submit" class="nav-link">SIGN OUT</button> --}}

                                <a href="#" class="nav-link dropdown-toggle mr-4" id="navbardrop" data-toggle="dropdown" style="font-weight: bold; color: gray !important">ACCOUNT</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Profile</a>
                                    <button type="submit" class="dropdown-item">Sign out</button>
                                </div>


                            </form>
                            @endauth
                        </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm my-2 my-sm-0 px-4 btn-order" href="order.html"><img src="{{ url ('frontend/images/cart.png') }}" alt="cart" style="max-height: 15px;"> ORDER</a>
                    </li>
                </ul>
            </div>
    </nav>
    </div>
    <!-- Navbar Menu  -->

    <main>
        @yield('content')

    </main>

    <section class="section-credit mt-4 mb-4">
        <div class="container">
            <div class="row text-center px-4">
                <small>&copy; 2020 - Kang Seblak</small>
            </div>
        </div>
    </section>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{ url ('frontend/libraries/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ url ('frontend/libraries/jquery/jquery-3.4.1.min.js')}}"></script>

    <script src="{{ url ('frontend/libraries/owl-carousel/js/owl.carousel.min.js')}}"></script>

    @stack('addscript')
    <script>
        $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            dots: false,
            nav:true,
            pagination:false,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:2
                }
            }
        })
    });
    </script>

<script>
    var typed = new Typed('#typed', {
        stringsElement: '#typed-strings',
        typeSpeed: 20,
        startDelay: 1000,
        backSpeed: 10,
        backDelay: 1000,

    });
</script>

</body>
</html>
