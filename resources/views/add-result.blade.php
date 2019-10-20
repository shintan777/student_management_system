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
                <form method="POST" action="{{ route('insert-results') }}" enctype="multipart/form-data">
                        @csrf
                        <label>SEM 1</label>
                        <input type="text" name="sem1" id="sem1"><input type="file"  name="up_sem1"  autofocus><br>
                        <label>SEM 2</label>
                        <input type="text" name="sem2" id="sem2"><input type="file"  name="up_sem2"  autofocus><br>
                        <label>SEM 3</label>
                        <input type="text" name="sem3" id="sem3"><input type="file"  name="up_sem3"  autofocus><br>
                        <label>SEM 4</label>
                        <input type="text" name="sem4" id="sem4"><input type="file"  name="up_sem4"  autofocus><br>
                        <label>SEM 5</label>
                        <input type="text" name="sem5" id="sem5"><input type="file"  name="up_sem5"  autofocus><br>
                        <label>SEM 6</label>
                        <input type="text" name="sem6" id="sem6"><input type="file"  name="up_sem6"  autofocus><br>
                        <label>SEM 7</label>
                        <input type="text" name="sem7" id="sem7"><input type="file"  name="up_sem7"  autofocus><br>
                        <label>SEM 8</label>
                        <input type="text" name="sem8" id="sem8"><input type="file"  name="up_sem8"  autofocus><br>
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
