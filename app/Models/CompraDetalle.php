<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompraDetalle extends Model
{
    use HasFactory;
    public function compra(){
        return $this->belongsTo('App\Models\Compra');
            }
            public function productos(){
                return $this->hasMany('App\Models\Producto');
                    }
}
