@extends('navbar')

@section('heder')
@endsection
<div class="container" style="margin-top: 5% ; width:50%">
<div class="card" style="margin-top:30% , width:50%">
    <div class="card-body" style="margin-top:30% , width:50%">
      <h4 class="card-title">{{ $message->name}}</h4>
      <h4 class="card-title">{{ $message->email}}</h4>
      <p class="card-text">
        {{ $message->contact}}
      </p>

    </div>
  </div>
</div>

