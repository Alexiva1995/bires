@extends('layouts/homeLayoutMaster')

@section('title', 'Restablecer la contraseña')

@section('page-style')
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="auth-v1 px-2">
    <div class="auth-inner d-flex justify-content-center">
        <div class="card-auth mt-md-5 w-90 p-1">
            <div class="card-body">
                <a href="#" class="card-text">
                    <img src="{{ asset('images/zoe/logo/icon.png') }}" class="logo" width="40px" alt="">
                </a>

                <h4 class="card-title mb-1 mt-2">Has olvidado tu contraseña? 🔒</h4>
                <p class="card-text mb-2">Ingrese su correo electrónico y le enviaremos instrucciones para restablecer
                    su contraseña</p>

                @if (session('status'))
                <div class="alert" role="alert">
                    <p class="text-secondary">{{ session('status') }}</p>
                </div>
                @endif

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="auth-forgot-password-form mt-2" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="mb-1">
                        <label for="forgot-password-email" class="form-label">Correo electronico</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                            id="forgot-password-email" name="email" value="{{ old('email') }}"
                            placeholder="john@example.com" aria-describedby="forgot-password-email" tabindex="1"
                            autofocus onkeyup="resetF()"/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-secondary w-100" tabindex="2">Enviar enlace de
                        reinicio</button>
                </form>

                <p class="text-center mt-2 ">
                    @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="text-white font-weight-bold"> <i
                            data-feather="chevron-left"></i>Iniciar
                        sesión</a>
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>


@endsection

