@extends('layouts.app')

@section('content')
   
          <!-- general form elements -->
          <div class="card card-primary p-3">
            <div class="card-header">
              <h3 class="card-title">Add Inspector</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin.store')}}" method="post">
                @csrf
              <div class="card-body">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="name">
                </div>
        
    
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Address</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="address">
                </div>
    
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Contact No</label>
                    <input type="tel" class="form-control" id="formGroupExampleInput" placeholder="" name="cno">
                </div>
    
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Job Position</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="jp">
                </div>
    
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">E-Mail Address</label>
                    <input type="email" class="form-control" id="formGroupExampleInput" placeholder="" name="email">
                </div>
    
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Password</label>
                    <input type="password" class="form-control" id="formGroupExampleInput" placeholder="" name="password">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
    
@endsection