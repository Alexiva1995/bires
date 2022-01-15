<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntercambiosController extends Controller
{
    public function index(){
        return view('intercambios.index');
    }

    public function paymentMethods(){
        return view('intercambios.paymentMethods');
    }
}
