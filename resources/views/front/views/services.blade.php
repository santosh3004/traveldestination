@extends('front.layouts.app')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Services</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Services</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Booking Start -->
    {{-- @include('front.incl.booking') --}}
    <!-- Booking End -->


    <!-- Service Start -->
    @include('front.incl.services')
    <!-- Service End -->


    <!-- Testimonial Start -->

    @include('front.incl.testimonials')
    <!-- Testimonial End -->

@endsection
