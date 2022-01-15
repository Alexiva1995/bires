@extends('layouts/homeLayoutMaster')

@section('title', 'Registrar')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">
@endsection

@section('content')

@php
$country = DB::select('SELECT * FROM `countries` WHERE 1');
@endphp

<div class="auth-wrapper auth-v1 px-2">
    <div class="auth-inner py-2">
        <!-- Register v1 -->
        <div class="card mb-0">
            <div class="card-body">

                <a href="#" class="brand-logo">
                    <h2 class="brand-text text-primary ms-1">Vuexy</h2>
                </a>

                <h4 class="card-title mb-1">Adventure starts here 🚀</h4>
                <p class="card-text mb-2">Make your app management easy and fun!</p>

                <form class="auth-register-form mt-2" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row">

                        <div class="col-6 mb-1">
                            <label for="username" class="form-label">Usuario</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                id="username" name="username" placeholder="john123" autofocus required
                                value="{{ old('username') }}" />
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-3 mb-1">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="johndoe" required value="{{ old('name') }}" />
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-3 mb-1">
                            <label for="lastname" class="form-label">Apellido</label>
                            <input type="text" class="form-control @error('lastname') is-invalid @enderror"
                                id="lastname" name="lastname" placeholder="smit" required
                                value="{{ old('lastname') }}" />
                            @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-6 mb-1">
                            <label for="phone" class="form-label">Telefono</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone"
                                name="phone" placeholder="+58 412 000 0000" required value="{{ old('phone') }}" />
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-6 mb-1">
                            <label for="country" class="form-label">Pais</label>
                            <select class="select2 form-select" name="country" data-toggle="select" class="form-control"
                                id="country" required>
                                <option disabled selected value="">Selecciona un pais</option>
                                @foreach ($country as $item)
                                <option value="{{ $country[$loop->index]->id }}">{{ $country[$loop->index]->name }}</option>
                                @endforeach
                            </select>
                            @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-6 mb-1">
                            <label for="email" class="form-label">Correo</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="john@example.com" value="{{ old('email') }}" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-6 mb-1">
                            <label for="email_confirm" class="form-label">Repetir Correo</label>
                            <input type="text" class="form-control @error('email_confirm') is-invalid @enderror"
                                id="email_confirm" name="email_confirm" value="{{ old('email_confirm') }}" />
                            @error('email_confirm')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-6 mb-1">
                            <label for="password" class="form-label">Contraseña</label>
                            <div class="input-group input-group-merge form-password-toggle @error('password') is-invalid @enderror">
                                <input type="password"
                                    class="form-control form-control-merge @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="**********" />
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-6 mb-1">
                            <label for="password-confirm" class="form-label">Repetir contraseña</label>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password" class="form-control form-control-merge" id="password-confirm"
                                    name="password_confirmation" />
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                        </div>

                        <div class="col-12 mb-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="privacy-policy" name="terms"/>
                                <label class="form-check-label" for="privacy-policy">
                                  Acepto la política de <a href="#" class="text-secondary">privacidad y los términos</a>
                                </label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-secondary w-100">Sign up</button>
                        </div>

                    </div>
                </form>

                <p class="text-center mt-2">
                    <span>Already have an account?</span>
                    @if (Route::has('login'))
                    <a href="{{ route('login') }}">
                        <span>Sign in instead</span>
                    </a>
                    @endif
                </p>

                <div class="divider my-2">
                    <div class="divider-text">or</div>
                </div>

                <div class="auth-footer-btn d-flex justify-content-center">
                    <a href="#" class="btn btn-facebook">
                        <i data-feather="facebook"></i>
                    </a>
                    <a href="#" class="btn btn-twitter white">
                        <i data-feather="twitter"></i>
                    </a>
                    <a href="#" class="btn btn-google">
                        <i data-feather="mail"></i>
                    </a>
                    <a href="#" class="btn btn-github">
                        <i data-feather="github"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Register v1 -->
    </div>
</div>
@endsection
