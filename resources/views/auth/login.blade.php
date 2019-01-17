@extends('layouts.template')

@section('pagetitle','Logar')
@section('title','Logar')

@section('halfContent')

<form method="POST" action="{{ route('login') }}" class="container">
    @csrf

    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label text-md-left">E-Mail Address</label>

        <div class="col-md-8">
            <input id="email" type="email" class="std-style form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
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
        <div class="col-md-8 offset-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    Remember Me
                </label>
            </div>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div>
            <button type="submit" class="btn-custom btn-c-sm btn-c-primary">
                Logar
            </button>

            <a class="c-link col-md-4" href="{{ route('password.request') }}">
                esqueci minha senha
            </a>
        </div>
    </div>
</form>
    
@endsection
