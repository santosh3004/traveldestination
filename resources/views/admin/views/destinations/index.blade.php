@extends('admin.layout.app')
@section('content')



<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Destinations</h4>
        </p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th> Destination </th>
              <th> Name </th>
              <th> Cities </th>
              {{-- <th> Status </th> --}}
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            @if ($destinations!=null)
                @foreach ($destinations as $destination)
                <tr>
                    <td class="py-1">
                      <img src="{{asset('admin/destinations/'.$destination->img)}}" alt="image" />
                    </td>
                    <td> {{$destination->name}} </td>
                    <td>
                      {{$destination->cities}}
                    </td>
                    {{-- <td> Shown </td> --}}
                    <td> <div class="btn-group-vertical" role="group" aria-label="Basic example">
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                        <div class="dropdown-menu">

                          <a href="{{route('destination.edit',$destination->id)}}" class="dropdown-item">Edit</a>
                         <form action="{{route('destination.destroy',$destination->id)}}" method="POST" enctype="multipart/form-data">
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
