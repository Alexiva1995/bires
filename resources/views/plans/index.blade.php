@extends('layouts.contentLayoutMaster')

@push('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
@endpush

@push('page_vendor_js')
<script src="{{asset('assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/extensions/polyfill.min.js')}}"></script>
@endpush


<style>
  div.container-fluid{
    -webkit-transform: scale(1,1);
    -webkit-transition-timing-function: ease-out;
    -webkit-transition-duration: 250ms;
    -moz-transform: scale(1,1);
    -moz-transition-timing-function: ease-out;
    -moz-transition-duration: 250ms;
  }
  div.container-fluid:hover{
    -webkit-transform: scale(1.12,1.12);
    -webkit-transition-timing-function: ease-out;
    -webkit-transition-duration: 100ms;
    -moz-transform: scale(1.12,1.12);
    -moz-transition-timing-function: ease-out;
    -moz-transition-duration: 100ms;
  }

  a.btn{
   background-color: #4BCFEE;
  }
</style>

@section('content')
<body style="background: radial-gradient(50% 50% at 50% 50%, #05103A 0%, #05103A 100%);">
    <div class="content-body">
        <h3 class="card-header mb-2"><strong>Planes</strong></strong></h3>
        <div class="container">
            <div class="row">
               <div class="card container-fluid" style="width: 13rem; padding:14px">
                   <div class="text-center mt-1">
                        <p size="4">
                            <strong style=" font-size:21px; height: 25px;width: 135px;left: 7.5px;top: 0px;border-radius: nullpx;">  Plan Inicial
                            </strong>
                        </p>
                    </div>
                    <div style="flex: 1 1 auto;padding: 0rem 0.5rem;">
                        <p class="text-center" style="height: 45px;width: 150px;top: 46px;border-radius: nullpx;">
                            <strong style="font-size: 14px;font-style: normal;font-weight: 400;line-height: 20px;letter-spacing: 0.0075em;">
                                Ideal para iniciar y tener acceso a la academia y servicios.
                            </strong>
                        </p>

                        <div class="mt-3" style="font-size: 11px">
                            <img class="img-fluid card-img-size " src={{asset('images/zoe/retorno.png')}} alt="retorno">
                        </div>
                        <br>
                        <div class="d-grid gap-4 col-20 mx-auto mt-2">
                            <a href="#" target="_blank" class="btn" style=" margin-bottom: 13%; width: 150px;">
                                <strong style="height: 19px;width: 83px;left: 21px;top: 5px;border-radius: nullpx;">
                                    100 ZOEC
                                </strong>
                            </a>
                        </div>
                    </div> 
                </div>
                 <div class="card container-fluid" style="width: 13rem; padding:14px">
                   <div class="text-center mt-1">
                        <p size="4">
                            <strong style=" font-size:21px; height: 25px;width: 135px;left: 7.5px;top: 0px;border-radius: nullpx;"> 
                                Plan Pro
                            </strong>
                        </p>
                    </div>
                    <div style="flex: 1 1 auto;padding: 0rem 0.5rem;">
                        <p class="text-center" style="height: 45px;width: 150px;top: 46px;border-radius: nullpx;">
                            <strong style="font-size: 14px;font-style: normal;font-weight: 400;line-height: 20px;letter-spacing: 0.0075em;">
                                Ideal para iniciar y tener acceso a la academia y servicios.
                            </strong>
                        </p>

                        <div class="mt-3" style="font-size: 11px">
                            <img class="img-fluid card-img-size " src={{asset('images/zoe/retorno.png')}} alt="retorno">
                        </div>
                        <br>
                        <div class="d-grid gap-4 col-20 mx-auto mt-2">
                            <a href="#" target="_blank" class="btn" style=" margin-bottom: 13%; width: 150px;">
                                <strong style="height: 19px;width: 83px;left: 21px;top: 5px;border-radius: nullpx;">
                                    200 ZOEC
                                </strong>
                            </a>
                        </div>
                    </div> 
                </div>
                <div class="card container-fluid" style="width: 13rem; padding:14px">
                   <div class="text-center mt-1">
                        <p size="4">
                            <strong style=" font-size:21px; height: 25px;width: 135px;left: 7.5px;top: 0px;border-radius: nullpx;">  Plan Business
                            </strong>
                        </p>
                    </div>
                    <div style="flex: 1 1 auto;padding: 0rem 0.5rem;">
                        <p class="text-center" style="height: 45px;width: 150px;top: 46px;border-radius: nullpx;">
                            <strong style="font-size: 14px;font-style: normal;font-weight: 400;line-height: 20px;letter-spacing: 0.0075em;">
                                Ideal para iniciar y tener acceso a la academia y servicios.
                            </strong>
                        </p>

                        <div class="mt-3" style="font-size: 11px">
                            <img class="img-fluid card-img-size " src={{asset('images/zoe/retorno.png')}} alt="retorno">
                        </div>
                        <br>
                        <div class="d-grid gap-4 col-20 mx-auto">
                            <a href="#" target="_blank" class="btn" style=" margin-bottom: 13%; width: 150px;">
                                <strong style="height: 19px;width: 83px;left: 21px;top: 5px;border-radius: nullpx;">
                                    1200 ZOEC
                                </strong>
                            </a>
                        </div>
                    </div> 
                </div>
                <div class="card container-fluid" style="width: 13rem; padding:14px">
                   <div class="text-center mt-1">
                        <p size="4">
                            <strong style=" font-size:21px; height: 25px;width: 135px;left: 7.5px;top: 0px;border-radius: nullpx;">  Plan Lider
                            </strong>
                        </p>
                    </div>
                   <div style="flex: 1 1 auto;padding: 0rem 0.5rem;">
                        <p class="text-center" style="height: 45px;width: 150px;top: 46px;border-radius: nullpx;">
                            <strong style="font-size: 14px;font-style: normal;font-weight: 400;line-height: 20px;letter-spacing: 0.0075em;">
                                Ideal para iniciar y tener acceso a la academia y servicios.
                            </strong>
                        </p>

                        <div class="mt-3" style="font-size: 11px">
                            <img class="img-fluid card-img-size " src={{asset('images/zoe/retorno.png')}} alt="retorno">
                        </div>
                        <br>
                        <div class="d-grid gap-4 col-20 mx-auto mt-2">
                            <a href="#" target="_blank" class="btn" style=" margin-bottom: 13%; width: 150px;">
                                <strong style="height: 19px;width: 83px;left: 21px;top: 5px;border-radius: nullpx;">
                                    2000 ZOEC
                                </strong>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card container-fluid" style="width: 13rem; padding:14px">
                   <div class="text-center mt-1">
                        <p size="4">
                            <strong style=" font-size:21px; height: 25px;width: 135px;left: 7.5px;top: 0px;border-radius: nullpx;">  Plan Wolf
                            </strong>
                        </p>
                    </div>
                   <div style="flex: 1 1 auto;padding: 0rem 0.5rem;">
                        <p class="text-center" style="height: 45px;width: 150px;top: 46px;border-radius: nullpx;">
                            <strong style="font-size: 14px;font-style: normal;font-weight: 400;line-height: 20px;letter-spacing: 0.0075em;">
                                Ideal para iniciar y tener acceso a la academia y servicios.
                            </strong>
                        </p>

                        <div class="mt-3" style="font-size: 11px">
                            <img class="img-fluid card-img-size " src={{asset('images/zoe/retorno.png')}} alt="retorno">
                        </div>
                        <br>
                        <div class="d-grid gap-4 col-20 mx-auto mt-2">
                            <a href="#" target="_blank" class="btn" style=" margin-bottom: 13%; width: 150px;">
                                <strong style="height: 19px;width: 83px;left: 21px;top: 5px;border-radius: nullpx;">
                                    3000 ZOEC
                                </strong>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card container-fluid" style="width: 13rem; padding:14px">
                   <div class="text-center mt-1">
                        <p size="4">
                            <strong style=" font-size:21px; height: 25px;width: 135px;left: 7.5px;top: 0px;border-radius: nullpx;">  Plan Inicial
                            </strong>
                        </p>
                    </div>
                    <div style="flex: 1 1 auto;padding: 0rem 0.5rem;">
                        <p class="text-center" style="height: 45px;width: 150px;top: 46px;border-radius: nullpx;">
                            <strong style="font-size: 14px;font-style: normal;font-weight: 400;line-height: 20px;letter-spacing: 0.0075em;">
                                Ideal para iniciar y tener acceso a la academia y servicios.
                            </strong>
                        </p>

                        <div class="mt-3" style="font-size: 11px">
                            <img class="img-fluid card-img-size " src={{asset('images/zoe/retorno.png')}} alt="retorno">
                        </div>
                        <br>
                        <div class="d-grid gap-4 col-20 mx-auto mt-2">
                            <a href="#" target="_blank" class="btn" style=" margin-bottom: 13%; width: 150px;">
                                <strong style="height: 19px;width: 83px;left: 21px;top: 5px;border-radius: nullpx;">
                                    5000 ZOEC
                                </strong>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card container-fluid" style="width: 13rem; padding:14px">
                   <div class="text-center mt-1">
                        <p size="4">
                            <strong style=" font-size:21px; height: 25px;width: 135px;left: 7.5px;top: 0px;border-radius: nullpx;">  Plan Inicial
                            </strong>
                        </p>
                    </div>
                   <div style="flex: 1 1 auto;padding: 0rem 0.5rem;">
                        <p class="text-center" style="height: 45px;width: 150px;top: 46px;border-radius: nullpx;">
                            <strong style="font-size: 14px;font-style: normal;font-weight: 400;line-height: 20px;letter-spacing: 0.0075em;">
                                Ideal para iniciar y tener acceso a la academia y servicios.
                            </strong>
                        </p>

                        <div class="mt-3" style="font-size: 11px">
                            <img class="img-fluid card-img-size " src={{asset('images/zoe/retorno.png')}} alt="retorno">
                        </div>
                        <br>
                        <div class="d-grid gap-4 col-20 mx-auto mt-2">
                            <a href="#" target="_blank" class="btn" style=" margin-bottom: 13%; width: 150px;">
                                <strong style="height: 19px;width: 83px;left: 21px;top: 5px;border-radius: nullpx;">
                                    10.000 ZOEC
                                </strong>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card container-fluid" style="width: 13rem; padding:14px">
                   <div class="text-center mt-1">
                        <p size="4">
                            <strong style=" font-size:21px; height: 25px;width: 135px;left: 7.5px;top: 0px;border-radius: nullpx;">  Plan Inicial
                            </strong>
                        </p>
                    </div>
                   <div style="flex: 1 1 auto;padding: 0rem 0.5rem;">
                        <p class="text-center" style="height: 45px;width: 150px;top: 46px;border-radius: nullpx;">
                            <strong style="font-size: 14px;font-style: normal;font-weight: 400;line-height: 20px;letter-spacing: 0.0075em;">
                                Ideal para iniciar y tener acceso a la academia y servicios.
                            </strong>
                        </p>

                        <div class="mt-3" style="font-size: 11px">
                            <img class="img-fluid card-img-size " src={{asset('images/zoe/retorno.png')}} alt="retorno">
                        </div>
                        <br>
                        <div class="d-grid gap-4 col-20 mx-auto mt-2">
                            <a href="#" target="_blank" class="btn" style=" margin-bottom: 13%; width: 150px;">
                                <strong style="height: 19px;width: 83px;left: 21px;top: 5px;border-radius: nullpx;">
                                    30.000 ZOEC
                                </strong>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card container-fluid" style="width: 13rem; padding:14px">
                   <div class="text-center mt-1">
                        <p size="4">
                            <strong style=" font-size:21px; height: 25px;width: 135px;left: 7.5px;top: 0px;border-radius: nullpx;">  Plan Inicial
                            </strong>
                        </p>
                    </div>
                   <div style="flex: 1 1 auto;padding: 0rem 0.5rem;">
                        <p class="text-center" style="height: 45px;width: 150px;top: 46px;border-radius: nullpx;">
                            <strong style="font-size: 14px;font-style: normal;font-weight: 400;line-height: 20px;letter-spacing: 0.0075em;">
                                Ideal para iniciar y tener acceso a la academia y servicios.
                            </strong>
                        </p>

                        <div class="mt-3" style="font-size: 11px">
                            <img class="img-fluid card-img-size " src={{asset('images/zoe/retorno.png')}} alt="retorno">
                        </div>
                        <br>
                        <div class="d-grid gap-4 col-20 mx-auto mt-2">
                            <a href="#" target="_blank" class="btn" style=" margin-bottom: 13%; width: 150px;">
                                <strong style="height: 19px;width: 83px;left: 21px;top: 5px;border-radius: nullpx;">
                                    50.000 ZOEC
                                </strong>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card container-fluid" style="width: 13rem; padding:14px">
                   <div class="text-center mt-1">
                        <p size="4">
                            <strong style=" font-size:21px; height: 25px;width: 135px;left: 7.5px;top: 0px;border-radius: nullpx;">  Plan Inicial
                            </strong>
                        </p>
                    </div>
                    <div style="flex: 1 1 auto;padding: 0rem 0.5rem;">
                        <p class="text-center" style="height: 45px;width: 150px;top: 46px;border-radius: nullpx;">
                            <strong style="font-size: 14px;font-style: normal;font-weight: 400;line-height: 20px;letter-spacing: 0.0075em;">
                                Ideal para iniciar y tener acceso a la academia y servicios.
                            </strong>
                        </p>

                        <div class="mt-3" style="font-size: 11px">
                            <img class="img-fluid card-img-size " src={{asset('images/zoe/retorno.png')}} alt="retorno">
                        </div>
                        <br>
                        <div class="d-grid gap-4 col-20 mx-auto mt-2">
                            <a href="#" target="_blank" class="btn" style=" margin-bottom: 13%; width: 150px;">
                                <strong style="height: 19px;width: 83px;left: 21px;top: 5px;border-radius: nullpx;">
                                    100.000 ZOEC
                                </strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<body>
@endsection
