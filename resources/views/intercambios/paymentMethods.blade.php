@extends('layouts/contentLayoutMaster')

@section('title', 'Método de pago')

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

    <section>
        <div class="d-flex p-2 bd-highlight">
          <div class="border border-info border-5 rounded-1 container-fluid primary-background" >
            <div class="row">
              <div class="col-sm-6">
                <h3 class="text-white ms-2 mt-1 ">Método de pago</h3>
              </div>
              <div class="col-sm-6">
                <h6 class="text-white ps-5 mt-2 f-little fw-lighter"> Datos protegidos por el estándar PCI DSS </h6>
                <i class="bi bi-shield-fill-check"></i><i class="fas fa-shield-check"></i>
            </div>
            <hr class="text-white ms-0 col-12" style="width: 100% !important">
                {{-- <form action={{route('settlement.aprobarRetiro')}} method="POST"> --}}
                  {{--   @csrf --}}
                    @include('intercambios.components.paymentCards')
                    <input type="hidden" name="cantidad" value={{$data['cantidad']}} id="cantidad" >
                    <input type="hidden" name="recibido" value={{$data['recibido']}} id="recibido" >
               {{--  </form> --}}
          </div>
        </div>
        @include('intercambios.components.modalCoinPaymentsWallet')
    </section>



@endsection

@section('vendor-script')
  <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
@endsection
@section('page-script')

@endsection
