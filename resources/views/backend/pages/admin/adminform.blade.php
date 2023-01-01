@extends('backend.pages.partial.dashboard')
@section('content')

<center>
<div class="container">
    <h1 style="text-align:center;color:#5264f2; font-weight:900;">Admin Form</h1>
    <br>
    <br>
    </div>
</center>
<div class="container">
<form class="form" action="{{route('admin.form.submit')}}" method="post" >
@csrf

<div class="my-2" ">
<div style="display:inline-block; margin-right:20px;" >
      <label>First  Name</label>
      <input type="text"  class="form-control " style="width:100%;" placeholder="Enter your First name" name="first_name">
  </div>
  <div style="display:inline-block;" >
      <label>Last Name</label>
      <input type="text" class="form-control" style="width:100%;" placeholder="Enter your last name" name="last_name">
  </div>
</div>
  
  
  <div class="my-2 " >
      <label >Mobile </label>
      <input  type="number" class="form-control" style="width:48%;" placeholder="Enter your phone " name="Mobile">
  </div>
  <div class="my-2 ">
      <label>email</label>
      <input type="email" class="form-control" style="width:48%;" placeholder="Enter your email" name="email">
  </div>
  <div class="my-2">
      <label>address</label>
      <input type="text" class="form-control" style="width:48%;" placeholder="Enter your address" name="address">
  </div>
  <div class="my-2">
      <label>Username</label>
      <input type="text" class="form-control" style="width:48%;" placeholder="Enter your username" name="username">
  </div>
  <div class="my-2 ">
      <label>Password</label>
      <input type="password" class="form-control" style="width:48%;" placeholder="Enter your password" name="password">
  </div>
  
  <div class="my-2">
      <button type="submit" class="btn btn-success">create</button>
  </div>
</form>
</div>


@endsection