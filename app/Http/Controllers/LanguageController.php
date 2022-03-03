<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    //
    public function swap($locale){
        // available language in template array
       $availLocale=['es'=>'es', 'fr'=>'fr','de'=>'de','pt'=>'pt','en'=>'en'];
       // check for existing language
       if(array_key_exists($locale,$availLocale)){
           session()->put('locale',$locale);
       }

       return response()->json($locale);
       //return redirect()->back();
    }
}
