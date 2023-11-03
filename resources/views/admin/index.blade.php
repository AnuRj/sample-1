@extends('layouts.app')

@section('content')

  <div class="container">
  
        @if(session('message'))
            <div class="alert alert-success" role="alert">
                {{session('message')}}
            </div>  
        @endif
           
        <div class="card ">
            <div class="card-header">
              <h3 class="card-title">Complaint Details</h3>
            </div>
          <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Date</th>
                    <th>Complaint</th>
                    <th>Details</th>
                    <th>Complaint Submitted By</th>
                    <th>Complaint Status</th>
                    <th>inspector</th>
                    <th>Feedback</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                    <?php
                    $i=1;
                    ?>
                    @foreach ($admin as $user)
                            <tr>
                                <td >{{$i++}}</td>
                                <td >{{$user->date}}</td>
                                <td >{{$user->subject}}</td>
                                <td >{{$user->c_details}}</td>
                                <td >{{$user->name}}</td>
                                <td >{{$user->status}}</td>
                                <td >{{$user->inspector}}</td>
                            
                                <td> 
                                    @if($user->feedback != NULL)
                                    <a class="btn btn-primary" href="{{route('feedback-view',$user->i_id)}}" role="button" name="feedback">View</a>
                                    @endif
                                </td>
    
                                <td>
                                    @if($user->status == NULL)
                                    <a class="btn btn-primary" href="{{route('accept',$user->i_id)}}" role="button" name="accept">Accept</a><br><br>
                                    <a class="btn btn-danger" href="{{route('reject',$user->i_id)}}" role="button" name="reject">Reject</a>
                                    @elseif($user->status == 'Rejected')   
                                    <strong>Rejected<strong>
                                    @else
                                    <strong>Accepted<strong>
                                    @endif
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
  @endsection


  