@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Personal Information</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table>
                    @foreach($res as $key => $data)
                        <tr>    
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

                </div>
                <div class="card">
                    <div class="card-header">Results</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table>
                        @foreach($result as $key => $data)
                        <tr >    
                            <tr><th>sem 1  </th><td>{{$data->sem1}}</td></tr>
                            <tr><th>sem 2  </th><td>{{$data->sem2}}</td></tr>
                            <tr><th>sem 3  </th><td>{{$data->sem3}}</td></tr>
                            <tr><th>sem 4  </th><td>{{$data->sem4}}</td></tr>
                            <tr><th>sem 5  </th><td>{{$data->sem5}}</td></tr>
                            <tr><th>sem 6  </th><td>{{$data->sem6}}</td></tr>
                            <tr><th>sem 7  </th><td>{{$data->sem7}}</td></tr>
                            <tr><th>sem 8  </th><td>{{$data->sem8}}</td></tr>
                            <tr><th>Download Marksheets' Zip</th><td><button> Download </button> </td></tr>
                        </tr>
                            
                        @endforeach
                        </table>
    
                    </div>
    


            </div>
                <div class="card">
                    <div class="card-header">Internships</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table>
                        @foreach($internship as $key => $data)
                            <tr>    
                            <tr><th>Project Name</th><td>{{$data->PNAME}}</td></tr>
                            <tr><th>Company</th><td>{{$data->company}}</td></tr>
                            <tr><th>Domain</th><td>{{$data->DOMAIN}}</td></tr>
                        <tr><th>Mentor</th><td>{{$data->MENTOR}}</td></tr>
                        <tr><th>Stipend</th><td>{{$data->STIPEND}}</td></tr>
                        <tr><th>Start Date</th><td>{{$data->SDATE}}</td></tr>
                        <tr><th>End Date</th><td>{{$data->EDATE}}</td></tr>
                        <tr><th>Download Certificate</th><td><button> Download </button> </td></tr>
                        <tr><td><hr></td></tr>

                            </tr>
                            
                        @endforeach
                        </table>
    
                    </div>
    


            </div>
            <div class="card">
                <div class="card-header">Other Activities</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h5>Co-Curricular</h5>
                    <table>
                    @foreach($cocurr as $key => $data)
                    <tr >    
                        
                        
                        <tr><th>Description</th><td>{{$data->description}}</td></tr>
                        <tr><th>Date</th><td>{{$data->sdate}}</td></tr>
                        <tr><th>Download Certificate </th><td><button> Download </button> </td></tr>
                        <tr><td><hr></td></tr>
                        <tr>
                        
                    @endforeach
                    </table>
                    <h5>Extra-Curricular</h5>
                    <table>
                        @foreach($extra as $key => $data)
                        <tr >    
                            
                            
                            <tr><th>Description</th><td>{{$data->description}}</td></tr>
                            <tr><th>Date</th><td>{{$data->sdate}}</td></tr>
                            <tr><th>Download Certificate </th><td><button> Download </button> </td></tr>
                            <tr><td><hr></td></tr>
                            <tr>
                            
                        @endforeach
                        </table>
                </div>

        </div>
            
        </div>
    </div>
</div>
@endsection
