@extends('layouts.app')

@section('content')

 <div class="container">
        @if(session('message'))
            <div class="alert alert-success" role="alert">
                {{session('message')}}
            </div>

        @elseif(session('delete'))
            <div class="alert alert-danger" role="alert">
                {{session('delete')}}
            </div>
        @endif
    
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Contact No</th>
                            <th scope="col">Address</th>
                            <th scope="col">E-Mail Address</th>
                            <th scope="col">job position</th>
                            <th scope="col" >Action</th>
                            <th scope="col" >Action</th>
                        </tr>
                    </thead>

                    <?php
                       $i=1;
                    ?>

                    
                        <tbody>
                            @foreach ($admin as $user)
                                <tr>
                                    <td >{{$i++}}</td>
                                    <td >{{$user->name}}</td>
                                    <td >{{$user->contact_no}}</td>
                                    <td >{{$user->address}}</td>
                                    <td >{{$user->email}}</td>
                                    <td >{{$user->job_position}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{route('admin.edit',$user->id)}}" role="button" name="accept">Edit</a>&nbsp;&nbsp;
                                    </td>
                                    <td>   
                                        <a class="btn btn-danger" href="{{route('inspector-remove',$user->id)}}" role="button" name="accept">Delete</a>
                                    </td>
                                </tr>
                            @endforeach  
                        </tbody>
                  
                    </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->      
    </div>
  
</div>

@endsection
