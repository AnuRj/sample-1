@extends('layouts.app')

@section('content')

  <div class="container">
    <!-- general form elements -->
    <div class="card card-primary p-3">
        <div class="card-header">
          <h3 class="card-title">Inspector Details</h3>
          </div>
        <!-- /.card-header -->
       <form >
            @csrf
          
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label"></label>
                <select class="form-select" aria-label="Default select example" name="inspector" id="populate" onchange="Showchange(this.value)">
                    <option value="" hidden>Select Inspector</option>
                    @foreach ($inspectors as $inspector)
                    
                      <option value="{{$inspector->id}}">{{$inspector->name}}</option>
                  
                    @endforeach
                </select>
            </div>
            <br>
            
           
       </form>
         

          <table id="" class="table table-bordered table-striped">
              <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact No</th>
                    <th>Email</th>
                    
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td id="name"></td>
                  <td id="address"></td>
                  <td id="cno"></td>
                  <td id="email"></td>                
                </tr>
              </tbody>
          </table>
      </div>
      <!-- /.card-body -->

    <div class="card-footer">
  </div>

  <script>
    function Showchange(str) 
    {
      
            $.ajax({
                url: "{{url('admin/inspectordetails')}}",
                type: 'POST',
                data: { 'id': str,'_token':'{{csrf_token()}}'},
                success: function(data){
                    
                  $("#name").text(data['name']);
                  $("#address").text(data['address']);
                  $("#cno").text(data['contact_no']);
                  $("#email").text(data['email']);
                
                  //console.log(data);
                  // alert(response);
                  
                }
            });
            
        
    }

  </script>

@endsection