@extends('layouts.main')


@section('content')
    <main id="main">
{{--fdsdfsdfsd--}}
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{__('titles.about')}}</h2>

                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                    <div class="row content">
                        <div class="pic"><img src="{{ asset ('About/images/'.$about->image_path)}}" class="img-fluid"
                                              alt=""></div>

                        <div class="col-lg-6">
                            <h2>{{$about->title}}</h2>

                        <p>
                            {{$about->text}}
                        </p>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0">

                            <ul>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                            </ul>
                        </div>
                    </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Team Section ======= -->

    </main><!-- End #main -->
    {{--                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29001.37866792867!2d44.50573487783242!3d40.178034988508564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1650894840239!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}

    <!--The div element for the map -->

    <!--Google map-->
    <div>
        <div class="mapouter">
            <div>
                <iframe style="border:0; width: 100%; height: 500px;"
                        src="https://maps.google.com/maps?q={{$address->city}}%20{{$address->street}}%20%20{{$address->number}}&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <style>.gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 610px;
                        width: 1080px;
                    }</style>
            </div>
        </div>

    </div>

@endsection
