@extends('admin.layout.app')
@section('content')

@if (session('status')==='team-updated')


            @include('admin.incl.alert')
        @endif
        @if (session('status')==='team-deleted')

@include('admin.incl.alert')
    @endif
    @if (session('status')==='team-added')
  
    @include('admin.incl.alert')
        @endif

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Teams</h4>
        </p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th> Team </th>
              <th> Name </th>
              <th> Designation </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            @if ($teams!=null)
                @foreach ($teams as $team)
                <tr>
                    <td class="py-1">
                      <img src="{{asset('admin/teams/'.$team->img)}}" alt="image" />
                    </td>
                    <td> {{$team->name}} </td>
                    <td>
                      {{$team->designation}}
                    </td>
                    <td> <div class="btn-group-vertical" role="group" aria-label="Basic example">
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu">

                          <a href="{{route('team.edit',$team->id)}}" class="dropdown-item">Edit</a>
                         <form action="{{route('team.destroy',$team->id)}}" method="POST" enctype="multipart/form-data">
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
