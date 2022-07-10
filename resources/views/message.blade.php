@extends('navbar')

@section('heder')
@endsection


<table class="table" style=" margin-top: 5%; width: 50% ; mag">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">contact</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($message as $message )
        <tr>
          <td scope="row">{{ $message->id}}</td>
          <td><a href=""> {{ $message->name}} </td>
          <td>{{ $message->email}}</td>
          <td>{{ $message->contact}}</td>
        </tr>

        @endforeach

    </tbody>
  </table>
