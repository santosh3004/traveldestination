@extends('admin.layout.app')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <h4 class="card-title">User Profile</h4> 
            </div>
        </div>
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <form method="POST" action="{{route('users.update',$user->id)}}" class="forms-sample">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name @error('name')
                            <label class="text-danger">: {{$user->name}}</label>
                        @enderror</label>
                        <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleInputEmail1" placeholder="Full Name">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Save</button>
                    <a href="{{route('users')}}" class="btn btn-light">Cancel</a>
                  </form>
            </div>
        </div>

    </div>

@endsection
