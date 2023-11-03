@extends('admin.layout.app')
@section('content')



<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Packages</h4>
        </p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th> Package </th>
              <th> Destination </th>
              <th> Duration </th>
              <th> Person </th>
              <th> Description</th>
              <th> Price </th>
            </tr>
          </thead>
          <tbody>
            @if ($packages!=null)
                @foreach ($packages as $package)
                <tr>
                    <td class="py-1">
                      <img src="{{asset('admin/packages/'.$package->img)}}" alt="image" />
                    </td>
                    <td> {{$package->destinations()->first()->name}} </td>
                    <td>
                      {{$package->duration}}
                    </td>
                    <td> {{$package->persons}} </td>
                    <td> {{$package->description}} </td>
                    <td> <div class="btn-group-vertical" role="group" aria-label="Basic example">
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                        <div class="dropdown-menu">

                          <a href="{{route('package.edit',$package->id)}}" class="dropdown-item">Edit</a>
                         <form action="{{route('package.destroy',$package->id)}}" method="POST" enctype="multipart/form-data">
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
