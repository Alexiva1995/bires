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
                  Comprar vía Stripe
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
	            		<img class="img-fluid card-img-size " src={{asset('images/zoe/payments/stripe.png')}} alt="back-transfer">
	       				</button>
       				</div>
              <div class="col-1"></div>
              <div class="mb-3 ps-2 col col-sm-5 flex-end input-container" style="padding-right:0%;"> 
                <strong style="padding-left:16%;height: 41px;width: 264px;left: 0px;top: 0px;border-radius: undefinedpx; Font family: Poppinsfont-style: SemiBold;font-size: 24px;line-height: 44px;line-height: 100%;Align: Left;vertical-align: top;number-case:number-spacing:">
                  Método vía Stripe
                </strong>
                <p class="mt-1" style="font-style: Medium;font-size: 18px;line-height: 36px;line-height: 100%; padding-left:12%">
                  <strong>Completa tu pago ahora!</strong>
                </p>
                <button type="submit" class="btn-sm text-white lead mt-2" style="height: 60px;width: 330.375px;left: 867px;top: 467px;border-radius: 4px;" data-bs-toggle="modal" data-bs-target="#modalstripe">
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
<!-- Modal -->
<div class="modal fade" id="modalstripe" tabindex="-1" role="dialog" aria-labelledby="modalstripeTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered  " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title " id="modalstripeTitle">Método de pago: Stripe. {{$data['cantidad']}}</h5>
                <button type="button" class="" style="background-color: #4BCFEE;" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body text-justify primary-background">
                <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"data-cc-on-file="false"  data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                    @csrf
                    <input type="hidden" name="cantidad" value="{{$data['cantidad']}}" class="form-control text-white cantidad">

                    <input type="hidden" name="recibido" value="{{$data['recibido']}}" class="form-control text-white recibido">
                    <div class='form-row row'>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label'>Name on Card</label> 
                            <input
                                class='form-control' size='4' type='text'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-xs-12 form-group card required'>
                            <label class='control-label'>Card Number</label> 
                            <input
                                autocomplete='off' class='form-control card-number' size='20'
                                type='text'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                            <label class='control-label'>CVC</label>
                            <input autocomplete='off'
                                class='form-control card-cvc' placeholder='ex. 311' size='4'
                                type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Month</label> 
                            <input
                                class='form-control card-expiry-month' placeholder='MM' size='2'
                                type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Year</label> 
                            <input
                                class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                type='text'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-md-12 error form-group hide'>
                            <div class='alert-danger alert'>
                                Please correct the errors and try
                                again.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-success btn-block" type="submit">Pay {{$data['cantidad']}}</button>
                        </div>
                    </div>
                      
                </form>
            </div>
            {{-- <div class="modal-footer primary-background">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
            </div> --}}
        </div>
    </div>
</div>
</div>
@push('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
    <script type="text/javascript">
    $(function() {
        var $form         = $(".require-validation");
    $('form.require-validation').bind('submit', function(e) {
        var $form         = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                            'input[type=text]', 'input[type=file]',
                            'textarea'].join(', '),
            $inputs       = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid         = true;
            $errorMessage.addClass('hide');
    
            $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
        var $input = $(el);
        if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
        }
        });
    
        if (!$form.data('cc-on-file')) {
        e.preventDefault();
        Stripe.setPublishableKey($form.data('stripe-publishable-key'));
        Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
        }, stripeResponseHandler);
        }
    
    });
    
    function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                // token contains id, last4, and card type
                var token = response['id'];
                // insert the token into the form so it gets submitted to the server
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    
    });
    </script>
@endpush


@endsection


@section('vendor-script')
  <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  
@endsection
