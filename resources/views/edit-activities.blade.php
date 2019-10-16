@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Activity</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                </div>
                <form method="POST" action="{{ route('edit-activities') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control @error('email') is-invalid @enderror" name="description" value="{{ $res[0]->description }}" required >
                                </textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="atype" class="col-md-4 col-form-label text-md-right">{{ __('Activity Type') }}</label>

                            <div class="col-md-6">
                            <select id ="atype" name="atype">
                            <option value="EXTRA">Extra-Curricular</option>
                            <option value="CO-CURR">Co-Curricular</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input id="sdate" value="{{ old('description') }}" type="date" class="form-control @error('password') is-invalid @enderror" name="sdate" required>

                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </button>
                                
                            </div>
                        </div>
                        <br>
                    </form>

            </div>
        </div>
    </div>
</div>
@endsection
