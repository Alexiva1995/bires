
@extends('layouts/contentLayoutMaster')

@section('title', 'Dashboard Analytics')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap4.min.css')) }}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-invoice-list.css')) }}">
  @endsection

@section('content')
<!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">

<div class="">
    <h2>Hola bienvenido</h2>
</div>
<div class="row">
    <div class="col-9">

        <div class="row">
            <div class="col-5 align-self-center">
                <span>Wilmar Cardona a Generacion Zoe</span>
            </div>
            <div class="col-2 align-self-center">
                <span class="" ><i data-feather='arrow-up-right'></i> Tu link de referido</span>
            </div>
            <div class="col-2">
                <div class="btn-group">
                    <button
                      class="btn btn-flat-primary dropdown-toggle"
                      type="button"
                      id="dropdownMenuButton100"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
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
                    <button class="btn btn-secondary btn-sm rounded-pill"><i data-feather='copy'></i> Copiar enlace</button>
                </div>
            </div>
        </div>

        @include('components.tranding-view')

        <div class="row match-height">
            <!-- Greetings Card starts -->
            <div class="col-xl-4 col-md-6 col-12">
                <div class="card card-dark">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-4 align-self-center">
                            <img class="img" style="width: 100%;" src="{{asset('images/illustration/badge.svg')}}" />
                        </div>
                        <div class="col-4">
                            <h5>Balance</h5>
                            <h2 class="fw-bolder mt-1">1.200</h2>
                            <span class="card-text font-small-3"><i data-feather='arrow-up-right'></i> Comprar</span>
                        </div>
                        <div class="col-4 align-self-center">
                            <h5>ZOEC</h5>
                        </div>
                    </div>
               
                  </div>
                </div>
            </div>
            <!-- Greetings Card ends -->

            <!-- Subscribers Chart Card starts -->
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="card card-dark">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5>Ganancias</h5>
                                <h2 class="fw-bolder mt-1">$682.5</h2>
                            </div>
                            <div class="col-6">
                                <div id="avg-sessions-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Subscribers Chart Card ends -->

            <!-- Orders Chart Card starts -->
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <div class="avatar bg-light-warning p-50 m-0">
                                    <div class="avatar-content">
                                    <i data-feather="package" class="font-medium-5"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <h5>Referidos</h5>
                                <h5 class="fw-bolder mt-1">25</h5>
                                <span class="card-text font-small-3"><i data-feather='arrow-up-right'></i> Ver todos</span>
                            </div>
                            <div class="col-3 align-self-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Orders Chart Card ends -->
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Depositos</h5>
                        <h5 class="fw-bolder mt-1 text-white-50">Sin depositos recientes</h5>
                        <span class="card-text font-small-3"><i data-feather='arrow-up-right'></i> Realizar deposito</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Retiros</h5>
                        <h5 class="fw-bolder mt-1 text-white-50">Sin retiros recientes</h5>
                        <span class="card-text font-small-3"><i data-feather='arrow-up-right'></i> Ver retiros</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Plan activo</h5>
                        <h5 class="fw-bolder mt-1 text-white-50">No posees plan activo</h5>
                        <span class="card-text font-small-3"><i data-feather='arrow-up-right'></i> Comprar plan educativo</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
              <div
                class="
                  card-header
                  d-flex
                  flex-md-row flex-column
                  justify-content-md-between justify-content-start
                  align-items-md-center align-items-start
                "
              >
                <h4 class="card-title">Data Science</h4>
                <div class="d-flex align-items-center mt-md-0 mt-1">
                  <i class="font-medium-2" data-feather="calendar"></i>
                  <input
                    type="text"
                    class="form-control flat-picker bg-transparent border-0 shadow-none"
                    placeholder="YYYY-MM-DD"
                  />
                </div>
              </div>
              <div class="card-body">
                <div id="column-chart"></div>
              </div>
            </div>
        </div>

    </div>
    <div class="col-3">
        <div class="card">
            <div class="card-header flex-column align-items-start pb-0">
              <div class="avatar bg-light-primary p-50 m-0">
                <div class="avatar-content">
                  <i data-feather="users" class="font-medium-5"></i>
                </div>
              </div>
              <h2 class="fw-bolder mt-1">92.6k</h2>
              <p class="card-text">Subscribers Gained</p>
            </div>
            <div id="gained-chart"></div>
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
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/pages/dashboard-analytics.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/app-invoice-list.js')) }}"></script>

  <script>
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
        series: [
            {
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
