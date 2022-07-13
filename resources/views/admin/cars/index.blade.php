@extends('navbar')

@section('heder')
@endsection



<table class="table" style=" margin-top: 5%; width: 50% ; mag">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">model</th>
        <th scope="col">price</th>
        <th scope="col">year</th>
        <th scope="col">description</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car )
        <tr>
          <td scope="row">{{ $car->id}}</td>
          <td>
            <a href= {{ route('showcar' , $car )}}>
                 {{ $car->model}} </td>
          <td>
            <a href= {{ route('showcar' , $car )}}>
                {{ $car->price}}</td>
          <td>
            <a href= {{ route('showcar' , $car )}}>
                {{ $car->year}}</td>
                <td>
            <a href= {{ route('showcar' , $car )}}>
                {{ $car->description}}</td>
        </tr>

        @endforeach

    </tbody>
  </table>



