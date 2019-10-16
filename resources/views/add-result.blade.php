@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Result</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                </div>
                <form method="POST" action="{{ route('insert-results') }}">
                        @csrf
                        <label>SEM 1</label>
                        <input type="text" name="sem1" id="sem1">
                        <label>SEM 2</label>
                        <input type="text" name="sem2" id="sem2">
                        <label>SEM 3</label>
                        <input type="text" name="sem3" id="sem3">
                        <label>SEM 4</label>
                        <input type="text" name="sem4" id="sem4">
                        <label>SEM 5</label>
                        <input type="text" name="sem5" id="sem5">
                        <label>SEM 6</label>
                        <input type="text" name="sem6" id="sem6">
                        <label>SEM 7</label>
                        <input type="text" name="sem7" id="sem7">
                        <label>SEM 8</label>
                        <input type="text" name="sem8" id="sem8">
                        <br><br><br><br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                              <senter>  <button type="submit" class="btn btn-primary">
                                   SUBMIT
                                </button></center>
                                
                            </div>
                        </div>



                         


                        
                    </form>

            </div>
        </div>
    </div>
</div>
@endsection
