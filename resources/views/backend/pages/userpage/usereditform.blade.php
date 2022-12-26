@extends('backend.pages.partial.dashboard')
@section('content')
<div class="container">
<center>
<div class="container">
    <h2>User Form</h2>
    <br>
    <br>
    </div>
</center>
<form class="form" action="{{route('user.editform.submit',$edituser->id)}}" method="post">
    @method('put')
        @csrf
        <!-- Name input -->
<div class="form-outline mb-4">
<label class="form-label" for="form7Example1">Name</label>
  <input type="text" name="user_name" value="{{$edituser->user_name}}" id="form7Example1" class="form-control w-45" />
  </div>

<!-- Email input -->
<div class="form-outline mb-4">
<label class="form-label" for="form7Example2">Email</label>
  <input type="email" name="user_email" value="{{$edituser->user_email}}" id="form7Example2" class="form-control w-45" />
  </div>
<div class="form-outline mb-4">
<label class="form-label" for="form7Example2">Mobile Number </label>
  <input type="text" name="user_mobile" value="{{$edituser->user_mobile}}" id="form7Example2" class="form-control w-45" />
  </div>

<div class="form-outline mb-4">
<label class="form-label" for="form7Example2"> address</label>
  <input type="text" name="user_address" value="{{$edituser->user_address}}" id="form7Example2" class="form-control w-45" />
  </div>
  <div class="my-2">
                <button type="submit" class="btn btn-info">submit</button>
            </div>
        </form>
</div>
@endsection