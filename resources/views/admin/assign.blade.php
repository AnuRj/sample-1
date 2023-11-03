@extends('layouts.app')

@section('content')
<div class="container">
      <form action="{{route('inspector-assign',$users->i_id)}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Date</label>
            <input type="tel" class="form-control" id="formGroupExampleInput" placeholder="" name="date" value="{{$users->date}}" disabled>
        </div>
        
        
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Complaint Submitted By</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="complaintsb" value="{{$users->name}}" disabled>
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Subject</label>
            <input type="email" class="form-control" id="formGroupExampleInput" placeholder="" name="sub" value="{{$users->subject}}" disabled>
        </div>


        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">complaint Details</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="cd" value="{{$users->c_details}}" disabled>
        </div>


        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Select inspector</label>
            <select class="form-select" aria-label="Default select example" name="inspector">
                <option value="{{$users->inspector}}" hidden>{{$users->inspector}}</option>
                @foreach ($inspectors as $ad)
                
                  <option value="{{$ad->name}}">{{$ad->name}}</option>
              
                @endforeach
              </select>
        </div>
  

        <br>
        <input class="btn btn-primary" type="submit" value="Submit">

      </form>
</div>
      @endsection