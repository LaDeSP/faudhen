@extends('layouts.template')

@section('pagetitle','Cadastrar')
@section('title','Cadastrar')

@section('halfContent')
    
<form method="POST" action="{{ route('register') }}" class="container" >
    @csrf

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-left">Name</label>
        <div class="col-md-8">
            <input id="name" type="text" class="std-style form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus >

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class=" col-md-4 col-form-label text-md-left">E-Mail Address</label>

        <div class="col-md-8">
            <input id="email" type="email" class="std-style form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="siape" class="col-md-4 col-form-label text-md-left">Siape</label>

        <div class="col-md-8">
            <input id="siape" type="integer" class="std-style form-control" name="siape" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-left">Password</label>

        <div class="col-md-8">
            <input id="password" type="password" class="std-style form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-left">Confirm Password</label>

        <div class="col-md-8">
            <input id="password-confirm" type="password" class="std-style  form-control" name="password_confirmation" required>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn-custom btn-c-sm btn-c-primary">
                {{ __('Registrar') }}
            </button>
        </div>
    </div>
</form>
@endsection
