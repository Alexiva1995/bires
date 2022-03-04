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
    form{
        display: contents;
    }

</style>

<div class="container">

    <div class="row mt-2">
        <form action="{{route('intercambios.methods.paypal')}}" method="post">
           @csrf 
           <input type="hidden" name="cantidad" value="{{$data['cantidad']}}">
           <input type="hidden" name="recibido" value="{{$data['recibido']}}">
           <button type="submit" class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block">
                <img class="img-fluid card-img-size " src={{asset('images/zoe/payments/paypal.png')}} alt="paypal">
           </button>
        </form>
        <form action="{{route('intercambios.methods.payu')}}" method="post">
           @csrf 
           <input type="hidden" name="cantidad" value="{{$data['cantidad']}}">
           <input type="hidden" name="recibido" value="{{$data['recibido']}}">
           <button type="submit"class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block"r>
                <img class="img-fluid card-img-size " src={{asset('images/zoe/payments/payu.png')}} alt="payu">
           </button>
        </form>
        <form action="{{route('intercambios.methods.wompi')}}" method="post">
           @csrf 
           <input type="hidden" name="cantidad" value="{{$data['cantidad']}}">
           <input type="hidden" name="recibido" value="{{$data['recibido']}}">
           <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" >
                <img class="img-fluid card-img-size " src={{asset('images/zoe/payments/wompi.png')}} alt="wompi">
           </button>
        </form>
        <form action="{{route('intercambios.methods.stripe')}}" method="post">
          @csrf 
          <input type="hidden" name="cantidad" value="{{$data['cantidad']}}">
          <input type="hidden" name="recibido" value="{{$data['recibido']}}">
          <button type="submit" class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block">
            <img class="img-fluid card-img-size " src={{asset('images/zoe/payments/stripe.png')}} alt="stripe">
          </button>
        </form>
    </div>
    <div class="row mb-3">
        <form action="{{route('intercambios.methods.coinpayments')}}" method="post">
        @csrf 
           <input type="hidden" name="cantidad" value="{{$data['cantidad']}}">
           <input type="hidden" name="recibido" value="{{$data['recibido']}}">
            <button type="submit" class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block">
                <img class="img-fluid card-img-size " src={{asset('images/zoe/payments/coinpayments.png')}} alt="coinpayments">
            </button>
        </form>
        <form action="{{route('intercambios.methods.coinbase')}}" method="post">
           @csrf 
           <input type="hidden" name="cantidad" value="{{$data['cantidad']}}">
           <input type="hidden" name="recibido" value="{{$data['recibido']}}">
           <button type="submit" class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" >
                <img class="img-fluid card-img-size " src={{asset('images/zoe/payments/coinbase.png')}} alt="coinbase">
           </button>
        </form>
        <form action="{{route('intercambios.methods.bank')}}" method="post">
           @csrf 
           <input type="hidden" name="cantidad" value="{{$data['cantidad']}}">
           <input type="hidden" name="recibido" value="{{$data['recibido']}}">
           <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" >
               <img class="img-fluid card-img-size " src={{asset('images/zoe/payments/back-transfer.png')}} alt="back-transfer">
           </button>
        </form>
        <form action="{{route('intercambios.methods.zelle')}}" method="post">
           @csrf
           <input type="hidden" name="cantidad" value="{{$data['cantidad']}}">
           <input type="hidden" name="recibido" value="{{$data['recibido']}}">
           <button class="card card-img-top card-size col-xs-12 col-sm-6 col-md-3 mx-auto d-block" >
              <img class="img-fluid card-img-size " src={{asset('images/zoe/payments/zelle.png')}} alt="zelle">
           </button>
        </form>
    </div>
</div>
