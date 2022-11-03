@extends('layouts.main')

@section('title')
    user
@endsection
@section('content')

    <section id="flexbox" class="main" xmlns="http://www.w3.org/1999/html">
        <section class="left">
            <main id="main">
                <!-- ======= Breadcrumbs ======= -->
                <section id="breadcrumbs" class="breadcrumbs">
                    <div class="container">

                        <div class="d-flex justify-content-between align-items-center">
                            <h2>Հավանած հայտարարություններ</h2>

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
                                        @if(count($post->video))
                                            @foreach($post->video as $video)
                                                <div>
                                                    <video width="100%" height="300" autoplay muted controls>
                                                        <source src="{{asset('Post/video/'.$video->name)}}"
                                                                type="video/mp4">
                                                    </video>
                                                </div>
                                            @endforeach
                                        @else
                                            @foreach($post->files as $file)
                                                <div style=" padding-bottom: 20px; display: inline-flex">
                                                    <img src="{{asset('Post/img/'.$file->name)}}  "
                                                         alt="" style='width: 800px; height: 300px;'
                                                         class="img-fluid">
                                                </div>
                                                @break
                                            @endforeach
                                        @endif
                                        <h2 class="entry-title">
                                            <a href="{{route('post.show',$post->id)}}">{{ $post->title  }}</a>
                                        </h2>
                                        <div class="entry-meta">
                                            <ul>
                                                <li class="d-flex align-items-center"><i
                                                        class="bi bi-person"></i> {{ $post->key  }}</li>
                                                <li class="d-flex align-items-center"><i
                                                        class="bi bi-person"></i> {{ $post->agent['name']  }}
                                                </li>
                                                <li class="d-flex align-items-center"><i
                                                        class="bi bi-geo-alt-fill"></i> @if($post->region_id){{ $post->region['title']  }}
                                                    /@endif
                                                    @if($post->city_id){{ $post->city['title'] }} @elseif($post->village_id) {{ $post->village['title']}} @endif
                                                    @if($post->district_id)
                                                        /{{ $post->district['title']   }}@endif
                                                    @if($post->street_id)
                                                        /{{ $post->street['title']   }} @endif</li>
                                                @if($post->type_id)
                                                    <li class="d-flex align-items-center"><i
                                                            class="bi bi-building"></i>{{ $post->type['title']  }}
                                                    </li>@endif
                                                @if($post->building_type_id)
                                                    <li class="d-flex align-items-center"><i
                                                            class="bi bi-bricks"></i>{{ $post->building_type['title']  }}
                                                    </li>@endif
                                                @if($post->floor)
                                                    <li class="d-flex align-items-center"><i
                                                            class="bi bi-bar-chart-steps"></i>{{ $post->floor  }}
                                                        -րդ
                                                        հարկ
                                                    </li>
                                                @endif
                                                <li class="d-flex align-items-center"><i
                                                        class="bi bi-currency-exchange"></i>@if($post->sum){{ $post->sum  }}
                                                    {{$post->currency['title']}} @else գինը պայմանագրային @endif
                                                </li>
                                                @if($post->buy_rent_id)
                                                    <li class="d-flex align-items-center"><i
                                                            class="bi bi-cart-check-fill"></i>{{ $post->buy_rent['title']  }}
                                                    </li> @endif
                                                @if($post->floor)
                                                    <li class="d-flex align-items-center"><i
                                                            class="bi bi-box"></i>{{ $post->room  }} սենյակ
                                                    </li>
                                                @endif
                                                {{--                                               <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>--}}
                                                {{--                                               <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>--}}
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p class="posts-text">
                                                {{ $post->informations  }}
                                            </p>
                                            <div class="read-more">
                                                {{--                                                <i class="fa fa-thumbs-up like post_like"></i>--}}
                                                {{--                                                <i class="fa fa-thumbs-down like post_like"></i>--}}
                                                @if(isset(auth()->user()->role))
                                                    @if($post->userPost->count() > 0)
                                                        <form action="{{ route('myPage.delete', $post->id) }}"
                                                              method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button
                                                                style="border: inherit; float: left; background-color: inherit;">
                                                                <i class="bi bi-bell-fill post_like"
                                                                   style="color:#f05f08"
                                                                   data-type="{{ $post->id }}"
                                                                   id="{{ $post->id }}"></i></button>
                                                        </form>

                                                    @else
                                                        <form action="{{ route('myPage.store') }}"
                                                              method="post">
                                                            @csrf
                                                            <input type="hidden" name="user_id"
                                                                   value="{{ auth()->user()->id}}">
                                                            <input type="hidden" name="post_id" value="{{ $post->id}}">
                                                            <button type="button" class="but{{ $post->id }}" id="{{ $post->id }}"
                                                                    style="border: inherit; float: left; background-color: inherit;">
                                                                <i class="far fa-bell post_like" data="{{ $post->id }}"
                                                                   id="{{ $post->id }}"></i></button>
                                                        </form>
                                                    @endif
                                                @endif
                                                <script
                                                    src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                                <script>
                                                    $(document).ready(function(){
                                                        $(".but{{ $post->id }}").click(function(){
                                                            let i = ($(this).attr('id'));
                                                            let user_id = {{ auth()->user()->id }};
                                                            console.log(i)
                                                            let url = "{{ route('myPage.store')}}"
                                                            $.ajax({
                                                                headers: {
                                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                                },

                                                                url: url,
                                                                method: 'POST',
                                                                data: {
                                                                    user_id: user_id,
                                                                    post_id: i,
                                                                },
                                                                success: function (data) {
                                                                    $('#flexbox').html(data);
                                                                }
                                                            });

                                                        });
                                                    });
                                                </script>
                                                <button class="fav-button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                                    </svg>
                                                    <span>Favorites</span>
                                                </button>
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
                                                <input name="informations" type="search" id="title"
                                                       class="form-control"/>
                                            </div>
                                            <button type="button" class="btn btn-outline-primary" id="search">search
                                            </button>

                                        </div>
                                        <div style="padding-bottom: 10px"></div>
                                        <div class="btn-container " data-v-faf248e8>
                                            <p id="agentClose">գործակալ</p>
                                            <select class="selectpicker" id="agent_id" name="agent">
                                                <option id="old_agent" value="">բոլորը</option>
                                                @foreach($agents as $agent)
                                                    <option name="agent"
                                                            value="{{ $agent->id }}">{{ $agent->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div id="swimmingClose" class="btn-container " data-v-faf248e8>
                                            <p id="swimmingClose">հարկ</p>
                                            <select class="selectpicker" id="floor" name="floor">
                                                <option
                                                    value="">բոլորը
                                                </option>
                                                @for($i=1;$i<=20;$i++)
                                                    <option name="floor"
                                                            value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="btn-container " data-v-faf248e8>
                                            <p id="buy_rentClose">գործողության տեսակ</p>
                                            <select class="selectpicker" id="buy_rent" name="buy_rent">
                                                <option
                                                    value="">բոլորը
                                                </option>
                                                @foreach($buyRents as $buyRent)
                                                    <option name="buy_rent"
                                                            value="{{ $buyRent->id }}">{{ $buyRent->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="btn-container " data-v-faf248e8>
                                            <p id="countryClose">մարզ</p>
                                            <select class="selectpicker" id="region" name="region">
                                                <option
                                                    value="">բոլորը
                                                </option>
                                                @foreach($regions as $region)
                                                    <option name="region"
                                                            value="{{ $region->id }}">{{ $region->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="btn-container " data-v-faf248e8>
                                            <p id="countryClose">քաղաք</p>
                                            <select class="selectpicker" id="city" name="city">
                                                <option
                                                    value="">բոլորը
                                                </option>
                                                @foreach($citys as $city)
                                                    <option name="city"
                                                            value="{{ $city->id }}">{{ $city->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="btn-container " data-v-faf248e8>
                                            <p id="countryClose">գյուղ</p>
                                            <select class="selectpicker" id="village" name="village">
                                                <option
                                                    value="">բոլորը
                                                </option>
                                                @foreach($villages as $village)
                                                    <option name="village"
                                                            value="{{ $village->id }}">{{ $village->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="btn-container " data-v-faf248e8>
                                            <p id="regionClose">փողոց </p>
                                            <select class="selectpicker" id="street" name="street">
                                                <option
                                                    value="">բոլորը
                                                </option>
                                                @foreach($streets as $street)
                                                    <option name="street"
                                                            value="{{ $street->id }}">{{ $street->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div id="categoryClose" class="btn-container " data-v-faf248e8>
                                            <p id="categoryClose">շինություն </p>
                                            <select class="selectpicker" id="type" name="type">
                                                <option
                                                    value="">բոլորը
                                                </option>
                                                @foreach($types as $type)
                                                    <option name="$type"
                                                            value="{{ $type->id }}">{{ $type->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div id="swimmingClose" class="btn-container " data-v-faf248e8>
                                            <p id="swimmingClose">շինության տեսակ</p>
                                            <select class="selectpicker" id="building_type" name="building_type">
                                                <option
                                                    value="">բոլորը
                                                </option>
                                                @foreach($buildingTypes as $buildingType)
                                                    <option name="building_type"
                                                            value="{{ $buildingType->id }}">{{ $buildingType->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div id="roomClose" class="btn-container " data-v-faf248e8>
                                            <p id="roomClose">սենյակների քանակ</p>
                                            <select class="selectpicker" id="room" name="room">
                                                <option
                                                    value="">բոլորը
                                                </option>
                                                @for($i=1;$i<=5;$i++)

                                                    <option name="room"
                                                            value="{{$i}}">{{$i}}</option>
                                                @endfor
                                                <option name="room"
                                                        value="5+">5+
                                                </option>
                                            </select>
                                        </div>

                                        <div id="swimmingClose" class="btn-container " data-v-faf248e8>
                                            <p id="swimmingClose">լողավազան</p>
                                            <select class="selectpicker" id="swimming" name="swimming">
                                                <option
                                                    value="">բոլորը
                                                </option>
                                                <option name="swimming" value="1">այո</option>
                                                <option name="swimming" value="0">ոչ</option>
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

                                        <button type="submit" class="btn btn-outline-primary" id="button">search
                                        </button>

                                    </form>

                                    <script>
                                        $(document).on('click', '#search', function () {
                                            let title = $('#title').val();
                                            if (title) {
                                                let url = "{{ route('post.index')}}"
                                                history.pushState(null, null, '?title=' + title);

                                                $.ajax({
                                                    headers: {
                                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                    },

                                                    url: url,
                                                    method: "GET",
                                                    data: {
                                                        title: title,
                                                    },
                                                    success: function (data) {
                                                        $('#flexbox').html(data);
                                                    }
                                                });
                                            }
                                        });
                                        $(document).on('change', '.selectpicker', function () {
                                            let agent = $('#agent_id').val();
                                            let floor = $('#floor').val();
                                            let buy_rent = $('#buy_rent').val();
                                            let region = $('#region').val();
                                            let city = $('#city').val();
                                            let village = $('#village').val();
                                            let street = $('#street').val();
                                            let type = $('#type').val();
                                            let building_type = $('#building_type').val();
                                            let swimming = $('#swimming').val();
                                            let room = $('#room').val();

                                            const index = [agent, floor, buy_rent, region, city, village, street, type, building_type, swimming, room];
                                            const parametr = ['agent_id', 'floor', 'buy_rent_id', 'region_id', 'city_id', 'village_id', 'street_id', 'type_id', 'building_type_id', 'swimming', 'room'];

                                            let result = '';


                                            $(document).on('click', '#button', function () {
                                                let title = $('#title').val();

                                                for (i = 0; i < index.length; i++) {
                                                    if (index[i]) {
                                                        result = result.concat('&' + parametr[i] + '=' + index[i]);
                                                    }
                                                }


                                                let url = "{{ route('post.index')}}"
                                                history.pushState(null, null, '?' + result);

                                                $.ajax({
                                                    headers: {
                                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                    },

                                                    url: url,
                                                    method: "GET",
                                                    data: {
                                                        agent: agent,
                                                        floor: floor,
                                                        buy_rent: buy_rent,
                                                        region: region,
                                                        city: city,
                                                        village: village,
                                                        street: street,
                                                        type: type,
                                                        building_type: building_type,
                                                        swimming: swimming,
                                                        room: room,
                                                    },
                                                    success: function (data) {
                                                        $('#flexbox').html(data);
                                                    }
                                                });
                                            });
                                        });

                                    </script>

                                </div><!-- End sidebar -->

                            </div><!-- End blog sidebar -->

                        </div>

                    </div>
                </section><!-- End Blog Section -->

            </main><!-- End #main -->

{{--    {{ $posts->withQueryString()->links() }}--}}

@endsection
