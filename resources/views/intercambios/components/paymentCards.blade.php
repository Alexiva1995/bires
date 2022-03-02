<style>
    .card-size{
        width: 13rem !important;
        height: 9rem !important;
        margin: 1rem 1rem;
        background: #fff;
    }

    .card-img-size{
        width: 19rem !important;
        height: 9rem !important;
        object-fit: contain;
    }


</style>

<div class="container">

    <div class="row mt-2">

        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block">
            <img class="img-fluid card-img-size " src={{asset('images/zoe/payments/paypal.png')}} alt="paypal">
        </button>

        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" >
            <img class="img-fluid card-img-size " src={{asset('images/zoe/payments/payu.png')}} alt="payu">
        </button>


        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" >
            <img class="img-fluid card-img-size " src={{asset('images/zoe/payments/wompi.png')}} alt="wompi">
        </button>

        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" data-bs-toggle="modal" data-bs-target="#modalstripe" onclick="traerData()"/>
            <img class="img-fluid card-img-size " src={{asset('images/zoe/payments/stripe.png')}} alt="stripe">
        </button>
    </div>
    <div class="row mb-3">

        <button type="submit" class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" data-bs-toggle="modal" data-bs-target="#modalInfo" onclick="mostrarWallet()">
            <img class="img-fluid card-img-size " src={{asset('images/zoe/payments/coinpayments.png')}} alt="coinpayments">
        </button>


        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" >
            <img class="img-fluid card-img-size " src={{asset('images/zoe/payments/coinbase.png')}} alt="coinbase">
        </button>


        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" >
           <img class="img-fluid card-img-size " src={{asset('images/zoe/payments/back-transfer.png')}} alt="back-transfer">
        </button>

        <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" >
          <img class="img-fluid card-img-size " src={{asset('images/zoe/payments/zelle.png')}} alt="zelle"> 
        </button>
    </div>
</div>
