@extends('navbar')

@section('heder')
@endsection

<section class="section">
    <div class="container" style="margin-top: 5% ; width:50%">

        <form action={{route('CatrgoryController.store')}} method="post" enctype="multipart/form-data " >
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
                <label for="name">Name</label>
                <input type="text" class="form-control"
                @error('name') is-invalid @enderror
                 name="name" placeholder="فئة السيارة " value={{ old('name') }}>

                 @error('name')
                     <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
            </div>


            <div class="form-group">
                <label for="one">one</label>
                <input type="text" class="form-control"
                @error('one') is-invalid @enderror
                 one="one" placeholder="one" value={{ old('one') }}>

                 @error('one')
                     <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
            </div>

            <div class="form-group">
                <label for="cabcity">cabcity</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">العدد</span>
                    <input type="cabcity" class="form-control"  name="cabcity"
                        placeholder="سعة السيارة ">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</section>
