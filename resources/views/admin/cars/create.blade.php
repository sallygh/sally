@extends('navbar')

@section('heder')
@endsection

<section class="section">
    <div class="container" style="margin-top: 5% ; width:50%">

    <form action={{ route('storeCar') }}  method="POST">
@csrf
        <div class="form-group">
          <label for="modle">model</label>
          <input type="text" class="form-control" id="model"
          name="model"  placeholder="موديل السيارة ">
        </div>


        <div class="form-group">
            <label for="price">price</label>
<div class="input-group mb-3">
            <span class="input-group-text">SYP</span>
            <input type="number" class="form-control" id="price" name="price"  step="1000000"  placeholder="سعر السيارة ">
          </div>
        </div>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
        <div class="form-group">
            <label for="year">year</label>
            <input type="date" class="form-control" id="year"
            name="year"  placeholder="تاريخ التصنيع السيارة ">
          </div>

          <div class="form-group">
            <div class="form-group-prepend">
                <label for="price">الوصف</label>
            </div>
            <textarea class="form-control" name="description" > </textarea>
          </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

</section>
