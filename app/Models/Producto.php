<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public function compradetalle(){
        return $this->belongsTo('App\Models\CompraDetalle');
            }
            public function detalleventa(){
                return $this->belongsTo('App\Models\DetalleVenta');
                    }
                    public function categoria(){
                        return $this->hasOne('App\Models\Categoria');
                            }
}
