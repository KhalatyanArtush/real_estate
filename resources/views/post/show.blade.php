@extends('layouts.main')

@section('content')

    <a style="float: right; margin-right: 50px;" href="{{ route('post.index') }}">{{ __('buttons.Back' )}}</a>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="entry-title" style=" font-weight: bold;">
                        {{$post->title}}
                    </h2>


                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">
                        @foreach($post->video as $video)
                            <div class="entry-img" style="padding-bottom: 30px">
                                <video width="100%" height="300" autoplay controls>
                                    <source src="{{asset('Post/video/'.$video->name)}}"
                                            type="video/mp4">
                                </video>
                            </div>
                        @endforeach

                        <article class="entry entry-single slideshow-container" style="display: flex;">

                        @foreach($post->files as $file)

                                    <a href="{{asset('Post/img/'.$file->name)}}" data-gallery="portfolioGallery"
                                       class="portfolio-lightbox">

                                        <div class="entry-img" >

                                            <img class="mySlides" src="{{asset('Post/img/'.$file->name)}}"
                                                 style="width:100%">


                                        </div>

                                    </a>
                                    <button class="prev" onclick="plusDivs(-1)">&#10094;</button>
                                    <button class="next" onclick="plusDivs(1)">&#10095;</button>
                            @endforeach

                        </article><!-- End blog entry -->

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center">{{ __('titles.key' )}} - {{ $post->key  }}</li>
                                        <li class="d-flex align-items-center">{{ __('titles.agent' )}} - {{ $post->agent->name  }}</li>
                                        <li class="d-flex align-items-center">{{ __('titles.address' )}} - @if($post->region_id){{ $post->region['title']  }}
                                            /@endif
                                            @if($post->city_id){{ $post->city['title'] }} @elseif($post->village_id) {{ $post->village['title']}} @endif
                                            @if($post->district_id)/{{ $post->district['title']   }}@endif
                                            @if($post->street_id)  /{{ $post->street['title']   }} @endif</li>
                                        @if($post->type_id)
                                            <li class="d-flex align-items-center">{{ __('titles.type' )}} - {{ $post->type['title']  }}
                                            </li>@endif
                                        @if($post->building_type_id)
                                            <li class="d-flex align-items-center">{{ __('titles.building_type' )}} - {{ $post->building_type['title']  }}
                                            </li>@endif
                                        @if($post->floor)
                                            <li class="d-flex align-items-center">{{ __('titles.floor' )}} - {{ $post->floor  }}-րդ
                                                հարկ
                                            </li>
                                        @endif
                                        <li class="d-flex align-items-center">{{ __('titles.sum' )}} - @if($post->sum){{ $post->sum  }}
                                            {{ __('titles.change' )}} @else {{ __('titles.price is negotiable' )}}@endif
                                        </li>
                                        @if($post->buy_rent_id)
                                            <li class="d-flex align-items-center">{{ __('titles.buy_rent' )}} - {{ $post->buy_rent['title']  }}
                                            </li> @endif
                                        @if($post->room)
                                            <li class="d-flex align-items-center">{{ __('titles.room' )}} - {{ $post->room  }} {{ __('titles.room' )}}
                                            </li>
                                        @endif

                                        {{--                                               <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>--}}
                                        {{--                                               <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>--}}
                                    </ul>
                                </div>


                                <div class="entry-content">
                                    <p>
                                        {{$post->informations}}     </p>

                                </div>



                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">


                            <!--Google map-->
                            <div>
                                <div class="mapouter">
                                    <div class="show-map">
                                        <iframe style="border:0; width: 100%; height: 800px;"
                                                src="https://maps.google.com/maps?q={{$post->map_city}}%20{{$post->map_street}}%20%20{{$post->map_number}}&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                                frameborder="0" scrolling="no" marginheight="0"
                                                marginwidth="0"></iframe>
                                        <style>.gmap_canvas {
                                                overflow: hidden;
                                                background: none !important;
                                                height: 610px;
                                                width: 1080px;
                                            }</style>
                                    </div>
                                </div>

                            </div>

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->

@endsection
