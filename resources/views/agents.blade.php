@extends('layouts.main')


@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Team</h2>

                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team ">
            <div class="container">

                <div class="row">
@foreach($agents as $agent)
                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset ('Agent/images/'.$agent->image_path)}}" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>{{$agent->text}}</h4>
                                <span>Chief Executive Officer</span>
                                <p>Explicabo voluptatem mollitia et repellat</p>
                                <div class="social">
                                    <a href="{{ $agent->twitter }}"><i class="ri-twitter-fill"></i></a>
                                    <a href="{{ $agent->facebook }}"><i class="ri-facebook-fill"></i></a>
                                    <a href="{{ $agent->instagram }}"><i class="ri-instagram-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Team Section -->

    </main><!-- End #main -->






@endsection
