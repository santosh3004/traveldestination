@extends('admin.layout.app')
@section('content')



<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Contact Messages</h4>
        </p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th> Name </th>
              <th> E-mail </th>
              <th> Subject </th>
              <th> Date </th>
              <th> Actions </th>
            </tr>
          </thead>
          <tbody>
            @if ($contactmessages!=null)
                @foreach ($contactmessages as $contactmessage)
                <tr>
                    <td>
                      {{$contactmessage->name}}
                    </td>
                    <td> {{$contactmessage->email}} </td>
                    <td> <a href="{{route('contactmessage.show',1)}}">{{$contactmessage->subject}}</a> </td>
                    <td>{{date('Y-m-d',strtotime($contactmessage->created_at))}}</td>
                    <td> <div class="btn-group-vertical" role="group" aria-label="Basic example">
                      <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Action</button>
                        <div class="dropdown-menu">

                          <a href="{{route('contactmessage.edit',$contactmessage->id)}}" class="dropdown-item">Reply</a>
                         <form action="{{route('contactmessage.destroy',$contactmessage->id)}}" method="POST" enctype="multipart/form-data">
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
