@extends('layouts.main')

@section('content')

    <a style="float: right; margin-right: 50px;" href="{{ route('post.index') }}">Back</a>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Post Single</h2>

                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="{{asset('assets/img/blog/blog-1.jpg')}}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                              {{$post->title}}
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i
                                            class="bi bi-key"></i> {{ $post->key  }}</li>
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
                                    </li> </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {{$post->informations}}     </p>

                                <p>
                                    Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                                </p>


                            </div>



                        </article><!-- End blog entry -->


                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                                <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                        style="border:0" allowfullscreen></iframe>
                            </div>

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->

@endsection
