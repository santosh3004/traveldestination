@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Site Information Edit form</h4>

          <form class="forms-sample" action="{{route('siteconfig.update',$siteconfig->id)}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="exampleInputUsername1">Site Key</label>
              <input type="text" value="{{$siteconfig->sitekey}}" name="sitekey" class="form-control" id="exampleInputUsername1" placeholder="Site Key">
            </div>
            <div class="form-group">
              <label for="citiesId">Site Value</label>
              <input type="text" value="{{$siteconfig->sitevalue}}" name="sitevalue" class="form-control" id="citiesId" placeholder="Site Value">
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <a href="{{route('siteconfig.index')}}" class="btn btn-light">Cancel</a>
          </form>
        </div>
      </div>
    </div>
@endsection
