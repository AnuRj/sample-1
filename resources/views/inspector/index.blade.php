@extends('layouts.app')

@section('content')
<div class="container">

    @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
    @endif

    <div cass="row">
            <table class="table m-4">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">date</th>
                        <th scope="col">Complaint</th>
                        <th scope="col">Complaint Submitted By</th>
                        <th scope="col">Feedback</th>
                        <th scope="col">Complaint</th>
                        <th scope="col">&nbsp;Action&nbsp;</th>
                    </tr>
                </thead>
                <?php
                  $i=1;
                ?>
                @foreach ($inspectors as $inspector)
                    <tbody>
                        <tr>
                            <td >{{$i++}}</td>
                            <td >{{$inspector->date}}</td>
                            <td >{{$inspector->subject}}</td>
                            <td >{{$inspector->name}}</td>
                            <td >{{$inspector->feedback}}</td>
                            <td><a class="btn btn-primary btn-sm" href="{{route('complaint-view',$inspector->i_id)}}" role="button" name="add">view </a></td>                        
                            <td><a class="btn btn-primary btn-sm" href="{{route('inspector.edit',$inspector->i_id)}}" role="button" name="add">Add Feedback</a></td>
                        </tr>
                    </tbody>
                @endforeach
            </table>

        </div>
        <br>
        <br>
    </div>
</div>
@endsection
