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
                       
                            <tr><td>
                                <a href="{{ route('edit-internship', (array) $data ) }}"><button>EDIT</button></a>
                                <a href="{{ route('delete-internship', (array) $data ) }}"><button>DELETE</button></a>
                                
                                        <form method="POST" action="{{route('upload-internships')}}" enctype="multipart/form-data">
                                        @csrf
                                    <input type="file" name="image" id="image">
                                    <input type="text" name="Aid" id="Aid" value="{{$data->interid}}" style="display:none">
                                    <button type="submit">Submit File</button>
                                        </form>
                                   
                            </td></tr>                
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
            <a href="{{ route('add-internship') }}"><button>Add Internship</button></a>
        </div>
    </div>
</div>
@endsection
