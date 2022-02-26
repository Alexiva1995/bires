@extends('layouts/contentLayoutMaster')

@section('title', 'Intercambios')

@section('vendor-style')
  <style>
    .form-label-text-size{
	    font-size:1.6rem !important;
    }

    .input-container {
      position: relative;
      width: 150px;
    }

    .input-container input {
      width: 100%;
    }

    .permanent-placeholder{

      position: absolute;
      display: block;
      top: 3.2rem;
      right: 1.5rem;
      color: #cccccc;
      /* padding-left: 5px; */
      width: 45px;
    }

    .f-little{
      font-size: 10px;
    }

    .secondary{
      color:#F5A707 !important;
    }


    .btn-yellow {
      color: #22292f !important;
      background-color: #F5A707 !important;
      border-color: #F5A707 !important;
    }
    .btn-sm{
      background-color: #4BCFEE;
    }

    .primary-background{
        background: #032351;
    }
    
  </style>
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
@endsection

@section('content')

    <section>
        <div class="d-flex p-2 bd-highlight">
          <div class="border border-info border-5 rounded-1 container-fluid primary-background" >
            <div class="row">
              <div class="col-sm-6">
                <h3 class="text-white ms-2 mt-1" style="font-style: normal;font-weight: 500;font-size: 29px;line-height: 43px;">Comprando ZOEC</h3>
              </div>
              <div class="col-sm-6 mt-1">
                <h6 class="text-white ps-5 mt-2 f-little fw-lighter" style="font-style: normal;font-weight: 300;font-size: 14px;line-height: 21px;"> Datos protegidos por el estándar PCI DSS <td><img style="width: 20px;height:22px;top:1px;left:320px" src={{asset('img/paymentLogos/Vector.png')}} alt="Vector"/></td></h6>
                
            </div>
            <hr class="text-white ms-0 col-12 mt-1" style="width: 100% !important">
            <div class="col-12 mt-1">
                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('status') }}
                    </div>
                @endif
              <form action="{{route('intercambios.payment-methods')}}" method="post">
                @csrf
                <div class="row d-flex">
                  <div class="mb-3 ps-2 col col-sm-5 flex-start input-container">
                    <label for="cantidad" class="form-label text-white form-label-text-size">
                      <strong style="width: 130px;height: 36px;left: 431px;top: 304px;">Cantidad</strong>
                    </label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" aria-describedby="emailHelp">
                    <span class="permanent-placeholder">USD</span>
                    <div class="form-text"><strong style="color:#4BCFEE;width:120px;height: 21px;top: 409px;left: 432px;">Comisión: 1 USD</strong></div>
                  </div>
                  <div class="col-sm-2"></div>
                  <div class="mb-3 ps-2 col col-sm-5 flex-end input-container">
                    <label for="recibido" class="form-label text-white form-label-text-size">
                      <strong style="width: 130px;height: 36px;left: 431px;top: 304px;">Recibo</strong>
                   </label>
                    <input type="number" class="form-control" id="recibido" name="recibido">
                    <span class="permanent-placeholder">ZOEC</span>
                    <div class="form-text"><strong style="color:#4BCFEE;width: 192px;height: 21px;left: 969px;top: 405px;">Cantidad recibida en ZOEC</strong></div>
                  </div>
                </div>
                <div class="row mx-auto">
                  <div class="col-6 mx-auto" style="padding-left: 9%">
                    <button type="submit" class="btn-sm text-white lead" style="
                      width: 402.38px;height: 60px;top: 488px;">
                       <strong style="font-style: normal;font-weight: 300;font-size: 24px;">Continuar</strong>
                    </button>
                    <div class="mx-auto">
                      <p class="text-white text-center f-little fw-lighter mt-1 mb-0">
                        <strong style=" padding-right:10%;color:white;width: 321px;height: 48px;top: 562px;
                        ;">
                          Pagar 1 USD. Comisión incluida. 
                        </strong>
                      </p>
                      <p class="text-white text-center f-little fw-lighter mt-0 mb-3">
                        <strong style="padding-right: 10%; color:white;width: 321px;height: 48px;top: 562px;
                        ;">
                          Tiempo de ingreso ~ 20 minutos.
                        </strong>
                      </p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </section>



@endsection

@section('vendor-script')
  <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
@endsection
@section('page-script')

    <script>
        document.getElementById("cantidad").onchange = function() {updateValues()};

        function updateValues() {
            let cantidad = document.getElementById("cantidad");
            recibido.value = cantidad.value - 1;
        }

        document.getElementById("recibido").onchange = function() {updateValuesRecibidos()};

        function updateValuesRecibidos() {
            let recibido = document.getElementById("recibido");

            cantidad.value = parseFloat(recibido.value) + parseFloat(1);
        }


    </script>

@endsection
