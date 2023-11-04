@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Subscription Information Edit form</h4>

          <form class="forms-sample" action="{{route('subscription.update',$subscription->id)}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="exampleInputUsername1">Name</label>
              <input type="text" value="{{$subscription->name}}" name="sitekey" class="form-control" id="exampleInputUsername1" placeholder="Site Key">
            </div>
            <div class="form-group">
              <label for="citiesId">E-mail</label>
              <p for="citiesId">{{$subscription->email}}</p>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Destination</label>
                <select name="destination" required class="form-control form-control-lg" id="exampleFormControlSelect1">
                  @if ($destinations!=null)
                      @foreach ($destinations as $destination)
                          <option @if ($destination->id==$subscription->destination)
                              selected
                          @endif value="{{$destination->id}}">{{$destination->name}}</option>
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
