@extends('admin.layout.app')
@section('content')



<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Subscriptions Informations</h4>
        </p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th> Name </th>
              <th> Email </th>
              <th> Destination </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            @if ($subscriptions!=null)
                @foreach ($subscriptions as $subscription)
                <tr>
                    <td> {{$subscription->name}} </td>
                    <td>
                      {{$subscription->email}}
                    </td>
                    <td> @foreach ($destinations as $destination)
                        @if($destination->id==$subscription->destination)
                        {{$destination->name}}
                        @endif
                    @endforeach </td>
                    <td> <div class="btn-group-vertical" role="group" aria-label="Basic example">
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Action</button>
                        <div class="dropdown-menu">

                          <a href="{{route('subscription.edit',$subscription->id)}}" class="dropdown-item">Edit</a>
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
