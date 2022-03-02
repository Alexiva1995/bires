<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Http\Traits\Tree;
use App\Models\Inversion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\MyResetPassword;
use App\Notifications\VerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, Tree;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "username",
        'name',
        'lastname',
        'phone',
        'country_id',
        'referred_id',
        'email',
        'email_verified_at',
        'password',
        'password_confirmation',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MyResetPassword($token));
    }

    public function inversiones()
    {
        return $this->hasMany(Inversion::class, 'user_id');
    }

    public function disponibles()
    {
        return $this->inversiones->where('status', '=', 1)->sum('invested');
    }

    public function notificacionesLeidas()
    {
        auth()->user()->unreadNotifications->markAsRead();

        return back();
    }

    public function referrals()
    {
        return $this->hasMany(User::class, 'referred_id');
    }

    public function referidos()
    {
        return $this->hasMany(User::class, 'referred_id');
    }

    public function countReferidosDirectos()
    {
        $referidos = $this->getChildrens($this, new Collection, 1);

        return count($referidos->where('nivel', 1));
    }

    public function padre()
    {
        return $this->belongsTo('App\Models\User', 'referred_id');
    }

    public function ganancias()
    {
        $gain = 0;
     
            $gain = Wallet::where('status', 0)->sum('amount');
        

        return $gain;
    }

}
