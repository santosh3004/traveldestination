@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Package form</h4>

          <form class="forms-sample" action="{{route('package.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
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
            <div class="form-group">
              <label for="citiesId">Duration</label>
              <input type="number" name="duration" class="form-control" id="citiesId" placeholder="Duration">
            </div>
            <div class="form-group">
                <label for="citiesId">Price</label>
                <input type="number" name="price" class="form-control" id="citiesId" placeholder="Price">
              </div>
              <div class="form-group">
                <label for="citiesId">Persons</label>
                <input type="number" name="person" class="form-control" id="citiesId" placeholder="Persons">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Textarea</label>
                <textarea name="description" maxlength="150" class="form-control" id="exampleTextarea1" rows="4"></textarea>
              </div>
            <div class="form-group">
                <label>Image upload</label>
                <div class="input-group col-xs-12">
                  <input type="file" name="file" class="form-control file-upload-info" placeholder="Upload Image">

                </div>
              </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <a href="{{route('package.create')}}" class="btn btn-light">Cancel</a>
          </form>
        </div>
      </div>
    </div>
@endsection
