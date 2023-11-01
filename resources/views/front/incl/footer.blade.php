<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="" class="navbar-brand">
                <h1 class="text-primary"><span class="text-white">TRAVEL</span>ER</h1>
            </a>
            <p></p>
            <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
            <div class="d-flex justify-content-start">
                <a class="btn btn-outline-primary btn-square mr-2" target="blank" href="@if(isset($siteconfigs->where('sitekey', 'twitter')->first()->sitevalue)){!!$siteconfigs->where('sitekey', 'twitter')->first()->sitevalue!!}@endif"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-primary btn-square mr-2" target="blank" href="@if(isset($siteconfigs->where('sitekey', 'facebook')->first()->sitevalue)){!!$siteconfigs->where('sitekey', 'facebook')->first()->sitevalue!!}@endif"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-primary btn-square mr-2" target="blank" href="@if(isset($siteconfigs->where('sitekey', 'linkedin')->first()->sitevalue)){!!$siteconfigs->where('sitekey', 'linkedin')->first()->sitevalue!!}@endif"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-primary btn-square" target="blank" href="@if(isset($siteconfigs->where('sitekey', 'instagram')->first()->sitevalue)){!!$siteconfigs->where('sitekey', 'instagram')->first()->sitevalue!!}@endif"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white-50 mb-2" href="{{route('home')}}"><i class="fa fa-angle-right mr-2"></i>Home</a>
                <a class="text-white-50 mb-2" href="{{route('about')}}"><i class="fa fa-angle-right mr-2"></i>About</a>
                <a class="text-white-50 mb-2" href="{{route('services')}}"><i class="fa fa-angle-right mr-2"></i>Services</a>
                <a class="text-white-50 mb-2" href="{{(route('packages'))}}"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                <a class="text-white-50 mb 2" href="{{route('contact')}}"><i class="fa fa-angle-right mr-2"></i>Contact</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
            <p><i class="fa fa-map-marker-alt mr-2"></i>@if(isset($siteconfigs->where('sitekey', 'address')->first()->sitevalue)){!!$siteconfigs->where('sitekey', 'address')->first()->sitevalue!!}@endif</p>
            <p><i class="fa fa-phone-alt mr-2"></i>@if(isset($siteconfigs->where('sitekey', 'contact')->first()->sitevalue)){!!$siteconfigs->where('sitekey', 'contact')->first()->sitevalue!!}@endif</p>
            <p><i class="fa fa-envelope mr-2"></i>@if(isset($siteconfigs->where('sitekey', 'email')->first()->sitevalue)){!!$siteconfigs->where('sitekey', 'email')->first()->sitevalue!!}@endif</p>
            <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
            <div class="w-100"><form action="{{route('subscription')}}" method="POST" enctype="multipart/form-data">
                <div class="input-group">
@csrf
                    <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-3">Sign Up</button>
                    </div>

                </div> </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
    <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white-50">Copyright &copy; <a href="#"></a>. All Rights Reserved.</a>
            </p>
        </div>
        <div class="col-lg-6 text-center text-md-right">
            <p class="m-0 text-white-50">Designed by <a href="">Travel Destination</a>
            </p>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('front/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('front/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('front/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Contact Javascript File -->
<script src="{{asset('front/mail/jqBootstrapValidation.min.js')}}"></script>
<script src="{{asset('front/mail/contact.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('front/js/main.js')}}"></script>
</body>

</html>
