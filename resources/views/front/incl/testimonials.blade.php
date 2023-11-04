<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
            <h1>What Say Our Clients</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            @foreach ($testimonials as $testimonial)


            <div class="text-center pb-4">
                <img class="img-fluid mx-auto" src="{{asset('admin/testimonials/'.$testimonial->img)}}" style="width: 100px; height: 100px;" >
                <div class="testimonial-text bg-white p-4 mt-n5">
                    <p class="mt-5">{{$testimonial->comment}}
                    </p>
                    <h5 class="text-truncate">{{$testimonial->name}}</h5>
                    <span>{{$testimonial->profession}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
