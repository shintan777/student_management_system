@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Results</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table>
                    @foreach($res as $key => $data)
                        <tr >    
                        <tr><th>sem 1</th><td>{{$data}}</td></tr>
                        <tr><th>sem 2</th><td>{{$data->sem2}}</td></tr>
                        <tr><th>sem 3</th><td>{{$data->sem3}}</td></tr>
                        <tr><th>sem 4</th><td>{{$data->sem4}}</td></tr>
                        <tr><th>sem 5</th><td>{{$data->sem5}}</td></tr>
                        <tr><th>sem 6</th><td>{{$data->sem6}}</td></tr>
                        <tr><th>sem 7</th><td>{{$data->sem7}}</td></tr>
                        <tr><th>sem 8</th><td>{{$data->sem8}}</td></tr>
                        </tr>
                    @endforeach
                    </table>
                </div>
            <a href="{{ route('add-results') }}"><button>Add Result</button></a>
            </div>
        </div>
    </div>
</div>
@endsection
