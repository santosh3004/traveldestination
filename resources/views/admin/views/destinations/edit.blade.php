@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Destination form</h4>

          <form class="forms-sample" action="{{route('destination.update',$destination->id)}}" enctype="multipart/form-data" method="POST">

            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="exampleInputUsername1">Destination Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputUsername1" value="{{$destination->name}}" placeholder="Destination Name">
            </div>
            <div class="form-group">
              <label for="citiesId">Cities</label>
              <input type="number" name="cities" value="{{$destination->cities}}" class="form-control" id="citiesId" placeholder="Number of Cities">
            </div>
            <div class="form-group">
                <label>Image upload</label>
                <div class="input-group col-xs-12">
                  <input type="file" name="file" class="form-control file-upload-info" placeholder="Upload Image">

                </div>
              </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <a href="{{route('destination.index')}}" class="btn btn-light">Cancel</a>
          </form>
        </div>
      </div>
    </div>
@endsection
