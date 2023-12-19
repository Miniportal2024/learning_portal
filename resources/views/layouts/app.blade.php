<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'COE - Learning-Portal') }}</title>

    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.bunny.net"> -->
    <!-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/elegant-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/bootsnav.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" />
    


    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>
<body>
    <!-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Learning-Portal') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        
    </div> -->
    @yield('se-pre-con')
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                        <li class="login"><a href="{{route('login')}}"><i class="fa fa-sign-in">Login</i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{route('index')}}">
                        <img src="{{asset('images/Banner.png')}}" style="width:250px; height: 50px; border-radius: 10px;" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="dropdown">
                            <a href="{{route('index')}}" class="active">Home</a>
                        </li>
                        <li class="dropdown megamenu-fw">
                            
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Gallery</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                                                    <li><a href="gallery-3-colum">Gallery Three Column</a></li>
                                                    <li><a href="gallery-4-colum">Gallery Four Column</a></li>
                                                    <li><a href="gallery-6-colum">Gallery Six Column</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Advisor</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('developers')}}">Advisor Carousel</a></li>
                                                    <li><a href="advisor-2-colum">Advisor Two Colum</a></li>
                                                    <li><a href="advisor-3-colum">Advisor Three Colum</a></li>
                                                    <li><a href="advisor-carousel-2">Advisor Carousel Two</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">User Pages</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="profile">Profile</a></li>
                                                    <li><a href="edit-profile">Edit Profile</a></li>
                                                    <li><a href="login">login</a></li>
                                                    <li><a href="register">register</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Other Pages</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('about-us')}}">About Us</a></li>
                                                    <li><a href="faq">Faq</a></li>
                                                    <li><a href="pricing-table">Pricing Table</a></li>
                                                    <li><a href="contact">Contact</a></li>
                                                    <li><a href="404">Error Page</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                    </div><!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('category')}}">Categories</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >New Courses</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('new-courses')}}">New Courses</a></li>
                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Old Courses</a>
                            <ul class="dropdown-menu">
                               
                                <li><a href="{{route('old-courses')}}">Old Courses</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('about-us')}}">About-Us</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h4 class="title">Users Pages</h4>
                    <div class="profile-thumb">
                        <img src="assets/img/team/7.jpg" alt="Profile">
                    </div>
                    <ul>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Edit Profile</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h4 class="title">Additional Links</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Rating</a></li>
                        <li><a href="#">Popular Courses</a></li>
                    </ul>
                </div>
                <div class="widget social">
                    <h4 class="title">Connect With Us</h4>
                    <ul class="link">
                        <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    @yield('content')

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark default-padding-top text-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 item">
                        <div class="f-item">
                            <img src="{{asset('images/Banner.png')}}" alt="Logo">
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing because sitting replied six. Had arose guest visit going off child she new.
                            </p>
                            <p class="text-italic">
                                Please write your email and get our amazing updates, news and support
                            </p>
                            <div class="subscribe">
                                <form action="#">
                                    <div class="input-group stylish-input-group">
                                        <input type="email" placeholder="Enter your e-mail here" class="form-control" name="email">
                                        <button type="submit">
                                            <i class="fa fa-paper-plane"></i>
                                        </button>  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Links</h4>
                            <ul>
                                <li>
                                    <a href="#">Courses</a>
                                </li>
                                <li>
                                    <a href="#">Event</a>
                                </li>
                                <li>
                                    <a href="#">Gallery</a>
                                </li>
                                <li>
                                    <a href="#">Faqs</a>
                                </li>
                                <li>
                                    <a href="#">Teachers</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Support</h4>
                            <ul>
                                <li>
                                    <a href="#">Documentation</a>
                                </li>
                                <li>
                                    <a href="#">Forums</a>
                                </li>
                                <li>
                                    <a href="#">Language Packs</a>
                                </li>
                                <li>
                                    <a href="#">Release Status</a>
                                </li>
                                <li>
                                    <a href="#">LearnPress</a>
                                </li>
                                <li>
                                    <a href="#">Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p>&copy; All Glory to GOD</p>
                        </div>
                        <div class="col-md-6 text-right link">
                            <ul>
                                <li>
                                    <a href="#">Terms of user</a>
                                </li>
                                <li>
                                    <a href="#">License</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
    <script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/equal-height.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr.custom.13711.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/count-to.js')}}"></script>
    <script src="{{asset('assets/js/loopcounter.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/bootsnav.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
