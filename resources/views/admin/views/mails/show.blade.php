@extends('admin.layout.app')
@section('content')
<div class=" grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{$message->subject}}</h4>
        <p class="card-description"> {{$message->name}}<code>{{$message->email}}</code>
        </p>
        <p> {{$message->message}} </p>
      </div>
    </div>

@endsection
