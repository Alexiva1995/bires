@extends('layouts/homeLayoutMaster')

@section('title', 'Ingresar')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="auth-wrapper auth-v1">
    <div class="auth-inner">
        <!-- Login v1 -->
        <div class="card-auth">
            <div class="card-body">
                <a href="#" class="brand-logo">
                    <h2 class="brand-text text-primary ms-1">Vuexy</h2>
                </a>

                <p class="card-text mb-2 text-white">Bienvenido de nuevo</p>
                <h4 class="card-title mb-1 text-white">Iniciar sesión</h4>

                <div class="row">
                    <form class="auth-login-form col-6" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-1">
                            <label for="login-email" class="form-label text-white">Correo electronico</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                id="login-email" name="email" placeholder="john@example.com"
                                aria-describedby="login-email" tabindex="1" autofocus value="{{ old('email') }}" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> 
                            @enderror
                        </div>

                        <div class="mb-1">
                            <div class="d-flex justify-content-between">
                                <label class="form-label text-white" for="login-password">Contraseña</label>
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    <small>Forgot Password?</small>
                                </a>
                                @endif
                            </div>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password" class="form-control form-control-merge" id="login-password"
                                    name="password" tabindex="2"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="login-password" />
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-is w-100" tabindex="4">Iniciar sesión</button>


                        <div class="row mt-2 d-flex justify-content-between">

                            <div class="col-6">
                                <a href="#" class="btn btn-f btn-lg btn-block" style="font-size: 0.8rem">
                                    <img src="{{ asset('images/zoe/svg/f.svg') }}" width="5%" alt="">&nbsp;
                                    Continuar vía Facebook
                                </a>
                            </div>

                            <div class="col-6">
                                <a href="#" class="btn btn-g btn-lg btn-block" style="font-size: 0.8rem">
                                    <img src="{{ asset('images/zoe/svg/g.svg') }}" width="10%" alt="">&nbsp;
                                    Continuar vía Google
                                </a>
                            </div>

                        </div>

                        <div class="d-flex justify-content-around">
                        <p class="text-center mt-2">
                            <span>¿No tienes una cuenta?</span>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                <span>Registrate</span>
                            </a>
                            @endif
                        </p>

                        <h2 class="text-center text-white mt-1">|</h1>

                        <p class="text-center mt-2">
                          @if (Route::has('register'))
                          <a href="{{ route('register') }}">
                              <span>¿Olvidaste tu contraseña?</span>
                          </a>
                          @endif
                      </p>
                    </div>

                    </form>

                    <div class="col-6">

                    </div>
                </div>


            </div>
        </div>
        <!-- /Login v1 -->
    </div>
</div>

@endsection
