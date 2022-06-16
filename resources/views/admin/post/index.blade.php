@extends('layouts.admin')

@section('content')
    <form class="filterForm" action="{{route('post.index')}}" method="get">
        @csrf

        <div id="filterHome">

            <p class="filterClose">X</p>
            <div class="btn-container " data-v-faf248e8>
                <p id="agentClose">գործակալ</p>
                <div id="agent">
                    <select id="pet-select" name="agent">
                        <option value="">--Please choose an option--</option>

                        @foreach($filterPosts as $filterPost)

                            <option   value="{{ $filterPost->agent }}">{{ $filterPost->agent }}</option>


                        @endforeach
                    </select>
                </div>
            </div>

            <div class="btn-container " data-v-faf248e8>
                <p id="buy_rentClose">գործողության տեսակ</p>
                <div id="buy_rent">
                    <select id="pet-select" name="buy_rent">
                        <option value="">--Please choose an option--</option>

                        @foreach($filterPosts as $filterPost)

                            <option  name="buy_rent" value="{{ $filterPost->buy_rent }}">{{ $filterPost->buy_rent }}</option>


                        @endforeach
                    </select>

                </div>
            </div>

            <div class="btn-container " data-v-faf248e8>
                <p id="countryClose">քաղաք</p>
                <div id="country">
                    <select id="pet-select" name="country">
                        <option value="">--Please choose an option--</option>

                        @foreach($filterPosts as $filterPost)

                            <option  name="country" value="{{ $filterPost->country }}">{{ $filterPost->country }}</option>


                        @endforeach
                    </select>
                </div>
            </div>

            <div class="btn-container " data-v-faf248e8>
                <p id="regionClose">փողոց </p>
                <div id="region">
                    <select id="pet-select" name="region">
                        <option value="">--Please choose an option--</option>

                        @foreach($filterPosts as $filterPost)

                            <option  name="region" value="{{ $filterPost->region }}">{{ $filterPost->region }}</option>


                        @endforeach
                    </select>
                </div>
            </div>

            <div id="categoryClose" class="btn-container " data-v-faf248e8>
                <p id="categoryClose">շինություն </p>
                <div id="category">
                    <select id="pet-select" name="category">
                        <option value="">--Please choose an option--</option>

                        @foreach($filterPosts as $filterPost)

                            <option  name="category" value="{{ $filterPost->type }}">{{ $filterPost->type }}</option>


                        @endforeach
                    </select>
                </div>
            </div>

            <div id="swimmingClose" class="btn-container " data-v-faf248e8>
                <p id="swimmingClose">շինության տեսակ</p>
                <div id="swimming">
                    <select id="pet-select" name="swimming">
                        <option value="">--Please choose an option--</option>

                        @foreach($filterPosts as $filterPost)

                            <option  name="swimming" value="{{ $filterPost->building_type }}">{{ $filterPost->building_type }}</option>


                        @endforeach
                    </select>
                </div>
            </div>

            <div id="swimmingClose" class="btn-container " data-v-faf248e8>
                <p id="swimmingClose">հարկ</p>
                <div id="floor">
                    <select id="pet-select" name="floor">
                        <option value="">--Please choose an option--</option>

                        @foreach($filterPosts as $filterPost)

                            <option  name="floor" value="{{ $filterPost->floor }}">{{ $filterPost->floor }}</option>


                        @endforeach
                    </select>
                </div>
            </div>

            <div id="roomClose" class="btn-container " data-v-faf248e8>
                <p id="roomClose">սենյակների քանակ</p>
                <div id="room">
                    <select id="pet-select" name="room">
                        <option value="">--Please choose an option--</option>

                        @foreach($filterPosts as $filterPost)

                            <option  name="room" value="{{ $filterPost->room }}">{{ $filterPost->room }}</option>


                        @endforeach
                    </select>
                </div>
            </div>

            <div id="swimmingClose" class="btn-container " data-v-faf248e8>
                <p id="swimmingClose">լողավազան</p>
                <div id="swimming">
                    <select id="pet-select">
                        <option value="">--Please choose an option--</option>

                        <option  name="buy_rent" value="1">այո</option>
                        <option  name="buy_rent" value="0">ոչ</option>

                    </select>
                </div>
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



            <button type="submit">OK</button>

        </div>

    </form>

    <span id="filterOpen" class="element">Filters</span>

    <div>

        <ul class="block-list">
            <li>գործակալ</li>
            <li>վերնագիր</li>
            <li>գործողության տեսակ</li>
            <li>քաղաք</li>
            <li>փողոց</li>
            <li>շինություն</li>
            <li>շինության տեսակ</li>
            <li>սենյակների քանակ</li>
            <li>լողավազան</li>
            <li>գին</li>
            <li>տղեկատվություն</li>

        </ul>

        @foreach($posts as $post)

            <div class="adminPosts">

                <a data-v-767ef7eb="" tabindex="0" href="{{ route ('admin.post.show',$post->id)  }}" class="Results-card">

                    <ul class="block-list">
                        <li>{{ $post->agent  }}</li>
                        <li>{{ $post->title  }}</li>
                        <li>{{ $post->country  }}</li>
                        <li>{{ $post->region  }}</li>
                        <li>{{ $post->type  }}</li>
                        <li>{{ $post->building_type  }}</li>
                        <li>{{ $post->floor  }}</li>
                        <li>{{ $post->sum  }}</li>
                        <li>{{ $post->buy_rent  }}</li>
                        <li>{{ $post->room  }}</li>
                        <li>{{ $post->swimming  }}</li>

                    </ul>

         </a>
            </div>

        @endforeach

    </div>
    {{ $posts->withQueryString()->links() }}

@endsection
