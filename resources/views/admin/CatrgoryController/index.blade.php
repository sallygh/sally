@extends('navbar')

@section('heder')
@endsection



<table class="table" style=" margin-top: 5%; width: 50% ; mag">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">cabcity</th>
        <th scope="col">delete</th>

        <th >


        </th>
      </tr>
    </thead>
    <tbody>
        @forelse ( $catrgory as $catrgory )
        <tr>
          <td scope="row">{{ $catrgory->name}}</td>
          <td>
            <a href= {{ route('CatrgoryController.edit' , $catrgory )}}>
                 {{ $catrgory->name}} </td>
          <td>
            <a href= {{ route('CatrgoryController.edit' , $catrgory )}}>
                {{ $catrgory->cabcity}}</td>

                <td> <form action={{route('destroy' , $car)}} method="POST" > @csrf @method('delete')  <button type="submit" class="btn btn-outline-primary"> DElete </form> </td>
        </tr>
        @empty
            <h1> لا يوجد فئاات </h1>
        @endforelse


    </tbody>
  </table>



