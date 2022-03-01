@extends('layouts/contentLayoutMaster')

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
    <h3 class="card-header">
      <strong style="height: 45px;width: 284.231201171875px;left: 0px;top: 0px;border-radius: undefinedpx; font-size: 30px;font-style: normal;font-weight: 700;line-height: 45px;letter-spacing: 0px;text-align: left;">Intercambio
      </strong>
    </h3>
    <section>
        <div class="d-flex p-2 bd-highlight">
          <div class="border border-info border-5 rounded-1 container-fluid primary-background" >
            <div class="row">
              <div class="col-sm-6">
               <h3 class="text-white ms-2 mt-2">
                  <strong style="height: 41px;width: 264px;left: 0px;top: 0px;border-radius: undefinedpx; Font family: Poppinsfont-style: SemiBold;font-size: 24px;line-height: 44px;line-height: 100%;Align: Left;vertical-align: top;number-case:number-spacing:">Comprando ZOEC</strong>
                </h3>
              </div>
              <div class="col-sm-6 mt-1" style="padding-left: 3%;">
                <h6 class="text-white ps-5 mt-2 f-little fw-lighter" style="font-style: normal;font-weight: 300;font-size: 14px;line-height: 21px;">
                  Datos protegidos por el estándar PCI DSS 
                 <td><img style="padding-left: 5%;"class="" src={{asset('img/paymentLogos/Vector.png')}} alt="Vector"/></td></h6>    
            </div>
            <hr class="text-white ms-0 col-12" style="width: 100% !important">
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
                    <input type="number" class="form-control" id="cantidad" name="cantidad" aria-describedby="" style="background: white;">
                    <span class="permanent-placeholder" style="color: #999999;font-size: 16px;">USD</span>
                    <div class="form-text">
                      <strong style="color:#4BCFEE;width:120px;height: 21px;top: 409px;left: 432px;">Comisión: 1 USD 
                        <img style="padding-left: 3%;width: 24.902777671813965px"class="" src={{asset('images/zoe/interrogacion.png')}} alt="interrogacion"/>
                      </strong> 
                    </div>
                  </div>
                  <div class="col-2">
                    <img class="" style="width: 6rem !important;height: 8rem !important;object-fit: contain; padding-left: 20%" src={{asset('images/zoe/Arrow.png')}} alt="Arrow">
                  </div>
                  <div class="mb-3 ps-2 col col-sm-5 flex-end input-container">
                    <label for="recibido" class="form-label text-white form-label-text-size">
                      <strong style="width: 130px;height: 36px;left: 431px;top: 304px;">Recibo</strong>
                   </label>
                    <input type="number" class="form-control" id="recibido" name="recibido" style="background: white;">
                    <span class="permanent-placeholder" style="color: #999999;font-size: 15px; padding-right:15%">ZOEC</span>
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
