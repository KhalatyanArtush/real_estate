<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">



    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
{{--    for admin panel--}}

<!-- Google Font: Source Sans Pro -->
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
{{--    for admin panel--}}
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- ======================================================
    * Template Name: Sailor - v4.7.0
    * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{route('home.index')}}">Strong</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        <nav id="navbarhh" class="navbar">
            <ul>
                <li><a href="{{ route('post.index') }}">{{ __('header.Posts') }}</a></li>
                <li><a href="{{ route ('agents') }}">{{ __('header.Team') }}</a></li>
                <li><a href="{{ route ('about') }}">{{ __('header.About') }}</a></li>
                <li><a href="{{ route ('contacts') }}">{{ __('header.Contact') }}</a></li>
                @if( isset(auth()->user()->name))
                    <li><a href="{{ route ('myPage',Auth::user()->id) }}">{{ __('header.Mypage') }}</a></li>
                @endif
            </ul>
            @can('view', auth()->user())
                <ul class="admin-header">
                    <li><a href="{{ route ('admin.post.index') }}">{{ __('header.Admin Panel') }}</a></li>
                    <li><a href="{{ route ('admin.post.creat') }}">{{ __('header.Add Post') }}</a></li>
{{--                    <li><a href="{{ route ('admin.about.creat') }}">Add About</a></li>--}}
                </ul>
            @endcan
            @if(isset(auth()->user()->role))
            @if( auth()->user()->role === 'administrator')
                <ul>
                    <li><a href="{{ route ('administrator.user.creat') }}">{{ __('header.Add User') }}</a></li>
                </ul>
            @endif
            @endif
            <div class="header_login">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <a class="nav-link" href="{{ route('login') }}">{{ __('header.Login') }}</a>&nbsp;&nbsp;
                    @endif

                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('header.Register') }}</a>&nbsp;&nbsp;
                    @endif
                @else
                    <div>
                    <span class="header-right" >
                                {{ Auth::user()->name }}
                            </span>&nbsp;&nbsp;
                    <a class="header-right" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                        {{ __('header.Logout') }}
                    </a>
                    </div>
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
