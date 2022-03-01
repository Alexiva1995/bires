<style>
    .card-size{
        width: 11rem !important;
        height: 9rem !important;
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

        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block">
            <img class="img-fluid card-img-size" style="padding:10px;" src={{asset('img/paymentLogos/paypal.png')}} alt="PayPal"/>
            <img class="" src={{asset('img/paymentLogos/visa.png')}} alt="visa"/>
            <img class="" src={{asset('img/paymentLogos/mastercard.jpg')}} alt="mastercard"/>  
        </button>

        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" >
            <img class="img-fluid card-img-size " src={{asset('img/paymentLogos/payu.png')}} alt="PayU">
            <img class="" src={{asset('img/paymentLogos/visa.png')}} alt="visa"/>
            <img class="" src={{asset('img/paymentLogos/mastercard.jpg')}} alt="mastercard"/>
        </button>


        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" >
            <img class="img-fluid card-img-size " src={{asset('img/paymentLogos/wompii.png')}} alt="Wompi">
            <img class="" src={{asset('img/paymentLogos/visa.png')}} alt="visa"/>
            <img class="" src={{asset('img/paymentLogos/mastercard.jpg')}} alt="mastercard"/>
            <img class="" src={{asset('img/paymentLogos/transf.png')}} alt="Transf"/>
        
        </button>

        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" data-bs-toggle="modal" data-bs-target="#modalstripe" onclick="traerData()"/>
            <img class="img-fluid card-img-size " src={{asset('img/paymentLogos/stripe_logo.png')}} alt="Stripe">
            <img class="" src={{asset('img/paymentLogos/visa.png')}} alt="visa"/>
            <img class="" src={{asset('img/paymentLogos/mastercard.jpg')}} alt="mastercard"/>
        </button>


    </div>
    <div class="row mb-3">

        <button type="submit" class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" data-bs-toggle="modal" data-bs-target="#modalInfo" onclick="mostrarWallet()">
            <img class="img-fluid card-img-size " src={{asset('img/paymentLogos/coinpayments.png')}} alt="CoinPayments">
            <img class="" src={{asset('img/paymentLogos/tether.png')}} alt="tether"/>
            <img class="" src={{asset('img/paymentLogos/bicoint.png')}} alt="bicoint"/>
            <img class="" src={{asset('img/paymentLogos/nose.png')}} alt="nose"/>
        </button>


        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" >
            <img class="img-fluid card-img-size " src={{asset('img/paymentLogos/coinbase.png')}} alt="Coinbase">
            <img class="" src={{asset('img/paymentLogos/tether.png')}} alt="tether"/>
            <img class="" src={{asset('img/paymentLogos/bicoint.png')}} alt="bicoint"/>
            <img class="" src={{asset('img/paymentLogos/nose.png')}} alt="nose"/>
        </button>


        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" >
            <img class="img-fluid card-img-size " src={{asset('img/paymentLogos/bank-transfer.png')}} alt="Bank Transfer">
        </button>

        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" >
            <img class="img-fluid card-img-size " src={{asset('img/paymentLogos/zelle.png')}} alt="Zelle">
        </button>


    </div>
</div>
