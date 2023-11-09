@extends('admin.layout.app')
@section('content')

                  <div class="page-header">
                    <h3 class="page-title">
                      <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-home"></i>
                      </span> Dashboard
                    </h3>

                  </div>
                  <div class="row">
                    <div class="col-md-4 stretch-card grid-margin">
                      <div class="card bg-gradient-danger card-img-holder text-white">
                        <div class="card-body">
                          <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                          <h4 class="font-weight-normal mb-3">Subscriptions <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                          </h4>
                          <h2 class="mb-5">{{$subscriptions}}</h2>
                          <h6 class="card-text"></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin">
                      <div class="card bg-gradient-info card-img-holder text-white">
                        <div class="card-body">
                          <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                          <h4 class="font-weight-normal mb-3">Messages <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                          </h4>
                          <h2 class="mb-5">{{$messages}}</h2>
                          <h6 class="card-text"></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-primary card-img-holder text-white">
                          <div class="card-body">
                            <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">Destinations <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                            </h4>
                            <h2 class="mb-5">{{$destinations}}</h2>
                            <h6 class="card-text"></h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-warning card-img-holder text-white">
                          <div class="card-body">
                            <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">Packages <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                            </h4>
                            <h2 class="mb-5">{{$packages}}</h2>
                            <h6 class="card-text"></h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-success card-img-holder text-white">
                          <div class="card-body">
                            <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">Teams <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                            </h4>
                            <h2 class="mb-5">{{$teams}}</h2>
                            <h6 class="card-text"></h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-dark card-img-holder text-white">
                          <div class="card-body">
                            <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">Testimonials <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                            </h4>
                            <h2 class="mb-5">{{$testimonials}}</h2>
                            <h6 class="card-text"></h6>
                          </div>
                        </div>
                      </div>



@endsection
