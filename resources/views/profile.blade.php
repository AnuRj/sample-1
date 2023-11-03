@extends('layouts.app')

@section('content')

    <div class="container w-50">
        <form action="{{route('profile-store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                        
                @if(session('message'))
                    <div class="alert alert-success" role="alert">
                        {{session('message')}}
                    </div>
                @endif

                <div>
                    <div class="mb-4 d-flex justify-content-center " >

                        @if(($users->image)==NULL)
                            <img src="{{asset('/images/default.jpg')}}"  alt="example placeholder" 
                            style="width: 200px;" class="rounded-circle" />
                        @else 
                            <img src="{{asset('images/'.$users->image)}}"
                            alt="example placeholder" style="width: 200px;" class="rounded-circle "/>
                        @endif

                    </div>
            
                    <div class="d-flex justify-content-center">
                        <div class="btn btn-primary btn-rounded">
                            <label class="form-label text-white m-1" for="customFile2">Edit</label>
                            <input type="file" class="form-control d-none" id="customFile2" name="image" />
                        </div>
                    </div>
                </div>
                        <br>             
                        @if($errors->any())

                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif

                        

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="name" value="{{$users->name}}">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Email</label>
                    <input type="email" class="form-control" id="formGroupExampleInput" placeholder="" name="email" value="{{$users->email}}">
                </div>
        

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Contact No</label>
                    <input type="tel" class="form-control" id="formGroupExampleInput" placeholder="" name="contactno" value="{{$users->contact_no}}" >
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Address</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="address"  value="{{$users->address}}" >
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">details</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="details" value="{{$users->details}}" >
                </div>

                <br>
                <input class="btn btn-primary" type="submit" value="Save">


        </form>
    </div>
@endsection