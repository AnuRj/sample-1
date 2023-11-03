@extends('layouts.app')

@section('content')
<div class="container">
      <form action="{{route('user.update',$users->i_id)}}" method="Post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Date</label>
          <input type="date" class="form-control" id="formGroupExampleInput" placeholder="" name="date" value="{{$users->date}}">
        </div>

        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Subject</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="sub" value="{{$users->subject}}">
        </div>

        <label for="floatingTextarea2">Complaint Details</label>
        <div class="form-floating">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="details" value="{{$users->c_details}}"></textarea>
        </div>

        <br>
        <input class="btn btn-primary" type="submit" value="Submit">

      </form>
</div>
@endsection