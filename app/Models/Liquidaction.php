<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liquidaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'iduser', 'inversion_id', 'total', 'monto_bruto', 'feed', 'hash',
        'wallet_used', 'status', 'code_correo', 'fecha_code', 'type',
    ];
}
