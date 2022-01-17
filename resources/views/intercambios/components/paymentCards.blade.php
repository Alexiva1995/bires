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
            <a href={{route('intercambios.confirm-payment')}}><img src="{{asset('img/paymentLogos/paypaal.png')}}" class="card-img-top img-fluid card-img-size" alt="PayPal"></a>
            <div class="card-body">

            </div>
          </div>

        <div class="card card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block">
            <a href={{route('intercambios.confirm-payment')}}><img src="{{asset('img/paymentLogos/payu.png')}}" class="card-img-top  img-fluid card-img-size" alt="PayU"></a>
            <div class="card-body">
            </div>
        </div>

        <div class="card card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block">
            <a href={{route('intercambios.confirm-payment')}}><img src="{{asset('img/paymentLogos/wompii.png')}}" class="card-img-top  img-fluid card-img-size" alt="Wompi"></a>
            {{-- <div class="card-body">
            </div> --}}
        </div>

        <div class="card card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block">
            <a href={{route('intercambios.confirm-payment')}}><img src="{{asset('img/paymentLogos/stripe_logo.png')}}" class="card-img-top img-fluid card-img-size" alt="Stripe"></a>
            <div class="card-body">

            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="card card-size col-xs-12 col-sm-6 col-md-3 mx-auto mt-1 d-block" >
            <a href={{route('intercambios.confirm-payment')}}><img src="{{asset('img/paymentLogos/coinpayments.png')}}" class="card-img-top  img-fluid card-img-size" alt="CoinPayments"></a>
            <div class="card-body">

            </div>
          </div>

        <div class="card card-size col-xs-12 col-sm-6 col-md-3 mx-auto mt-1 d-block">
            <a href={{route('intercambios.confirm-payment')}}><img src="{{asset('img/paymentLogos/coinbase.png')}}" class="card-img-top  img-fluid card-img-size" alt="Coinbase"></a>
            <div class="card-body">
            </div>
        </div>

        <div class="card card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" >
            <a href={{route('intercambios.confirm-payment')}}><img src="{{asset('img/paymentLogos/bank-transfer.png')}}" class="card-img-top  img-fluid card-img-size" alt="Bank-transfer"></a>
            {{-- <div class="card-body">
            </div> --}}
        </div>

        <div class="card card-size col-xs-12 col-sm-6 col-md-3 mx-auto">
            <a href={{route('intercambios.confirm-payment')}}><img src="{{asset('img/paymentLogos/zelle.png')}}" class="card-img-top  img-fluid card-img-size mx-auto mt-2 d-block" alt="Zelle"></a>
            <div class="card-body">

            </div>
        </div>
    </div>
</div>
