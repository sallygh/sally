@extends('navbar')

@section('heder')
@endsection

<section class="section">
    <div class="container" style="margin-top: 5% ; width:50%">

        <form action={{route('updatecar' , $car)}} method="post" enctype="multipart/form-data " >
            @csrf
            @method('put')
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
                <label for="modle">model</label>
                <input type="text" class="form-control"
                @error('brand') is-invalid @enderror
                 name="model" placeholder="موديل السيارة " value={{old('model',$car->model )  }}>

                 @error('model')
                     <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
            </div>


            <div class="form-group">
                <label for="price">price</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">SYP</span>
                    <input type="number" class="form-control"  name="price" step="1000000" placeholder="سعر السيارة " value={{ old('price' , $car->price )}}>
                </div>
            </div>



            <div class="form-group">
                <label for="year">year</label>
                <input type="date" class="form-control"  name="year"
                    placeholder="تاريخ التصنيع السيارة " value={{ old (' year' ,$car->year) }}>
            </div>



            <div class="form-group">
                <div class="form-group-prepend">
                    <label for="description">الوصف</label>
                </div>
     <textarea class="form-control" name="description" >{{old('description', $car->description)}}</textarea>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</section>
