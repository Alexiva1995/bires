

<style>
    html{
        overflow: hidden;
    }
</style>

{{-- @section('content') --}}
<!-- BEGIN: Content-->
<div class="auth-wrapper auth-v2">
        <div class="auth-inner row m-0">


        <!-- Left bg-->
        <div class=" d-lg-flex col-lg-4 align-items-center">
            <div class="align-items-center justify-content-center">
                <div class= "row justify-content-center">
                    <div class="col-auto">
                         <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Login-->
        <div class="d-flex col-lg-6 align-items-center auth-bg p-lg-4">

            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2">
                    <h2 class="card-title fw-bold mb-1 ">Usuario {{$user}}</h2>
                    <h4>Detalles del Intercambio</h4>
                    <h5>Billetera: <b>{{$billetera}}</b></h5>
                    <h5>Total a Recibir: <b>{{$total}}</b></h5>

                    <p>Este es su codigo de retiro pendiente, vigente por solo 30 minutos</p>
                    <p>Codigo: {{$code}}</p>

                </div>
            </div>

        </div>
        <!-- /Login-->
    </div>
</div>
<!-- END: Content-->
{{-- @endsection --}}
