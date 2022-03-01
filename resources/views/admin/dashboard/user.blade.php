@extends('layouts/contentLayoutMaster')

@section('title', 'Dashboard Analytics')

@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap4.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/animate/animate.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/sweetalert2.min.css')) }}">
@endsection
@section('page-style')
<!-- Page css files -->
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-invoice-list.css')) }}">
<style>
    #card-verificar-cuenta {
        /*
            position: absolute;
            width: 224px;
            height: 261px;
            left: 1222px;
            top: 163px;
            */
        background: linear-gradient(180deg, rgba(22, 78, 186, 0) 8.33%, #0472D1 54.69%, rgba(26, 76, 120, 0.994764) 92.19%), url('images/zoe/universe/brechas-seguridad-lector-huellas-reconocimiento-facial.jpg');
        /*mix-blend-mode: normal;
            border-radius: 10px;*/
    }

    #card-desarrolloPersonal {
        background: url('images/zoe/academy/desarrollo-personal.png');
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        width: 100%;
    }

    #card-inteligenciaEmocional {
        background: url('images/zoe/academy/inteligencia-emocional.png');
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        width: 100%;
    }

    #card-habilidadesBlandas {
        background: url('images/zoe/academy/habilidades-blandas.png');
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        width: 100%;
    }
</style>
@endsection

@section('content')
<!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">

    <div class="">
        <h4 style="font-weight: 600;">Hola bienvenido</h4>
    </div>
    <div class="row">
        <div class="col-9">

            <div class="row">
                <div class="col-5 align-self-center">
                    <span style="color: #4BCFEE;">{{ Auth::user()->name }} {{ Auth::user()->lastname }} a Generacion ZOE</span>
                </div>
                <div class="col-2 align-self-center">
                    <span class="small fw-old"><i data-feather='arrow-up'></i> Tu link</span>
                </div>
                <div class="col-2">
                    <div class="btn-group">
                        <button class="btn btn-flat-primary dropdown-toggle small" type="button" id="dropdownMenuButton100" data-bs-toggle="dropdown" aria-expanded="false">
                            Ver todos
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton100">
                            <a class="dropdown-item" href="#">Option 1</a>
                            <a class="dropdown-item" href="#">Option 2</a>
                            <a class="dropdown-item" href="#">Option 3</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="d-grid gap-2">
                        <button class="btn btn-sm rounded-pill" style="background-color: #4BCFEE;" onclick="getlink()"><i data-feather='copy'></i> Copiar enlace</button>
                    </div>
                </div>
            </div>


            <div class="row align-items-center mt-1">
                <div class="col">
                    @include('components.tranding-view')

                </div>
                <div class="col">
                    @include('components.tranding-view2')

                </div>
                <div class="col">
                    @include('components.tranding-view3')

                </div>
            </div>




            <div class="row match-height">
                <!-- Greetings Card starts -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card-dark" style="border: none;border-radius:10px;background-color:#0B3C67;">
                        <div class="card-body">

                            <div class="row align-items-center">

                                <div class="col-5">
                                    <div class="avatar avatar-lg bg-secondary p-50 m-0">
                                        <div class="avatar-content">
                                            <img class="img" src="{{asset('images/zoe/svg/puerta.svg')}}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <p style="font-weight:600;font-size:14px;">Balance</p>
                                    <p style="font-weight:600;font-size:20px;">1200 <span style="font-size: 11px;">ZOEC</span></p>
                                    <p style="font-weight:normal;font-size:11px;"><i data-feather='arrow-up-right'></i> Comprar</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Greetings Card ends -->

                <!-- Subscribers Chart Card starts -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="card card-dark" style="border: none;border-radius:10px;background-color:#0B3C67;">
                        <div class="card-body">

                            <div class="row justify-content-center">
                                <div class="col">
                                    <p style="font-weight: 600;font-size:14px;">Ganancias</p>
                                    <p style="font-weight: 600;font-size:20px;">$682.5</p>
                                </div>
                                <div class="col">
                                    <div id="order-chart"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Subscribers Chart Card ends -->

                <!-- Orders Chart Card starts -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="card card-dark" style="border-radius:10px;background-color:#0B3C67;">
                        <div class="card-body">

                            <div class="row align-items-center">
                                <div class="col-5">
                                    <div class="avatar avatar-lg bg-secondary p-50 m-0">
                                        <div class="avatar-content">
                                            <img class="img" src="{{asset('images/zoe/svg/user.svg')}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <p style="font-weight: 600;font-size:14px;">Referidos</p>
                                    @if(count(auth()->user()->referrals) > 0)
                                    <p style="font-weight: 600;font-size:14px;">
                                        {{count(auth()->user()->referrals)}}
                                    </p>
                                    @else
                                    <p style="font-weight: 600;font-size:14px;">0</p>
                                    @endif
                                    <a href="#">
                                        <p style="font-weight:normal;font-size:11px;"><i data-feather='arrow-up-right'></i> Ver Todos</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Orders Chart Card ends -->
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="card card-dark" style="height: 150px;">
                        <div class="card-body ">
                            <h5 style="font-weight: 600;">Depositos</h5>
                            <h6 class="fw-bolder mt-1 text-white-50 mb-2">Sin depositos recientes</h6>
                            <span class="card-text font-small-3"><i data-feather='arrow-up-right'></i> Realizar deposito</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="card card-dark" style="height: 150px;">
                        <div class="card-body">
                            <h5 style="font-weight: 600;">Retiros</h5>
                            <h6 class="fw-bolder mt-1 text-white-50 mb-2">Sin retiros recientes</h6>
                            <span class="card-text font-small-3"><i data-feather='arrow-up-right'></i> Ver retiros</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="card card-dark" style="height: 150px;">
                        <div class="card-body">
                            <h5 style="font-weight: 600;">Plan activo</h5>
                            <h6 class="fw-bolder mt-1 text-white-50 mb-2">No posees plan activo</h6>
                            <span class="card-text font-small-3"><i data-feather='arrow-up-right'></i> Comprar plan educativo</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="
                  card-header
                  d-flex
                  flex-md-row flex-column
                  justify-content-md-between justify-content-start
                  align-items-md-center align-items-start
                ">
                        <p>Ganacias Por Mes <br> <span class="h2" style="font-weight: 600;">$1.300</span></p>

                        <div class="d-flex align-items-center mt-md-0 mt-1">
                            <i class="font-medium-2" data-feather="calendar"></i>
                            <input type="text" class="form-control flat-picker bg-transparent border-0 shadow-none" placeholder="YYYY-MM-DD" />
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="column-chart"></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-3">
            <div class="card" id="card-verificar-cuenta" style="border: none;">

                <div class="card-body">
                    <div class="m-2">
                        <img class="img" src="{{asset('images/zoe/svg/huella.svg')}}" />
                    </div>

                    <h4 style="font-weight: 600;">Verifica tu cuenta</h4>

                    <span class="card-text" style="font-weight: 600;">Necesitamos verificar <br> tu cuenta para mayor seguridad</span>


                </div>
                <div class="card-footer">
                    <div class="container">
                        <div class="d-grid gap-2">
                            <button class="btn rounded fw-bold" style="background-color: #4BCFEE;">Verificar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-dark" style="border: none;">
                <div class="card-header flex-column align-items-start pb-0 mb-2">
                    <h5>Cursos recientes</h5>
                </div>

                <div class="card mx-1" id="card-desarrolloPersonal" style="border: none; width: 90%;">
                    <div class="card-body">
                        <span class="badge bg-secondary mb-2 text-dark">Nuevo</span>
                        <h6 class="text-center" style="font-weight: 600;">Desarrollo Personal y Profesional</h6>
                        <div class="text-center">
                            <button class="btn btn-primary">Ver curso</button>
                        </div>
                    </div>
                </div>

                <div class="card mx-1" id="card-inteligenciaEmocional" style="border: none; width: 90%;">
                    <div class="card-body">
                        <span class="badge bg-secondary mb-2 text-dark">Nuevo</span>
                        <h6 class="text-center" style="font-weight: 600;">Inteligencia emocional</h6>
                        <div class="text-center">
                            <button class="btn btn-primary">Ver curso</button>
                        </div>
                    </div>
                </div>

                <div class="card mx-1" id="card-habilidadesBlandas" style="border: none; width: 90%;">
                    <div class="card-body">
                        <span class="badge bg-secondary mb-2 text-dark">Nuevo</span>
                        <h6 class="text-center" style="font-weight: 600;">Habilidades blandas para liderez</h6>
                        <div class="text-center">
                            <button class="btn btn-primary">Ver curso</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Dashboard Analytics end -->
@endsection

@section('vendor-script')
<!-- vendor files -->
<script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/moment.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap4.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/polyfill.min.js')) }}"></script>
@endsection
@section('page-script')
<!-- Page js files -->
<script src="{{ asset(mix('js/scripts/pages/dashboard-analytics.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/pages/app-invoice-list.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/extensions/ext-component-sweet-alerts.min.js')) }}"></script>

<script>
    function getlink() {
        var aux = document.createElement("input");
        aux.setAttribute("value", "{{route('register')}}?referred_id={{Auth::id()}}");
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);

        Swal.fire({
            title: "Link Copiado",
            icon: 'success',
            text: "Ya puedes pegarlo en su navegador",
            type: "success",
            confirmButtonClass: 'btn btn-secondary',
        })
    }
    // Column Chart
    // --------------------------------------------------------------------
    var flatPicker = $('.flat-picker'),
        isRtl = $('html').attr('data-textdirection') === 'rtl',
        chartColors = {
            column: {
                series1: '#826af9',
                series2: '#d2b0ff',
                bg: '#f8d3ff'
            },
            success: {
                shade_100: '#7eefc7',
                shade_200: '#06774f'
            },
            donut: {
                series1: '#ffe700',
                series2: '#00d4bd',
                series3: '#826bf8',
                series4: '#2b9bf4',
                series5: '#FFA1A1'
            },
            area: {
                series3: '#a4f8cd',
                series2: '#60f2ca',
                series1: '#2bdac7'
            }
        };

    var columnChartEl = document.querySelector('#column-chart'),
        columnChartConfig = {
            chart: {
                height: 400,
                type: 'bar',
                stacked: true,
                parentHeightOffset: 0,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    columnWidth: '15%',
                    colors: {
                        backgroundBarColors: [
                            chartColors.column.bg,
                            chartColors.column.bg,
                            chartColors.column.bg,
                            chartColors.column.bg,
                            chartColors.column.bg
                        ],
                        backgroundBarRadius: 10
                    }
                }
            },
            dataLabels: {
                enabled: false
            },
            legend: {
                show: true,
                position: 'top',
                horizontalAlign: 'start'
            },
            colors: [chartColors.column.series1, chartColors.column.series2],
            stroke: {
                show: true,
                colors: ['transparent']
            },
            grid: {
                xaxis: {
                    lines: {
                        show: true
                    }
                }
            },
            series: [{
                    name: 'Apple',
                    data: [90, 120, 55, 100, 80, 125, 175, 70, 88, 180]
                },
                {
                    name: 'Samsung',
                    data: [85, 100, 30, 40, 95, 90, 30, 110, 62, 20]
                }
            ],
            xaxis: {
                categories: ['7/12', '8/12', '9/12', '10/12', '11/12', '12/12', '13/12', '14/12', '15/12', '16/12']
            },
            fill: {
                opacity: 1
            },
            yaxis: {
                opposite: isRtl
            }
        };
    if (typeof columnChartEl !== undefined && columnChartEl !== null) {
        var columnChart = new ApexCharts(columnChartEl, columnChartConfig);
        columnChart.render();
    }
</script>
@endsection