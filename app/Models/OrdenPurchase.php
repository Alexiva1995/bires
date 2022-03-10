<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenPurchase extends Model
{
    use HasFactory;

     protected $fillable = [
        'user_id','amount','status','payment_gateway','transaction_id','image'
    ];
}
