@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List Product</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Created at</th>
    </tr>
  </thead>
  <tbody>

      @foreach ($products as $product)



      <tr class="table-active">



          <td>{{$product->name}}</td>
          <td>{{$product->price}}</td>
          <td>{{$product->created_at}}</td>
          <td><a href="{{ url('show',$product->id) }}" class="btn btn-primary btn-sm">
                  <i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
          <td><a href="{{ url('edit',$product->id) }}" class="btn btn-primary btn-sm">
                  <i class="fa fa-eye" aria-hidden="true"></i> Edit</a></td>
          <td><a href="{{ url('delete',$product->id) }}" class="btn btn-primary btn-sm">
                  <i class="fa fa-eye" aria-hidden="true"></i> Delete</a></td>
      </tr>


    @endforeach



  </tbody>
</table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

