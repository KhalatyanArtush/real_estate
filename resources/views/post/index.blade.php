@extends('layouts.main')

@section('content')

{{--       <div><a href="{{ route('post.show',$post->id) }}"> {{$post->title}}</a></div>--}}


       <section id="flexbox" class="main">

           <section class="left">

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


               @foreach($posts as $post)

                   <div class="posts">

                       <a data-v-767ef7eb="" tabindex="0" href="{{ route ('post.show',$post->id)  }}" class="Results-card">

                           <img src="img/imagereader.webp" lazy="loaded">

                           <h3 data-v-767ef7eb="" class="h5 Results-card__body-address u-features-title-small u-color-sir-blue">  {{ $post->title  }}</h3>
                           <h4 data-v-767ef7eb="" class="h5 Results-card__body-address u-features-title-small u-color-sir-blue">  {{ $post->country  }}</h4>
                           <h4 data-v-767ef7eb="" class="h5 Results-card__body-address u-features-title-small u-color-sir-blue">  {{ $post->region  }}</h4>
                           <h4 data-v-767ef7eb="" class="h5 Results-card__body-address u-features-title-small u-color-sir-blue">  {{ $post->type  }}</h4>
                           <h4 data-v-767ef7eb="" class="h5 Results-card__body-address u-features-title-small u-color-sir-blue">  {{ $post->building_type  }}</h4>
                           <h4 data-v-767ef7eb="" class="h5 Results-card__body-address u-features-title-small u-color-sir-blue">  {{ $post->floor}}-րդ հարկ </h4>

                           <h5 data-v-767ef7eb="" class="Results-card__body-price">  {{ $post->sum  }}</h5>
                           <h5 data-v-767ef7eb="" class="Results-card__body-price  Results-card__body-price--rental-frequency">  {{ $post->buy_rent  }}</h5> <!---->

                           <h5 data-v-767ef7eb="" class="Results-card__feat-item u-color-dark-grey">  {{ $post->room  }} սենյակ</h5>


                           <h5 data-v-767ef7eb="" class="Results-card__body-marketedby u-color-dark-grey u-font-mercury-italic">  {{ $post->agent  }}</h5>
                       </a>
                   </div>

               @endforeach



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
{{ $posts->withQueryString()->links() }}


@endsection
