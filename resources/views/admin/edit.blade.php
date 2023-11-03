@extends('layouts.app')

@section('content')
<div class="container">
      <form action="{{route('admin.update',$users->id)}}" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="name" value="{{$users->name}}">
        </div>
  

        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Address</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="address" value="{{$users->address}}">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Contact No</label>
            <input type="tel" class="form-control" id="formGroupExampleInput" placeholder="" name="cno" value="{{$users->contact_no}}">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Job Position</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="jp" value="{{$users->job_position}}">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">E-Mail Address</label>
            <input type="email" class="form-control" id="formGroupExampleInput" placeholder="" name="email" value="{{$users->email}}">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Password</label>
            <input type="password" class="form-control" id="formGroupExampleInput" placeholder="" name="password" value="">
        </div>

        <br>
        <input class="btn btn-primary" type="submit" value="Submit">

      </form>
</div>
      @endsection