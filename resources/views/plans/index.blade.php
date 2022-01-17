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
</style>

@section('content')
    <div class="content-body mb-6">
        <h3 class="card-header mb-2"><strong>PLANES</strong></strong></h3>
        <div class="container">
            <div class="row">
                @foreach ($plans as $item)
                    <div class="card container-fluid" style="width: 17rem;">
                        <div class="text-center mt-1"><font size="4"><strong>{{$item->name}}</strong></font></div>
                            <div class="card-body">
                                <p class="text-center">{{$item->Description}}</p>
                            
                                <div>Retorno: <strong style="color: #F5A707;">7.5% por mes</strong></div>
                                <br>
                                <div class="d-grid gap-4 col-20 mx-auto">
                                    <a href="#" target="_blank" class="btn btn-secondary">
                                        {{ $item->price }} ZOEC
                                    </a>
                                </div>
                            </div>
                        </div>
                    {{-- </div> --}}
                @endforeach
            </div>
        </div>
    </div>
@endsection
