@extends('layouts.template')


@section('pagetitle','enviar link')
@section('title','enviar link')

@section('halfContent')

<form method="POST" action="{{ route('password.email') }}" class="container">
    @csrf

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="std-style form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn-custom btn-c-sm btn-c-primary">
                Enviar
            </button>
        </div>
    </div>
</form>
               
@endsection
