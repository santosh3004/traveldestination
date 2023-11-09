@extends('admin.layout.app')
@section('content')



@if (session('status')==='user-updated')


            @include('admin.incl.alert')
        @endif
        @if (session('status')==='user-deleted')

@include('admin.incl.alert')
    @endif
    @if (session('status')==='user-added')
 
    @include('admin.incl.alert')
        @endif

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Users </h4>
        </p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th> Name </th>
              <th> Email </th>
              <th> Designation </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            @if ($users!=null)
                @foreach ($users as $user)
                <tr>

                    <td> {{$user->name}} </td>
                    <td>
                      {{$user->email}}
                    </td>
                    <td>{{Str::ucfirst($user->designation)}}</td>
                    <td> <div class="btn-group-vertical" role="group" aria-label="Basic example">
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu">

                          <a href="{{route('users.edit',$user->id)}}" class="dropdown-item">Edit</a>
                         <form action="{{route('users.destroy',$user->id)}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method('DELETE') <button type="submit" class="dropdown-item">Delete</button></form>
                        </div>
                      </div></td>
                  </tr>
                @endforeach
            @endif

                      </tbody>
        </table>
      </div>
    </div>

  @endsection
