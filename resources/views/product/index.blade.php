@extends('product.layout')

@section('content')

<div class="jumbotron container">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

<div class = container>

<table class="table">
  <thead class="thead-primary">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @php
      $i = 1;
      @endphp
  @foreach($products as $item)

  <tr>
      <td>{{$i++}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->price}}</td>
      <td>
          <a class = 'btn btn-primary' href = '{{route(products.edit,$item->id)}}'>Edit</a>
          <a class = 'btn btn-danger' href = '{{route(products.show,$item->id)}}'>Show</a>

          <form action = '{{route(products.destory,$item->id)}}'>
              $csrf
              @method('DELETE')
          <button type = 'submit' class = 'btn btn-primary'></button>
          </form>
      </td>
  </tr>
  @endforeach
</body>
</table>



</div>

@endsection
