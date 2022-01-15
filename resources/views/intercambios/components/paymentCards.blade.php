<style>
    .card-size{
        width: 10rem !important;
        height: 8rem !important;
        margin: 1rem 1rem;
    }

    .card-img-size{
        width: 8rem !important;
        height: 7rem !important;
        object-fit: contain;
    }
</style>

<div class="container">

    <div class="row mt-2">
        <div class="card card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block">
            <img src="{{asset('img/paymentLogos/paypaal.png')}}" class="card-img-top img-fluid card-img-size" alt="PayPal">
            <div class="card-body">
              
            </div>
          </div>
        
        <div class="card card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block">
            <img src="{{asset('img/paymentLogos/payu.png')}}" class="card-img-top  img-fluid card-img-size" alt="PayU">
            <div class="card-body">
            </div>
        </div>
        
        <div class="card card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block">
            <img src="{{asset('img/paymentLogos/wompii.png')}}" class="card-img-top  img-fluid card-img-size" alt="Wompi">
            {{-- <div class="card-body">
            </div> --}}
        </div>
        
        <div class="card card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block">
            <img src="{{asset('img/paymentLogos/stripe_logo.png')}}" class="card-img-top img-fluid card-img-size" alt="Stripe">
            <div class="card-body">
                
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="card card-size col-xs-12 col-sm-6 col-md-3 mx-auto mt-1 d-block" >
            <img src="{{asset('img/paymentLogos/coinpayments.png')}}" class="card-img-top  img-fluid card-img-size" alt="CoinPayments">
            <div class="card-body">
              
            </div>
          </div>
        
        <div class="card card-size col-xs-12 col-sm-6 col-md-3 mx-auto mt-1 d-block">
            <img src="{{asset('img/paymentLogos/coinbase.png')}}" class="card-img-top  img-fluid card-img-size" alt="Coinbase">
            <div class="card-body">
            </div>
        </div>
        
        <div class="card card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" >
            <img src="{{asset('img/paymentLogos/bank-transfer.png')}}" class="card-img-top  img-fluid card-img-size" alt="Bank-transfer">
            {{-- <div class="card-body">
            </div> --}}
        </div>
        
        <div class="card card-size col-xs-12 col-sm-6 col-md-3 mx-auto">
            <img src="{{asset('img/paymentLogos/zelle.png')}}" class="card-img-top  img-fluid card-img-size mx-auto mt-2 d-block" alt="Zelle">
            <div class="card-body">
                
            </div>
        </div>
    </div>
</div>
