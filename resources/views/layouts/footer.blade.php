<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>Strong</h3>
                        <post>
                            <strong>{{ __('footer.Address') }}:</strong> <br>
                            @foreach($contacts as $contact){{$contact->address}}<br>@endforeach
                            <strong>{{ __('footer.Phone') }}:</strong> <br>@foreach($contacts as $contact){{$contact->tel}}<br>@endforeach
                            <strong>{{ __('footer.Email') }}:</strong><br> @foreach($contacts as $contact){{$contact->email}}<br>@endforeach
                        </post>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>{{ __('footer.Useful Links') }}</h4>
                    <ul>
                        <li><a class="bx bx-chevron-right" href="{{ route('post.index') }}">{{ __('header.Posts') }}</a></li>
                        <li><a class="bx bx-chevron-right" href="{{ route ('agents') }}">{{ __('header.Team') }}</a></li>
                        <li><a class="bx bx-chevron-right" href="{{ route ('about') }}">{{ __('header.About') }}</a></li>
                        <li><a class="bx bx-chevron-right" href="{{ route ('contacts') }}">{{ __('header.Contact') }}</a></li>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>{{ __('footer.Our Services') }}</h4>
                    <ul>
                        @foreach($ourServises as $ourServise)
                        <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $ourServise->title }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>{{ __('footer.Email') }}</h4>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="{{ __('footer.Subscribe') }}">
                    </form>

                </div>

            </div>
        </div>
    </div>

{{--    վեռանօռօգւմ--}}

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Strong</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery Mapael -->

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>

{{--    for admin panel--}}

<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->

<!-- AdminLTE for demo purposes -->
{{--<script src="{{asset('dist/js/demo.js')}}"></script>--}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--<script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>--}}

<!-- AdminLTE App -->

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
