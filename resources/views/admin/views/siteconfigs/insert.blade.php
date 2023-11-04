@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Site Information form</h4>

          <form class="forms-sample" action="{{route('destination.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputUsername1">Site Key</label>
              <input type="text" name="key" class="form-control" id="exampleInputUsername1" placeholder="Site Key">
            </div>
            <div class="form-group">
              <label for="citiesId">Site Value</label>
              <input type="number" name="value" class="form-control" id="citiesId" placeholder="Site Value">
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <a href="{{route('siteconfig.index')}}" class="btn btn-light">Cancel</a>
          </form>
        </div>
      </div>
    </div>
@endsection
