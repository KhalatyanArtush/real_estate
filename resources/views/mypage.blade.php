@extends('layouts.main')

@section('title')
    user
@endsection
@section('content')
    <div class="indexImage" style=" padding: 10px; margin-top: 150px ">
     USERPAGE
    </div>
    <section id="flexbox" class="main">

        <section class="left">

            <main id="main">

                <!-- ======= Breadcrumbs ======= -->
                <section id="breadcrumbs" class="breadcrumbs">
                    <div class="container">

                        <div class="d-flex justify-content-between align-items-center">
                            <h2>Posts</h2>

                        </div>

                    </div>
                </section><!-- End Breadcrumbs -->

                <!-- ======= Blog Section ======= -->
                <section id="blog" class="blog">
                    <div class="container" data-aos="fade-up">

                        <div class="row">

                            <div class="col-lg-8 entries">


                                @foreach($posts as $post)
                                    <article class="entry">

                                        <div class="entry-img">
                                            <img src="{{asset('img/'.$post->img)}}" alt="" class="img-fluid">
                                        </div>

                                        <h2 class="entry-title">
                                            <a href="blog-single.html">{{ $post->title  }}</a>
                                        </h2>

                                        <div class="entry-meta">
                                            <ul>
                                                <li class="d-flex align-items-center"><i
                                                        class="bi bi-person"></i> {{ $post->agent  }}</li>
                                                <li class="d-flex align-items-center"><i
                                                        class="bi bi-geo-alt-fill"></i>{{ $post->country  }}</li>
                                                <li class="d-flex align-items-center"><i
                                                        class="bi bi-geo-alt-fill"></i>{{ $post->region  }}</li>
                                                <li class="d-flex align-items-center"><i
                                                        class="bi bi-building"></i>{{ $post->type  }}</li>
                                                <li class="d-flex align-items-center"><i
                                                        class="bi bi-bricks"></i>{{ $post->building_type  }}</li>
                                                <li class="d-flex align-items-center"><i
                                                        class="bi bi-bar-chart-steps"></i>{{ $post->floor  }}-րդ հարկ
                                                </li>
                                                <li class="d-flex align-items-center"><i
                                                        class="bi bi-currency-exchange"></i>{{ $post->sum  }} դր
                                                </li>
                                                <li class="d-flex align-items-center"><i
                                                        class="bi bi-cart-check-fill"></i>{{ $post->buy_rent  }} </li>
                                                <li class="d-flex align-items-center"><i
                                                        class="bi bi-box"></i>{{ $post->room  }} սենյակ
                                                </li>

                                                {{--                                               <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>--}}
                                                {{--                                               <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>--}}
                                            </ul>
                                        </div>

                                        <div class="entry-content">
                                            <p>
                                                {{ $post->informations  }}
                                            </p>
                                            <div class="read-more">
                                                <a href="{{route('post.show',$post->id)}}">Read More</a>
                                            </div>
                                        </div>

                                    </article><!-- End blog entry -->
                                @endforeach


                            </div><!-- End blog entries list -->

                            <div class="col-lg-4 ">

                                <div class="sidebar position-fixed">


                                    <h3 class="sidebar-title">Search</h3>
                                    <form class="filterForm" action="{{route('post.index')}}" method="get">
                                        @csrf

                                        <div class="input-group">
                                            <div class="form-outline">
                                                <input name="informations" type="search" id="form1" class="form-control" />
                                            </div>

                                        </div>
                                        <div style="padding-bottom: 10px"></div>

                                        <div class="btn-container " data-v-faf248e8>
                                            <p id="agentClose">գործակալ</p>
                                            <select class="selectpicker" name="agent">
                                                @foreach($filterPosts as $filterPost)
                                                    <option name="buy_rent"
                                                            value="{{ $filterPost->agent }}">{{ $filterPost->agent }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="btn-container " data-v-faf248e8>
                                            <p id="buy_rentClose">գործողության տեսակ</p>
                                            <select class="selectpicker" name="buy_rent">
                                                @foreach($filterPosts as $filterPost)
                                                    <option name="buy_rent"
                                                            value="{{ $filterPost->buy_rent }}">{{ $filterPost->buy_rent }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="btn-container " data-v-faf248e8>
                                            <p id="countryClose">քաղաք</p>
                                            <select class="selectpicker" name="country">
                                                @foreach($filterPosts as $filterPost)
                                                    <option name="country"
                                                            value="{{ $filterPost->country }}">{{ $filterPost->country }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="btn-container " data-v-faf248e8>
                                            <p id="regionClose">փողոց </p>
                                            <select class="selectpicker" name="region">
                                                @foreach($filterPosts as $filterPost)
                                                    <option name="region"
                                                            value="{{ $filterPost->region }}">{{ $filterPost->region }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div id="categoryClose" class="btn-container " data-v-faf248e8>
                                            <p id="categoryClose">շինություն </p>
                                            <select class="selectpicker" name="category">
                                                @foreach($filterPosts as $filterPost)
                                                    <option name="category"
                                                            value="{{ $filterPost->type }}">{{ $filterPost->type }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div id="swimmingClose" class="btn-container " data-v-faf248e8>
                                            <p id="swimmingClose">շինության տեսակ</p>
                                            <select class="selectpicker" name="swimming">
                                                @foreach($filterPosts as $filterPost)
                                                    <option name="swimming"
                                                            value="{{ $filterPost->building_type }}">{{ $filterPost->building_type }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div id="swimmingClose" class="btn-container " data-v-faf248e8>
                                            <p id="swimmingClose">հարկ</p>
                                            <select class="selectpicker" name="floor">
                                                @foreach($filterPosts as $filterPost)
                                                    <option name="floor"
                                                            value="{{ $filterPost->floor }}">{{ $filterPost->floor }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div id="roomClose" class="btn-container " data-v-faf248e8>
                                            <p id="roomClose">սենյակների քանակ</p>
                                            <select class="selectpicker" name="room">
                                                @foreach($filterPosts as $filterPost)
                                                    <option name="room"
                                                            value="{{ $filterPost->room }}">{{ $filterPost->room }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div id="swimmingClose" class="btn-container " data-v-faf248e8>
                                            <p id="swimmingClose">լողավազան</p>
                                            <select class="selectpicker" name="buy_rent">
                                                <option name="buy_rent" value="1">այո</option>
                                                <option name="buy_rent" value="0">ոչ</option>
                                            </select>
                                        </div>

                                        {{--                       <div id="roomClose" class="btn-container " data-v-faf248e8>--}}
                                        {{--                           <p id="roomClose">գնային ինտերվալ</p>--}}
                                        {{--                           <div id="room">--}}
                                        {{--                               <ul>--}}

                                        {{--                                   <input type="number" id="firstSum" name="firstSum" value="">--}}

                                        {{--                                   <input type="number" id="endSum" name="endSum" value="">--}}

                                        {{--                               </ul>--}}
                                        {{--                           </div>--}}
                                        {{--                       </div>--}}


                                        <button type="button" class="btn btn-outline-primary">search</button>
                                    </form>


                                    {{--                                       <h3 class="sidebar-title">Categories</h3>--}}
                                    {{--                                       <div class="sidebar-item categories">--}}
                                    {{--                                           <ul>--}}
                                    {{--                                               <li><a href="#">General <span>(25)</span></a></li>--}}
                                    {{--                                               <li><a href="#">Lifestyle <span>(12)</span></a></li>--}}
                                    {{--                                               <li><a href="#">Travel <span>(5)</span></a></li>--}}
                                    {{--                                               <li><a href="#">Design <span>(22)</span></a></li>--}}
                                    {{--                                               <li><a href="#">Creative <span>(8)</span></a></li>--}}
                                    {{--                                               <li><a href="#">Educaion <span>(14)</span></a></li>--}}
                                    {{--                                           </ul>--}}
                                    {{--                                       </div><!-- End sidebar categories-->--}}

                                    {{--                                       <h3 class="sidebar-title">Recent Posts</h3>--}}
                                    {{--                                       <div class="sidebar-item recent-posts">--}}
                                    {{--                                           <div class="post-item clearfix">--}}
                                    {{--                                               <img src="assets/img/blog/blog-recent-1.jpg" alt="">--}}
                                    {{--                                               <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>--}}
                                    {{--                                               <time datetime="2020-01-01">Jan 1, 2020</time>--}}
                                    {{--                                           </div>--}}

                                    {{--                                           <div class="post-item clearfix">--}}
                                    {{--                                               <img src="assets/img/blog/blog-recent-2.jpg" alt="">--}}
                                    {{--                                               <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>--}}
                                    {{--                                               <time datetime="2020-01-01">Jan 1, 2020</time>--}}
                                    {{--                                           </div>--}}

                                    {{--                                           <div class="post-item clearfix">--}}
                                    {{--                                               <img src="assets/img/blog/blog-recent-3.jpg" alt="">--}}
                                    {{--                                               <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>--}}
                                    {{--                                               <time datetime="2020-01-01">Jan 1, 2020</time>--}}
                                    {{--                                           </div>--}}

                                    {{--                                           <div class="post-item clearfix">--}}
                                    {{--                                               <img src="assets/img/blog/blog-recent-4.jpg" alt="">--}}
                                    {{--                                               <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>--}}
                                    {{--                                               <time datetime="2020-01-01">Jan 1, 2020</time>--}}
                                    {{--                                           </div>--}}

                                    {{--                                           <div class="post-item clearfix">--}}
                                    {{--                                               <img src="assets/img/blog/blog-recent-5.jpg" alt="">--}}
                                    {{--                                               <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>--}}
                                    {{--                                               <time datetime="2020-01-01">Jan 1, 2020</time>--}}
                                    {{--                                           </div>--}}

                                    {{--                                       </div><!-- End sidebar recent posts-->--}}


                                </div><!-- End sidebar -->

                            </div><!-- End blog sidebar -->

                        </div>

                    </div>
                </section><!-- End Blog Section -->

            </main><!-- End #main -->


        </section>
        <section class="right">
        {{--                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29001.37866792867!2d44.50573487783242!3d40.178034988508564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1650894840239!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}

        <!--The div element for the map -->
            <div id="map"></div>

            <!--
             The `defer` attribute causes the callback to execute after the full HTML
             document has been parsed. For non-blocking uses, avoiding race conditions,
             and consistent behavior across browsers, consider loading using Promises
             with https://www.npmjs.com/package/@googlemaps/js-api-loader.
            -->
            <script
                src="https://maps.googleapis.com/maps/api/js?key=&libraries=places&callback=initMap&v=weekly"
                defer
            >

            </script>

        </section>
    </section>
{{--    {{ $posts->withQueryString()->links() }}--}}


@endsection
{{--<form class="filterForm" action="{{route('post.index')}}" method="get">--}}
{{--    @csrf--}}

{{--    <div id="filterHome">--}}

{{--        <p class="filterClose">X</p>--}}
{{--        <div class="btn-container " data-v-faf248e8>--}}
{{--            <p id="agentClose">գործակալ</p>--}}
{{--            <div id="agent">--}}
{{--                <select id="pet-select" name="agent">--}}
{{--                    <option value="">--Please choose an option--</option>--}}

{{--                    @foreach($filterPosts as $filterPost)--}}

{{--                        <option   value="{{ $filterPost->agent }}">{{ $filterPost->agent }}</option>--}}


{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="btn-container " data-v-faf248e8>--}}
{{--            <p id="buy_rentClose">գործողության տեսակ</p>--}}
{{--            <div id="buy_rent">--}}
{{--                <select id="pet-select" name="buy_rent">--}}
{{--                    <option value="">--Please choose an option--</option>--}}

{{--                    @foreach($filterPosts as $filterPost)--}}

{{--                        <option  name="buy_rent" value="{{ $filterPost->buy_rent }}">{{ $filterPost->buy_rent }}</option>--}}


{{--                    @endforeach--}}
{{--                </select>--}}

{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="btn-container " data-v-faf248e8>--}}
{{--            <p id="countryClose">քաղաք</p>--}}
{{--            <div id="country">--}}
{{--                <select id="pet-select" name="country">--}}
{{--                    <option value="">--Please choose an option--</option>--}}

{{--                    @foreach($filterPosts as $filterPost)--}}

{{--                        <option  name="country" value="{{ $filterPost->country }}">{{ $filterPost->country }}</option>--}}


{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="btn-container " data-v-faf248e8>--}}
{{--            <p id="regionClose">փողոց </p>--}}
{{--            <div id="region">--}}
{{--                <select id="pet-select" name="region">--}}
{{--                    <option value="">--Please choose an option--</option>--}}

{{--                    @foreach($filterPosts as $filterPost)--}}

{{--                        <option  name="region" value="{{ $filterPost->region }}">{{ $filterPost->region }}</option>--}}


{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div id="categoryClose" class="btn-container " data-v-faf248e8>--}}
{{--            <p id="categoryClose">շինություն </p>--}}
{{--            <div id="category">--}}
{{--                <select id="pet-select" name="category">--}}
{{--                    <option value="">--Please choose an option--</option>--}}

{{--                    @foreach($filterPosts as $filterPost)--}}

{{--                        <option  name="category" value="{{ $filterPost->type }}">{{ $filterPost->type }}</option>--}}


{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div id="swimmingClose" class="btn-container " data-v-faf248e8>--}}
{{--            <p id="swimmingClose">շինության տեսակ</p>--}}
{{--            <div id="swimming">--}}
{{--                <select id="pet-select" name="swimming">--}}
{{--                    <option value="">--Please choose an option--</option>--}}

{{--                    @foreach($filterPosts as $filterPost)--}}

{{--                        <option  name="swimming" value="{{ $filterPost->building_type }}">{{ $filterPost->building_type }}</option>--}}


{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div id="swimmingClose" class="btn-container " data-v-faf248e8>--}}
{{--            <p id="swimmingClose">հարկ</p>--}}
{{--            <div id="floor">--}}
{{--                <select id="pet-select" name="floor">--}}
{{--                    <option value="">--Please choose an option--</option>--}}

{{--                    @foreach($filterPosts as $filterPost)--}}

{{--                        <option  name="floor" value="{{ $filterPost->floor }}">{{ $filterPost->floor }}</option>--}}


{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div id="roomClose" class="btn-container " data-v-faf248e8>--}}
{{--            <p id="roomClose">սենյակների քանակ</p>--}}
{{--            <div id="room">--}}
{{--                <select id="pet-select" name="room">--}}
{{--                    <option value="">--Please choose an option--</option>--}}

{{--                    @foreach($filterPosts as $filterPost)--}}

{{--                        <option  name="room" value="{{ $filterPost->room }}">{{ $filterPost->room }}</option>--}}


{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div id="swimmingClose" class="btn-container " data-v-faf248e8>--}}
{{--            <p id="swimmingClose">լողավազան</p>--}}
{{--            <div id="swimming">--}}
{{--                <select id="pet-select">--}}
{{--                    <option value="">--Please choose an option--</option>--}}

{{--                    <option  name="buy_rent" value="1">այո</option>--}}
{{--                    <option  name="buy_rent" value="0">ոչ</option>--}}

{{--                </select>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        --}}{{--                       <div id="roomClose" class="btn-container " data-v-faf248e8>--}}
{{--        --}}{{--                           <p id="roomClose">գնային ինտերվալ</p>--}}
{{--        --}}{{--                           <div id="room">--}}
{{--        --}}{{--                               <ul>--}}

{{--        --}}{{--                                   <input type="number" id="firstSum" name="firstSum" value="">--}}

{{--        --}}{{--                                   <input type="number" id="endSum" name="endSum" value="">--}}

{{--        --}}{{--                               </ul>--}}
{{--        --}}{{--                           </div>--}}
{{--        --}}{{--                       </div>--}}



{{--        <button type="submit">OK</button>--}}

{{--    </div>--}}

{{--</form>--}}
