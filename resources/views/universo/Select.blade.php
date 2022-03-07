@extends('layouts/contentLayoutMaster')


@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap4.min.css')) }}">
@endsection
@section('page-style')
<!-- Page css files -->
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-invoice-list.css')) }}">
@endsection

@section('content')

<div class="container">
    <div class="header mb-3">
        <div class="row">
            <div class="col-4">
                <a href="#"><i class="fa-solid fa-angle-left text-white" style="font-size:15px;"></i><span style="font-size:15px;font-weight:800;"> Volver a negocios</span></a>
            </div>
            <div class="col-8">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="form-control" placeholder="Buscar negocios" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>

    </div>
    <div class="parent">
        <div class="div1">
            <div class="card" style="height: 280px; border:none;" id="big">
                <div class="card-body"></div>
            </div>
        </div>
        <div class="div2">
            <div class="card" style="height: 125px;border:none;" id="small1">
                <div class="card-body"></div>
            </div>
        </div>
        <div class="div3">
            <div class="card" style="height: 125px;border:none;" id="small2">

                <div class="card-body"></div>
            </div>
        </div>
        <div class="div4">
            <div class="card" style="height: 125px;border:none;" id="small3">

                <div class="card-body"></div>
            </div>
        </div>
        <div class="div5">
            <div class="card" style="height: 125px;border:none;" id="small4">

                <div class="card-body"></div>
            </div>
        </div>
    </div>

    <div class="card" style="height: 300px;" id="medium">
        <div class="card-body">
            <div class="d-flex justify-content-end"><i class="fa-solid fa-arrows-rotate"></i><span style="margin-left: 10px;font-weight: 600;"> última actualización hace 2 meses</span></div>
            <div class="body mt-2">
                <div class="row">
                    <div class="col-3">
                        <img src="{{asset('images/logo/6.png')}}" alt="" style="border: 1px solid white;border-radius:3px;">
                    </div>
                    <div class="col-9 mt-1">
                        <div class="title">
                            <h3>LQ Barbería - Cuidado personal </h3>
                            <br>
                            <span style="font-weight: 600;">Precios desde 5.00 a 10.000 ZOEC</span>
                        </div>

                        <div class="row mb-2 mt-2">
                            <div class="col-1">
                                <div class="background-dollar">
                                    <i class="fa-solid fa-dollar-sign icon"></i>
                                </div>

                            </div>
                            <div class="col-1">
                                <div class="background-dollar">
                                    <i class="fa-solid fa-dollar-sign icon"></i>
                                </div>

                            </div>
                            <div class="col-1">
                                <div class="background-dollar">
                                    <i class="fa-solid fa-dollar-sign icon"></i>
                                </div>

                            </div>
                            <div class="col-1">
                                <div class="background-dollar">
                                    <i class="fa-solid fa-dollar-sign icon"></i>
                                </div>

                            </div>
                        </div>

                        <div class="redes-sociales">
                            <div class="d-flex bd-highlight mb-3">
                                <div class="p-1 bd-highlight">
                                    <i class="fa-brands fa-facebook" style="font-size: 20px;"></i>
                                </div>
                                <div class="p-1 bd-highlight">
                                    <i class="fa-brands fa-twitter" style="font-size: 20px;"></i>
                                </div>
                                <div class="p-1 bd-highlight">
                                    <i class="fa-brands fa-instagram" style="font-size: 20px;"></i>
                                </div>
                                <div class="p-1 bd-highlight">
                                    <i class="fa-brands fa-youtube" style="font-size: 20px;"></i>
                                </div>
                                <div class="p-1 bd-highlight">
                                    <i class="fa-brands fa-tiktok" style="font-size: 20px;"></i>
                                </div>

                                <div class="ms-auto bd-highlight">
                                    <button class="btn" style="background-color: #4BCFEE;">
                                        <i class="fa-solid fa-cart-shopping"></i> Tienda en linea
                                    </button>
                                </div>
                                <div class="bd-highlight" style="margin-left: 15px;">
                                    <button class="btn" style="background-color: #FFF;">
                                        <i class="fa-brands fa-whatsapp" style="color: #08E2A7;font-size:15px;"></i>
                                    </button>
                                </div>
                                <div class=" bd-highlight" style="margin-left: 15px;">
                                    <button class="btn text-dark" style="background-color: #FFF;">...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-9">
            <div class="col-12">
                <div class="card" style="border:none;">
                    <div class="card-body p-4">
                        <div class="title">
                            <h4 style="font-weight: 600;">Acerca de</h4>
                        </div>
                        <div class="paragraph mt-2">
                            <p>LQ Barberia, Reflejan lo que tu quieres HOY, un Hombre de Grandez. Somos un espacio contemporáneo masculino, donde entendemos las inquietudes del hombre de hoy para ofrecer una imagen actual y el estilo mejor refleja su personalidad, Rand esta formado por un equipo de barberos con formación profecional de alta calidad</p>
                        </div>
                        <hr>
                        <div class="products">
                            <h4 style="font-weight: 600;">Productos y Servicios</h4>
                            <div class="productos">
                                <ul class="mt-2">
                                    <li>Corte de cabello</li>
                                    <li>Corte de barba</li>
                                    <li>Corte + barba</li>
                                    <li>Limpieza de exfoliación</li>
                                    <li>Mascarilla de puntos negros</li>
                                    <li>Cejas</li>
                                    <li>Tinte barba y cabello</li>
                                    <li>Alisado</li>
                                </ul>
                                <hr>
                            </div>
                        </div>
                        <div class="categorias">
                            <div class="title mb-2">
                                <h4 style="font-weight: 600;">Categoría</h4>
                            </div>
                            <div class="botones">
                                <div class="row">
                                    <div class="col-9 col-sm-5 barber-btn text-center" style="margin-right: 17px;">Belleza y cuidado personal</div>
                                    <div class="col-3 col-sm-2 barber-btn text-center">Barberías</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-3">
            <div class="card" style="border:none;">
                <div class="card-body">
                    <div class="times">
                        <span>
                            <i class="fa-solid fa-clock" style="color:#08E2A7;"></i> <span style="font-weight:bold;color:#08E2A7;">Abierto</span> <span style="font-size: 12px;font-weight:bold;">9:00-18:00</span> <i class="fa-solid fa-circle-exclamation" style="color: #FF9F00;"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="card" style="height: 80%;border:none;">
                <div class="card-body">
                    <p style="font-size: 13px;font-weight:700;">Información de negocio</p>
                    <br>
                    <div class="card" style="border:none;">
                        <img src="{{asset('images/logo/mapa.png')}}" alt="mapa" style="height: 180px;">
                    </div>
                    <div class="paragraph" style="margin-top: 60px;">
                        <p><i class="fa-solid fa-location-dot" style="margin-right:10px;"></i> Cra. 79 #01 C 02, Medellin, Antioquia</p>
                        <p><i class="fa-solid fa-phone" style="margin-right:10px;"></i> 301 4718714</p>
                        <p><i class="fa-brands fa-whatsapp" style="color:#08E2A7;font-size:20px;margin-right:10px;"></i> (+57)301 4718714</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .icon {
        display: flex;
        justify-content: center;
        color: black;

    }

    .background-dollar {
        background-color: #FF9F00;
        height: 30px;
        width: 30px;
        border-radius: 50%;
    }

    #big {
        background-image: url("../images/logo/1.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }

    #small1 {
        background-image: url("../images/logo/4.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }

    #small2 {
        background-image: url("../images/logo/5.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }

    #small3 {
        background-image: url("../images/logo/2.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }

    #small4 {
        background-image: url("../images/logo/3.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }

    .barber-btn {
        background-color: transparent;
        border: 1px solid #FF9F00;
        border-radius: 15px;
        color: #FF9F00;
        padding: 5px;
    }

    .parent {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(2, 1fr);
        grid-column-gap: 10px;
        grid-row-gap: -1px;
    }

    .div1 {
        grid-area: 1 / 1 / 3 / 3;
    }

    .div2 {
        grid-area: 1 / 3 / 2 / 4;
    }

    .div3 {
        grid-area: 1 / 4 / 2 / 5;
    }

    .div4 {
        grid-area: 2 / 3 / 3 / 4;
    }

    .div5 {
        grid-area: 2 / 4 / 3 / 5;
    }
</style>
@endsection