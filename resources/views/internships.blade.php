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
                        <tr><th>internship ID</th><td>{{$data->interid}}</td></tr>    
                        <tr><th>Company</th><td>{{$data->company}}</td></tr>
                        <tr><th>Project Name</th><td>{{$data->PNAME}}</td></tr>
                        <tr><th>Domain</th><td>{{$data->DOMAIN}}</td></tr>
                        <tr><th>Mentor</th><td>{{$data->MENTOR}}</td></tr>
                        <tr><th>Stipend</th><td>{{$data->STIPEND}}</td></tr>
                        <tr><th>Start Date</th><td>{{$data->SDATE}}</td></tr>
                        <tr><th>End Date</th><td>{{$data->EDATE}}</td></tr>
                        <tr><th>View Certificate</th><td><a href = "{{$data->CERTI}}" ></td></tr>                 
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
            <button><a href="{{ route('add-internship') }}">Add Internship</a></button>
        </div>
    </div>
</div>
@endsection
