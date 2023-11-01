@php
        $siteconfigs=App\Models\SiteConfig::where('status','1')->get();
@endphp
@include('front.incl.header')
@yield('content')
@include('front.incl.footer')
