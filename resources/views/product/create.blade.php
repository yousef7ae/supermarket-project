@extends('product.layout')

@section('content')
<div class = 'containers'style = 'padding-top:10% ;padding-left:9%'>
<div class="card " style='width:1000px'>
  <div class="card-body ">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class = container>
<form class = "form-group" action = '{{"route(products.store)"}}' method = "POST">
@csrf
  <div>
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name = 'name' class="form-control" id="exampleFormControlInput1" placeholder="product name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Price</label>
    <input type="text" name='price' class="form-control" id="exampleFormControlInput1" placeholder="price">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Details</label>
    <textarea class="form-control" name = 'details' id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">

  <button type="submit" class="btn btn-primary">Save</button>

  </div>
</form>
</div>

@endsection
