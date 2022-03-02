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
    <div class="content-body">
        <h3 class="card-header mb-2"><strong>Planes</strong></strong></h3>
        <div class="container">
            <div class="row">
                @foreach ($plans as $item)
                    <div class="card container-fluid" style="width: 13rem; padding:4px">
                        <div class="text-center mt-1">
                            <font size="4"><strong>{{$item->name}}</strong></font>
                        </div>
                        <div style="flex: 1 1 auto;padding: 1rem 1rem;">
                            <p class="text-center" style="font-size: 13px; color: white;">
                                <strong>{{$item->Description}}</strong>
                            </p>

                            <div style="font-size: 11px">
                                <strong>Retorno:</strong> 
                                <strong style="color: rgba(117, 202, 255, 1); font-size: 12px">
                                    7.5% por mes
                                </strong>
                            </div>
                            <br>
                            <div class="d-grid gap-4 col-20 mx-auto">
                                <a href="#" target="_blank" class="btn">
                                   <strong style="font-style: normal;font-weight: 600;font-size: 13.5px;line-height: 105%;">
                                       {{ $item->price }} ZOEC
                                   </strong>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
