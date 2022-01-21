<style>
    .card-size{
        width: 10rem !important;
        height: 8rem !important;
        margin: 1rem 1rem;
        background: #fff;
    }

    .card-img-size{
        width: 8rem !important;
        height: 7rem !important;
        object-fit: contain;
    }


</style>

<div class="container">

    <div class="row mt-2">

        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block " ><img class="img-fluid card-img-size " src={{asset('img/paymentLogos/paypal.png')}} alt="PayPal"></button>

        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" ><img class="img-fluid card-img-size " src={{asset('img/paymentLogos/payu.png')}} alt="PayU"></button>


        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" ><img class="img-fluid card-img-size " src={{asset('img/paymentLogos/wompii.png')}} alt="Wompi"></button>

        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" ><img class="img-fluid card-img-size " src={{asset('img/paymentLogos/stripe_logo.png')}} alt="Stripe"></button>


    </div>
    <div class="row mb-3">

        <button type="submit" class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" data-bs-toggle="modal" data-bs-target="#modalInfo" onclick="mostrarWallet()" ><img class="img-fluid card-img-size " src={{asset('img/paymentLogos/coinpayments.png')}} alt="CoinPayments"></button>


        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" ><img class="img-fluid card-img-size " src={{asset('img/paymentLogos/coinbase.png')}} alt="Coinbase"></button>


        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" ><img class="img-fluid card-img-size " src={{asset('img/paymentLogos/bank-transfer.png')}} alt="Bank Transfer"></button>

        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" ><img class="img-fluid card-img-size " src={{asset('img/paymentLogos/zelle.png')}} alt="Zelle"></button>


    </div>
</div>
