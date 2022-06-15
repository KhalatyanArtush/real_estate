<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    <title>https://www.sothebysrealty.com/eng/rentals/int</title>--}}
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header>
    <div class="">


            @yield('login')


        <div class="header logo">
            <a href="{{ route ('home.index') }}" class="element">logo</a>
        </div>
        <div class="header menu">
            <a href="{{ route('post.index') }}"  class="element">Posts</a>
            <span id="filterOpen" class="element">Filters</span>
            <a href="{{ route ('agents') }}" class="element">agents</a>
            <a href="{{ route ('about') }}" class="element">about us</a>
        </div>

    </div>
</header>
