@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Activity</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                </div>
                <h1>View all Students</h1>
                <form method="POST" action="{{ route('select-all') }}">
                    @csrf
                <button type="submit" class="btn btn-primary">
                                    {{ __('View') }}
                    </button>

                </form>
                <br>
                <h1>View students With internships : </h1>
                <form method="POST" action="{{ route('select-inter') }}">
                @csrf        
                    <label>Filter Company :</label> <input type="text" name='xcname'>
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                    </button>
                </form>

                <form method="POST" action="{{ route('select-domain') }}">
                @csrf        
                    <label>Filter Domain :</label> <input type="text" name='domain'>
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                    </button>
                </form>


            </div>
        </div>
    </div>
</div>
@endsection
