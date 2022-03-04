<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class universoController extends Controller
{
    public function universo()
    {
        return view('universo.zoe');
    }
}
