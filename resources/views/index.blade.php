@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
@php $configData = Helper::applClasses(); @endphp

<html class="loading {{($configData['theme'] === 'light') ? '' : $configData['layoutTheme'] }}"
    lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{$configData['defaultLanguage']}}@endif"
    data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}" @if($configData['theme']==='dark'
    ) data-layout="dark-layout" @endif>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Zoe</title>
    <link rel="apple-touch-icon" href="{{asset('images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    @include('panels/styles')

</head>

<style>
    .bg-zoe {
        background: url('{{ url('images/zoe/home/home-1.png')}}') no-repeat !important;
        mix-blend-mode: normal !important;
    }
    button.btn-sm{
        background: #4BCFEE; 
    }
    a.nav-link, div.dropdown-menu, a.btn-sm{
        top: 13px;
        border-radius: 0px;
        text-indent: 30px; 
    }
    a.btn-outline-secondary{
     border:white;
    background-color: rgba(19, 19, 19, 0,51) !important;
    }
</style>

<body class="d-flex h-100 text-center text-white bg-zoe">
    <div class="cover-container d-flex w-100 h-100  mx-auto flex-column">
        <div class="cover-container d-flex w-100 h-100  mx-auto flex-column" >
            <header class="mb-auto p-1" style="background: rgba(5, 16, 58, 1);">
                <div>
                    <a href="{{ route('landing') }}" class="float-md-start mb-0" style="padding-left: 5%">
                        {{-- <img style="margin-left:15%;" src="http://127.0.0.1:8000/images/auth/logo-spora-v2.png" height="60" width="100%" alt="">--}}
                       <img src="{{ asset('images/zoe/header/S.png') }}" alt="logo">
                       <img src="{{ asset('images/zoe/header/p.png') }}" alt="logo">
                       <img src="{{ asset('images/zoe/header/O.png') }}" alt="logo">
                       <img src="{{ asset('images/zoe/header/R.png') }}" alt="logo">
                       <img src="{{ asset('images/zoe/header/A.png') }}" alt="logo">
                    </a> 
                    <nav class="nav nav-masthead justify-content-center float-md-end">
                        <a class="nav-link text-white active" aria-current="page" href="#">
                            <strong style="height: 29px;width: 121px;left: 320px;top: 0px;border-radius: nullpx;">Inicio</strong>
                        </a>
                        <a class="nav-link text-white" href="#"> 
                            <strong style="height: 29px;width: 121px;left: 320px;top: 0px;border-radius: nullpx;">PMI</strong>
                        </a>
                        <a class="nav-link text-white" href="#">
                            <strong style="height: 29px;width: 121px;left: 320px;top: 0px;border-radius: nullpx;">Oficinas</strong>
                        </a>
                        <a class="nav-link text-white" href="#">
                            <strong style="height: 29px;width: 121px;left: 320px;top: 0px;border-radius: nullpx;">Testimonios</strong>
                        </a>
                        <a class="nav-link text-white" href="#">
                            <strong style="height: 29px;width: 121px;left: 320px;top: 0px;border-radius: nullpx;">Novedades</strong>
                        </a>
                        <li class="nav-item dropdown dropdown-language">
                            <a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true">
                                <i class="flag-icon flag-icon-es rounded"></i>
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
                                    <i class="flag-icon flag-icon-es"></i> Es
                                </a>
                                <a href="#googtrans(es|en)" class="dropdown-item lang-select rounded" data-language="en"
                                    alt="INGLES">
                                    <i class="flag-icon flag-icon-us"></i> En
                                </a>
                                <a href="#googtrans(es|fr)" class="dropdown-item lang-select rounded" data-language="fr"
                                    alt="FRANCÉS">
                                    <i class="flag-icon flag-icon-fr"></i> Fr
                                </a>
                                <a href="#googtrans(es|de)" class="dropdown-item lang-select rounded" data-language="de"
                                    alt="ALEMÁN">
                                    <i class="flag-icon flag-icon-de"></i> Al
                                </a>
                                <a href="#googtrans(es|pt)" class="dropdown-item lang-select rounded" data-language="pt"
                                    alt="PORTUGUÉS">
                                    <i class="flag-icon flag-icon-pt"></i> Pt
                                </a>
                            </div>
                        </li>
                        <a class="nav-link" href="{{ route('login') }}">
                            <button style="height: 32px;width: 150px;left: 647px;top: 0px;border-radius: 5px;" class="btn btn-sm ">
                                <strong style="height: 22px;width: 71px;left: 686px;top: 3px;border-radius: nullpx;">
                                   Ingresar
                                </strong>
                            </button>
                        </a>
                    </nav>
                </div>
            </header>

            <main class="mb-auto row">
                <div class="col-6 text-left" style="padding: 4%;">
                    <h1 style="font-family:  Brandon Text,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Helvetica Neue,sans-serif;;
                    height: 160px;
                    width: 998px;
                    top: 332px;
                    border-radius: nullpx;
                    font-style: normal;
                    font-weight: bold;
                    font-size: 60px;
                    line-height: 111.5%; text-align: left;">Descubre tu <br>nueva realidad</h1>
                    <p style="
                    font-style: normal;
                    font-weight: 300;
                    font-size: 15px;
                    line-height: 146.5%; text-align: left;">Desarrolla habilidades de liderazgo, comunicación asertiva, aprende a <br> crear equipos de alto desempeño, a gestionar tus estados emocionales,<br> a identificar y romper con las creencias limitantes.
                    </p>
                    <p class="lead d-flex justify-content-left mt-4">
                        <button href="#" class="btn fw-bold text-white" style="width: 34%; border-color:white;">Conoce más</button>
                    </p>
                </div>
            </main> 

        </div>
 
   {{-- <footer style="background: linear-gradient(90deg, #0F6FC3 -0.66%, #F5CD0E 100%); width: 100%; height: 7%;left: 0px;top: 864px;border-radius: 0px;" >
    </footer> --}}  
    </div>
</body>

</html>
