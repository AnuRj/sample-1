@extends('layouts.app')

@section('content')
<div class="container">
    <div cass="row">
            <table class="table m-4">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">date</th>
                        <th scope="col">Complaint</th>
                        <th scope="col">Details</th>
                        <th scope="col">Complaint Submitted By</th>
                        <th scope="col">Feedback</th>
                        <th scope="col">Feedback Send By</th>
                    </tr>
                </thead>
                <?php
                $i=1;
                ?>
                <tbody>
                    <tr>
                    <td >{{$i++}}</td>
                    <td >{{$feedback->f_date}}</td>
                    <td >{{$feedback->subject}}</td>
                    <td >{{$feedback->c_details}}</td>
                    <td >{{$feedback->name}}</td>
                    <td >{{$feedback->feedback}}</td>
                    <td >{{$feedback->inspector}}</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <br><br>
</div>
@endsection
