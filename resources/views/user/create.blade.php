@extends('layouts.app')

@section('content')

  <div class="container w-75">
        <form action="{{route('user.store')}}" method="Post">
          @csrf

          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Date</label>
            <input type="date" class="form-control" id="formGroupExampleInput" placeholder="" name="date" required>
          </div>

          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Subject</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="sub" required>
          </div>

          <label for="floatingTextarea2">Complaint Details</label>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="details" required></textarea>
          </div>

          <br>
          <input class="btn btn-primary" type="submit" value="Submit">

        </form>
  </div>

@endsection