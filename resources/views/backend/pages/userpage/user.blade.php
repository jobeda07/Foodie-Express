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
th:nth-child(6){
    width: 20% !important;
}
td:nth-child(6){
    text-align: right !important;
}
td:nth-child(7){
    text-align:left !important;
}
</style>
@endsection

@section('content')

<section id="main-content">
<h1 style="text-align:center;color:#5264f2; ">User  Information</h1>
<div class="container"><a class="btn btn-primary"style="background-color:#5264f2; color:white" href="{{route('userform')}}">Create</a>
</div>
<br>
<br>
<div class="container">
<table class="table table-striped" style="width:100%">
  <thead style="background-color:#5264f2; ">
    <tr>
      <th >ID</th>
      <th >Name</th>
      <th >Email</th>
      <th >Mobile</th>
      <th >Address</th>
      <th colspan="2">Action</th>
     
    </tr>
  </thead>
  <tbody >
    @foreach($alluser as $singleuser)
    <tr>
    <td scope="row">{{$singleuser->id}}</td>
      <td>{{$singleuser->user_name}}</td>
      <td>{{$singleuser->user_email}}</td>
      <td>{{$singleuser->user_mobile}}</td>
      <td>{{$singleuser->user_address}}</td>
      <td><a class="btn btn-primary btn-sm" href="{{route('user.editform',$singleuser->id)}}">Edit</a></td>
      <td><a class="btn btn-danger btn-sm" href="{{route('user.delete',$singleuser->id)}}">Delete</a></td>
      
      
    </tr>
    @endforeach


    
   
    
  </tbody>
</table>
</div>
</section>



@endsection


