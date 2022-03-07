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
                  		Comprar vía coinpayments
                  </strong>
                </h3>
              </div>
              <div class="col-sm-6 mt-1" style="padding-left: 2%;">
                <h6 class="text-white ps-5 mt-2 f-little fw-lighter" style="font-style: normal;font-weight: 300;font-size: 14px;line-height: 21px;">
                  Datos protegidos por el estándar PCI DSS 
                 <td><img style="padding-left: 5%;"class="" src={{asset('img/paymentLogos/Vector.png')}} alt="Vector"/></td></h6>    
            </div>
            <hr class="text-white ms-0 col-12" style="width: 100% !important">
            <div class="col-12 mt-1">
                <div class="row d-flex mt-4">
                    <div class="mt3 ps-2 col col-sm-5 flex-start input-container">
	                    <button type="submit" class="card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto rounded ">
	            			<img class="img-fluid card-img-size " src={{asset('images/zoe/payments/coinpayments.png')}} alt="coinpayments">
	       				</button>
       				</div>
                    <div class="col-1"></div>
                    <div class="mb-3 ps-2 col col-sm-5 flex-end input-container" style="padding-right:0%;"> 
                  		<strong style="height: 41px;width: 264px;left: 0px;top: 0px;border-radius: undefinedpx; Font family: Poppinsfont-style: SemiBold;font-size: 24px;line-height: 44px;line-height: 100%;Align: Left;vertical-align: top;number-case:number-spacing:">
                  			Método vía Coinpayments
                  		</strong>
                  		<p class="mt-1" style="font-style: Medium;font-size: 20px;line-height: 36px;line-height: 100%; padding-left:10%">
                  			<strong>Completa tu pago ahora!</strong>
                  		</p>
                  		<button type="submit" data-bs-toggle="modal" data-bs-target="#modalInfo" onclick="mostrarWallet()" class="btn-sm text-white lead mt-2" style="height: 60px;width: 330.375px;left: 867px;top: 467px;border-radius: 4px"; data-bs-toggle="modal" data-bs-target="#modalInfo" onclick="mostrarWallet()">
                       		<strong style="font-style: normal;font-weight: 300;font-size: 21px;">
                       			Comprar 
                            <strong style="font-size:21px;">
                              {{$data['cantidad']}} ZOEC
                            </strong> 
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
	<!-- Modal -->
	<div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modalInfoTitle" aria-hidden="true">
	    <div class="modal-dialog modal-dialog-centered modal-dialog-centered  " role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title " id="modalInfoTitle">Método de pago: Coinpayments.</h5>
	                <button type="button" style="background-color: #4BCFEE;" data-bs-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <div class="modal-body text-justify primary-background">
	                <form action="{{route('settlement.aprobarDeposito')}}" method="post">
	                    @csrf

	                        <label for="form-control ">Ingrese su billetera USDT TRC20</label>
	                        <input type="text" name="wallet" id="modal-wallet" value="" class="form-control mt-2">
                          <input type="hidden" name="cantidad" id="modal-cantidad" value="{{$data['cantidad']}}" class="form-control text-white">
                          <input type="hidden" name="recibido" id="modal-recibido" value="{{$data['recibido']}}" class="form-control text-white">
	                       
  
	                    </h5>
	                    <div class="col-12 text-center">
	                        <button type="submit" class="btn text-white mt-2" style="background-color:  #4BCFEE;">Continuar</button>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
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
        
        function mostrarWallet() {
	        var cantidad = document.getElementById('cantidad').value;

	        document.getElementById('modal-cantidad').value = cantidad;

	        var recibido = document.getElementById('recibido').value;
	        document.getElementById('modal-recibido').value = recibido;
        }
    </script>
@endsection
