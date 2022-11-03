@include('layouts.header')

{{--<div class="os-padding">--}}
<!-- Sidebar Menu -->
{{--        @include('inc.admin.sidebar')--}}

<div class="wrapper">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary " style="z-index: 0;">
        <!-- Brand Logo -->
        <span class="brand-link font-weight-light">Admin Panel</span>

        <!-- Sidebar -->
    @include('inc.admin.sidebar')
    <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content" style="margin-top: 100px">
            <div class="container-fluid">
                <a class="filter_open"><i class="fa fa-filter" aria-hidden="true"></i>Filter</a>
                <div id="filters">
                    <span class="filter_close">X</span>
                    <form class="filterForm" action="{{route('post.index')}}" method="get">
                        @csrf


                        <div class="input-group">

                            <div class="form-outline">
                                <input name="informations" type="search" id="form1"
                                       class="form-control"/>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">{{ __('titles.search' )}}</button>

                        </div>
                        <div style="padding-bottom: 10px"></div>

                        <div class="btn-container " data-v-faf248e8>
                            <p id="agentClose">{{ __('titles.agent' )}}</p>
                            <select class="selectpicker" name="agent">
                                <option name="agent"
                                        value="*">{{ __('titles.all' )}}
                                </option>

                                @foreach($agents as $agent)
                                    <option name="agent"
                                            value="{{ $agent->name }}">{{ $agent->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="btn-container " data-v-faf248e8>
                            <p id="buy_rentClose">{{ __('titles.buy_rent' )}}</p>
                            <select class="selectpicker" name="buy_rent">
                                <option name="buy_rent"
                                        value="*">{{ __('titles.all' )}}
                                </option>
                                @foreach($buyRents as $buyRent)
                                    <option name="buy_rent"
                                            value="{{ $buyRent->title }}">{{ $buyRent->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="btn-container " data-v-faf248e8>
                            <p id="countryClose">{{ __('titles.region' )}}</p>
                            <select class="selectpicker" name="region">
                                <option name="region"
                                        value="*">{{ __('titles.all' )}}
                                </option>
                                @foreach($regions as $region)
                                    <option name="region"
                                            value="{{ $region->title }}">{{ $region->title }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="btn-container " data-v-faf248e8>
                            <p id="countryClose">{{ __('titles.city' )}}</p>
                            <select class="selectpicker" name="country">
                                <option name="country"
                                        value="*">{{ __('titles.all' )}}
                                </option>
                                @foreach($citys as $city)
                                    <option name="country"
                                            value="{{ $city->title }}">{{ $city->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="btn-container " data-v-faf248e8>
                            <p id="countryClose">{{ __('titles.village' )}}</p>
                            <select class="selectpicker" name="village">
                                <option name="village"
                                        value="*">{{ __('titles.all' )}}
                                </option>
                                @foreach($villages as $village)
                                    <option name="village"
                                            value="{{ $village->title }}">{{ $village->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="btn-container " data-v-faf248e8>
                            <p id="regionClose">{{ __('titles.street' )}} </p>
                            <select class="selectpicker" name="street">
                                <option name="street"
                                        value="*">{{ __('titles.all' )}}
                                </option>
                                @foreach($streets as $street)
                                    <option name="street"
                                            value="{{ $street->title }}">{{ $street->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div id="categoryClose" class="btn-container " data-v-faf248e8>
                            <p id="categoryClose">{{ __('titles.type' )}}</p>
                            <select class="selectpicker" name="type">
                                <option name="type"
                                        value="*">{{ __('titles.all' )}}
                                </option>
                                @foreach($types as $type)
                                    <option name="type"
                                            value="{{ $type->title }}">{{ $type->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div id="swimmingClose" class="btn-container " data-v-faf248e8>
                            <p id="swimmingClose">{{ __('titles.building_type' )}}</p>
                            <select class="selectpicker" name="building_type">
                                <option name="building_type"
                                        value="*">{{ __('titles.all' )}}
                                </option>
                                @foreach($buildingTypes as $buildingType)
                                    <option name="building_type"
                                            value="{{ $buildingType->title }}">{{ $buildingType->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div id="swimmingClose" class="btn-container " data-v-faf248e8>
                            <p id="swimmingClose">{{ __('titles.floor' )}}</p>
                            <select class="selectpicker" name="floor">
                                <option name="floor"
                                        value="*">{{ __('titles.all' )}}
                                </option>
                                @for($i=1;$i<=20;$i++)
                                    <option name="floor"
                                            value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>

                        <div id="roomClose" class="btn-container " data-v-faf248e8>
                            <p id="roomClose">{{ __('titles.room' )}}</p>
                            <select class="selectpicker" name="room">
                                <option name="room"
                                        value="*">{{ __('titles.all' )}}
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
                            <p id="swimmingClose">{{ __('titles.swimming' )}}</p>
                            <select class="selectpicker" name="swimming">
                                <option name="swimming"
                                        value="*">{{ __('titles.all' )}}
                                </option>
                                <option name="buy_rent" value="1">այո</option>
                                <option name="buy_rent" value="0">ոչ</option>
                            </select>
                        </div>
                    </form>

                    <span id="filterOpen" class="element">Filters</span>
                </div>
                <div class="sss">
                    <ul class="list-group list-group-horizontal">

                        <li class="list-group-item ul_title li_posts">{{__('titles.key')}}</li>
                        <li class="list-group-item ul_title li_posts">{{__('titles.agent')}}</li>
                        <li class="list-group-item ul_title li_posts">{{__('titles.title')}}</li>
                        <li class="list-group-item ul_title li_posts">{{__('titles.buy_rent')}}</li>
                        <li class="list-group-item ul_title li_posts">{{__('titles.city')}}</li>
                        <li class="list-group-item ul_title li_posts">{{__('titles.village')}}</li>
                        <li class="list-group-item ul_title li_posts">{{__('titles.district')}}</li>
                        <li class="list-group-item ul_title li_posts">{{__('titles.street')}}</li>
                        <li class="list-group-item ul_title li_posts">{{__('titles.type')}}</li>
                        <li class="list-group-item ul_title li_posts">{{__('titles.building_type')}}</li>
                        <li class="list-group-item ul_title li_posts">{{__('titles.sum')}}</li>
                        <li class="list-group-item ul_title li_posts">{{__('titles.public')}}</li>

                    </ul>

                    {{--                    @foreach($files as $file)--}}

                    {{--                        <img src="{{asset('Post/img/'.$file->name)}}" alt="" class="img-fluid">--}}
                    {{--                    @endforeach--}}
                    @foreach($posts as $post)

                        <div class="adminPosts">
                            <a data-v-767ef7eb="" tabindex="0" href="{{ route ('admin.post.show',$post->id)  }}"
                               class="Results-card">

                                <ul class="list-group list-group-horizontal-sm">

                                    <li class="list-group-item li_posts">{{ $post->key  }}</li>
                                    <li class="list-group-item li_posts">{{ $post->agent->name  }}</li>
                                    <li class="list-group-item li_posts">{{ $post->title  }}</li>
                                    <li class="list-group-item li_posts">@if($post->buy_rent_id) {{ $post->buy_rent['title'] }}@endif</li>
                                    <li class="list-group-item li_posts">@if($post->city_id)  {{ $post->city['title']  }}@endif</li>
                                    <li class="list-group-item li_posts">@if($post->village_id)   {{ $post->village['title']  }}@endif</li>
                                    <li class="list-group-item li_posts">@if($post->district_id)  {{ $post->district['title']  }}@endif</li>
                                    <li class="list-group-item li_posts">@if($post->street_id)  {{ $post->street['title']  }}@endif</li>
                                    <li class="list-group-item li_posts">@if($post->type_id){{ $post->type['title'] }}@endif</li>
                                    <li class="list-group-item li_posts">@if($post->building_type_id){{ $post->building_type['title'] }}@endif</li>
                                    <li class="list-group-item li_posts">{{ $post->sum  }}</li>
                                    <li class="list-group-item li_posts">@if($post->public == 1){{__('titles.yes')}} @else {{__('titles.no')}} @endif</li>

                                </ul>

                            </a>
                        </div>

                    @endforeach

                </div>
                {{ $posts->withQueryString()->links() }}
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>


@include('layouts.footer')
