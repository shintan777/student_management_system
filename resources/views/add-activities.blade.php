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
                <form method="POST" action="{{ route('insert-activities') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Activity Name') }}</label>

                            <div class="col-md-6">
                                <input id="aname" type="text" class="form-control @error('name') is-invalid @enderror" name="aname" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control @error('email') is-invalid @enderror" name="description" value="{{ old('description') }}" required >
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
                                <input id="sdate" type="date" class="form-control @error('password') is-invalid @enderror" name="sdate" required>

                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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
