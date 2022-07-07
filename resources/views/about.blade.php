@extends('layouts.main')


@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>About</h2>

                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
@foreach($abouts as $about)
                <div class="row content">
                    <div class="col-lg-6">
                        <h2>{{$about->general}}</h2>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            {{$about->text}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </section><!-- End About Section -->

        <!-- ======= Team Section ======= -->

    </main><!-- End #main -->
{{--                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29001.37866792867!2d44.50573487783242!3d40.178034988508564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1650894840239!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}

<!--The div element for the map -->

    <!--Google map-->
    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
        <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                style="border:0" allowfullscreen></iframe>
    </div>

    <!--Google Maps-->
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



@endsection
