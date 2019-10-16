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
                        <tr><th>Activity Id</th><td>{{$data->Aid}}</td></tr>
                        <tr><th>Type</th><td>{{$data->atype}}</td></tr>
                        <tr><th>Description</th><td>{{$data->description}}</td></tr>
                        <tr><th>Date</th><td>{{$data->sdate}}</td></tr>
                        <tr>
                            <th><button><a href="{{ route('add-activities') }}">Edit Activity</a></button></th>
                            <th><button><a href="{{ route('add-activities') }}">Delete Activity</a></button></th>
                        </tr>
                        
                        </tr>

                    @endforeach
                    </table>
                </div>
            <button><a href="{{ route('add-activities') }}">Add Activity</a></button>
            </div>
        </div>
    </div>
</div>
@endsection
