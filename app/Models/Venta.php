<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User');
            }
            public function detalleventa(){
                return $this->belongsTo('App\Models\DetalleVenta');
                    }
}

