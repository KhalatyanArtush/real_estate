@extends('layouts.main')

@section('title')
    HOME
@endsection
{{--@section('content')--}}
{{--    <div class="indexImage" style=" padding: 10px">--}}
{{--        @foreach($homes as $home)--}}

{{--            <div class="HomeImg">--}}
{{--                <div>--}}
{{--                <img src="{{ 'img/'.$home->img}}" lazy="loaded">--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <span class="homeText"> {{ $home->text}}</span>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        @endforeach--}}
{{--    </div>--}}
{{--@endsection--}}

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

{{--            <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">--}}
{{--                <div class="carousel-container">--}}
{{--                    <div class="container">--}}
{{--                        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Sailor</span></h2>--}}
{{--                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>--}}
{{--                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            @php ($k = 0)
                    @foreach($homeSliders as $homeSlider)
                        <div class="carousel-item @if ($k===0)active @endif " style="background-image: url({{ asset ('HomeSlider/images/'.$homeSlider->image_path)}})">
                            <div class="carousel-container">
                                <div class="container">
                                    <h2 class="animate__animated animate__fadeInDown">{{ $homeSlider->text}}</h2>
                                </div>
                            </div>
                        </div>
                        {{$k++}}
                    @endforeach


        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">
    <section id="about" class="about">
    </section>
    <section id="clients" class="clients section-bg">
    </section>
    <section id="services" class="services">
    </section>
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">


            <div class="row portfolio-container">

                @foreach($homes as $home)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">

                    <div class="row portfolio-container">
                        <a href="{{ asset ('Home/images/'.$home->image_path)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $home->text }}">
                                <div class="portfolio-wrap">
                                    <img src="{{ asset ('Home/images/'.$home->image_path)}}" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>{{ $home->text }}</h4>
                                        <div class="portfolio-links">
                                        </div>
                                    </div>
                                </div>
                        </a>
                    </div>

                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->
@endsection
