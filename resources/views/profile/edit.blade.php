@extends('admin.layout.app')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <h4 class="card-title">Profile</h4> @if (session('status')==='profile-updated')

                    <label class="text-success">Profile Updated</label>
                @endif
                @if (session('status') === 'password-updated')
                <label class="text-success">Password Updated</label>
                @endif
            </div>
        </div>
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <form method="POST" action="{{route('profile.update')}}" class="forms-sample">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name @error('name')
                            <label class="text-danger">: {{$message}}</label>
                        @enderror</label>
                        <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control" id="exampleInputEmail1" placeholder="Full Name">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Save</button>
                    <a href="{{route('dashboard')}}" class="btn btn-light">Cancel</a>
                  </form>
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <form action="{{route('password.update')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputPassword1">Old Password @error('password')
                            <label class="text-danger">: {{$message}}</label>
                        @enderror</label>
                        <input type="password" name="current_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">New Password @error('password')
                        <label class="text-danger">: {{$message}}</label>
                    @enderror</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Confirm New Password @error('password_confirmation')
                      <label class="text-danger">: {{$message}}</label>
                  @enderror</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-gradient-primary me-2">Save</button>
                  <a href="{{route('dashboard')}}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>

    </div>

@endsection
