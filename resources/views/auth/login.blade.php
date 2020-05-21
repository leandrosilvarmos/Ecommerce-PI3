@extends('layouts.app')

@section('content')


<section class="container">
    <div class="login">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Usúario">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password"
                required autocomplete="current-password" placeholder="Senha">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <input type="submit" name="" value=" {{ __('Login') }}" class="btn btn-primary">
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Esqueci minha senha?') }}
                    </a>
                    @endif
                </div>
            </div>


        </form>
    </div>
</section>
@endsection
