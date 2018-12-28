@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Show Product</div>

                <div class="panel-body">
<table class="table table-hover">
    <tbody>
        

        
      <tr class="table-active">
         
          
     <td>{{$product->id}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td>
       <td>{{$product->created_at}}</td>
           </tr>  


    
 
        

 
  </tbody>
</table> 
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
