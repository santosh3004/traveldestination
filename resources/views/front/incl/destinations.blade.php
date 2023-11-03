<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
            <h1>Explore Top Destination</h1>
        </div><div class="row">
@foreach ($destinations as $destination)


            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="{{asset('admin/destinations/'.$destination->img)}}" alt="">
                    <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">{{$destination->name}}</h5>
                        <span>{{$destination->cities}} Cities</span>
                    </a>
                </div>
            </div>


@endforeach
</div>
</div></div>
