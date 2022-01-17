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

    .f-medium{
      font-size: 14px;
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

    .confirmed-icon{
        width: 12rem;
        height: 12rem ;
    }

  </style>
  <script src="https://kit.fontawesome.com/5dbdb00de2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
@endsection

@section('content')

    <section>
        <div class="d-flex p-2 bd-highlight">
          <div class="border border-info border-5 rounded-1 container-fluid" style="background: #032351">
            <div class="row">
              <div class="col-sm-6">
                <h3 class="text-white ms-2 mt-1 ">Método de pago</h3>
              </div>
              <div class="col-sm-6">
                <h6 class="text-white ps-5 mt-2 f-little fw-lighter"> Datos protegidos por el estándar PCI DSS  </h6>
                <i class="bi bi-shield-fill-check"></i><i class="fas fa-shield-check"></i>
            </div>
            <hr class="text-white ms-0 col-12" style="width: 100% !important">
            <div class="col-12">

            <div class="row d-flex mx-auto mb-1 mt-2">

                <i class="fas fa-check-circle mx-auto text-center fa-10x"></i>
                <h3 class="text-white text-center font-bold d-block mx-auto mb-2">Pago realizado</h3>
                <p class="text-white text-center d-block mx-auto f-medium fw-lighter ">Se han agregado {} a su cuenta para ser</p>
                <p class="text-white text-center d-block mx-auto f-medium fw-lighter ">usados en nuestra plataforma.</p>


            </div>
            <div class="row mx-auto">
                <div class="col-6 mx-auto">
                <button type="submit" class="btn btn-yellow w-100 text-white" >Comprar {} ZOEC</button>
                <div class="mx-auto">
                    <p class="text-white text-center f-little fw-lighter mt-1 mb-0">Pagar 1 USD. Comisión incluida. </p>
                    <p class="text-white text-center f-little fw-lighter mt-0 mb-3" >Tiempo de ingreso ~ 20 minutos.</p>
                </div>
                </div>
            </div>

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

@endsection
