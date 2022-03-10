<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PayPal\Rest\ApiContext;
use App\Models\OrdenPurchase;
use PayPal\Auth\OAuthTokenCredential;
use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use PayPal\Api\details;
use PayPal\Api\Item;

/*All Paypal Details class*/
use Paypal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Transaction;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use Redirect;
use Session;
use URL; 

class PaymentController extends Controller
{
   private $apiContext;

    public function __construct()
    {
        $payPalConfig = Config::get('paypal');

        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                $payPalConfig['client_id'],
                $payPalConfig['secret']
            )
        );

        $this->apiContext->setConfig($payPalConfig['settings']);
    }

    // ...

    public function payWithPayPal(Request $request)
    {
        
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
     
        $amount = new Amount();
        $amount->setTotal($request->cantidad);
        $amount->setCurrency('USD');
    
        $transaction = new Transaction();
        $transaction->setAmount($amount);
     
        // $transaction->setDescription('See your IQ results');
        $callbackUrl = url('/paypal/status');

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($this->apiContext);

            return redirect()->away($payment->getApprovalLink());
        } catch (PayPalConnectionException $ex) {
            echo $ex->getData();
        }
    }

    public function payPalStatus(Request $request)
    {

        $paymentId = $request->input('paymentId');

        $payerId = $request->input('PayerID');
        $token = $request->input('token');

        if (!$paymentId || !$payerId || !$token) {
            $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';
            return redirect()->route('intercambios.index')->with(compact('status'));
        }

        $payment = Payment::get($paymentId, $this->apiContext);
       
        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);
       
        /** Execute the payment **/
        $result = $payment->execute($execution, $this->apiContext);
    
        if ($result->getState() === 'approved') {
            
            $status = 'Gracias! El pago a través de PayPal se ha ralizado correctamente.';
            return redirect()->route('intercambios.index')->with(compact('status'));
        }

        $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';
        return redirect()->route('intercambios.index')->with(compact('status'));
    }
    public function method_paypal(Request $request)
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
          return view('intercambios.methods.paypal',compact('data'));
        } catch (\Throwable $th) {
            Log::error('Intercambios - method_paypal -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }
}


