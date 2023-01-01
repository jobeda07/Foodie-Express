@extends('backend.pages.partial.dashboard')
@section('content')
<div class="container">
<center>
<div class="container">
    <h2>food Create</h2>
    <br>
    <br>
    </div>
</center>
<form class="form" action="{{route('food.store')}}" method="post">
        @csrf
        <!-- Name input -->
<div class="form-outline mb-4">
<label class="form-label" for="form7Example1">Name</label>
  <input type="text" name="name" id="form7Example1" class="form-control w-45" />
  </div>
        <!-- image input -->
<!-- <div class="form-outline mb-4">
<label class="form-label" >Image</label>
  <input type="file" name="deliveryboy_image" id="" class="form-control w-45" />
  </div> -->

<!-- Email input -->
<div class="form-outline mb-4">
<p><label class="form-label" for="form7Example2">Description </label></p>
<textarea name="description" id="" cols="67" rows="5"></textarea>
</div>
<div class="form-outline mb-4">
<label class="form-label" for="form7Example2">Quantity </label>
  <input type="number" name="quantity" id="form7Example2" class="form-control w-45" />
  </div>

<div class="form-outline mb-4">
<label class="form-label" for="form7Example2"> Price</label>
  <input type="number" name="price" id="form7Example2" class="form-control w-45" />
  </div>

<div class="form-outline mb-4">
<label class="form-label" for="form7Example2"> Stock-status</label>
  <input type="text" name="stock_status" id="form7Example2" class="form-control w-45" />
  </div>



<div class="form-outline mb-4">
<label class="form-label" for="form7Example2"> Select Food Category</label>
<select name="category_id" id="form7Example2">
      @foreach($categories as $cat)
         <option value="{{$cat->id}}">{{$cat->category_name}}</option>
      @endforeach
</select>
</div>

  <div class="my-2">
                <button type="submit" class="btn btn-info">submit</button>
            </div>
        </form>
</div>
@endsection