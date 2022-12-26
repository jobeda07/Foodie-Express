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
th:nth-child(7){
    width: 20% !important;
}
td:nth-child(7){
    text-align: right !important;
}
td:nth-child(8){
    text-align:left !important;
}
</style>
@endsection
@section('content')

<section id="main-content">
<h1 style="text-align:center;color:#5264f2; font-weight:bold;">All Food Category</h1>
<div class="container"><a class="btn btn-primary"style="background-color:#5264f2; color:white" href="{{route('category.form')}}">Create</a>
</div>
<br>
<br>
<div class="container">
<table class="table table-striped" style="width:100%">
  <thead style="background-color:#5264f2; ">
    <tr>
      <th >ID</th>
      <th >Name</th>
      <th >Image</th>
      <th >description</th>
      <th >status</th>
      <th colspan="2">Action</th>
     
    </tr>
  </thead>
  <tbody >
    

  @foreach($categories as $category)
    <tr>
      <td>{{$category->id}}</td>
      <td>{{$category->category_name}}</td>
      <td><img class="rounded-circle" width="80px" src="{{url('/uploads/category/'.$category->category_image)}}" alt="img not found"></td>
      <td>{{$category->status}}</td>
      <td>{{$category->description}}</td>
      
      <td>
        <a href="{{route('category.editpage',$category->id)}}" class="btn btn-primary">Edit</a>
        <a href="{{route('category.delete',$category->id)}}" class="btn btn-danger">Delete</a>
    </td>
      
      </tr>
    @endforeach


    
   
    
  </tbody>
</table>
</div>
</section>



@endsection


