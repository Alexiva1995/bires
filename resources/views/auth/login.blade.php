@extends('layouts/homeLayoutMaster')

@section('title', 'Ingresar')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">

<style>
    .btn {
        font-weight: 0 !important;
    }

</style>
@endsection

@section('content')

<div class="auth-wrapper auth-v1">
    <div class="auth-inner">

        <div class="card-auth p-2">
            <div class="card-body">
                <a href="#" class="card-text">
                    <img src="{{ asset('images/zoe/logo/icon.png') }}" class="logo" width="40px" alt="">
                </a>

                <h5 class="card-text mb-2 mt-2">Bienvenido de nuevo</h5>
                <h1 class="card-title mb-1 font-weight-bold" style="font-size: 50px;">Iniciar sesión</h1>

                <div class="row">
                    <div class="col-12 col-md-6">
                        <form class="auth-login-form" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-1">
                                <label for="login-email" class="form-label">Correo electronico</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    id="login-email" placeholder="tucorreo@gmail.com" name="email"
                                    aria-describedby="login-email" tabindex="1" autofocus value="{{ old('email') }}" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-1">
                                <label class="form-label" for="login-password">Contraseña</label>
                                <div class="input-group input-group-merge form-password-toggle">
                                    <input type="password" class="form-control form-control-merge" id="login-password"
                                        name="password" tabindex="2"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="login-password" />
                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-secondary w-100" tabindex="4">Iniciar
                                sesión</button>


                            <div class="row mt-2">

                                <div class="col-6">
                                    <a href="#" class="btn btn-f btn-lg btn-block w-100" style="font-size: 0.7rem">
                                        <img src="{{ asset('images/zoe/svg/f.svg') }}" width="5%" alt="">&nbsp;
                                        Continuar vía Facebook
                                    </a>
                                </div>

                                <div class="col-6">
                                    <a href="#" class="btn btn-g btn-lg btn-block w-100" style="font-size: 0.7rem">
                                        <img src="{{ asset('images/zoe/svg/g.svg') }}" width="10%" alt="">&nbsp;
                                        Continuar vía Google
                                    </a>
                                </div>

                            </div>

                            <div class="d-flex justify-content-around">
                                <p class="text-center mt-2" style="font-size: 0.8rem; font-weight: bold;">
                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}">
                                        <span>¿No tienes una cuenta?</span>
                                        <span>Registrate</span>
                                    </a>
                                    @endif
                                </p>

                                <h2 class="text-center mt-1">|</h1>

                                    <p class="text-center mt-2" style="font-size: 0.8rem; font-weight: bold;">
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            <span>¿Olvidaste tu contraseña?</span>
                                        </a>
                                        @endif
                                    </p>
                            </div>

                        </form>
                    </div>

                    <div class="col-md-6 d-sm-none d-md-flex">
                        <div class="text-center mt-3">
                            <h1>Tu mejor oportunidad esta aqui!</h1>
                            <h4>Gana dinero y aprende tranding con nosotros!.</h4>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

@endsection
