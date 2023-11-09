@extends('admin.layout.app')
@section('content')

@if (session('status')==='testimonial-updated')


            @include('admin.incl.alert')
        @endif
        @if (session('status')==='testimonial-deleted')

@include('admin.incl.alert')
    @endif
    @if (session('status')==='testimonial-added')
 
    @include('admin.incl.alert')
        @endif

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Destinations</h4>
        </p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th> Person </th>
              <th> Name </th>
              <th> Comment </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            @if ($testimonials!=null)
                @foreach ($testimonials as $testimonial)
                <tr>
                    <td class="py-1">
                      <img src="{{asset('admin/testimonials/'.$testimonial->img)}}" alt="image" />
                    </td>
                    <td> {{$testimonial->name}} </td>
                    <td>
                      {{$testimonial->comment}}
                    </td>

                    <td> <div class="btn-group-vertical" role="group" aria-label="Basic example">
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu">

                          <a href="{{route('testimonial.edit',$testimonial->id)}}" class="dropdown-item">Edit</a>
                         <form action="{{route('testimonial.destroy',$testimonial->id)}}" method="POST" enctype="multipart/form-data">
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
