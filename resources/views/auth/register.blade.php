@extends('layouts/homeLayoutMaster')

@section('title', 'Registrar')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">
@endsection

@section('content')

@php
$country = DB::select('SELECT * FROM `countries` WHERE 1');

$referred = null;
@endphp

@if (request()->referred_id != null)
@php
$referred = DB::table('users')
->select('username')
->where('id', '=', request()->referred_id)
->first();

@endphp
@endif

<div class="auth-wrapper auth-v1 px-2">
    <div class="auth-inner py-2">
        <!-- Register v1 -->
        <div class="card-auth mb-0 p-2">
            <div class="card-body">
                <a href="#" class="card-text">
                    <img src="{{ asset('images/zoe/logo/icon.png') }}" class="logo" width="40px" alt="">
                </a>
                <h5 class="card-text mb-2 mt-2">Bienvenido a zor</h5>
                <h1 class="card-title mb-1" style="font-weight: bold; font-size: 35px;">Registrate</h1>
                @if (!empty($referred))
                <h4 class="mt-1 text-white">Referido por: <b class="text-secondary"> {{$referred->username}}</b></h4>
                @endif
                <form class="auth-register-form mt-2" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row">

                        {{-- id del referido --}}
                        @if (!empty($referred))
                        <input class="hidden" type="text" name="referred_id" value="{{request()->referred_id}}" />
                        @else
                        <input class="hidden" type="text" name="referred_id" value="1" />
                        @endif

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
                                <option value="{{ $country[$loop->index]->id }}">{{ $country[$loop->index]->name }}
                                </option>
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
                            <div
                                class="input-group input-group-merge form-password-toggle @error('password') is-invalid @enderror">
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
                                <input class="form-check-input" type="checkbox" id="privacy-policy" name="terms" required />
                                <label class="form-check-label" for="privacy-policy">
                                    Acepto la política de <a href="#" class="text-secondary">privacidad y los
                                        términos</a>
                                </label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-secondary w-100">Registrar</button>
                        </div>

                    </div>
                </form>

                <p class="text-center mt-2">
                    @if (Route::has('login'))
                    <a href="{{ route('login') }}">
                        <span>Ya tienes una cuenta?</span>
                        <span>Iniciar sesión</span>
                    </a>
                    @endif
                </p>

            </div>
        </div>
        <!-- /Register v1 -->
    </div>
</div>
@endsection
