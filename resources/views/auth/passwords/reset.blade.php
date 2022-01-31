@extends('layouts.homeLayoutMaster')

@section('title', 'Reset Password')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="auth-wrapper auth-v1 px-2">
    <div class="auth-inner py-2">
        <!-- Reset Password v1 -->
        <div class="card-auth mb-0">
            <div class="card-body">
                <a href="#" class="card-text">
                    <img src="{{ asset('images/zoe/logo/icon.png') }}" class="logo" width="40px" alt="">
                </a>

                <h4 class="card-title mb-1 mt-2">Cambia tu contraseña 🔒</h4>
                <p class="card-text mb-2">Ingrese su nueva contraseña</p>

                <form class="auth-reset-password-form mt-2" method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-1 hidden">
                        <label for="email" class="form-label">Correo electronico</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" placeholder="tucorreo@gmail.com" aria-describedby="email" tabindex="1"
                            autofocus value="{{ $email ?? old('email') }}" />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-1">
                        <div class="d-flex justify-content-between">
                            <label for="reset-password-new">Nueva contraseña</label>
                        </div>
                        <div
                            class="input-group input-group-merge form-password-toggle @error('password') is-invalid @enderror">
                            <input type="password"
                                class="form-control form-control-merge @error('password') is-invalid @enderror"
                                id="reset-password-new" name="password" placeholder="*************"
                                aria-describedby="reset-password-new" tabindex="2" autofocus />
                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <div class="d-flex justify-content-between">
                            <label for="reset-password-confirm">Confirmar contraseña</label>
                        </div>
                        <div class="input-group input-group-merge form-password-toggle">
                            <input type="password" class="form-control form-control-merge" id="reset-password-confirm"
                                name="password_confirmation" autocomplete="new-password" placeholder="*************"
                                aria-describedby="reset-password-confirm" tabindex="3" />
                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary w-100" tabindex="4">Establecer nueva
                        contraseña</button>
                </form>

                <p class="text-center mt-2">
                    @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="text-white font-weight-bold">
                        <i data-feather="chevron-left"></i>iniciar sesión
                    </a>
                    @endif
                </p>
            </div>
        </div>
        <!-- /Reset Password v1 -->
    </div>
</div>


@php
    
@endphp

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function () {

    a = $('#email').val(window.localStorage.getItem('email_token'));

    });
</script>

@endsection
