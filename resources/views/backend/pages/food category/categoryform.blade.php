@extends('backend.pages.partial.dashboard')
@section('content')
<div class="container">
<center>
<div class="container">
    <h2 style="font-weight:bold;font-size:30px;color:#5264f2;">Category Form</h2>
    <br>
    <br>
    </div>
</center>
<form class="form" action="{{route('category.form.submit')}}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Name input -->
<div class="form-outline mb-4">
<label class="form-label" for="form7Example1">Name</label>
  <input type="text" name="category_name" id="form7Example1" class="form-control" style="width:60%;" />
  </div>
        <!-- image input -->
<div class="form-outline mb-4">
<label class="form-label" >Image</label>
  <input type="file" name="category_image" id="" class="form-control" style="width:60%;" />
  </div>


  <div class="form-outline mb-4">
<label class="form-label" for="form7Example2">status</label>
  <input type="text" name="status" id="form7Example2" class="form-control" style="width:60%;" />
  </div>

<div class="form-outline mb-4">
<p><label class="form-label" for="form7Example2">description </label></p>
<textarea name="description" id="" cols="67" rows="5"></textarea>
  
  </div>

  <div class="my-2">
                <button type="submit" class="btn btn-success">submit</button>
            </div>
        </form>
</div>
@endsection