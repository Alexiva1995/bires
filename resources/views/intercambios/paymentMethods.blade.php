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
    .btn-yellow:hover {
      color: #22292f;
      background-color: #ffad5f !important;
      border-color: #ffa956 !important;
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
                  <strong style="height: 41px;width: 264px;left: 0px;top: 0px;border-radius: undefinedpx; Font family: Poppinsfont-style: SemiBold;font-size: 24px;line-height: 44px;line-height: 100%;Align: Left;vertical-align: top;number-case:number-spacing:">Método de pago</strong>
                </h3>
              </div>
              <div class="col-sm-6 mt-1">
                <h6 class="text-white ps-5 mt-2 f-little fw-lighter" style="font-style: normal;font-weight: 300;font-size: 14px;line-height: 21px;"> Datos protegidos por el estándar PCI DSS <td><img style="padding-left: 5%;"class="" src={{asset('img/paymentLogos/Vector.png')}} alt="Vector"/></td></h6>
            </div>
            <hr class="text-white ms-0 col-12 " style="width: 100% !important">
                {{-- <form action={{route('settlement.aprobarRetiro')}} method="POST"> --}}
                  {{--   @csrf --}}
                    @include('intercambios.components.paymentCards')
                    <input type="hidden" name="cantidad" value={{$data['cantidad']}} id="cantidad" >
                    <input type="hidden" name="recibido" value={{$data['recibido']}} id="recibido" >
               {{--  </form> --}}
          </div>
        </div>
        @include('intercambios.components.modalCoinPaymentsWallet')
        @include('intercambios.components.modalStripe')
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
      function traerData(){
        var cantidad = document.getElementById('cantidad').value;
        //let inputCantidad = document.querySelector('.cantidad');
        $('.cantidad').val(cantidad);     

        var recibido = document.getElementById('recibido').value;
        $('.recibido').val(recibido);
        
      }
    </script>
@endsection
