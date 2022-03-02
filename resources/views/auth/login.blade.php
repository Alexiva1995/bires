@extends('layouts/homeLayoutMaster')

@section('title', 'Ingresar')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">
@endsection

@section('content')

<section class="navigation">
    <div class="nav-container">
        <div class="brand">
            <a href="#!">
                <img src="{{ asset('images/auth/logo.png') }}" alt=""> <span>Spora</span>
            </a>
        </div>
        <nav>
            <div class="nav-mobile"><a id="navbar-toggle" href="#!"><span></span></a></div>
            <ul class="nav-list">
                <li>
                    <a href="#!" style="font-weight: bold;">Inicio</a>
                </li>
                <li>
                    <a href="#!" style="font-weight: bold;">PMI</a>
                </li>

                <li>
                    <a href="#!" style="font-weight: bold;">Testimonios</a>
                </li>

                <li>
                    <a href="#!" style="font-weight: bold;">Novedades</a>
                </li>

                <li>
                    <a class="btn" href="{{ route('register') }}" style="margin-top: 10px;background-color:#2BE6EE;font-weight: bold;">Registrate</a>
                </li>
            </ul>
        </nav>
    </div>
</section>

<div class="container">
    <img src="{{ asset('images/auth/XMLID_123_.png') }}" height="700" alt="" style="position: absolute;z-index:-1;">
    <div class="center">
        <div class="card-auth">
            <div class="card-body">
                <a href="#" class="card-text">
                    <img src="{{ asset('images/auth/logo.png') }}" class="logo" width="50px" alt="">
                </a>

                <h5 class="card-text mb-2 mt-2" style="height: 22px;width: 179px;font-weight:bold;">Bienvenido de nuevo</h5>
                <h1 class="card-title mb-1 font-weight-bold" style="font-size:50px; height: 84px;width: 376px;left: 0px;top: 126.150146484375px;border-radius: nullpx;">Iniciar sesión</h1>

                <div class="row">
                    <form class="auth-login-form col-6" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-1">
                            <label for="login-email" class="form-label">Correo electronico</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="login-email" name="email" placeholder="tucorreo@gmail.com" value="{{ old('email') }}" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <label class="form-label" for="login-password">Contraseña</label>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password" class="form-control form-control-merge" id="login-password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" />
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-secondary w-100" tabindex="4">Iniciar sesión</button>

                        <div class="row mt-2">

                            <div class="d-flex justify-content-around">
                                <div class="col-6">
                                    <a href="#" class="btn btn-f btn-lg btn-block py-1 px-2" style="height: 46px;width: 229,5px;left: 0px;top: 0px;border-radius: 4px; font-size: 0.9rem">
                                        <i class="fa-brands fa-facebook" style="font-size: 15px;"></i>&nbsp;
                                        Continuar vía Facebook
                                    </a>
                                </div>

                                <div class="col-5">
                                    <a href="#" class="btn btn-danger btn-lg btn-block py-1 px-1" style="font-size: 0.9rem; height: 46px;width: 197px;top: 0px;border-radius: 4px;">
                                        <i class="fa-brands fa-google" style="font-size: 15px;"></i>&nbsp;
                                        Continuar vía Google
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-around">
                            <p class="text-center mt-2" style="font-size: 0.8rem; font-weight:mixed;font-size: 13px; line-height: 22px;line-height: 113%; vertical-align: top;">
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}">
                                    <span>¿No tienes una cuenta?</span>
                                    <span style="font-weight:Bold;font-size: 13px; line-height: 22px;line-height: 113%; vertical-align: top;">Registrate</span>
                                </a>
                                @endif
                            </p>

                            <h2 class="text-center mt-1">|</h1>

                                <p class="text-center mt-2" style="font-weight:Bold;font-size: 13px; line-height: 22px;line-height: 113%; vertical-align: top;">
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
                            <h1 style="height: 34px;width: 514px; top: 0px; font-weight:800;"> Tu mejor oportunidad esta aqui!
                            </h1>
                            <h4 style="height: 28px;width: 482px; padding-left: 40px;top: 46px;font-weight:800;"> Gana dinero y aprende tranding con nosotros!.
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<style>

    nav {
        float: right;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    nav ul li {
        float: left;
        position: relative;
    }

    nav ul li a,
    nav ul li a:visited {
        display: block;
        padding: 0 25px;
        line-height: 55px;
        color: #fff;
        background: #262626;
        text-decoration: none;
    }

    nav ul li a {
        background: transparent;
        color: #FFF;
    }

    nav ul li ul li {
        min-width: 190px;
    }
</style>

@endsection