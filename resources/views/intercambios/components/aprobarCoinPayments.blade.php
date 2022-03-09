 @extends('layouts/contentLayoutMaster')


@push('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
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
    strong.intercambio{
    height: 45px;
    width: 284.231201171875px;
    left: 0px;
    top: 0px;
    border-radius: undefinedpx; 
    font-size: 30px;
    font-style: normal;
    font-weight: 700;
    line-height: 45px;
    letter-spacing: 0px;
    text-align: left;
  }
  button.btn{
    background-color:  #4BCFEE;
  }
  </style>
@endpush

@section('content')
  <h3 class="card-header">
    <strong class="intercambio">Aprobar Intercambio</strong>
  </h3>
<!-- Modal -->
<div class="{{-- modal fade --}} col-8 offset-md-2" id="modalModalAprobar" {{-- tabindex="-1" role="dialog" aria-labelledby="modalModalAprobarTitle"
    aria-hidden="true" --}}>
    <div class="{{-- modal-dialog modal-dialog-centered modal-dialog-centered" role="document" --}} card bg-lp>
       
        <div class="{{-- modal-content --}}">
            <div class="{{-- modal-header --}} card-header">
                <h5 class="{{-- modal-title --}} card-title " id="modalModalAprobarTitle">Aprobar Intercambio</h5>
                {{-- <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            <div class="{{-- modal-body --}} text-justify card-body card-dashboard">
                {{-- <div class="alert alert-primary" role="alert">
                    Intentos Fallidos {{session('intentos_fallidos')}}/3
                  </div> --}}
                <form action="{{route('settlement.process')}}" method="post">
                    @csrf
                    <input type="hidden" name="action" value="aproved">

                    <div class="form-group" >
                        <label for="">Codigo Correo</label>

                        <input type="hidden" name="wallet" value={{$data['wallet']}}>
                        <input type="hidden" name="idLiquidation" value={{$data['idLiquidation']}}>
                        <input type="text " name="correo_code" class="form-control text-dark" required>
                        <div class="col-12 text-center mt-1">
                            {{-- <button type="button" class="btn btn-info text'white" v-on:click='sendCodeEmail' v-if='idliquidacion == 0'>Enviar Codigo</button> --}}
                            <span class=''>Codigo Enviado, tienes 30 min sino se cancelara el retiro automaticamente</span>
                        </div>
                    </div>

                   {{--  <div class="form-group" >
                        <label for="">Codigo Google</label>
                        <input type="text" name="google_code" class="form-control" required>
                    </div> --}}

                    <div class="form-group text-center">
                        <button class="btn  mt-2" style="background-color:  #4BCFEE;">Aprobar</button>
                    </div>
                </form>
            </div>
            {{-- <div class="{{-- modal-footer --">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cerrar</button>
            </div> --}}
        </div>
    </div>
</div>
@endsection
