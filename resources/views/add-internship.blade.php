@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Internship</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                </div>
                <form method="POST" action="{{ route('add-internship') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Project Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="mentor" class="col-md-4 col-form-label text-md-right">{{ __('Mentor') }}</label>

                        <div class="col-md-6">
                            <input id="mentor" type="text" class="form-control @error('mentor') is-invalid @enderror" name="mentor" value="{{ old('mentor') }}" required autocomplete="mentor">

                            @error('mentor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="domain" class="col-md-4 col-form-label text-md-right">{{ __('Domain') }}</label>

                        <div class="col-md-6">
                            <input id="domain" type="text" class="form-control @error('domain') is-invalid @enderror" name="domain" required autocomplete="domain">

                            @error('domain')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="stipend" class="col-md-4 col-form-label text-md-right">{{ __('stipend') }}</label>

                        <div class="col-md-6">
                            <input id="stipend" type="text" class="form-control" name="stipend" required autocomplete="stipend">
                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <label for="sdate" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>

                        <div class="col-md-6">
                            <input id="sdate" type="date" class="form-control @error('sdate') is-invalid @enderror" name="sdate" required autocomplete="sdate">

                            @error('sdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="edate" class="col-md-4 col-form-label text-md-right">{{ __('End Date') }}</label>

                        <div class="col-md-6">
                            <input id="edate" type="date" class="form-control @error('edate') is-invalid @enderror" name="edate" required autocomplete="edate">

                            @error('edate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cname" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                        <div class="col-md-6">
                            <input id="cname" type="text" class="form-control @error('cname') is-invalid @enderror" name="cname" required autocomplete="cname">

                            @error('cname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Enter
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
