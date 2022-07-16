@extends('navbar')

@section('heder')
@endsection
<section class="section">
    <div class="container" style="margin-top: 5% ; width:50%">

        <form action={{route('group.store')}} method="post" enctype="multipart/form-data " >
            @csrf
            @method('Get')
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="form-group">
            <label for="modle">name</label>
            <input type="text" class="form-control"
            @error('brand') is-invalid @enderror
             name="name" placeholder=" اسم الفئة "  value={{ old('name') }}>

             @error('name')
                 <div class="invalid-feedback">{{ $message }}</div>
             @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</section>
