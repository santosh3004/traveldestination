
@extends('front.layouts.app')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">About</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">About</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Booking Start -->
    {{-- @include('front.incl.booking') --}}
    <!-- Booking End -->


    <!-- About Start -->
@include('front.incl.about')
    <!-- About End -->


    <!-- Feature Start -->
    @include('front.incl.feature')
    <!-- Feature End -->


    <!-- Registration Start -->
    @include('front.incl.registration')
    <!-- Registration End -->


    <!-- Team Start -->
    @include('front.incl.team')
    <!-- Team End -->

    @endsection


