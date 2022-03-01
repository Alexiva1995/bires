<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    $pageConfigs = ['pageHeader' => false];

    $user = Auth::user();
    if ($user->admin == 1) {
      return view('/admin/dashboard/index', ['pageConfigs' => $pageConfigs]);
    }else{
      return view('/admin/dashboard/user', ['pageConfigs' => $pageConfigs]);
    }
  }
}
