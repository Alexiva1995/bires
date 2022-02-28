<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notificacionesLeidas()
    {
        auth()->user()->unreadNotifications->markAsRead();

        return back();
    }

    public function functionName()
    {
        $user = User::find(1);
    
        $user->notify(new \App\Notifications\sendRegisterReffered($user));
    
        return back();
        
    }
}
