<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Liquidaction;
use App\Models\Wallet;
use App\Models\OrdenPurchase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Tzsk\Payu\Facade\Payment;

class IntercambiosController extends Controller
{
    public function index(){
        return view('intercambios.index');
    }

    public function paymentMethods(Request $request)
    {
         
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

        return view('intercambios.paymentMethods', compact('data'));
    }

    public function confirmPayment()
    {
        return view('intercambios.confirmPayment');
    }

    public function paymentAproved(){
        return view('intercambios.paymentAproved');
    }

    public function aprobarDeposito(Request $request)
    {
        
        $wallet = $request->wallet;
        $cantidad = $request->cantidad;
        $recibido = $request->recibido;
          
        $idLiquidation = $this->sendCodeEmail($wallet, $cantidad, $recibido);
    
        $data = [
            'wallet' => $wallet,
            'idLiquidation' => $idLiquidation
        ];

        return view('intercambios.components.aprobarCoinPayments', compact('data'));
    }



    public function procesarLiquidacion(Request $request)
    {
            $validate = $request->validate([
                'wallet' => ['required'],
                'correo_code' => ['required'],
            ]);

        try {
            if ($validate) {
                $wallet = $validate['wallet'];
                $correo_code = $validate['correo_code'];
                $idliquidation = $request->idLiquidation;
                $liquidation = Liquidaction::find($idliquidation);

                $user = Auth::user();
                /* $accion = 'No Procesada';
                 if ($this->reversarRetiro30Min()) {
                    return redirect()->back()->with('msj-danger', 'El tiempo limite fue excedido');
                }  */
                //Verifica si ha fallado mucho metiendo los codigo
                /*  if (session()->has('intentos_fallidos')) {
                    if (session('intentos_fallidos') >= 3) {
                        session()->forget('intentos_fallidos');
                        $request->comentario = 'Demasiados Intentos Fallidos con los códigos';
                        $accion = 'Reversada';
                        $this->reversarLiquidacion($idliquidation, $request->comentario);
                    }
                }  */
                //Verifica si los códigos estan bien
                if ($correo_code != $liquidation->code_correo) {
                    return redirect()->route('intercambios.inde x')->with('status', 'El código de correo ingresado es incorrecto');
                }else{



                //if ($request->action == 'aproved' && session('intentos_fallidos') < 2) {
                     $aproved = $this->aprobarLiquidacion($idliquidation, $request->wallet);
                     
                     if ($aproved == '') {
                         $accion = 'Aprobada';
                         $request->comentario= "Aprobada";

                          $wallet = Wallet::create([
                            'user_id' => $user->id,
                            'status' => 1,
                            'amount' => $liquidation->total,
                            'origen' => 'CoinPayments',

                            ]);
                            $wallet->save();

                         if (!empty($idliquidation)) {
                            /* $listComi = $comisiones->pluck('id');
                            Wallet::whereIn('id', $listComi)->update([
                                'status' => 1,
                                'liquidation_id' => $idliquidation
                            ]); */
                        }
                        }else{
                            $comentario = 'Error en la plataforma de coinpayment';
                            $this->reversarLiquidacion($idliquidation,$comentario);
                        return redirect()->route('intercambios.index')->with('status', 'Hubo un error al realizar el pago. '.$aproved);
                    }
                    //}


                    if ($accion != 'No Procesada') {
                        $arrayLog = [
                            'idliquidation' => $idliquidation,
                            'comentario' => $request->comentario,
                            'accion' => $accion
                        ];
                        DB::table('log_liquidactions')->insert($arrayLog);
                    }
                }

               return redirect()->route('intercambios.index')->with('status', 'La Liquidación fue '.$accion.' con exito');
            }
        } catch (\Throwable $th) {
            Log::error('Liquidaction - saveLiquidation -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }


    }

    public function aprobarLiquidacion($idliquidation, $billetera): string
    {
        $liquidation = Liquidaction::find($idliquidation);
        //dd($liquidation);
        // creo el arreglo de la transacion en coipayment
        $cmd = 'create_withdrawal';
        $result2 = '';
        $dataPago = [
            'amount' => $liquidation->total,
            'currency' => 'USDT.TRC20',
            'address' => $billetera,
        ];
        // llamo la a la funcion que va a ser la transacion
        $result = $this->coinpayments_api_call($cmd, $dataPago);
        if (!empty($result['result'])) {
            Liquidaction::where('id', $idliquidation)->update([
                'status' => 1,
                'hash' => $result['result']['id'],
                'wallet_used' => $billetera
            ]);

            /* Wallet::where('liquidation_id', $idliquidation)->update(['liquidado' => 1, 'status' => 1]); */
        }else{
            $result2 = 'Error -> '.$result['error'];
        }
        //dd($result);
        return $result2;
    }

    public function reversarLiquidacion($idliquidation, $comentario)
    {
        $liquidacion = Liquidaction::find($idliquidation);

        /* Wallet::where('liquidation_id', $idliquidation)->update([
            'status' => 2,
            'liquidation_id' => null,
        ]); */

        // $concepto = 'Liquidacion Reservada - Motivo: '.$comentario;
        // $arrayWallet =[
        //     'user_id' => $liquidacion->iduser,
        //     'orden_purchases_id' => null,
        //     'referred_id' => $liquidacion->iduser,
        //     'monto' => $liquidacion->monto_bruto,
        //     'descripcion' => $concepto,
        //     'status' => 3,
        //     'tipo_transaction' => 0,
        // ];

        // $this->walletController->saveWallet($arrayWallet);

        $liquidacion->status = 0;
        $liquidacion->save();
    }

    public function coinpayments_api_call($cmd, $req = array()) {
        // Fill these in from your API Keys page
        //$public_key = Crypt::decryptString( env('COIN_PAYMENT_PUBLIC_KEY', '') ) ;
        //$private_key =  Crypt::decryptString( env('COIN_PAYMENT_PRIVATE_KEY', '') ) ;
        $public_key = env('COINPAYMENT_PUBLIC_KEY', '32d8233ae79754bf42314170aa573863ef86f5218e211e50ed87b3e3f81c5094');
        $private_key = env('COINPAYMENT_PRIVATE_KEY', 'D09a0dc9Ad14Ce58453ab7852aBB3c3baa58E5E0f1965A55A8eE2925cd5d0388');

        // Set the API command and required fields
        $req['version'] = 1;
        $req['cmd'] = $cmd;
        $req['key'] = $public_key;
        $req['format'] = 'json'; //supported values are json and xml

        // Generate the query string
        $post_data = http_build_query($req, '', '&');

        // Calculate the HMAC signature on the POST data
        $hmac = hash_hmac('sha512', $post_data, $private_key);

        // Create cURL handle and initialize (if needed)
        static $ch = NULL;
        if ($ch === NULL) {
            $ch = curl_init('https://www.coinpayments.net/api.php');
            curl_setopt($ch, CURLOPT_FAILONERROR, TRUE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('HMAC: '.$hmac));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

        // Execute the call and close cURL handle
        $data = curl_exec($ch);
        // Parse and return data if successful.
        if ($data !== FALSE) {
            if (PHP_INT_SIZE < 8 && version_compare(PHP_VERSION, '5.4.0') >= 0) {
                // We are on 32-bit PHP, so use the bigint as string option. If you are using any API calls with Satoshis it is highly NOT recommended to use 32-bit PHP
                $dec = json_decode($data, TRUE, 512, JSON_BIGINT_AS_STRING);
            } else {
                $dec = json_decode($data, TRUE);
            }
            if ($dec !== NULL && count($dec)) {
                return $dec;
            } else {
                // If you are using PHP 5.5.0 or higher you can use json_last_error_msg() for a better error message
                return array('error' => 'Unable to parse JSON result ('.json_last_error().')');
            }
        } else {
            return array('error' => 'cURL error: '.curl_error($ch));
        }

    }

    public function saveLiquidation(array $data): int
    {
        $liquidacion = Liquidaction::create($data);
        return $liquidacion->id;
    }
   
    public function sendCodeEmail($wallet, $cantidad, $recibido)
    {

        try {
             $this->reversarRetiro30Min();
             $user = Auth::user();

            /* if (!session()->has('intentos_fallidos')) {
                session(['intentos_fallidos' => 1]);
            }  */
            $liquidation = Liquidaction::where([
                ['iduser', '=', Auth::id()],
                ['status', '=', 0],
                ['type', '=' , 0]
            ])->first();
            
          /*  if ($liquidation != null) {

                $liquidation->update([
                    'wallet_used' => $wallet,
                ]);
                return $liquidation->id;
            }*/

           

            $bruto = $cantidad;
            $feed = 1;
            $total = $recibido;


            $arrayLiquidation = [
                'iduser' => $user->id,
                'total' => $total,
                'monto_bruto' => $bruto,
                'feed' => $feed,
                'hash',
                'wallet_used' => $wallet,
                'status' => 0,
                'code_correo' => Str::random(10),
                'fecha_code' => Carbon::now()
            ];
    
            $idLiquidation = $this->saveLiquidation($arrayLiquidation);

            $dataEmail = [
                'billetera' => $wallet,
                'total' => $total,
                'user' => $user->name,
                'code' => $arrayLiquidation['code_correo']
            ];
          
            Mail::send('mail.SendCodeDeposito', $dataEmail, function ($msj) use ($user)
            {
                $msj->subject('Codigo Deposito');
                $msj->to($user->email);
            });



            return $idLiquidation;
        } catch (\Throwable $th) {
            Log::error('Liquidaction - sendCodeEmail -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }

    public function reversarRetiro30Min():bool
    {
        $liquidation = Liquidaction::where([
            ['iduser', '=', Auth::id()],
            ['status', '=', 0],
            ['type', '=' , 0]
        ])->first();
        $result = false;
        if ($liquidation != null) {
            $fechaActual = Carbon::now();
            $fechaCodeCorreo = new Carbon($liquidation->fecha_code);
            if ($fechaCodeCorreo->diffInMinutes($fechaActual) >= 30) {
                $this->reversarLiquidacion($liquidation->id, 'Tiempo limite de codigo sobrepasado');
                $result = true;
            }
        }
        return $result;
    }
    public function method_coinpayments(Request $request)
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
          return view('intercambios.methods.coinpayments',compact('data'));
        } catch (\Throwable $th) {
            Log::error('Intercambios - method_coinpayments -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }
    public function method_coinbase(Request $request)
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
          return view('intercambios.methods.coinbase',compact('data'));
        } catch (\Throwable $th) {
            Log::error('Intercambios - method_coinbase -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }

    public function method_bank(Request $request)
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
          return view('intercambios.methods.bank',compact('data'));
        } catch (\Throwable $th) {
            Log::error('Intercambios - method_bank -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }
    public function bank_post(Request $request)
    {
      try {
         
            $user = Auth::user();

            $order = $request->validate([
                'cantidad' => 'required',
                'recibido' => 'required',
                'archivo' => 'required',
            ]);
      
            $order = new OrdenPurchase();
            $order->user_id = $user->id;
            $order->amount = $request->cantidad;
            $order->fee = 1;
            $order->status = '0';
            $order->payment_gateway = 'bankTransfer';
            
            //Guardamos foto 
            $archivo = $request->file('archivo');
            $name = time() . "." . $archivo->extension();
            $archivo->move(public_path('storage') . '/photo-bank-transfer', $name);
            $order->image = '' . $name;

            $order->save();
            return redirect()->route('intercambios.index')->with('success', 'orden creada exitosamente');
           
        } catch (\Throwable $th) {
            Log::error('Intercambios - method_bank -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }

    public function method_zelle(Request $request)
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
          return view('intercambios.methods.zelle',compact('data'));
        } catch (\Throwable $th) {
            Log::error('Intercambios - method_zelle -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }
   
    public function method_payu(Request $request)
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
          return view('intercambios.methods.payu',compact('data'));
        } catch (\Throwable $th) {
            Log::error('Intercambios - method_payu -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }
     public function method_wompi(Request $request)
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
          return view('intercambios.methods.wompi',compact('data'));
        } catch (\Throwable $th) {
            Log::error('Intercambios - method_wompi -> Error: '.$th);
            abort(403, "Ocurrio un error, contacte con el administrador");
        }
    }
   

    public function payu(Request $request)
    { 
        $user = Auth::user();
        $validate = $request->validate([
            'cantidad' => ['required'],
            'recibido' => ['required'],
        ]);
            
        $data = [
        'txnid' => rand(), # Transaction ID.
        'amount' => $request->cantidad, # Amount to be charged.
        'productinfo' => "Product Information",
        'firstname' => $user->name, # Payee Name.
        'email' => $user->email, # Payee Email Address.
        'phone' => $user->phone, # Payee Phone Number.
        ];
        return $data;
    }

}

