@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Mail form</h4>

          <form class="forms-sample" action="{{route('mails.store')}}" enctype="multipart/form-data" method="POST">
            @csrf

            <div class="form-group">
              <label for="citiesId">Name</label>
              <input type="text" name="name" class="form-control" id="citiesId" placeholder="Duration">
            </div>
            <div class="form-group">
                <label for="citiesId">Email</label>
                <input type="email" name="email" class="form-control" id="citiesId" placeholder="Price">
              </div>
              <div class="form-group">
                <label for="citiesId">Subject</label>
                <input type="text" name="subject" class="form-control" id="citiesId" placeholder="Persons">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Message</label>
                <textarea name="message" maxlength="150" class="form-control" id="exampleTextarea1" rows="4"></textarea>
              </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <a href="{{route('mails.index')}}" class="btn btn-light">Cancel</a>
          </form>
        </div>
      </div>
    </div>
@endsection
