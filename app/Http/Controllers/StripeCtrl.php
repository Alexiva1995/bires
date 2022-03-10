<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\OrdenPurchase;
use Illuminate\Http\Request;
use Session;
use Stripe;

class StripeCtrl extends Controller
{
    //
     /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('test.stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $user = Auth::user();

        $validate = $request->validate([
            'cantidad' => ['required'],
            'recibido' => ['required'],
        ]);

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $stripe = Stripe\Charge::create ([
            "id" => $request->id,
            "amount" => $request->cantidad * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from hackeradda.com." 
        ]);

        $order = new OrdenPurchase();
        $order->user_id = $user->id;
        $order->amount = $request->cantidad;
        $order->fee = 1;
        $order->status = '0';
        $order->payment_gateway = 'stripe';
        $order->transaction_id = $stripe->id;
      
        $order->save();

        return redirect()->route('intercambios.index')->with('message', 'Payment successful!');

       /* Session::flash('success', 'Payment successful!');*/
    }

     public function method_stripe(Request $request)
    {
      try {

            $validate = $request->validate([
                'cantidad' => ['required'],
                'recibido' => ['required'],
            ]);
            
            $cantidad = $request->cantidad;
            $recibido = $request->recibido;

            $data = [
                'cantidad' => $cantidad,
                'recibido' => $recibido
            ];
          return view('intercambios.methods.stripe',compact('data'));
        } catch (\Throwable $th) {
            Log::error('Intercambios - method_stripe -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }
}
