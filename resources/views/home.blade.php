@extends('layouts.app')

@section('content')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table>
                    @foreach($res as $key => $data)
                        <tr >    
                        <tr><th>First Name</th><td>{{$data->Fname}}</td></tr>
                        <tr><th>Last Name</th><td>{{$data->Lname}}</td></tr>
                        <tr><th>Library Number</th><td>{{$data->LibCnumber}}</td></tr>
                        <tr><th>Gender</th><td>{{$data->GENDER}}</td></tr>
                        <tr><th>Email</th><td>{{$data->email}}</td></tr>
                        <tr><th>Department</th><td>{{$data->dept}}</td></tr>                 
                        <tr><th>Phone No</th><td>{{$data->phno}}</td></tr>   
                        <tr><th>
                        <hr>
                        </th>
                        </tr>
                        </tr>

                    @endforeach
                    </table>

                </div>


            </div>
            <div class="card">
                    <div class="card-header">Make an Application</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                      <button name="apply_lor" id='lor' onclick="{{route('home')}}" class="btn-primary">LOR</button> &nbsp;
                      <a href="{{route('profile',$data->LibCnumber)}}">  <button name="profile" class="btn-primary">Preview</button></a>
                    </div>
    
    
                </div>
        </div>
    </div>
</div>


@endsection
