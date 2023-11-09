@extends('admin.layout.app')
@section('content')

@if (session('status')==='siteconfig-updated')

            
            @include('admin.incl.alert')
        @endif


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Site Informations</h4>
        </p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th> Site Key </th>
              <th> Site Value </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            @if ($siteconfigs!=null)
                @foreach ($siteconfigs as $siteconfig)
                <tr>
                    <td> {{$siteconfig->sitekey}} </td>
                    <td>
                      {{$siteconfig->sitevalue}}
                    </td>
                    {{-- <td> Shown </td> --}}
                    <td> <div class="btn-group-vertical" role="group" aria-label="Basic example">
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Action</button>
                        <div class="dropdown-menu">

                          <a href="{{route('siteconfig.edit',$siteconfig->id)}}" class="dropdown-item">Edit</a>
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
