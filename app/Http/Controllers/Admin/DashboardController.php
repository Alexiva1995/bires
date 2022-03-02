<?php

namespace App\Http\Controllers\Admin;

use App\Models\Wallet;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    $pageConfigs = ['pageHeader' => false];

    $user = Auth::user();
    if ($user->admin == 1) {
      return view('/admin/dashboard/index', ['pageConfigs' => $pageConfigs]);
    } else {
      return view('/admin/dashboard/user', ['pageConfigs' => $pageConfigs]);
    }
  }

  public function graphicDash()
  {
    $anno = Carbon::now()->format('Y');
    $fecha_ini = Carbon::createFromDate($anno, 1, 1)->startOfDay();
    $fecha_fin = Carbon::createFromDate($anno, 12, 1)->endOfMonth()->endOfDay();

    $ordenes = Wallet::where('user_id', Auth::id())->where('status', '=', 0)
      ->select(
        DB::raw('date_format(created_at,"%m/%Y") as created'),
        DB::raw('SUM(amount) as montos'),
      )
      ->whereBetween('created_at', [$fecha_ini, $fecha_fin])
      ->groupBy('created')
      ->get()
      ->toArray();

    $valores = [];

    for ($date = $fecha_ini->copy(); $date->lt($fecha_fin); $date->addMonth(1)) {

      $valores[$date->format('m/Y')] = 0;
    }

    foreach ($ordenes as $orden) {
      $valores[$orden['created']] = $orden['montos'];
    }
    //arreglado
    $data = [];
    foreach ($valores as $valor) {
      $data[] = floatVal($valor);
    }
    return response()->json(['valores' => $data]);
  }
}
