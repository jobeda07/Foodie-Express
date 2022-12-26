@extends('backend.pages.partial.dashboard')
@section('content')
<div class="container">
<center>
<div class="container">
    <h2>Deliveryboy Form</h2>
    <br>
    <br>
    </div>
</center>
<form class="form" action="{{route('deliveryboy.form.submit')}}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Name input -->
<div class="form-outline mb-4">
<label class="form-label" for="form7Example1">Name</label>
  <input type="text" name="deliveryboy_name" id="form7Example1" class="form-control w-45" />
  </div>
        <!-- image input -->
<div class="form-outline mb-4">
<label class="form-label" >Image</label>
  <input type="file" name="deliveryboy_image" id="" class="form-control w-45" />
  </div>

<!-- Email input -->
<div class="form-outline mb-4">
<label class="form-label" for="form7Example2">Email </label>
  <input type="email" name="deliveryboy_email" id="form7Example2" class="form-control w-45" />
  </div>
<div class="form-outline mb-4">
<label class="form-label" for="form7Example2">Mobile Number </label>
  <input type="text" name="deliveryboy_mobile" id="form7Example2" class="form-control w-45" />
  </div>

<div class="form-outline mb-4">
<label class="form-label" for="form7Example2"> address</label>
  <input type="text" name="deliveryboy_address" id="form7Example2" class="form-control w-45" />
  </div>
  <div class="my-2">
                <button type="submit" class="btn btn-info">submit</button>
            </div>
        </form>
</div>
@endsection