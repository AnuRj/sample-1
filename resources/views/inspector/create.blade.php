@extends('layouts.app')

@section('content')
  <div class="container">
        <form action="{{route('inspector.update',$inspector->i_id)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">Date</label>
              <input type="date" class="form-control" id="formGroupExampleInput" placeholder="" name="date" required>
            </div>

            <label for="floatingTextarea2">Feedback</label>
            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="fb" required></textarea>
            </div>

            <br>
            <input class="btn btn-primary" type="submit" value="Submit">

        </form>
  </div>
@endsection