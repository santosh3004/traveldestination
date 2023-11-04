@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Subscription form</h4>

          <form class="forms-sample" action="{{route('subscription.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputUsername1">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputUsername1" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="citiesId">Email @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror</label>
              <input type="email" name="email" class="form-control" id="citiesId" placeholder="E-mail">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Destination</label>
                <select name="destination" required class="form-control form-control-lg" id="exampleFormControlSelect1">
                  @if ($destinations!=null)
                      @foreach ($destinations as $destination)
                          <option value="{{$destination->id}}">{{$destination->name}}</option>
                      @endforeach
                  @endif
                </select>
              </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <a href="{{route('subscription.index')}}" class="btn btn-light">Cancel</a>
          </form>
        </div>
      </div>
    </div>
@endsection
