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
    {{-- <link rel="apple-touch-icon" href="{{asset('images/ico/apple-icon-120.png')}}"> --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/zoe/logo/logo.svg')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    @include('panels/styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

</head>


<style>
    .bg-zoe {
        background: linear-gradient(180deg, rgba(255, 255, 255, 0) 31.77%, rgba(255, 255, 255, 0.098) 59.9%),
        linear-gradient(180deg, rgba(0, 0, 0, 0) 31.77%, rgba(0, 0, 0, 0.2) 59.9%),
        linear-gradient(180deg, rgba(15, 111, 195, 0.5) 0%, rgba(15, 111, 195, 0.185) 100%),
        url('{{ url('images/zoe/home/home-1.png')}}') no-repeat !important;
        mix-blend-mode: normal !important;
        background-size: cover !important;
    }

    .btn {
        padding: 1px 20px 1px 20px !important;

    }

</style>

<body class="d-flex h-100 text-center text-white bg-zoe">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-5">

            <nav class="navbar navbar-expand-md navbar-dark">
                <a href="{{ route('landing') }}" class="navbar-brand"><img src="{{ asset('images/zoe/logo/logo.svg') }}"
                        alt="logo" width="70%"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse flex-row-reverse" id="navbarCollapse">
                    <a href="{{ route('login') }}" class="btn btn-sm btn-secondary fw-bold text-white">Ingresar</a>

                    <ul class="nav navbar-nav pr-5">
                        <li class="nav-item dropdown dropdown-language">
                            <a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true">
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

        <main class="mb-auto mt-5 row">
            <div class="col-6 text-left">
                <h1 style="font-family: Poppins;
                font-style: normal;
                font-weight: bold;
                font-size: 60px;
                line-height: 111.5%; text-align: left;">¡Somos la Nueva Generación!</h1>
                <p style="font-family: Poppins;
                font-style: normal;
                font-weight: 500;
                font-size: 18px;
                line-height: 145.5%; text-align: left;">Desarrolla habilidades de liderazgo, comunicación asertiva,
                    aprende a crear equipos de
                    alto desempeño, a gestionar tus estados emocionales, a identificar y romper con las creencias
                    limitantes.
                </p>
                <p class="lead d-flex justify-content-left">
                    <a href="#" class="btn btn-outline-secondary fw-bold text-white">Conoce más</a>
                </p>
            </div>

            <div class="col-6">
                <img src="{{ asset('images/zoe/logo/home.png') }}" alt="" width="350px">
            </div>
        </main>

    </div>

    <div id="gtx-trans" style="position: absolute; left: 196px; top: 219.094px;">
        <div class="gtx-trans-icon"></div>
    </div>


    @include('panels/scripts')


    <script type="text/javascript">
        function googleTranslateElementInit() {

            new google.translate.TranslateElement({
                pageLanguage: jQuery('.goog-te-combo').val(),
                layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT
            }, 'google_translate_element');
        }
        jQuery('.lang-select').click(function (e) {
            var theLang = jQuery(this).attr('data-language');

            jQuery('.goog-te-combo').val(theLang);
            //alert(jQuery(this).attr('href'));

            fetch("{{url('lang')}}/" + theLang)
                .then(response => response.json())
                .then(data => {
                    window.location = jQuery(this).attr('href');
                    location.reload();
                })
                .catch(function (error) {
                    console.log('Hubo un problema con la petición Fetch:' + error.message);
                });
        });

    </script>

    <script src="{{ asset('js/scripts/custom/bootstrap.min.js') }}"></script>
</body>

</html>
