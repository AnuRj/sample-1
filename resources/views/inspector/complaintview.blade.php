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
                        <th scope="col">Details</th>
                        <th scope="col">Complaint Submitted By</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Address</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Feedback</th>
                    </tr>
                </thead>
                <?php
                $i=1;
                ?>
                <tbody>
                    <tr>
                    <td >{{$i++}}</td>
                    <td >{{$complaint->date}}</td>
                    <td >{{$complaint->subject}}</td>
                    <td >{{$complaint->c_details}}</td>
                    <td >{{$complaint->name}}</td>
                    <td >{{$complaint->contact_no}}</td>
                    <td >{{$complaint->address}}</td>
                    <td >{{$complaint->email}}</td>
                    <td><a class="btn btn-primary btn-sm" href="{{route('inspector.edit',$complaint->i_id)}}" role="button" name="add">Add</a></td>
                    </tr>
                </tbody>
            </table>

        </div>
        <br><br>
</div>
@endsection
