<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\UserInterfaceController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\ExtensionController;
use App\Http\Controllers\PageLayoutController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MiscellaneousController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\IntercambiosController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\StripeCtrl;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\TreeController;
use App\Http\Controllers\universoController;
use App\Http\Controllers\PaymentController;
use LDAP\Result;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Main Page Route
Route::get('/clear-cache', function() {
    Artisan::call('optimize:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return 'Caché Clear Successfull'; //Return anything
  });

Route::get('/', [DashboardController::class, 'landing'])->name('landing');


Route::middleware('auth')->group(function () {
    Route::middleware('verified')->group(function () {


        Route::middleware('admin')->group(function () {
        });

        /* Route Dashboards */
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard.index');

        /* Route Dashboards */
        Route::group(['prefix' => 'dashboard'], function () {
            Route::get('analytics', [DashboardController::class, 'dashboardAnalytics'])->name('dashboard-analytics');
            Route::get('ecommerce', [DashboardController::class, 'dashboardEcommerce'])->name('dashboard-ecommerce');
        });

        //RUTAS PARA LOS PLANES
        Route::group(['prefix' => 'plans'], function () {
            Route::get('', [PlanController::class, 'index'])->name('plans.index');
        });

        // Red de usuario
        Route::group(['prefix' => 'red'], function () {
            // Ruta para visualizar el arbol o la matriz
            Route::get('/unilevel', [TreeController::class, 'index'])->name('red.unilevel');
        });

        //Settlement
        Route::post('/aprobarDeposito', [IntercambiosController::class, 'aprobarDeposito'])->name('settlement.aprobarDeposito');
        Route::post('/process', [IntercambiosController::class, 'procesarLiquidacion'])->name('settlement.process');

        Route::get('universo', [universoController::class, 'universo'])->name('universo.zoe');
        Route::get('universo-zoe', [universoController::class, 'universos'])->name('universo.zoeCategories');
        Route::get('select', [universoController::class, 'selects'])->name('universo.Select');


        //PASARELA
        //STRIPE
        Route::GET('stripe', [StripeCtrl::class, 'stripe'])->name('stripe');

        Route::post('intercambios/method-stripe', [StripeCtrl::class, 'method_stripe'])->name('intercambios.methods.stripe');
        Route::POST('stripe',[StripeCtrl::class, 'stripePost'])->name('stripe.post');

        Route::POST('stripe', [StripeCtrl::class, 'stripePost'])->name('stripe.post');

        //payU
        Route::POST('payu', [IntercambiosController::class, 'payu'])->name('payu.post');
        Route::post('/notificacionesLeidas', [NotificationController::class, 'notificacionesLeidas'])->name('user.notificacionesLeidas');

        //PAYPAL
        Route::post('intercambios/method-paypal', [PaymentController::class, 'method_paypal'])->name('intercambios.methods.paypal');
        Route::post('/paypal/pay', [PaymentController::class, 'payWithPayPal'])->name('paypal.pay');
        Route::get('/paypal/status', [PaymentController::class, 'payPalStatus'])->name('paypal.status');
        //BANK-TRANSFER
        Route::post('/bank', [IntercambiosController::class, 'bank_post'])->name('bank.post');
        
    });
});

Auth::routes(['verify' => true]);



// map leaflet
Route::get('/maps/leaflet', [ChartsController::class, 'maps_leaflet'])->name('map-leaflet');

// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

//Intercambios
Route::get('/graphicDash', [AdminDashboardController::class, 'graphicDash'])->name('graphicDash');


Route::get('/intercambios/index', [IntercambiosController::class, 'index'])->name('intercambios.index');
Route::post('/intercambios/payment-methods', [IntercambiosController::class, 'paymentMethods'])->name('intercambios.payment-methods');
Route::post('/intercambios/payment-confirm', [IntercambiosController::class, 'confirmPayment'])->name('intercambios.confirm-payment');
Route::get('/intercambios/payment-aproved', [IntercambiosController::class, 'paymentAproved'])->name('intercambios.payment-aproved');


Route::post('intercambios/method-payu', [IntercambiosController::class, 'method_payu'])->name('intercambios.methods.payu');
Route::post('intercambios/method-wompi', [IntercambiosController::class, 'method_wompi'])->name('intercambios.methods.wompi');
Route::post('intercambios/method-coinpayments', [IntercambiosController::class, 'method_coinpayments'])->name('intercambios.methods.coinpayments');
Route::post('intercambios/method-coinbase', [IntercambiosController::class, 'method_coinbase'])->name('intercambios.methods.coinbase');
Route::post('intercambios/method-bank', [IntercambiosController::class, 'method_bank'])->name('intercambios.methods.bank');
Route::post('intercambios/method-zelle', [IntercambiosController::class, 'method_zelle'])->name('intercambios.methods.zelle');

