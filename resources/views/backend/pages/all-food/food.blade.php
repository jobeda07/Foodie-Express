@extends('backend.pages.partial.dashboard')
@section('myselfstyle')
<style>
table, th, td {
  /* border: 1px solid #343957; */
  border-collapse: collapse;
  text-align: center !important;
}
th{
    color: white !important;
}
th:nth-child(8){
    width: 20% !important;
}
td:nth-child(8){
    text-align: right !important;
}
td:nth-child(9){
    text-align:left !important;
}
</style>
@endsection

@section('content')

<section id="main-content">
<h1 style="text-align:center;color:#5264f2; ">User  Information</h1>
<div class="container"><a class="btn btn-primary"style="background-color:#5264f2; color:white" href="{{route('food.form')}}">Create</a>
</div>
<br>
<br>
<div class="container">
<table class="table table-striped" style="width:100%">
  <thead style="background-color:#5264f2; ">
    <tr>
      <th >ID</th>
      <th >Name</th>
      <th >Description</th>
      <th >Quantity</th>
      <th >Price</th>
      <th >stock-status</th>
      <th >category-Name</th>
      <th colspan="2">Action</th>
     
    </tr>
  </thead>
  <tbody >
   @foreach($foods as $food)
    <tr>
    <td scope="row">{{$food->id}}</td>
      <td>{{$food->name}}</td>
      <td>{{$food->description}}</td>
      <td>{{$food->quantity}}</td>
      <td>{{$food->price}}</td>
      <td>{{$food->stock_status}}</td>
      <td>{{$food->categoryRelation->category_name}}</td>
      
      <td><a class="btn btn-primary btn-sm" href="{{route('food.editpage',$food->id)}}">Edit</a></td>
      <td><a class="btn btn-danger btn-sm" href="{{route('food.delete',$food->id)}}">Delete</a></td>
      
      
    </tr>
    @endforeach
    

    
   
    
  </tbody>
</table>
</div>
</section>



@endsection


