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
              <strong style="height: 41px;width: 264px;left: 0px;top: 0px;border-radius: undefinedpx; Font family: Poppinsfont-style: SemiBold;font-size: 24px;line-height: 44px;line-height: 100%;Align: Left;vertical-align: top;number-case:number-spacing:">
                  Comprar vía wompi
              </strong>
            </h3>
          </div>
          <div class="col-sm-6 mt-1" style="padding-left: 2%;">
            <h6 class="text-white ps-5 mt-2 f-little fw-lighter" style="font-style: normal;font-weight: 300;font-size: 14px;line-height: 21px;">
                  Datos protegidos por el estándar PCI DSS 
                  <td>
                    <img style="padding-left: 5%;"class="" src={{asset('img/paymentLogos/Vector.png')}} alt="Vector"/>
                  </td>
            </h6>    
          </div>
          <hr class="text-white ms-0 col-12" style="width: 100% !important">
          <div class="col-12 mt-1">
            <div class="row d-flex mt-4">
              <div class="mt3 ps-2 col col-sm-5 flex-start input-container">
	              <button type="submit" class="card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto rounded ">
	            		<img class="img-fluid card-img-size " src={{asset('images/zoe/payments/wompi.png')}} alt="back-transfer">
	       				</button>
       				</div>
              <div class="col-1"></div>
              <div class="mb-3 ps-2 col col-sm-5 flex-end input-container" style="padding-right:0%;"> 
                <strong style="padding-left:12%;height: 41px;width: 264px;left: 0px;top: 0px;border-radius: undefinedpx; Font family: Poppinsfont-style: SemiBold;font-size: 24px;line-height: 44px;line-height: 100%;Align: Left;vertical-align: top;number-case:number-spacing:">
                  Método vía Wompi 
                </strong>
                <p class="mt-1" style="font-style: Medium;font-size: 18px;line-height: 36px;line-height: 100%; padding-left:12%">
                  <strong>Completa tu pago ahora!</strong>
                </p>
                <button type="submit" class="btn-sm text-white lead mt-2" style="height: 60px;width: 330.375px;left: 867px;top: 467px;border-radius: 4px;">
                  <strong style="font-style: normal;font-weight: 300;font-size: 21px;">
                    Comprar <strong style="font-size:21px;">{{$data['cantidad']}} ZOEC</strong> 
                  </strong>
                </button>
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
          </form>
        </div>
      </div>
    </div>
  </section>
</div>


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
