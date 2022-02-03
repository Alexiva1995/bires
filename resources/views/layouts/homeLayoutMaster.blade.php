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
    <title>Zoe - @yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    {{-- Include core + vendor Styles --}}
    @include('panels/styles')

    <style>
        .navbar-dark .navbar-nav li {
            margin-right: 30px !important;
        }

        .img-auth-1 {
            position: absolute;
            top: 20px;
            left: 0px;
        }

        .img-auth-2 {
            position: absolute;
            bottom: 0px;
            right: 0px;
        }

    </style>
</head>

<body
    class="vertical-layout vertical-menu-modern {{ $configData['bodyClass'] }} {{($configData['theme'] === 'dark') ? 'dark-layout' : ''}} {{ $configData['blankPageClass'] }} blank-page"
    data-menu="vertical-menu-modern" data-col="blank-page" data-framework="laravel" data-asset-path="{{ asset('/')}}">

    <!-- BEGIN: Content-->
    <div class="app-content content {{ $configData['pageClass'] }}">

        <div class="content-wrapper">
            <div class="content-body" >

                <div class="d-flex h-100 text-white bg-zoe">

                    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
                        <header class="mb-5" style="z-index: 4">

                                <nav class="header-navbar navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center navbar-expand-md navbar-dark"
                                data-nav="brand-center">
            

                                <a href="{{ route('landing') }}" class="navbar-brand"><img
                                        src="{{ asset('images/zoe/logo/logo.svg') }}" alt="logo" width="70%"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse flex-row-reverse" id="navbarCollapse">
                                    @if (Route::is('login'))
                                    <a href="{{ route('register') }}"
                                        class="btn btn-sm btn-secondary fw-bold text-white">Registrarse</a>
                                    @elseif (Route::is('register'))
                                    <a href="{{ route('login') }}"
                                        class="btn btn-sm btn-secondary fw-bold text-white">Ingresar</a>
                                    @endif
                                    <ul class="nav navbar-nav mx-auto">
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
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdown-flag">
                                                <a href="#googtrans(es|es)" class="dropdown-item lang-select"
                                                    data-language="es" alt="ESPAÑOL">
                                                    <i class="flag-icon flag-icon-mx"></i> ESPAÑOL
                                                </a>
                                                <a href="#googtrans(es|en)" class="dropdown-item lang-select"
                                                    data-language="en" alt="INGLES">
                                                    <i class="flag-icon flag-icon-us"></i> INGLES
                                                </a>
                                                <a href="#googtrans(es|fr)" class="dropdown-item lang-select"
                                                    data-language="fr" alt="FRANCÉS">
                                                    <i class="flag-icon flag-icon-fr"></i> FRANCÉS
                                                </a>
                                                <a href="#googtrans(es|de)" class="dropdown-item lang-select"
                                                    data-language="de" alt="ALEMÁN">
                                                    <i class="flag-icon flag-icon-de"></i> ALEMÁN
                                                </a>
                                                <a href="#googtrans(es|pt)" class="dropdown-item lang-select"
                                                    data-language="pt" alt="PORTUGUÉS">
                                                    <i class="flag-icon flag-icon-pt"></i> PORTUGUÉS
                                                </a>
                                            </div>
                                        </li>
                                    </ul>


                                    <ul class="navbar-nav mx-auto">
                                        <li class="nav-item active mx-auto">
                                            <a class="nav-link text-white" style="font-weight: bold;"
                                                href="#">Inicio</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link text-white" style="font-weight: bold;" href="#">PMI</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link text-white" style="font-weight: bold;"
                                                href="#">Oficinas</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link text-white" style="font-weight: bold;"
                                                href="#">Testimonios</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link text-white" style="font-weight: bold;"
                                                href="#">Novedades</a>
                                        </li>
                                    </ul>

                                </div>
                            </nav>
                        </header>

                        <div style="z-index: 3">
                            @yield('content')

                        </div>
                    </div>
                </div>
            </div>
            <img class="img-auth-1" width="750px" height="600px" style="z-index: 2;"
                src="{{ asset('images/zoe/svg/Vector-2.svg') }}" />
            <img class="img-auth-2" width="750px" height="600px" style="z-index: 2;"
                src="{{ asset('images/zoe/svg/Vector-1.svg') }}" />

        </div>
    </div>
    <!-- End: Content-->

    {{-- include footer --}}
    @include('panels/footer')

    {{-- include default scripts --}}
    @include('panels/scripts')

    <script>
        function resetF() {
            var x = document.getElementById("forgot-password-email");
            var email = x.value;

            window.localStorage.setItem('email_token', email);

            console.log(email);
        }

    </script>

    <script type="text/javascript">
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })

    </script>

</body>

</html>
