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

<div class="parent">

    <div class="div1">

        <div class="card" style="width: 16rem;border:none;" id="img1">
            <div class="card-body">
                <div class="title">
                    <h4>Restaurante</h4>
                </div>
                <div class="d-flex justify-content-end" style="margin-top: 27px;">
                    <div class="contenedor">
                        <div class="img mt-1">
                            <img src="{{asset('images/Universo/restaurante-ico.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="div2">

        <div class="card" style="width: 16rem;border:none;" id="img2">
            <div class="card-body">
                <div class="title">
                    <h4>Escuela y Guarderias</h4>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="contenedor">
                        <div class="img mt-1">
                            <img src="{{asset('images/Universo/escuela-ico.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="div3">

        <div class="card" style="width: 16rem;border:none;" id="img3">
            <div class="card-body">
                <div class="title">
                    <h4>Institutos y Academias</h4>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="contenedor">
                        <div class="img mt-1">
                            <img src="{{asset('images/Universo/instituto-ico.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="div4">

        <div class="card" style="width: 16rem;border:none;" id="img4">
            <div class="card-body">
                <div class="title">
                    <h4>Inmobiliarias</h4>
                </div>
                <div class="d-flex justify-content-end" style="margin-top: 27px;">
                    <div class="contenedor">
                        <div class="img mt-1">
                            <img src="{{asset('images/Universo/inmobiliaria-ico.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="div5">

        <div class="card" style="width: 16rem;border:none;" id="img5">
            <div class="card-body">
                <div class="title">
                    <h4>Automotriz</h4>
                </div>

                <div class="d-flex justify-content-end" style="margin-top: 27px;">
                    <div class="contenedor">
                        <div class="img mt-1">
                            <img src="{{asset('images/Universo/automotriz-ico.svg')}}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="div6">

        <div class="card" style="width: 16rem;border:none;" id="img6">
            <div class="card-body">
                <div class="title">
                    <h4>Belleza y cuidado personal</h4>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="contenedor">
                        <div class="img mt-1">
                            <img src="{{asset('images/Universo/belleza-ico.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="div7">

        <div class="card" style="width: 16rem;border:none;" id="img7">
            <div class="card-body">
                <div class="title">
                    <h4>Comida y bebidas</h4>
                </div>

                <div class="d-flex justify-content-end" style="margin-top: 27px;">
                    <div class="contenedor">
                        <div class="img mt-1">
                            <img src="{{asset('images/Universo/comida-ico.png')}}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="div8">

        <div class="card" style="width: 16rem;border:none;" id="img8">
            <div class="card-body">
                <div class="title">
                    <h4>Medicina alternativa</h4>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="contenedor">
                        <div class="img mt-1">
                            <img src="{{asset('images/Universo/medicina-ico.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="div9">

        <div class="card" style="width: 16rem;border:none;" id="img9">
            <div class="card-body">
                <div class="title">
                    <h4>Antros y bares</h4>
                </div>
            </div>
        </div>

    </div>
    <div class="div10">

        <div class="card" style="width: 16rem;border:none;" id="img10">
            <div class="card-body">
                <div class="title">
                    <h4>Fisioterapia</h4>
                </div>
            </div>
        </div>

    </div>
    <div class="div11">

        <div class="card" style="width: 16rem;border:none;" id="img11">
            <div class="card-body">
                <div class="title">
                    <h4>Eventos y banquetes</h4>
                </div>
            </div>
        </div>

    </div>
    <div class="div12">

        <div class="card" style="width: 16rem;border:none;" id="img12">
            <div class="card-body">
                <div class="title">
                    <h4>Turismo</h4>
                </div>
            </div>
        </div>

    </div>
    <div class="div13">

        <div class="card" style="width: 16rem;border:none;" id="img13">
            <div class="card-body">
                <div class="title">
                    <h4>Compras</h4>
                </div>
            </div>
        </div>

    </div>
    <div class="div14">

        <div class="card" style="width: 16rem;border:none;" id="img14">
            <div class="card-body">
                <div class="title">
                    <h4>Emprendedores</h4>
                </div>
            </div>
        </div>

    </div>
    <div class="div15">

        <div class="card" style="width: 16rem;border:none;" id="img15">
            <div class="card-body">
                <div class="title">
                    <h4>Mascotas</h4>
                </div>
            </div>
        </div>

    </div>
    <div class="div16">

        <div class="card" style="width: 16rem;border:none;" id="img16">
            <div class="card-body">
                <div class="title">
                    <h4>Material de construccion</h4>
                </div>
            </div>
        </div>

    </div>
    <div class="div17">

        <div class="card" style="width: 16rem;border:none;" id="img17">
            <div class="card-body">
                <div class="title">
                    <h4>Hoteles</h4>
                </div>
            </div>
        </div>

    </div>
    <div class="div18">

        <div class="card" style="width: 16rem;border:none;" id="img18">
            <div class="card-body">
                <div class="title">
                    <h4>Hogar y oficina</h4>
                </div>
            </div>
        </div>

    </div>
    <div class="div19">

        <div class="card" style="width: 16rem;border:none;" id="img19">
            <div class="card-body">
                <div class="title">
                    <h4>Servicios empresariales</h4>
                </div>
            </div>
        </div>

    </div>
    <div class="div20">

        <div class="card" style="width: 16rem;border:none;" id="img20">
            <div class="card-body">
                <div class="title">
                    <h4>Transporte</h4>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<style>
    .contenedor {
        background-color: #FFF;
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .img {
        display: flex;
        justify-content: center;
        top: -50px;
        margin: auto;
    }

    .card {
        min-height: 135px;
    }


    .parent {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(5, 1fr);
        grid-column-gap: 10px;
        grid-row-gap: 10px;
    }

    .div1 {
        grid-area: 1 / 1 / 2 / 2;
    }

    .div2 {
        grid-area: 1 / 2 / 2 / 3;
    }

    .div3 {
        grid-area: 1 / 3 / 2 / 4;
    }

    .div4 {
        grid-area: 1 / 4 / 2 / 5;
    }

    .div5 {
        grid-area: 2 / 1 / 3 / 2;
    }

    .div6 {
        grid-area: 2 / 2 / 3 / 3;
    }

    .div7 {
        grid-area: 2 / 3 / 3 / 4;
    }

    .div8 {
        grid-area: 2 / 4 / 3 / 5;
    }

    .div9 {
        grid-area: 3 / 1 / 4 / 2;
    }

    .div10 {
        grid-area: 3 / 2 / 4 / 3;
    }

    .div11 {
        grid-area: 3 / 3 / 4 / 4;
    }

    .div12 {
        grid-area: 3 / 4 / 4 / 5;
    }

    .div13 {
        grid-area: 4 / 1 / 5 / 2;
    }

    .div14 {
        grid-area: 4 / 2 / 5 / 3;
    }

    .div15 {
        grid-area: 4 / 3 / 5 / 4;
    }

    .div16 {
        grid-area: 4 / 4 / 5 / 5;
    }

    .div17 {
        grid-area: 5 / 1 / 6 / 2;
    }

    .div18 {
        grid-area: 5 / 2 / 6 / 3;
    }

    .div19 {
        grid-area: 5 / 3 / 6 / 4;
    }

    .div20 {
        grid-area: 5 / 4 / 6 / 5;
    }
</style>



@endsection