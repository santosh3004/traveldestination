@extends('admin.layout.app')
@section('content')


    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Profile Edit form</h4>
          <p class="card-description"> Edit Your Profile </p>
          <form method="POST" action="{{route('register')}}" class="forms-sample">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">Name @error('name')
                    <label class="text-danger">: {{$message}}</label>
                @enderror</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Full Name">
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password @error('password')
                  <label class="text-danger">: {{$message}}</label>
              @enderror</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputConfirmPassword1">Confirm Password @error('password_confirmation')
                <label class="text-danger">: {{$message}}</label>
            @enderror</label>
              <input type="password" name="password_confirmation" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <a href="{{route('users')}}" class="btn btn-light">Cancel</a>
          </form>
        </div>
      </div>


@endsection
