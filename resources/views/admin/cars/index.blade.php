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
        <th >


        </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car )
        <tr>
          <td scope="row">{{ $car->id}}</td>
          <td>
            <a href= {{ route('editcar' , $car )}}>
                 {{ $car->model}} </td>
          <td>
            <a href= {{ route('editcar' , $car )}}>
                {{ $car->price}}</td>
          <td>
            <a href= {{ route('editcar' , $car )}}>
                {{ $car->year}}</td>
                <td>
            <a href= {{ route('editcar' , $car )}}>
                {{ $car->description}}</td>
                <td> <form action={{route('destroy' , $car)}} method="POST" > @csrf @method('delete')  <button type="submit" class="btn btn-outline-primary"> DElete </form> </td>
        </tr>

        @endforeach

    </tbody>
  </table>



