@include('layouts.header')

<div class="wrapper">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary " style="z-index: 0;">
        <!-- Brand Logo -->
        <span class="brand-link font-weight-light">Admin Panel</span>

        <!-- Sidebar -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('admin.home.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-align-justify"></i>
                                <p>
                                    օգտվողներ
                                    <span class="badge badge-info right">{{ count($users ) }}</span>
                                </p>
                            </a>
                        </li>
            </ul>
        </nav>

        <!-- /.sidebar -->
    </aside>


    <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content" style="margin-top: 100px">

            <div class="container-fluid">
                <a class="filter_open"><i class="fa fa-filter" aria-hidden="true"></i>Filter</a>
                <div id="filters">
                    <span class="filter_close">X</span>
                <form class="filterForm" action="{{route('post.index')}}" style="display: none" method="get">
                    @csrf


                    <div class="input-group">
                        <div class="form-outline">
                            <input name="informations" type="search" id="form1"
                                   class="form-control"/>
                        </div>
                        <button type="submit" class="btn btn-outline-primary">search</button>

                    </div>
                    <div style="padding-bottom: 10px"></div>

                    <div class="btn-container " data-v-faf248e8>
                        <p id="agentClose">գործակալ</p>
                        <select class="selectpicker" name="agent">
                            <option name="agent"
                                    value="*">բոլորը
                            </option>

                            @foreach($agents as $agent)
                                <option name="agent"
                                        value="{{ $agent->name }}">{{ $agent->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="btn-container " data-v-faf248e8>
                        <p id="buy_rentClose">գործողության տեսակ</p>
                        <select class="selectpicker" name="buy_rent">
                            <option name="buy_rent"
                                    value="*">բոլորը
                            </option>
                            @foreach($buyRents as $buyRent)
                                <option name="buy_rent"
                                        value="{{ $buyRent->title }}">{{ $buyRent->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="btn-container " data-v-faf248e8>
                        <p id="countryClose">մարզ</p>
                        <select class="selectpicker" name="region">
                            <option name="region"
                                    value="*">բոլորը
                            </option>
                            @foreach($regions as $region)
                                <option name="region"
                                        value="{{ $region->title }}">{{ $region->title }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="btn-container " data-v-faf248e8>
                        <p id="countryClose">քաղաք</p>
                        <select class="selectpicker" name="country">
                            <option name="country"
                                    value="*">բոլորը
                            </option>
                            @foreach($citys as $city)
                                <option name="country"
                                        value="{{ $city->title }}">{{ $city->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="btn-container " data-v-faf248e8>
                        <p id="countryClose">գյուղ</p>
                        <select class="selectpicker" name="village">
                            <option name="village"
                                    value="*">բոլորը
                            </option>
                            @foreach($villages as $village)
                                <option name="village"
                                        value="{{ $village->title }}">{{ $village->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="btn-container " data-v-faf248e8>
                        <p id="regionClose">փողոց </p>
                        <select class="selectpicker" name="street">
                            <option name="street"
                                    value="*">բոլորը
                            </option>
                            @foreach($streets as $street)
                                <option name="street"
                                        value="{{ $street->title }}">{{ $street->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div id="categoryClose" class="btn-container " data-v-faf248e8>
                        <p id="categoryClose">շինություն </p>
                        <select class="selectpicker" name="type">
                            <option name="type"
                                    value="*">բոլորը
                            </option>
                            @foreach($types as $type)
                                <option name="type"
                                        value="{{ $type->title }}">{{ $type->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div id="swimmingClose" class="btn-container " data-v-faf248e8>
                        <p id="swimmingClose">շինության տեսակ</p>
                        <select class="selectpicker" name="building_type">
                            <option name="building_type"
                                    value="*">բոլորը
                            </option>
                            @foreach($buildingTypes as $buildingType)
                                <option name="building_type"
                                        value="{{ $buildingType->title }}">{{ $buildingType->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div id="swimmingClose" class="btn-container " data-v-faf248e8>
                        <p id="swimmingClose">հարկ</p>
                        <select class="selectpicker" name="floor">
                            <option name="floor"
                                    value="*">բոլորը
                            </option>
                            @for($i=1;$i<=20;$i++)
                                <option name="floor"
                                        value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>

                    <div id="roomClose" class="btn-container " data-v-faf248e8>
                        <p id="roomClose">սենյակների քանակ</p>
                        <select class="selectpicker" name="room">
                            <option name="room"
                                    value="*">բոլորը
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
                        <select class="selectpicker" name="swimming">
                            <option name="swimming"
                                    value="*">բոլորը
                            </option>
                            <option name="buy_rent" value="1">այո</option>
                            <option name="buy_rent" value="0">ոչ</option>
                        </select>
                    </div>
                </form>

                <span id="filterOpen" class="element">Filters</span>
                </div>
                <div>

                    <ul class="list-group list-group-horizontal">

                        <li class="list-group-item">անուն</li>
                        <li class="list-group-item">էլ. փոստ</li>
                        <li class="list-group-item">դեր</li>
                        <li class="list-group-item">ստեղծման ամսաթիվ</li>
                        <li class="list-group-item"></li>

                    </ul>

                    @foreach($users as $user)

                        <div class="adminPosts">


                            <ul class="list-group list-group-horizontal-sm">

                                <li class="list-group-item">{{ $user->name  }}</li>
                                <li class="list-group-item">{{ $user->email  }}</li>
                                <li class="list-group-item">{{ $user->role  }}</li>
                                <li class="list-group-item">{{ $user->created_at  }}</li>
                                <li class="list-group-item">
                                    <button class="btn btn-primary">
                                        <a id="back-from-page"
                                           href="{{ route ('administrator.user.edit',$user->id)  }}">խմբագրել</a>
                                    </button>
                                </li>

                            </ul>

                        </div>

                    @endforeach

                </div>
                {{--                {{ $posts->withQueryString()->links() }}--}}
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
