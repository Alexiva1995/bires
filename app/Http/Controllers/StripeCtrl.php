<?php

namespace App\Http\Controllers;

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
        $validate = $request->validate([
            'cantidad' => ['required'],
            'recibido' => ['required'],
        ]);

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $stripe = Stripe\Charge::create ([
                "amount" => $request->cantidad * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from hackeradda.com." 
        ]);
        return redirect()->route('intercambios.index')->with('message', 'Payment successful!');

       /* Session::flash('success', 'Payment successful!');*/
    }
}
