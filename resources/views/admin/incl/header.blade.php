<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Travel Destination</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}" />
  </head>
  <body>

      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="{{route('dashboard')}}"><img src="{{asset('admin/assets/images/logo.svg')}}" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="{{route('dashboard')}}"><img src="{{asset('admin/assets/images/logo-mini.svg')}}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>

          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="{{asset('admin/assets/images/faces/face1.jpg')}}" alt="image"/>
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">{{Auth::user()->name}}</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="{{route('profile.edit')}}">
                  <i class="mdi mdi-cached me-2 text-success"></i> Edit Profile </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-logout me-2 text-primary"></i> <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button class="dropdown-item" style="border:none; background:none" type="submit">
                        Sign Out
                    </button>
                </form></a>
              </div>
            </li>


            {{-- <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li> --}}
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{asset('admin/assets/images/faces/face1.jpg')}}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{Auth::user()->name}}</span>
                  <span class="text-secondary text-small">{{ucfirst(Auth::user()->designation)}}</span>
                </div>
                {{-- <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> --}}
              </a>
            </li>
            <li class="nav-item @if(Route::currentRouteName()=='dashboard')
            active
        @endif">
              <a class="nav-link" href="{{route('dashboard')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item @if(Route::currentRouteName()=='destination.create'||Route::currentRouteName()=='destination.index')
                active
            @endif">
              <a class="nav-link" data-bs-toggle="collapse" href="#destination-submenu" aria-expanded="false" aria-controls="destination-submenu">
                <span class="menu-title">Destinations</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse @if(Route::currentRouteName()=='destination.create'||Route::currentRouteName()=='destination.index')
              show
          @endif" id="destination-submenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item "> <a class="nav-link @if(Route::currentRouteName()=='destination.create')
                  active
              @endif" href="{{route('destination.create')}}">Insert</a></li>
                  <li class="nav-item "> <a class="nav-link @if(Route::currentRouteName()=='destination.index')
                  active
              @endif" href="{{route('destination.index')}}">Manage</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item @if(Route::currentRouteName()=='package.create'||Route::currentRouteName()=='package.create')
            active
        @endif">
                <a class="nav-link" data-bs-toggle="collapse" href="#packages-submenu" aria-expanded="false" aria-controls="packages-submenu">
                  <span class="menu-title">Packages</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                </a>
                <div class="collapse @if(Route::currentRouteName()=='package.create'||Route::currentRouteName()=='package.create')
                show
            @endif" id="packages-submenu">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link @if(Route::currentRouteName()=='package.create')
                        active
                    @endif" href="{{route('package.create')}}">Insert</a></li>
                    <li class="nav-item"> <a class="nav-link @if(Route::currentRouteName()=='package.index')
                        active
                    @endif" href="{{route('package.index')}}">Manage</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item @if(Route::currentRouteName()=='contactmessage.index')
              active
          @endif">
                <a class="nav-link" data-bs-toggle="collapse" href="#mails-submenu" aria-expanded="false" aria-controls="mails-submenu">
                  <span class="menu-title">Contact Messages</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                </a>
                <div class="collapse @if(Route::currentRouteName()=='contactmessage.index')
                show
            @endif" id="mails-submenu">
                  <ul class="nav flex-column sub-menu">
                    {{-- <li class="nav-item"> <a class="nav-link" href="{{route()}}">Insert</a></li> --}}
                    <li class="nav-item"> <a class="nav-link @if(Route::currentRouteName()=='contactmessage.index')
                        active
                    @endif" href="{{route('contactmessage.index')}}">Manage</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item @if(Route::currentRouteName()=='testimonial.create'||Route::currentRouteName()=='testimonial.index')
              active
          @endif">
                <a class="nav-link" data-bs-toggle="collapse" href="#testimonials-submenu" aria-expanded="false" aria-controls="testimonials-submenu">
                  <span class="menu-title">Testimonials</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                </a>
                <div class="collapse @if(Route::currentRouteName()=='testimonial.create'||Route::currentRouteName()=='testimonial.index')
                show
            @endif" id="testimonials-submenu">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link @if(Route::currentRouteName()=='testimonial.create')
                        active
                    @endif" href="{{route('testimonial.create')}}">Insert</a></li>
                    <li class="nav-item"> <a class="nav-link @if(Route::currentRouteName()=='testimonial.index')
                        active
                    @endif" href="{{route('testimonial.index')}}">Manage</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item @if(Route::currentRouteName()=='team.create'||Route::currentRouteName()=='team.index')
              active
          @endif">
                <a class="nav-link" data-bs-toggle="collapse" href="#teams-submenu" aria-expanded="false" aria-controls="teams-submenu">
                  <span class="menu-title">Teams</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                </a>
                <div class="collapse @if(Route::currentRouteName()=='team.create'||Route::currentRouteName()=='team.index')
                show
            @endif" id="teams-submenu">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link @if(Route::currentRouteName()=='team.create')
                        active
                    @endif" href="{{route('team.create')}}">Insert</a></li>
                    <li class="nav-item"> <a class="nav-link @if(Route::currentRouteName()=='team.index')
                        active
                    @endif" href="{{route('team.index')}}">Manage</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item @if(Route::currentRouteName()=='siteconfig.index')
              active
          @endif">
                <a class="nav-link" data-bs-toggle="collapse" href="#companyinfo-submenu" aria-expanded="false" aria-controls="companyinfo-submenu">
                  <span class="menu-title">Company Information</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                </a>
                <div class="collapse @if(Route::currentRouteName()=='siteconfig.index')
                show
            @endif" id="companyinfo-submenu">
                  <ul class="nav flex-column sub-menu">
                    {{-- <li class="nav-item"> <a class="nav-link" href="">Insert</a></li> --}}
                    <li class="nav-item"> <a class="nav-link @if(Route::currentRouteName()=='siteconfig.index')
                        active
                    @endif" href="{{route('siteconfig.index')}}">Manage</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item @if(Route::currentRouteName()=='subscription.create'||Route::currentRouteName()=='subscription.index')
              active
          @endif">
                <a class="nav-link" data-bs-toggle="collapse" href="#subs-submenu" aria-expanded="false" aria-controls="subs-submenu">
                  <span class="menu-title">Subscriptions</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                </a>
                <div class="collapse @if(Route::currentRouteName()=='subscription.create'||Route::currentRouteName()=='subscription.inidex')
                show
            @endif" id="subs-submenu">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link @if(Route::currentRouteName()=='subscription.create')
                        active
                    @endif" href="{{route('subscription.create')}}">Insert</a></li>
                    <li class="nav-item"> <a class="nav-link @if(Route::currentRouteName()=='subscription.index')
                        active
                    @endif" href="{{route('subscription.index')}}">Manage</a></li>
                  </ul>
                </div>
              </li>
              @if (Auth::user()->designation=='admin')
                  <li class="nav-item @if(Route::currentRouteName()=='register'||Route::currentRouteName()=='users')
              active
          @endif">
                <a class="nav-link" data-bs-toggle="collapse" href="#users-submenu" aria-expanded="false" aria-controls="users-submenu">
                  <span class="menu-title">Users</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                </a>
                <div class="collapse @if(Route::currentRouteName()=='register'||Route::currentRouteName()=='users')
                show
            @endif" id="users-submenu">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link @if(Route::currentRouteName()=='register')
                        active
                    @endif" href="{{route('register')}}">Insert</a></li>
                    <li class="nav-item"> <a class="nav-link @if(Route::currentRouteName()=='users')
                        active
                    @endif" href="{{route('users')}}">Manage</a></li>
                  </ul>
                </div>
              </li>
              @endif



          </ul>
        </nav>
        <!-- partial -->
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper center">
