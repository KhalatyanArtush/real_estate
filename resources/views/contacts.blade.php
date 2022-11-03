@extends('layouts.main')


@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{__('titles.contact')}}</h2>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

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

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>{{__('titles.address')}}</h4>
                                @foreach($contacts as $contact)
                                    <p>{{$contact->address}}</p>
                                @endforeach
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>{{__('titles.email')}}</h4>
                                @foreach($contacts as $contact)
                                    <p>{{$contact->email}}</p>
                                @endforeach
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>{{__('titles.tel')}}</h4>
                                @foreach($contacts as $contact)
                                    <p>{{$contact->tel}}</p>
                                @endforeach
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                           placeholder="{{__('mail.name')}}" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="{{__('mail.email')}}" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="{{__('mail.subject')}}" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5"
                                          placeholder="{{__('mail.message')}}" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">{{__('mail.loading')}}</div>
                                <div class="error-message"></div>
                                <div class="sent-message">{{__('mail.massage_text')}}</div>
                            </div>
                            <div class="text-center">
                                <button type="submit">{{__('mail.send')}}</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

@endsection
