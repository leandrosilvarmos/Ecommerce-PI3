@extends('layouts.app')

@section('content')
<section class="container">
    <div class="login">
        <h1>Cadastre-se</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input placeholder="Nome" id="name" type="text" class="@error('name') is-invalid @enderror"
                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror



            <input placeholder="Email" id="email" type="email" class="@error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


            <input placeholder="Cpf" id="cpf" type="text"  name="cpf" value="{{ old('cpf') }}">

            <input placeholder="Celular" id="phone" type="text"  name="phone"
                value="{{ old('phone') }}">

            <input placeholder="Endereço" id="adress" type="text"  name="adress"
                value="{{ old('adress') }}">

            <input placeholder="Senha" id="password" type="password"
                class="@error('password') is-invalid @enderror" name="password" required
                autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input placeholder="Confirmar Senha" id="password-confirm" type="password" class="form-control"
                name="password_confirmation" required autocomplete="new-password">

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
