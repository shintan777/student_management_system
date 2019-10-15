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
                        <th>{{$data->Fname}}</th>
                        <th>{{$data->Lname}}</th>
                        <th>{{$data->LibCnumber}}</th>
                        <th>{{$data->GENDER}}</th>
                        <th>{{$data->email}}</th>
                        <th>{{$data->dept}}</th>                 
                        <th>{{$data->phno}}</th>                 
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
