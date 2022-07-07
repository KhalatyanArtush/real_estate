<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sailor Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    {{--    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">--}}
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css ')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Sailor - v4.7.0
    * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{route('home.index')}}">Sailor</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('post.index') }}">Posts </a></li>
                <li><a href="{{ route ('agents') }}">Team </a></li>
                <li><a href="{{ route ('about') }}">About us </a></li>
                <li><a href="{{ route ('about') }}">Contact us </a></li>
                @if( isset(Auth::user()->name))
                    <li><a href="{{ route ('mypage',Auth::user()->id) }}">իմ էջը</a></li>
                @endif
            </ul>

            @can('view', auth()->user())

                <ul>
                    <li><a href="{{ route ('admin.post.creat') }}">Add Posts</a></li>
                    <li><a href="{{ route ('admin.home.creat') }}">Add Home</a></li>
                    <li><a href="{{ route ('admin.agent.creat') }}">Add Agents</a></li>
                    <li><a href="{{ route ('admin.agent.creat') }}">Add About</a></li>
                </ul>
            @endcan
            @if(isset(auth()->user()->role))
            @if( auth()->user()->role === 'administrator')
                <ul>
                    <li><a href="{{ route ('administrator.user.creat') }}">Add User</a></li>
                </ul>
            @endif
            @endif

            <div class="header_login">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>&nbsp;&nbsp;
                    @endif

                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>&nbsp;&nbsp;
                    @endif
                @else
                    <span id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </span>&nbsp;&nbsp;

                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    &nbsp;&nbsp;
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest

            </div>


            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
