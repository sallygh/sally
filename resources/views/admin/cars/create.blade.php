@extends('navbar')

@section('heder')
@endsection

<section class="section">
    <div class="container" style="margin-top: 5% ; width:50%">

    <form action="" method="POST">

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

        <div class="form-group">
            <label for="year">year</label>
            <input type="year" class="form-control" id="model"
            name="year" min="1900" placeholder="تاريخ التصنيع السيارة ">
          </div>

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

</section>
