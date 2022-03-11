<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class universoController extends Controller
{
    public function universo()
    {
        return view('universo.zoe');
    }
    public function universos()
    {
        return view('universo.zoeCategories');
    }

    public function selects()
    {
        return view('universo.Select');
    }
}
