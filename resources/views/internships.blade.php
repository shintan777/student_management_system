@extends('layouts.app')

@section('content')
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
                        </tr>
                    @endforeach
                    </table>

                    <input type="button" value="internships" href="{{route('internships',$data->LibCnumber)}}">
                    <input type="button" value="activities " href="{{route('activities',$data->LibCnumber)}}">
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
