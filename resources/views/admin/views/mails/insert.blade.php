@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Reply form</h4>

          <form class="forms-sample" action="{{route('contactmessage.update',$message->id)}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="citiesId">Name</label>
              <p>{{$message->name}}</p>
            </div>
            <div class="form-group">
                <label for="citiesId">Email</label>
                <p>{{$message->email}}</p>
              </div>
              <div class="form-group">
                <label for="citiesId">Sender's Subject</label>
                <p>{{$message->subject}}</p>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Message</label>
                <textarea name="message" maxlength="150" class="form-control" id="exampleTextarea1" rows="4"></textarea>
              </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <a href="{{route('contactmessage.show',$message->id)}}" class="btn btn-light">Cancel</a>
          </form>
        </div>
      </div>
    </div>
@endsection
