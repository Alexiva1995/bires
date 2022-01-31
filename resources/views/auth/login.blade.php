@extends('layouts/homeLayoutMaster')

@section('title', 'Ingresar')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="auth-wrapper auth-v1">
    <div class="auth-inner">

        <div class="d-flex h-100 text-white bg-zoe">

            <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

                <header class="mb-5">

                    <nav class="navbar navbar-expand-md navbar-dark">
                        <a href="{{ route('landing') }}" class="navbar-brand"><img
                                src="{{ asset('images/zoe/logo/logo.svg') }}" alt="logo" width="70%"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse flex-row-reverse" id="navbarCollapse">
                            <a href="{{ route('login') }}"
                                class="btn btn-sm btn-secondary fw-bold text-white">Ingresar</a>

                            <ul class="nav navbar-nav pr-5">
                                <li class="nav-item dropdown dropdown-language">
                                    <a class="nav-link dropdown-toggle" id="dropdown-flag" href="#"
                                        data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="flag-icon flag-icon-mx"></i>
                                        <span class="selected-language">
                                            @if(session()->has('locale'))
                                            {{session()->get('locale')}}
                                            @else
                                            Es
                                            @endif
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag">
                                        <a href="#googtrans(es|es)" class="dropdown-item lang-select" data-language="es"
                                            alt="ESPAÑOL">
                                            <i class="flag-icon flag-icon-mx"></i> ESPAÑOL
                                        </a>
                                        <a href="#googtrans(es|en)" class="dropdown-item lang-select" data-language="en"
                                            alt="INGLES">
                                            <i class="flag-icon flag-icon-us"></i> INGLES
                                        </a>
                                        <a href="#googtrans(es|fr)" class="dropdown-item lang-select" data-language="fr"
                                            alt="FRANCÉS">
                                            <i class="flag-icon flag-icon-fr"></i> FRANCÉS
                                        </a>
                                        <a href="#googtrans(es|de)" class="dropdown-item lang-select" data-language="de"
                                            alt="ALEMÁN">
                                            <i class="flag-icon flag-icon-de"></i> ALEMÁN
                                        </a>
                                        <a href="#googtrans(es|pt)" class="dropdown-item lang-select" data-language="pt"
                                            alt="PORTUGUÉS">
                                            <i class="flag-icon flag-icon-pt"></i> PORTUGUÉS
                                        </a>
                                    </div>
                                </li>
                            </ul>


                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active mr-md-5">
                                    <a class="nav-link text-white" style="font-weight: bold;" href="#">Inicio</a>
                                </li>
                                <li class="nav-item mr-md-5">
                                    <a class="nav-link text-white" style="font-weight: bold;" href="#">PMI</a>
                                </li>
                                <li class="nav-item mr-md-5">
                                    <a class="nav-link text-white" style="font-weight: bold;" href="#">Oficinas</a>
                                </li>
                                <li class="nav-item mr-md-5">
                                    <a class="nav-link text-white" style="font-weight: bold;" href="#">Testimonios</a>
                                </li>
                                <li class="nav-item mr-md-5">
                                    <a class="nav-link text-white" style="font-weight: bold;" href="#">Novedades</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </header>



                <div class="card-auth p-2">
                    <div class="card-body">
                        <a href="#" class="card-text">
                            <img src="{{ asset('images/zoe/logo/icon.png') }}" class="logo" width="40px" alt="">
                        </a>

                        <h5 class="card-text mb-2 mt-2">Bienvenido de nuevo</h5>
                        <h1 class="card-title mb-1 font-weight-bold" style="font-size: 50px;">Iniciar sesión</h1>

                        <div class="row">
                            <form class="auth-login-form col-6" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-1">
                                    <label for="login-email" class="form-label">Correo electronico</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        id="login-email" name="email" placeholder="tucorreo@gmail.com"
                                        aria-describedby="login-email" tabindex="1" autofocus
                                        value="{{ old('email') }}" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-1">
                                    <label class="form-label" for="login-password">Contraseña</label>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input type="password" class="form-control form-control-merge"
                                            id="login-password" name="password" tabindex="2"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="login-password" />
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-secondary w-100" tabindex="4">Iniciar
                                    sesión</button>


                                <div class="row mt-2">

                                    <div class="d-flex justify-content-around pl-2">
                                        <div class="col-7">
                                            <a href="#" class="btn btn-f btn-lg btn-block py-1 px-3"
                                                style="font-size: 0.8rem">
                                                <img src="{{ asset('images/zoe/svg/f.svg') }}" width="5%" alt="">&nbsp;
                                                Continuar vía Facebook
                                            </a>
                                        </div>

                                        <div class="col-5">
                                            <a href="#" class="btn btn-g btn-lg btn-block py-1 px-2"
                                                style="font-size: 0.8rem">
                                                <img src="{{ asset('images/zoe/svg/g.svg') }}" width="10%" alt="">&nbsp;
                                                Continuar vía Google
                                            </a>
                                        </div>
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

                            <div class="col-6">
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
    </div>
</div>

@endsection
