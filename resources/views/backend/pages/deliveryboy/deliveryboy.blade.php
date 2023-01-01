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
<h1 style="text-align:center;color:#5264f2; font-weight:bold;">DeliveryBoy  Information</h1>
<div class="container"><a class="btn btn-primary"style="background-color:#5264f2; color:white" href="{{route('deliveryboy.form')}}">Create</a>
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
      <th >Email</th>
      <th >Mobile</th>
      <th >Address</th>
      <th colspan="2">Action</th>
     
    </tr>
  </thead>
  <tbody >
    

  @foreach( $deliveryboys as $viewdata)
    <tr>
      <td>{{$viewdata->id}}</td>
      <td>{{$viewdata->deliveryboy_name}}</td>
      <td><img width="80px" src="{{url('/uploads/delivery/'.$viewdata->deliveryboy_image)}}" alt="img not found">
</td>
      <td>{{$viewdata->deliveryboy_email}}</td>
      <td>{{$viewdata->deliveryboy_mobile}}</td>
      <td>{{$viewdata->deliveryboy_address}}</td>
      <td>
        <a href="{{route('delivery.editpage',$viewdata->id)}}" class="btn btn-primary">Edit</a>
        <a href="{{route('deliveryboy.delete', $viewdata->id)}}" class="btn btn-danger">Delete</a>
    </td>
      
      
      
    </tr>
    
@endforeach
 </tbody>
</table>

</div>
<div class="d-flex justify-content-center">
   {{$deliveryboys->links()}}
</div>

</section>



@endsection

