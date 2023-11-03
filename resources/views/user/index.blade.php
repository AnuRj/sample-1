@extends('layouts.app')

@section('content')
<div class="container">
    
    @if(session('message'))
          <div class="alert alert-success" role="alert">
              {{session('message')}}
          </div>
    @elseif(session('messages'))
          <div class="alert alert-danger" role="alert">
              {{session('messages')}}
          </div>
    @endif



    <div cass="row">
            <table class="table m-4">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">date</th>
                    <th scope="col">subject</th>
                    <th scope="col">Details</th>
                    <th scope="col">Status</th>
                    <th scope="col">Feedback</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
            $i=1;
            ?>
            @foreach ($users as $user)
                    <tbody>
                        <tr>
                        <td >{{$i++}}</td>
                        <td >{{$user->date}}</td>
                        <td >{{$user->subject}}</td>
                        <td >{{$user->c_details}}</td>
                    @if($user->status!=NULL)
                        <td >{{$user->status}}</td>
                        <td >{{$user->feedback}}</td>
                    @else
                        <td >processing</td>
                        <td >processing</td>
                    @endif
                       
                        <td><a class="btn btn-primary" href="{{route('user.edit',$user->i_id)}}" role="button">Edit</a></td>
                        <td><a class="btn btn-danger" href="{{route('remove',$user->i_id)}}" role="button">Delete</a></td>
                        
                        </tr>
                    </tbody>
                    @endforeach
            </table>

        {{-- <a class="btn btn-primary" href="{{route('user.create')}}" role="button" style="margin-left: 130%">Add</a>--}}
        </div>
        <br>
        <br>
    </div>
</div>
@endsection
