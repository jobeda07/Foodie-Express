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
th:nth-child(2){
    width: 20% !important;
}
th:nth-child(8){
    width: 20% !important;
}
td:nth-child(2){
    text-align: right !important;
}
td:nth-child(3){
    text-align:left !important;
}
td:nth-child(9){
    text-align: right !important;
}
td:nth-child(10){
    text-align:left !important;
}
</style>
@endsection
@section('content')


<section id="main-content">
<h1 style="text-align:center;color:#343957; ">Admin  Information</h1>
<div class="container"><a class="btn btn-lg"style="background-color:#343957; color:white" href="{{route('admin.form')}}">Create</a>
</div>
<br>
<br>
<div class="container">
<table class="table table-striped" style="width:100%">
  <thead style="background-color:#343957; ">
    <tr>
      <th >ID</th>
      <th colspan="2" >Name</th>
      <th >Phone</th>
      <th >Email</th>
      <th >Address</th>
      <th >Username</th>
      <th >Password</th>
      <th colspan="2">Action</th>
     
    </tr>
  </thead>
  <tbody >
    @foreach ($admin as $viewas)
    <tr>
      <td scope="row">{{$viewas->id}}</td>
      <td>{{$viewas->first_name}}</td>
      <td>{{$viewas->last_name}}</td>
      <td>{{$viewas->Mobile}}</td>
      <td>{{$viewas->email}}</td>
      <td>{{$viewas->address}}</td>
      <td>{{$viewas->username}}</td>
      <td>{{$viewas->password}}</td>
      <td><a class="btn btn-info btn-sm" href="{{route('admin.editpage',$viewas->id)}}">Edit</a></td>
      <td><a class="btn btn-danger btn-sm" href="{{route('admin.delete',$viewas->id)}}">Delete</a></td>
      
    </tr>
 @endforeach
  
    
   
    
  </tbody>
</table>
</div>
</section>



@endsection


