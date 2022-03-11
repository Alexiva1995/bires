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
<a href="{{route('universo.Select')}}" style="font-size:15px;font-weight:600;color:#FFF;">Ir a Negocios ></a>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3><i class="fa-solid fa-align-justify"></i>
                Categirias
            </h3>
            <br>
            <ul>
                <li class="active">Barberias</li>
                <li>Viajes</li>
                <li>Vitalidad</li>
                <li>Mascotas</li>
                <li>Catering</li>
                <li>Peluquerias</li>
                <li>Eventos</li>
                <li>Restaurantes</li>
                <li>Comida rápida</li>
                <li>Bellesa y cuidado p.</li>
                <li>Material de construcción</li>
                <li class="mt-2">
                    <a href="#">
                        <p style="font-weight: 600;">Mostrar más <i class="fa-solid fa-angle-down"></i></p>
                    </a>
                </li>
            </ul>
            <hr>

            <div class="paragraph mb-1">
                <h4>Precios</h4>
            </div>


            <div class="row">
                <div class="col-2">

                    <div class="img">
                        <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                    </div>
                </div>
                <div class="col-2">

                    <div class="img">
                        <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                    </div>
                </div>
                <div class="col-2">

                    <div class="img">
                        <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                    </div>
                </div>
                <div class="col-2">

                    <div class="img">
                        <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-offset-1 col-sm-8">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" class="form-control" placeholder="Buscar Negocio">
            </div>

            <div class="title" style="margin-left: 50px;">
                <span style="color: #FF9F00;">TOP</span> <span class="h5" style="font-weight: 800;"> Barberia en medellin</span>
            </div>

            <div class="carousel-wrapper">
                <div class="carousel">

                    <img class="carousel__photo initial" src="{{asset('images/Dashboard/1.svg')}}" style="background-size: cover;">
                    <img class="carousel__photo" src="{{asset('images/Dashboard/1.svg')}}">
                    <img class="carousel__photo" src="{{asset('images/Dashboard/1.svg')}}">
                    <img class="carousel__photo" src="{{asset('images/Dashboard/1.svg')}}">
                    <img class="carousel__photo" src="{{asset('images/Dashboard/1.svg')}}">

                    <div class="carousel__button--next"></div>
                    <div class="carousel__button--prev"></div>
                    <div class="float col-12">
                        <a class="btn">Agendar Cita <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="footers">
                <h5 style="margin-left: 50px;">Barberia Singular Cut Style</h5>
            </div>

            <div class="row col-5" style="margin-left: 50px;">
                <div class="col-2">

                    <div class="img">
                        <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="img">
                        <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">

                    </div>
                </div>
                <div class="col-2">
                    <div class="img">
                        <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                    </div>
                </div>
                <div class="col-2">

                    <div class="img">
                        <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">

                    </div>

                </div>
            </div>

            <div class="carousel-wrapper mt-4">
                <div class="carousel">

                    <img class="carousel__photo initial" src="{{asset('images/Dashboard/2.png')}}" style="background-size: cover;">
                    <img class="carousel__photo" src="{{asset('images/Dashboard/2.png')}}">
                    <img class="carousel__photo" src="{{asset('images/Dashboard/2.png')}}">
                    <img class="carousel__photo" src="{{asset('images/Dashboard/2.png')}}">
                    <img class="carousel__photo" src="{{asset('images/Dashboard/2.png')}}">

                    <div class="carousel__button--next"></div>
                    <div class="carousel__button--prev"></div>
                    <div class="float col-12">
                        <a class="btn">Agendar Cita <i class="fa-solid fa-angle-right"></i></a>
                    </div>

                </div>
            </div>

            <div class="footers">
                <h5 style="margin-left: 50px;">Barberia FALCON</h5>
            </div>

            <div class="row align-items-start mb-2 col-5" style="margin-left: 50px;">
                <div class="col-2">
                    <div class="img">
                        <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">

                    </div>
                </div>
                <div class="col-2">
                    <div class="img">
                        <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">

                    </div>
                </div>
                <div class="col-2">
                    <div class="img">
                        <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">

                    </div>
                </div>
                <div class="col-2">
                    <div class="img">
                        <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">

                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-5" style="margin-left: 50px;">
                    <div class="contenedores">
                        <div class="card" style="width: 18rem;height:200px;" id="primera">
                            <div class="card-body">
                                <a class="Activar btn">Agendar Cita <i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="footers">
                            <h5>CENTS barber shop</h5>
                        </div>

                        <div class="row align-items-start mb-2">
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">

                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">

                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">

                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-5">
                    <div class="contenedores">
                        <div class="card" style="width: 18rem;height:200px;" id="segunda">
                            <div class="card-body">
                                <a class="Activar btn">Agendar Cita <i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="footers">
                            <h5>Barberbross</h5>
                        </div>

                        <div class="row align-items-start mb-2">
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">

                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">

                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">

                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row align-items-start">
                <div class="col-4">
                    <div class="contenedores">
                        <div class="card" style="width: 14rem;height:200px;" id="tercera">
                            <div class="card-body">
                                <a class="Activar btn">Agendar Cita <i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="footers">
                            <h5>LQ Barberia</h5>
                        </div>

                        <div class="row align-items-start mb-2">
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">

                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">

                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">

                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-4">
                    <div class="contenedores">
                        <div class="card" style="width: 14rem;height:200px;" id="cuarta">
                            <div class="card-body">
                                <a class="Activar btn">Agendar Cita <i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="footers">
                            <h5>Protokolo barber shop
                            </h5>
                        </div>

                        <div class="row align-items-start mb-2">
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-4">
                    <div class="contenedores">
                        <div class="card" style="width: 14rem;height:200px;" id="quinta">
                            <div class="card-body">
                                <a class="Activar btn">Agendar Cita <i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="footers">
                            <h5>BARBERSH!</h5>
                        </div>

                        <div class="row align-items-start mb-2">
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row align-items-start">
                <div class="col-4">
                    <div class="contenedores">
                        <div class="card" style="width: 14rem;height:200px;" id="sexta">
                            <div class="card-body">
                                <a class="Activar btn">Agendar Cita <i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="footers">
                            <h5>Crytek Barber</h5>
                        </div>

                        <div class="row align-items-start mb-2">
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-4">
                    <div class="contenedores">
                        <div class="card" style="width: 14rem;height:200px;" id="septima">
                            <div class="card-body">
                                <a class="Activar btn">Agendar Cita <i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>


                        <div class="footers">
                            <h5>the Corleone barber shop </h5>
                        </div>


                        <div class="row align-items-start mb-2">
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-4">
                    <div class="contenedores">
                        <div class="card" style="width: 14rem;height:200px; " id="octava">
                            <div class="card-body">
                                <a class="Activar btn">Agendar Cita <i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="footers">
                            <h5>Norberto barber</h5>
                        </div>

                        <div class="row align-items-start mb-2">
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="img">
                                    <img src="{{asset('images/zoe/svg/dolar.svg')}}" width="35" height="35" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<style>
    body{
        background:radial-gradient(50% 50% at 50% 50%, #05457D 0%, #032D52 100%)  !important;
    }
    .Activar {
        display: flex;
        border-radius: 10px;
        margin-top: 120px;
        background-color: rgba(253, 73, 92, 1);
        width: 150px;
    }

    #primera {
        background-image: url("../images/Dashboard/primera.png");
        height: 120px;
        background-size: cover;
        border-radius: 10%;
        border: none;
        width: 100%;
    }

    #segunda {
        background-image: url("../images/Dashboard/bata.svg");
        height: 120px;
        background-size: cover;
        border: none;
        border-radius: 10%;
        width: 100%;
    }

    #tercera {
        background-image: url("../images/Dashboard/post.svg");
        height: 120px;
        background-size: cover;
        border-radius: 10%;
        border: none;
        width: 100%;
    }

    #cuarta {
        background-image: url("../images/Dashboard/protocolo.svg");
        border: none;
        background-size: cover;
        height: 120px;
        border-radius: 10%;
        width: 100%;
    }

    #quinta {
        background-image: url("../images/Dashboard/silla.svg");
        border: none;
        height: 120px;
        background-size: cover;
        border-radius: 10%;
        width: 100%;
    }

    #sexta {
        background-image: url("../images/Dashboard/silla2.svg");
        border: none;
        background-size: cover;
        height: 120px;
        border-radius: 10%;
        width: 100%;
    }

    #septima {
        background-image: url("../images/Dashboard/the.svg");
        border: none;
        background-size: cover;
        height: 120px;
        border-radius: 10%;
        width: 100%;
    }


    #octava {
        background-image: url("../images/Dashboard/frent.png");
        border: none;
        background-size: cover;
        height: 120px;
        border-radius: 10%;
        width: 100%;
    }


    .contenedor {
        width: 30px;
        background-color: #FF9F00;
        height: 30px;
        border-radius: 50%;
    }

    .img {
        display: flex;
        justify-content: center;
        margin: auto;
        color: black;
        font-size: 17px;
    }

    .active {
        font-weight: 600;
    }

    .carousel-wrapper {
        overflow: hidden;
        width: 100%;
        margin: auto;
    }

    .carousel-wrapper * {
        border-radius: 12%;
        box-sizing: border-box;
    }


    .carousel {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }


    .carousel__photo {
        opacity: 0;
        position: absolute;
        top: 0;
        width: 100%;
        margin: auto;
        padding: 1rem 4rem;
        z-index: 100;
        transition: transform .5s, opacity .5s, z-index .5s;
    }

    .carousel__photo.initial,
    .carousel__photo.active {
        opacity: 1;
        position: relative;
        z-index: 900;
    }

    .carousel__photo.prev,
    .carousel__photo.next {
        z-index: 800;
    }

    .carousel__photo.prev {
        transform: translateX(-100%);
    }

    .carousel__photo.next {
        transform: translateX(100%);
    }

    .carousel__button--prev,
    .carousel__button--next {
        position: absolute;
        top: 50%;
        width: 2rem;
        height: 2rem;
        background-color: #FFF;
        transform: translateY(-50%);
        border-radius: 50%;
        cursor: pointer;
        z-index: 1001;
    }

    .float {
        position: absolute;
        top: 80%;
        width: auto;
        background-color: rgba(253, 73, 92, 1);
        transform: translateY(-90%);
        display: flex;
        border-radius: 10px;
        z-index: 1001;
    }

    .float {
        left: 80px;
    }

    .carousel__button--prev {
        left: 40px;
    }

    .carousel__button--next {
        right: 40px;
    }

    .carousel__button--prev::after,
    .carousel__button--next::after {
        content: " ";
        position: absolute;
        width: 10px;
        height: 10px;
        top: 50%;
        left: 54%;
        border-right: 2px solid black;
        border-bottom: 2px solid black;
        transform: translate(-50%, -50%) rotate(135deg);
    }

    .carousel__button--next::after {
        left: 47%;
        transform: translate(-50%, -50%) rotate(-45deg);
    }
</style>
@endsection