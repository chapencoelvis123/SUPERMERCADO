<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;
    public function venta(){
        return $this->hasOne('App\Models\Venta');
            }
            public function productos(){
                return $this->hasMany('App\Models\Producto');
                    }
}
